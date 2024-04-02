<?php

class UserRepository
{
    private $dc;
    public $userAvatar;

    function __construct(DataCenter $dataCenter)
    {
        $this->dc = $dataCenter;

    }

    function __destruct()
    {

    }

    function verifyCurrentPassword($userName, $password)
    {
        $qry =
            "SELECT COUNT(*) Counts FROM students_login
             WHERE schoolNo = ? AND spassword2 = PASSWORD(?)";


        $params = array(
            array("datatype"=>"s", "value"=>$userName),
            array("datatype"=>"s", "value"=>$password)
        );

        $response = $this->dc->ExecuteParamQuery($qry, $params);

        return $response[0]['Counts'];

    }

    function updatePassword($userName, $currentPassword, $newPassword, $dateTime)
    {
        $qry =
            "UPDATE students_login SET spassword2 = PASSWORD(?), tempPassword = 0, passwordUpdateTime=?
             WHERE schoolNo = ? AND spassword2 = PASSWORD(?)";


        $params = array(
            array("datatype"=>"s", "value"=>$newPassword),
            array("datatype"=>"s", "value"=>$dateTime),
            array("datatype"=>"s", "value"=>$userName),
            array("datatype"=>"s", "value"=>$currentPassword)
        );

        return $this->dc->ExecuteNonQuery($qry, $params);

    }


    function makeTempPassword($userName, $tempPassword)
    {
        $this->checkUserLoginExists( $userName );
        $qry =
            "UPDATE students_login SET spassword2 = PASSWORD(?), tempPassword = 1
             WHERE schoolNo = ?";


        $params = array(
            array("datatype"=>"s", "value"=>$tempPassword),
            array("datatype"=>"s", "value"=>$userName)
        );

        return $this->dc->ExecuteNonQuery($qry, $params);

    }

    function checkUserLoginExists($userName) {
        $qry =
            "SELECT COUNT(*) FROM students_login 
            WHERE schoolNo = " . $userName;

        $ret = $this->dc->GetObject( $qry );

        if ($ret == 0) {
            $qry =
                "INSERT INTO students_login (schoolNo, studentName, spassword, spassword2, semail, sphone, lupdate, `status`, Delstatus, tempPassword, passwordUpdateTime)  
                SELECT schoolNo, studentName, PASSWORD(RAND()), PASSWORD(RAND()), NULL, NULL, NULL, 'Active', 'Not Deleted', 0, NULL
                FROM students WHERE schoolNo = ?";


            $params = array(
                array("datatype"=>"s", "value"=>$userName)
            );

            return $this->dc->ExecuteNonQuery($qry, $params);
        }
    }


    public function GetStudent($schoolNo = "")
    {
        $qry = "
			SELECT s.schoolNo, s.studentName, fatherName, school, studing, house,
                CASE WHEN `Mobile2` <> '' THEN IFNULL(CONCAT('+92', SUBSTR(`Mobile2`, 2)), '') ELSE IFNULL(CONCAT('+92', SUBSTR(`Mobile`, 2)), '') END AS `Mobile`, 
                CASE WHEN `Email_Gmail2` <> '' THEN IFNULL(`Email_Gmail2`, '') ELSE IFNULL(`Email_Gmail`, '') END AS Email, 
                l.tempPassword, l.passwordUpdateTime 
            FROM students s LEFT JOIN 
                students_login l ON l.schoolNo = s.schoolNo LEFT JOIN
                portal_students_contacts c ON c.`SchoolNo` = s.`schoolNo`
            WHERE s.schoolNo = ".$schoolNo;

        return $this->dc->ExecuteQuery($qry, true);
    }


    function isPasswordStrong($password) {

        //$errors_init = $errors;

        if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password)){
            //$errors[] = "Your password is good.";
            return true;
        } else {
            //$errors[] = "Your password is bad.";
            return false;
        }


        //return ($errors == $errors_init);
    }

    function generateStrongPassword($length = 10, $add_dashes = false, $available_sets = 'luds')
    {

        $sets = array();
        if(strpos($available_sets, 'l') !== false)
            $sets[] = 'abcdefghkmnpqrstuvwxyz';
        if(strpos($available_sets, 'u') !== false)
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        if(strpos($available_sets, 'd') !== false)
            $sets[] = '23456789';
        if(strpos($available_sets, 's') !== false)
            $sets[] = '@#$%&';

        $all = '';
        $password = '';
        foreach($sets as $set)
        {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }

        $all = str_split($all);
        for($i = 0; $i < $length - count($sets); $i++)
            $password .= $all[array_rand($all)];

        $password = str_shuffle($password);

        if(!$add_dashes)
            return $password;

        $dash_len = floor(sqrt($length));
        $dash_str = '';
        while(strlen($password) > $dash_len)
        {
            $dash_str .= substr($password, 0, $dash_len) . '-';
            $password = substr($password, $dash_len);
        }
        $dash_str .= $password;
        return $dash_str;
    }

}