<?php
	$path = '';
	$imagePath = '';
	$include_path = '';

	//include_once $include_path.'standard/redirect.php';
	include_once($include_path."newsletter/classes/functions.php");
	include_once($include_path."newsletter/classes/dataCenter.php");
	//include_once($include_path."newsletter/news/newsrepository.php");
	include_once($include_path."newsletter/news/weeklyactivityrepository.php");
													
	include("resources/php/utils.php");

	$dc = new DataCenter();

	$dc->Connect();

	$weeklyRepo = new WeeklyActivityGlimpses($dc);
	//echo $weeklyRepo;
	$pagenumber=isset($_GET['pagenumber'])?(int)$_GET['pagenumber']:0;
	$tNews = $weeklyRepo->GetWeeklyGlimpses($pagenumber);//GetNews($newsId, "", "", "", 0, 0, 1, 1, defined("USER_ID")?USER_ID:0);
	if($tNews->rowsCount() <= 0){
		header("location: news-room");
		exit();
	}
	if($tNews->rowsCount()){
		$firstRow=$tNews->Rows[0];		
		$startDate=getSuperScript(date("j S F, Y", strtotime($firstRow->Date)));		
		$lastRow=$tNews->Rows[$tNews->rowsCount()-1];
		$lastDate=getSuperScript(date("j S F", strtotime($lastRow->Date)));
		if(date("Y", strtotime($firstRow->Date)) != date("Y", strtotime($lastRow->Date))){
			$lastDate=getSuperScript(date("j S F, Y", strtotime($lastRow->Date)));
		}
		$lastNewsId=$lastRow->NewsId;//;122
	}
	if($firstRow->Date == $lastRow->Date){
		$subtitle="".$startDate;
	}else{
		$subtitle="".$lastDate." to ".$startDate."";	
	}	
	//$tNews->PrintTable();	
	function getSuperScript($ydate){
		if(strpos($ydate, " st "))
		$ydate=str_replace(" st ", "<sup>st</sup> ",$ydate);
		elseif(strpos($ydate, " nd "))
		$ydate=str_replace(" nd ", "<sup>nd</sup> ",$ydate);
		elseif(strpos($ydate, " th "))
		$ydate=str_replace(" th ", "<sup>th</sup> ",$ydate);
		elseif(strpos($ydate, " rd "))
		$ydate=str_replace(" rd ", "<sup>rd</sup> ",$ydate);
		return $ydate;		
	}
//echo "18<sup>th</sup> February to 20<sup>th</sup> February, 2023";
echo "$subtitle";
?>
