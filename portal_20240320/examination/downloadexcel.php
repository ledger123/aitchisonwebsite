<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

class Excel 
{
    private $filename_ = "test.csv";

    private $columns_;

    private $data_;

    private $columnCounts = 24;

    private $tMonthNames;

    public function __construct() {
        $this->data_ = "";

        $this->tMonthNames = new DataTable();

        $this->tMonthNames->SetColumns( array("Id", "MonthName") );


        date_default_timezone_set("Asia/Karachi");
        for($m=1; $m<=12; ++$m){
            //echo date('F', mktime(0, 0, 0, $m, 1)).'<br>';
            $month = date('F', mktime(0, 0, 0, $m, 1));
            $this->tMonthNames->addRow( array($m, $month) );
        }

    }

    public function setFileName($name) {
        $this->filename_ = $name;
    }

    public function setColumns($columns) {
        $this->columns_ = $columns;
    }

    public function addRow($row)
    {
        $this->data_ .= implode( ",", $this->checkColumns($row)) . "<br />";
        
    }

    function checkColumns($row) {
        $counts = count($row);
        for($i = $counts; $i < $this->columnCounts; $i++)
            $row[] = "";
        
        return $row;
    }


    public function getData3($dc) {
        
        $examRepo = new ExaminationRepository($dc);

        return $examRepo->GetTests3();


    }

    
    public function getData4($dc) {
        
        $examRepo = new ExaminationRepository($dc);

        return $examRepo->GetTests4();


    }

    public function download($fos, $data) {
        
        $this->addHeader( $fos );

        $serialNo = 1;

        foreach($data->Rows as $row) {

            $marksData = $row->MarksData;

            $marksData = json_decode( "[". $marksData . "]", TRUE);
            
            $rowData = array($serialNo++,  $row->SchoolNo,  $row->studentName,  $row->Section);
            
            foreach($marksData as $d) {
                $month = $this->tMonthNames->Rows[ $d['m'] -1]->MonthName;

                $rowData[] = $month;
                $rowData[] = $d['s'];
                $rowData[] = $d['t'];
                $rowData[] = $d['o'];
                $rowData[] = $d['p'];

            }

            //$this->addRow( $rowData );

            fputcsv($fos, $rowData, "," );

        }
    }

    public function addHeader($fos) {

        $columns = array('Serial No', 'School No',  'Student Name', 'Section');
        for($i = 0; $i < 14; $i++) {

            $columns[] = "Month";
            $columns[] = "Subject";
            $columns[] = "Total Marks";
            $columns[] = "Obtaining";
            $columns[] = "Percentage";
        }

        fputcsv($fos, $this->checkColumns($columns), "," );
    }



    
    public function download4($fos, $data) {
        
        $tMonthlyTest = new DataTable();

        $tMonthlyTest->SetColumns( array("Sr", "SchoolNo", "Student Name", "Section") );

        $sr = 1;

        //$data->PrintTable();

        foreach($data->Rows as $row) {

            $data_ = explode("||", $row->MarksData);

            $drow_ = null;
            $drow_ = array($sr++, $row->SchoolNo, $row->StudentName, $row->Section);

            for($i = 0; $i < count($data_); $i++) {

                $subject    = $data_[$i++];
                $percentage = $data_[$i];

                //if column not found then add in the table
                if( !in_array($subject, $tMonthlyTest->Columns) )
                {
                    $tMonthlyTest->AddColumn($subject);

                }

                $cols =  count( $tMonthlyTest->Columns );
                
                //iterate the subjects columns and set the value
                for($j = 3; $j < $cols; $j++) {

                    $column = $tMonthlyTest->Columns[ $j ];

                    if( $subject == $column ) {
                        $drow_[$j] = $percentage;
                    }
                    else {
                        $drow_[] = "-";
                    }
                }

            }

            //fputcsv($fos, $drow_, "," );
            $tMonthlyTest->addRow( $drow_ );
        }

        fputcsv($fos, $tMonthlyTest->Columns, "," );

        foreach($tMonthlyTest->Rows as $row) {

            //print_r($row); echo "<br/>";
            $dd = array();
            foreach($tMonthlyTest->Columns as $col) {
                $dd[] = $row[$col];
                
            }

            //print_r($dd); echo "<br/>";
            fputcsv($fos, $dd, "," );
        }

        //$tMonthlyTest->PrintTable();

    }

}

$excel = new Excel();
//$excel->setFileName("details_monthly_test_report.csv");

//$data = $excel->getData3($dc);

$data = $excel->getData4($dc);

header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=details_monthly_test_report.csv");
$fos = fopen('php://output', 'w');

//$excel->download( $fos, $data );

$excel->download4( $fos, $data );

fclose($fos);