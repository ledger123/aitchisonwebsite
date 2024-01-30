<?php
header('Content-Type: application/json; charset=utf-8');


if(isset($_GET['id'])) {

    $id = $_GET['id'];

    $data = '';
    
	$count = 1;

    $fh = fopen("files/".$id .'.txt','r');
    while ($line = fgets($fh)) {
		if($count === 1) {
			$data .= '<div class="model-text-heading">'.$line.'</div>';
			$count++;
		}
		else {
			$line = trim( str_replace(['\r', '\n'], '', $line) );
			if($line !== '')
				$data .= '<p>'. $line . '</p>';
		}
		
    }
    fclose($fh);

    echo json_encode($data);

}
