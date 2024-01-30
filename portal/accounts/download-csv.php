<?php

class DownloadFile
{
    function CSV(DataTable $dTable, $fileName)
    {
        header("Content-type: application/csv");
        header("Content-Disposition: attachment; filename=".$fileName);
        $fos = fopen('php://output', 'w');

        fputcsv($fos, $dTable->Columns, "," );

        foreach($dTable->Rows as $row) {

            //print_r($row); echo "<br/>";
            $dd = array();
            foreach($dTable->Columns as $col) {
                $dd[] = $row[$col];

            }

            //print_r($dd); echo "<br/>";
            fputcsv($fos, $dd, "," );
        }

        fclose($fos);

    }
}

?>
