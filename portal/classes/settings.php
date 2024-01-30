<?php

class Settings
{
	private $dc;
	private $purifier;
	
	function __construct(DataCenter $datacenter, $purifier_)
	{
		$this->dc = $datacenter;
		$this->purifier = $purifier_;
		
		$this->userLogoutLog();
		
	}
	
	function __destruct()
	{
		
    }
	
	public function CheckSession()
	{
		ob_start();
		
		if(!function_exists('session_status'))
		{
			if (defined('SID')==false) session_start();
		}
		else
		{
			if(session_status()!=PHP_SESSION_ACTIVE) session_start();
		}
		
		
		$user_id = $_SESSION['n_user_id'];
		
		if($_SESSION['n_user_id'] == "")
		{
			header("location: " . $path . "logout.php");
		}
	}
	
	function Authenticate( $userName, $password, $portal, $rememberMe )
	{

		//return false;
		if ( $portal == "SuperPortal" ) 
		{
			return $this->AuthenticateSuper2( $userName, $password, false );
		}
		else {
			#using the following conversion because 
			#hyphen "-" ignores in where clause as Username.
			#CONCAT(CONVERT(st.schoolNo USING utf8), 'vatm')
			$salt = "vatm";

			$qry =
				"SELECT st.sid Id, st.studentName, fatherName, st.schoolNo, school, classIn, studing, house, bD boarder, 0 admin,
				CASE
					WHEN stl.spassword2 = PASSWORD('$password') THEN '2'
					ELSE '0' 
				END AS Whatpass,
				stl.tempPassword

				FROM students AS st INNER JOIN 
					students_login AS stl ON stl.schoolNo = st.schoolNo 
				WHERE 
					status = 'Active' AND delstatus = 'Not Deleted' AND 
					CONCAT(CONVERT(st.schoolNo USING utf8), '".$salt."') = CONCAT(CONVERT('". $userName ."' USING utf8), '".$salt."') AND 
					stl.spassword2 = PASSWORD('". $password ."') ";



			$result = $this->dc->ExecuteQuery($qry, true);
			//$result->PrintTable();
			//var_dump( $result );
			//exit;

			if ($result->rowsCount() > 0)
			{
				$row = $result->Rows[0];
                $_SESSION['portal_Whatpass']    = $this->P($row['Whatpass']);


                $_SESSION['portal_SchoolNo']    = $this->P($row['schoolNo']);

                if ($row['school']      == "JSD") $_SESSION['portal_SchoolName'] = "Junior School";
                else if ($row['school'] == "PSD") $_SESSION['portal_SchoolName'] = "Prep School";
                else if ($row['school'] == "SSD") $_SESSION['portal_SchoolName'] = "Senior School";

                $_SESSION['portal_TempPassword']    = $this->P($row['tempPassword']);

				if($row['Whatpass'] == 2) {
					

					$_SESSION['LAST_ACTIVITY']		= time();
					$_SESSION['portal_SchoolNo']    = $this->P($row['schoolNo']);
					$_SESSION['portal_user_id']	    = $this->P($row['Id']);
					$_SESSION['portal_userTitle']   = $this->P($row['studentName']);
					$_SESSION['portal_isUserAdmin'] = $this->P($row['Admin']);
					$_SESSION['portal_School']		= $this->P($row['school']);
					$_SESSION['portal_ClassIn']		= $this->P($row['classIn']);
                    $_SESSION['portal_Studing']		= $this->P($row['studing']);
					$_SESSION['portal_House']		= $this->P($row['house']);
					$_SESSION['portal_Boarder']		= $this->P($row['boarder']);

					//$this->manageCookies( $userName, $portal, $rememberMe );
					

					//echo $row['studing'];
					if ( strpos($row['studing'], "Pre") && strpos("x".$row['studing'], "C1") ) {
						$currentClass = "Pre C1";
					}
					else {
						$currentClass = substr($row['studing'], 0, 2);
					}


					$currentSection = substr($row['studing'], 2, 1);

					$_SESSION['portal_CurrentClass']		= $this->P($currentClass);
					$_SESSION['portal_CurrentSection']		= $this->P($currentSection);

					$_SESSION['PORTAL_ID']			= $portal;
					
					unset ( $_SESSION['wrong_pword_count'] );
					
					$this->userLog();


                    if ($_SESSION['PORTAL_ID'] == "ParentPortal") {
						$_SESSION['PORTAL_NAME'] = "My Aitchison";
						
						//echo "page id: ".$_SESSION['portal_temp_pageurl'];
						
						//exit;
                        if($row['tempPassword'] == "1") {

                            header("Location: users/changepassword.php");
                        }
                        elseif ( isset ( $_SESSION['portal_temp_pageid'] ) ) {
							//echo "aas ffdsadfdsa sadf";
							//exit;
							header("Location: " . $_SESSION['portal_temp_pageurl'] );
						}
						else {

                            if ($row['school'] == "JSD") {
                                header("Location: dashboard.php");
                                //header("Location: farewell.php");
                            }
                            else {
                                
                                //header("Location: welcome-boarder.php");
                                header("Location: dashboard.php");
                            }
						}
					}
					else if ($_SESSION['PORTAL_ID'] == "StudentPortal") {
						$_SESSION['PORTAL_NAME'] = "Student's Portal";
						//header("Location: welcome-student.php");
						header("Location: dashboard.php");
					}
					else if ($_SESSION['PORTAL_ID'] == "BoarderPortal") {
						$_SESSION['PORTAL_NAME'] = "Boarder's Portal";

                        if ($row['school'] == "JSD") {
                            //header("Location: farewell.php");
                            header("Location: dashboard.php");
                        }
                        else {
                            //header("Location: welcome-boarder.php");
                            header("Location: dashboard.php");
                        }
					}

				}
				elseif($row['Whatpass'] == 0) {
					return false;
				}

			}
			else {
				//$this->manageCookies( "", "", "False" );
				return $result;
			}
		}
		
	}

	function AuthenticateTempLogin( $userName, $password, $portal )
	{
		//return false;
		if ( $portal == "SuperPortal" ) 
		{
			return $this->AuthenticateSuper2( $userName, $password, false );
		}
		else {
			#using the following conversion because 
			#hyphen "-" ignores in where clause as Username.
			#CONCAT(CONVERT(st.schoolNo USING utf8), 'vatm')
			$salt = "vatm";

			$qry =
				"SELECT st.sid Id, st.studentName, fatherName, st.schoolNo, school, classIn, studing, house, bD boarder, 0 admin, stl.tempPassword
				FROM students AS st INNER JOIN 
					students_login AS stl ON stl.schoolNo = st.schoolNo 
				WHERE 
				status = 'Active' AND delstatus = 'Not Deleted' AND 
				CONCAT(CONVERT(st.schoolNo USING utf8), '".$salt."') = CONCAT(CONVERT(? USING utf8), '".$salt."') AND stl.spassword = ?";

			$params = array(
				array("datatype"=>"s", "value"=>$userName),
				array("datatype"=>"s", "value"=>$password)
 			);
			//echo $qry."<br>";
			//echo "user: ". $userName . ", pass: ". $password;
			//exit;

			$result = $this->dc->ExecuteParamQuery($qry, $params);

            //echo "<!--";
            //echo $qry . "<br/>";
            //echo $userName . "<br/>";
            //echo $password . "<br/>";

            //echo var_dump($result);
            //echo "-->";

			//var_dump( $result );
			//exit;

			if ($result)
			{

				$row = $result[0];
				$_SESSION['LAST_ACTIVITY']		= time();
				$_SESSION['portal_SchoolNo']    = $this->P($row['schoolNo']);
				$_SESSION['portal_user_id']	    = $this->P($row['Id']);
				$_SESSION['portal_userTitle']   = $this->P($row['studentName']);
				$_SESSION['portal_isUserAdmin'] = $this->P($row['Admin']);
				$_SESSION['portal_School']		= $this->P($row['school']);
				$_SESSION['portal_ClassIn']		= $this->P($row['classIn']);
                $_SESSION['portal_Studing']		= $this->P($row['studing']);
				$_SESSION['portal_House']		= $this->P($row['house']);
				$_SESSION['portal_Boarder']		= $this->P($row['boarder']);


                $_SESSION['portal_TempPassword']    = $this->P($row['tempPassword']);

				//$this->manageCookies( $userName, $portal, $rememberMe );
				

				//echo $row['studing'];
				if ( strpos($row['studing'], "Pre") && strpos("x".$row['studing'], "C1") ) {
					$currentClass = "Pre C1";
				}
				else {
					$currentClass = substr($row['studing'], 0, 2);
				}


				$currentSection = substr($row['studing'], 2, 1);

				$_SESSION['portal_CurrentClass']		= $this->P($currentClass);
				$_SESSION['portal_CurrentSection']		= $this->P($currentSection);

				if ($row['school'] == "JSD") $_SESSION['portal_SchoolName'] = "Junior School";
				else if ($row['school'] == "PSD") $_SESSION['portal_SchoolName'] = "Prep School";
				else if ($row['school'] == "SSD") $_SESSION['portal_SchoolName'] = "Senior School";


				$_SESSION['PORTAL_ID']			= $portal;
				
				unset ( $_SESSION['wrong_pword_count'] );
				
				$this->userLog();
				
				
				if ($_SESSION['PORTAL_ID'] == "ParentPortal") {
					$_SESSION['PORTAL_NAME'] = "My Aitchison";
					
					//echo "page id: ".$_SESSION['portal_temp_pageurl'];
					
					//exit;
					if ( isset ( $_SESSION['portal_temp_pageid'] ) ) {
						//echo "aas ffdsadfdsa sadf";
						//exit;
						header("Location: " . $_SESSION['portal_temp_pageurl'] );
					}
					else {
                        if ($row['school'] == "JSD") {
                            //header("Location: farewell.php");
                            header("Location: dashboard.php");
                        }
                        else {
                            //header("Location: welcome-boarder.php");
                            header("Location: dashboard.php");
                        }
					}
				}
				else if ($_SESSION['PORTAL_ID'] == "StudentPortal") {
					$_SESSION['PORTAL_NAME'] = "Student's Portal";
					//header("Location: welcome-student.php");
					header("Location: dashboard.php");
				}
				else if ($_SESSION['PORTAL_ID'] == "BoarderPortal") {
					$_SESSION['PORTAL_NAME'] = "Boarder's Portal";
					
					//header("Location: welcome-boarder.php");
					header("Location: dashboard.php");
				}

			}
			else {
				//$this->manageCookies( "", "", "False" );
				return $result;
			}
		}
		
	}
	
	function AuthenticateSuper( $userName, $password, $isHouseMaster )
	{
		//return false;
		if ( $isHouseMaster ) {
			$qry =
				"SELECT Id, Title, UserName, School, House
				 FROM portal_user_profilers
				 WHERE Active = 1 AND UserName = ? AND `Password` = ?";

			$params = array(
				array("datatype"=>"s", "value"=>$userName),
				array("datatype"=>"s", "value"=>$password)
			);

			//echo $qry;
			//exit;
		}
		else {
			$qry =
				"SELECT sup_id Id, sup_fname Title, sup_uname UserName, school School, '' House
				 FROM superuserdetails
				 WHERE status = 'Active' AND delstatus = 'Not Deleted' AND sup_uname = ? AND sup_upassword = ?";

			$params = array(
				array("datatype"=>"s", "value"=>$userName),
				array("datatype"=>"s", "value"=>$password)
			);

			//echo $qry;
		}
		
		$result = $this->dc->ExecuteParamQuery($qry, $params);
		//return $this->dc->Login( $qry, $userName, $password );
		
		if ( $result ) {
			
			$row = $result[0];
			$_SESSION['LAST_ACTIVITY']			= time();
			$_SESSION['portal_user_id']			= $row['Id'];
			$_SESSION['portal_sup_user_id']		= $row['Id'];
			$_SESSION['portal_sup_name']    	= $row['Title'];
			$_SESSION['portal_sup_username']	= $row['UserName'];
			$_SESSION['portal_sup_school']   	= $row['School'];
			$_SESSION['portal_sup_house']   	= $row['House'];
			$_SESSION['portal_School']			= "SuperUser";
			
			$_SESSION['PORTAL_ID']			= "SuperUser";
			$_SESSION['PORTAL_NAME'] = "Super User";
			
			$_SESSION['portal_isHouseMaster']   = $isHouseMaster;
			
			unset ( $_SESSION['wrong_pword_count'] );
			
			$this->userLog();
			
			if ( $isHouseMaster )
				header("Location: hmaster-home.php");
			else
				header("Location: superhome.php");
		}
		else {
			return $result;
		}
	}
	
	
	
	function AuthenticateSuper2( $userName, $password )
	{
		//return false;
		$qry =
			"SELECT Id, Title, UserName, School, 
				IFNULL(`Class` , '') `Class`, IFNULL(Section, '') Section, IFNULL(House, '') House
			 FROM portal_user_profilers
			 WHERE Active = 1 AND UserName = ? AND `Password` = ?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"s", "value"=>$password)
		);
		
		//echo $qry;
		//exit;
		
		$result = $this->dc->ExecuteParamQuery($qry, $params);
		//return $this->dc->Login( $qry, $userName, $password );
		
		if ( $result ) {
			
			$row = $result[0];
			$_SESSION['LAST_ACTIVITY']			= time();
			$_SESSION['portal_user_id']			= $row['Id'];
			$_SESSION['portal_sup_user_id']		= $row['Id'];
			$_SESSION['portal_sup_name']    	= $row['Title'];
			$_SESSION['portal_sup_username']	= $row['UserName'];
			$_SESSION['portal_sup_school']   	= $row['School'];
			$_SESSION['portal_sup_class']   	= $row['Class'];
			$_SESSION['portal_sup_section']   	= $row['Section'];
			$_SESSION['portal_sup_house']   	= $row['House'];
			$_SESSION['portal_School']			= "SuperUser";
			
			$_SESSION['PORTAL_ID']			= "SuperUser";
			$_SESSION['PORTAL_NAME'] = "Super User";
			
			$_SESSION['portal_isHouseMaster']   = $isHouseMaster;
			
			unset ( $_SESSION['wrong_pword_count'] );
			
			$this->userLog();
			
			header("Location: superhome.php");
		}
		else {
			return $result;
		}
	}
	
	
	
	function AuthenticateAdmin( $userName, $password )
	{
		//return false;
		/*$qry =
			"SELECT u.Id, Title, Username, Password, GroupId, g.GroupName, Admin, u.Picture 
			 FROM portal_users u INNER JOIN
				portal_groups g ON g.Id = GroupId
			 WHERE u.Active = 1 AND g.Active = 1 AND Username = ? AND Password = Password(?)";*/
		
		$qry =
			"SELECT u.Id, Title studentName, '' fatherName, Username schoolNo, GroupName school, '' classIn, '' studing, '' house, '' 		boarder, 0 admin
			 FROM portal_users u INNER JOIN
				portal_groups g ON g.Id = GroupId
			 WHERE u.Active = 1 AND g.Active = 1 AND Username = ? AND Password = Password(?)";
		
		$params = array(
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"s", "value"=>$password)
		);
		
		//echo "user: " . $userName . "<br />";
		//echo "pass: " . $password . "<br />";
		//echo $qry;
		
		return $this->dc->ExecuteParamQuery($qry, $params);
		//return $this->dc->Login( $qry, $userName, $password );
	}
	
	
	
	function AuthenticateStaff( $userName, $password )
	{
		//return false;
        if($userName != "mahamhammadmalik") return false;
		$qry =
			"SELECT stf_id Id, stf_name Title, stf_staffid UserName, stf_school School, 
				stf_class `Class`, '' Section, '' House, sams_user_id, '0' tempPassword 
			 FROM staff_login
			 WHERE status = 'Active' AND delstatus = 'Not Deleted' AND stf_staffid = ? AND stf_lpassword = ?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"s", "value"=>$password)
		);
		
		//echo $qry;
		//exit;
		
		
		$result = $this->dc->ExecuteParamQuery($qry, $params);
		//return $this->dc->Login( $qry, $userName, $password );
		
		if ( $result ) {
			
			$row = $result[0];
			$_SESSION['LAST_ACTIVITY']			= time();
			$_SESSION['portal_user_id']			= $row['Id'];
			$_SESSION['portal_stf_user_id']		= $row['Id'];
			$_SESSION['portal_sup_name']    	= $row['Title'];
			$_SESSION['portal_sup_username']	= $row['UserName'];
			$_SESSION['portal_sup_school']   	= $row['School'];
			$_SESSION['portal_sup_class']   	= $row['Class'];
            $_SESSION['portal_CurrentClass']   	= $row['Class'];
			$_SESSION['portal_sup_section']   	= $row['Section'];
			$_SESSION['portal_sup_house']   	= $row['House'];
			$_SESSION['portal_School']			= $row['School'];
			$_SESSION['portal_sams_user_id']	= $row['sams_user_id'];
            $_SESSION['portal_TempPassword']    = $row['tempPassword'];

			
			$_SESSION['PORTAL_ID']				= "StaffPortal";
			$_SESSION['PORTAL_NAME'] 			= "Staff Portal";
			
			unset ( $_SESSION['wrong_pword_count'] );
			
			//$this->userLog();
			
			header("Location: welcome-staff.php");
		}
		else {
			return $result;
		}
	}






    function AuthenticateStudent( $userName, $password, $portal )
    {
        //return false;
        if ( true )
        {
            #using the following conversion because
            #hyphen "-" ignores in where clause as Username.
            #CONCAT(CONVERT(st.schoolNo USING utf8), 'vatm')
            $salt = "vatm";

            $qry =
                "SELECT st.sid Id, st.studentName, fatherName, st.schoolNo, school, classIn, studing, house, bD boarder, 0 admin,
				CASE
					WHEN stl.spassword2 = '$password' THEN '2'
					ELSE '0' 
				END AS Whatpass,
				stl.tempPassword

				FROM students AS st INNER JOIN 
					students_login AS stl ON stl.schoolNo = st.schoolNo 
				WHERE 
					status = 'Active' AND delstatus = 'Not Deleted' AND 
					CONCAT(CONVERT(st.schoolNo USING utf8), '".$salt."') = CONCAT(CONVERT('". $userName ."' USING utf8), '".$salt."') AND 
					stl.spassword2 = '". $password ."' ";



            $result = $this->dc->ExecuteQuery($qry, true);
            //$result->PrintTable();
            //var_dump( $result );
            //exit;

            if ($result->rowsCount() > 0)
            {
                $row = $result->Rows[0];
                $_SESSION['portal_Whatpass']    = $this->P($row['Whatpass']);


                $_SESSION['portal_SchoolNo']    = $this->P($row['schoolNo']);

                if ($row['school']      == "JSD") $_SESSION['portal_SchoolName'] = "Junior School";
                else if ($row['school'] == "PSD") $_SESSION['portal_SchoolName'] = "Prep School";
                else if ($row['school'] == "SSD") $_SESSION['portal_SchoolName'] = "Senior School";

                $_SESSION['portal_TempPassword']    = $this->P($row['tempPassword']);

                if($row['Whatpass'] == 2) {


                    $_SESSION['LAST_ACTIVITY']		= time();
                    $_SESSION['portal_SchoolNo']    = $this->P($row['schoolNo']);
                    $_SESSION['portal_user_id']	    = $this->P($row['Id']);
                    $_SESSION['portal_userTitle']   = $this->P($row['studentName']);
                    $_SESSION['portal_isUserAdmin'] = $this->P($row['Admin']);
                    $_SESSION['portal_School']		= $this->P($row['school']);
                    $_SESSION['portal_ClassIn']		= $this->P($row['classIn']);
                    $_SESSION['portal_Studing']		= $this->P($row['studing']);
                    $_SESSION['portal_House']		= $this->P($row['house']);
                    $_SESSION['portal_Boarder']		= $this->P($row['boarder']);

                    //$this->manageCookies( $userName, $portal, $rememberMe );


                    //echo $row['studing'];
                    if ( strpos($row['studing'], "Pre") && strpos("x".$row['studing'], "C1") ) {
                        $currentClass = "Pre C1";
                    }
                    else {
                        $currentClass = substr($row['studing'], 0, 2);
                    }


                    $currentSection = substr($row['studing'], 2, 1);

                    $_SESSION['portal_CurrentClass']		= $this->P($currentClass);
                    $_SESSION['portal_CurrentSection']		= $this->P($currentSection);

                    $_SESSION['PORTAL_ID']			= $portal;

                    unset ( $_SESSION['wrong_pword_count'] );

                    $this->userLog();


                    if ($_SESSION['PORTAL_ID'] == "ParentPortal") {
                        $_SESSION['PORTAL_NAME'] = "My Aitchison";

                        //echo "page id: ".$_SESSION['portal_temp_pageurl'];

                        //exit;
                        if($row['tempPassword'] == "1") {

                            header("Location: users/changepassword.php");
                        }
                        elseif ( isset ( $_SESSION['portal_temp_pageid'] ) ) {
                            //echo "aas ffdsadfdsa sadf";
                            //exit;
                            header("Location: " . $_SESSION['portal_temp_pageurl'] );
                        }
                        else {

                            if ($row['school'] == "JSD") {
                                header("Location: dashboard.php");
                                //header("Location: farewell.php");
                            }
                            else {

                                //header("Location: welcome-boarder.php");
                                header("Location: dashboard.php");
                            }
                        }
                    }
                    else if ($_SESSION['PORTAL_ID'] == "StudentPortal") {
                        $_SESSION['PORTAL_NAME'] = "Student's Portal";
                        //header("Location: welcome-student.php");
                        header("Location: dashboard.php");
                    }
                    else if ($_SESSION['PORTAL_ID'] == "BoarderPortal") {
                        $_SESSION['PORTAL_NAME'] = "Boarder's Portal";

                        if ($row['school'] == "JSD") {
                            //header("Location: farewell.php");
                            header("Location: dashboard.php");
                        }
                        else {
                            //header("Location: welcome-boarder.php");
                            header("Location: dashboard.php");
                        }
                    }

                }
                elseif($row['Whatpass'] == 0) {
                    return false;
                }

            }
            else {
                //$this->manageCookies( "", "", "False" );
                return $result;
            }
        }

    }







    private function P($val) {
		return $this->purifier->purify($val);
	}
	
	function userLog() {
	    echo "<!-- in user Log -->";

		//include_once("variables.php");
		
		$Portals = array("ParentPortal", "StudentPortal", "BoarderPortal");
		/*
		echo "<pre>";
		var_dump($Portals);
		echo "<br>";
		var_dump($_SESSION);
		echo "</pre>";
		//exit;
		*/
		
		if ( isset($_SESSION['portal_sup_name']) &&
     		in_array($_SESSION['PORTAL_ID'], $Portals) ) {
			#do nothing
		}
		else {
			//require_once("functions.php");

			//include_once("ip-geolocation-api.php");
			//$ipLocation = new IpGeolocation();

			$functions = new Functions();


			$userName	= $_SESSION['portal_SchoolNo'] ?: $_SESSION['portal_sup_username'];

			$portal		= $_SESSION['PORTAL_ID'];

			$school		= $_SESSION['portal_School'] ?: $_SESSION['portal_sup_school'] ?: "0";

			$class		= $_SESSION['portal_CurrentClass'] ?: $_SESSION['portal_sup_class'] ?: "0";

			$platform	= $functions->getPlatform();

			$browser	= $functions->getBrowserName();

			$ip			= $functions->getIp();

            $country = "";
            $state = "";
            $city = "";

			if(false) {
			    /*
                $location = $ipLocation->getLocation($ip);

                $data = json_decode($location, true);

                $country = $data["country_name"] . " (" . $data["country_code2"] . ")";
                $state = $data["state_prov"];
                $city = $data["city"];
                */
            }

			
			$now = new DateTime();
			$loginTime	= $now->format('Y-m-d H:i:s');
            $logoutTime	= $now->format('Y-m-d H:i:s');
			//echo $loginTime	= $now->getTimestamp();

			$qry =
				"INSERT INTO portal_students_login_logs (UserName, Portal, School, Class, Platform, Browser, IpAddress, Country, State, City, LoginTime, LogoutTime)
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

			/*
			$qry =
				"INSERT INTO portal_students_login_logs (UserName, Portal, School, Class, Platform, Browser, IpAddress, LoginTime)
				VALUES (?,?,?,?,?,?,?,?)";
			*/

			$params = array(
				array("datatype"=>"s", "value"=>$userName),
				array("datatype"=>"s", "value"=>$portal),
				array("datatype"=>"s", "value"=>$school),
				array("datatype"=>"s", "value"=>$class),
				array("datatype"=>"s", "value"=>$platform),
				array("datatype"=>"s", "value"=>$browser),
				array("datatype"=>"s", "value"=>$ip),
				
				array("datatype"=>"s", "value"=>$country),
				array("datatype"=>"s", "value"=>$state),
				array("datatype"=>"s", "value"=>$city),
				
				array("datatype"=>"s", "value"=>$loginTime),
                array("datatype"=>"s", "value"=>$logoutTime)
			);
			
			$lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
			
			$_SESSION['portal_UserLogId'] = $lastInsertId;
			
			//echo "last id: ".$lastInsertId;
			
			//return $lastInsertId;
			
			
		}
		
	}
	
	function userLogoutLog() {
		
		if ( isset($_SESSION['portal_UserLogId']) ) {
			
			$userLogId = (int)$_SESSION['portal_UserLogId'];
			
			
			if ( $userLogId > 0 ) {

				$now = new DateTime();
				$logoutTime	= $now->format('Y-m-d H:i:s');
				
				$qry =
					"UPDATE portal_students_login_logs SET LogoutTime = ?
					WHERE Id = ?";
				
				$params = array(
					array("datatype"=>"s", "value"=>$logoutTime),
					array("datatype"=>"i", "value"=>$userLogId)
				);
				
				$this->dc->ExecuteNonQuery($qry, $params, false);
				
			}
		}
	}
	
	function manageCookies12458asim($userName, $portal, $delete = "False") {
		/*
		$days = 30;

		if( $delete == "True" ) {

			$functions = new Functions();

			// Set cookie variables
			$userName = $functions->simple_crypt($userName, "e");
			$portal = $functions->simple_crypt($portal, "e");

			//$userName = encryptCookie($userName);
			//$portal	  = encryptCookie($portal);

			setcookie ("TxtRememberme", $userName, time()+ ($days * 24 * 60 * 60 * 1000));

			setcookie ("Rememberme-portal", $portal, time()+ ($days * 24 * 60 * 60 * 1000));
		}
		elseif( $delete == "False" ) {
			// Remove cookie variables

			setcookie ("TxtRememberme", "", time() - ($days * 24 * 60 * 60 * 1000));
			setcookie ("Rememberme-portal", "", time() - ($days * 24 * 60 * 60 * 1000));
		}

		*/
	}
}




if ( true ) {

	if ( !isset ($dc) ) {
		$dc = new DataCenter();

		$dc->Connect();
	}

	$stngs = new Settings($dc, $purifier);
	//$stngs->userLogoutLog(); does not need to call because calling in the constructor
}

?>