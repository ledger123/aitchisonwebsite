<?php
class ComplainRepository {

    private $dc;
    public $userAvatar;

    function __construct(DataCenter $dataCenter)
    {
        $this->dc = $dataCenter;

    }

    function __destruct()
    {

    }

    function all($school) {

        $qry = "
			SELECT c.*, 
			    CASE WHEN Email_Gmail2 <> '' THEN Email_Gmail2 ELSE Email_Gmail END AS Email_Gmail,
			    CASE WHEN Mobile2 <> '' THEN Mobile2 ELSE Mobile END AS Mobile
			FROM
			    portal_complains c INNER JOIN
			    portal_students_contacts s ON s.SchoolNo = c.SchoolNo
			
			WHERE 1";

        if($school != "0")
            $qry .= " AND School = '" . $school . "'";

        $qry .= " ORDER BY DateTime DESC";

        return $this->dc->ExecuteQuery($qry, true);
    }

    function get($id = 0, $schoolNo = '') {

        $id = (int)$id;

        $qry = "
			SELECT Id, Name, Subject, Message, Status, SchoolNo, StudentName, Studing, School, Datetime
			FROM portal_complains
			WHERE 1";

        if($id > 0)
            $qry .= " AND Id = " . $id;

        if($schoolNo > 0)
            $qry .= " AND SchoolNo = " . $schoolNo;

        $qry .= " ORDER BY DateTime DESC";

        return $this->dc->ExecuteQuery($qry, true);
    }

    function save($name, $subject, $message, $status, $schoolNo, $dateTime)
    {
        $student = $this->getStudent($schoolNo);
        $row = $student->Rows[0];

        $qry = "INSERT INTO portal_complains (Name, Subject, Message, Status, SchoolNo, StudentName, Studing, School, Datetime) 
                VALUES (?,?,?,?,?,?,?,?,?)";

        $params = array(
            array("datatype"=>"s", "value"=>$name),
            array("datatype"=>"s", "value"=>$subject),
            array("datatype"=>"s", "value"=>$message),
            array("datatype"=>"s", "value"=>$status),
            array("datatype"=>"i", "value"=>$schoolNo),
            array("datatype"=>"s", "value"=>$row->studentName),
            array("datatype"=>"s", "value"=>$row->studing),
            array("datatype"=>"s", "value"=>$row->school),
            array("datatype"=>"s", "value"=>$dateTime)
        );
/*
        echo '<pre>';
        var_dump($params);
        echo '</pre>';
        echo '<br>';
*/
        return $this->dc->ExecuteNonQuery($qry, $params);
    }

    function update() {}

    function getStudent($schoolNo)
    {
        $qry = "
			SELECT *
			FROM students
			WHERE schoolNo = " . $schoolNo;

        return $this->dc->ExecuteQuery($qry, true);
    }

}

if(isset($_GET["select"]) && (int)$_GET["select"] == 1) {
    $path = "../";
    include($path."classes/usersession.php");
    include($path."classes/settings.php");

    $id = (int)$_GET['id'];

    $qry =
        "UPDATE portal_complains SET Status='Under Process', DatetimeProcess=? WHERE Id=? AND `DatetimeProcess` IS null";

    $dateTime       = $functions->getCurrentDateTime();

    $params = array (
        array("datatype"=>"s", "value"=>$dateTime),
        array("datatype"=>"i", "value"=>$id)
    );

    $response = $dc->ExecuteNonQuery($qry, $params);

    if ($response == true)
        echo "1";
    else
        echo "0";
}


if(isset($_GET["select"]) && (int)$_GET["select"] == 2) {
    $path = "../";
    include($path."classes/usersession.php");
    include($path."classes/settings.php");

    $id = (int)$_GET['id'];

    $qry =
        "UPDATE portal_complains SET Status='Done', DatetimeDone=? WHERE Id=? AND `DatetimeDone` IS null";

    $dateTime       = $functions->getCurrentDateTime();

    $params = array (
        array("datatype"=>"s", "value"=>$dateTime),
        array("datatype"=>"i", "value"=>$id)
    );

    $response = $dc->ExecuteNonQuery($qry, $params);

    if ($response == true)
        echo "1";
    else
        echo "0";
}


if(isset($_GET["select"]) && (int)$_GET["select"] == 3) {
    $path = "../";
    include($path."classes/usersession.php");
    include($path."classes/settings.php");

    $id = (int)$_GET['id'];

    $qry = "
			SELECT c.*, 
			    CASE WHEN Email_Gmail2 <> '' THEN Email_Gmail2 ELSE Email_Gmail END AS Email_Gmail,
			    CASE WHEN Mobile2 <> '' THEN Mobile2 ELSE Mobile END AS Mobile
			FROM
			    portal_complains c LEFT JOIN
			    portal_students_contacts s ON s.SchoolNo = c.SchoolNo
			
			WHERE c.Id = ". $id;


    $tQuery = $dc->ExecuteQuery($qry, true);
    echo $purifier->purify(json_encode($tQuery->Rows));
}



?>