<?php
function getWeek($weeknumber){
	$rvalue="";
	switch ($weeknumber) {
	  case 1:
		$rvalue="first";
		break;
	  case 2:
		$rvalue="second";
		break;
	  case 3:
		$rvalue="third";
		break;
	  case 4:
		$rvalue="fourth";
		break;
	  case 5:
		$rvalue="fifth";
		break;
	}
	return($rvalue);
}
function getMonth($monthName){
	$rvalue="";	
	switch ($monthName) {
	  case "jan":
		$rvalue="January";
		break;
	  case "feb":
		$rvalue="February";
		break;
	  case "mar":
		$rvalue="March";
		break;
	  case "apr":
		$rvalue="April";
		break;
	  case "may":
		$rvalue="May";
		break;
	  case "jun":
		$rvalue="June";
		break;		
	  case "jul":
		$rvalue="July";
		break;
	  case "aug":
		$rvalue="August";
		break;
	  case "sep":
		$rvalue="September";
		break;		
	  case "oct":
		$rvalue="October";
		break;
	  case "nov":
		$rvalue="November";
		break;	
	  case "dec":
		$rvalue="December";
		break;		
	}
	return($rvalue);
}	

?>