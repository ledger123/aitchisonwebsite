<?php
//include("latest-news-card.php");
//include("latest-prletters-card.php");

$arr_links = array();

if ( $requestedPageUrl == "hos-notices" ) {
    //$arr_links[] = array("url"=>"principal-letter.php?id=761", "src"=>"images/possible-return-to-school-202021.jpg");
}

	
if ( in_array($requestedPageUrl,
					  array("exams", "hos-notices", "myattendance",
							"fee/fee-bill", "syllabi", "time-table", "new-parents-information", "timetable-offline.php", "routine-timetable", "classes-timetable" )) ){
	
	$arr_links[] = array("url"=>"principal-letters", "src"=>"images/newsletters.jpg");
	$arr_links[] = array("url"=>"principal-past-letters", "src"=>"images/past-newsletter.jpg");
}

if ( in_array($requestedPageUrl,  ["principal-letters", 'important-events'] ) ) {
    //$arr_links[] = array("url"=>"principal-letter.php?id=761", "src"=>"images/possible-return-to-school-202021.jpg");
}


if ( in_array($requestedPageUrl,  ["principal-past-letters", 'important-events-20200822.php', 'important-events'] ) ) {
	$arr_links[] = array("url"=>"principal-letters", "src"=>"images/newsletters.jpg");
}


switch($_SESSION['portal_School']) {
	case "JSD" :
        /*
        if ( in_array($requestedPageUrl,  ["principal-letters", "hos-notices"] ) ) {
            $arr_links[] = array("url"=>"notice.php?id=798", "src"=>"images/online-classes-js.jpg");
        } */



        if ( in_array($requestedPageUrl,  ["principal-letters", 'important-events-20200822.php', 'important-events'] ) ) {
            $arr_links[] = array("url"=>"principal-past-letters", "src"=>"images/past-newsletter.jpg");
        }

        if ( $requestedPageUrl == "time-table" ) {
			//include("latest-news-card.php");
			//include("latest-prletters-card.php");
		}
		else {
			//$arr_links[] = array("url"=>"sports/termswise-calendar", "src"=>"images/sports-calendar-js.jpg");
			//$arr_links[] = array("url"=>"important-events", "src"=>"images/important-events.jpg");
		}



		//
		break;
		
	case "PSD" :

        if ( in_array($requestedPageUrl,  ["principal-letters", 'important-events-20200822.php', 'important-events'] ) ) {
            $arr_links[] = array("url"=>"principal-past-letters", "src"=>"images/past-newsletter.jpg");
        }

        if ( $requestedPageUrl == "time-table" ) {
			//include("latest-news-card.php");
			//include("latest-prletters-card.php");
		}
		else {
			//$arr_links[] = array("url"=>"sports/termswise-calendar", "src"=>"images/sports-calendar-ps.jpg");
			//$arr_links[] = array("url"=>"important-events", "src"=>"images/important-events.jpg");
		}
		break;
		
	case "SSD" :

        if ( in_array($requestedPageUrl,  ["principal-letters", 'important-events-20200822.php', 'important-events'] ) ) {
            $arr_links[] = array("url"=>"principal-past-letters", "src"=>"images/past-newsletter.jpg");
        }

        if ( $requestedPageUrl == "sports/termswise-calendar" ){
			//$arr_links[] = array("url"=>"important-events", "src"=>"images/important-events.jpg");
		}
		
		if ( in_array($requestedPageUrl,  ["principal-letters"] ) ){
			$arr_links[] = array("url"=>"meta_cognition", "src"=>"images/meta-cognition.jpg");
		}
		
		/*if ( $requestedPageUrl == "principal-past-letters" ){
			$arr_links[] = array("url"=>"principal-letters", "src"=>"images/newsletters.jpg");
		}*/

		if ( in_array($requestedPageUrl,
					  array("exams", "parents-meeting", "curriculum_guide",
							"university_counselling", "principal-past-letters", "time-table")) ) {
			
			$arr_links[] = array("url"=>"sat_centre", "src"=>"images/sat-center.jpg");
			$arr_links[] = array("url"=>"harkness_table", "src"=>"images/harkness-table.jpg");
			$arr_links[] = array("url"=>"student_recognition", "src"=>"images/student-recognition.jpg");
		}
		
		if ( $requestedPageUrl == "fee/fee-bill" || $requestedPageUrl == "syllabi" ) {

            //$arr_links[] = array("url"=>"curriculum_guide", "src"=>"images/curriculum-guide-wide-2022.jpg");

			//$arr_links[] = array("url"=>"data/ac-uni-guidance-counselling-2018-19.pdf", "src"=>"images/university-counselling-wide.jpg");
		}
		break;
}

foreach ( $arr_links as $link ) {
?>

<div class="row">
						 
	<div align="center">
		<a href="<?php echo $path.$link["url"]; ?>">
			<img class="img-responsive" 
				 src="<?php echo $path.$link["src"]; ?>" 
				 style="<?php echo $link["style"]; ?>" alt="">
		</a>
	</div>								  
	<br/>

</div>

<?php } ?>