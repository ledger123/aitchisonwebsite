<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

echo "<!--";
//echo "basename: ". basename(  $_SERVER['HTTP_REFERER']);
//var_dump($_SERVER);
echo "-->";

function getWorkSheets($class, $date) {
    $worksheets = [];
    $worksheets[] = ['class'=>'Pre C1', 'date'=>'28032020',
        'worksheets'=>[
            array('Caption'=>'Accounting', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-accounting.rar'),
            array('Caption'=>'Add Maths', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-addmaths.zip'),
            array('Caption'=>'Biology', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-biology.rar'),
            array('Caption'=>'Business', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-business.rar'),
            array('Caption'=>'Chemistry', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-chemistry.rar'),
            array('Caption'=>'Computer', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-computer.rar'),
            array('Caption'=>'Economics', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-economics.rar'),
            array('Caption'=>'English', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-english.rar'),
            array('Caption'=>'English Lit', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-english-lit.rar'),
            array('Caption'=>'French', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-french.rar'),
            array('Caption'=>'Geography', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-geography.rar'),
            array('Caption'=>'German', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-german.rar'),
            array('Caption'=>'History', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-history.rar'),
            array('Caption'=>'ICT', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-ict.rar'),
            array('Caption'=>'Islamiyat', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-islamiyat.zip'),
            array('Caption'=>'Maths', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-maths.zip'),
            array('Caption'=>'Physics', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-physics.zip'),
            array('Caption'=>'Urdu', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-urdu.rar'),
            array('Caption'=>'World History', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-world-history.rar'),
            array('Caption'=>'Download All Subjects', 'FileUrl'=>'data/2019-20/worksheets/28032020/prec1/prec1-worksheets.zip')

        ]
    ];

    $worksheets[] = ['class'=>'C1', 'date'=>'28032020',
        'worksheets'=>[
            array('Caption'=>'Accounting', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-accounting.rar'),
            array('Caption'=>'Add Maths', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-add-maths.zip'),
            array('Caption'=>'Biology', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-biology.rar'),
            array('Caption'=>'Business', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-business.rar'),
            array('Caption'=>'Chemistry', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-chemistry.rar'),
            array('Caption'=>'Computer', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-computer.rar'),
            array('Caption'=>'Economics', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-economics.rar'),
            array('Caption'=>'English', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-english.rar'),
            array('Caption'=>'English Lit', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-english-lit.rar'),
            array('Caption'=>'French', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-french.rar'),
            array('Caption'=>'German', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-german.rar'),
            array('Caption'=>'ICT', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-ict.rar'),
            array('Caption'=>'Islamiyat', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-islamiyat.zip'),
            array('Caption'=>'Maths', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-maths.zip'),
            array('Caption'=>'Physics', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-physics.zip'),
            array('Caption'=>'Urdu A', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-urdu-a.rar'),
            array('Caption'=>'Urdu IGCSE', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-urdu-igcse.rar'),
            array('Caption'=>'World History', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-world-history.rar'),
            array('Caption'=>'Download All Subjects', 'FileUrl'=>'data/2019-20/worksheets/28032020/c1/c1-worksheet.zip')

        ]
    ];

    foreach ($worksheets as $row) {
        if($row['class'] == $class && $row['date'] == $date){
            return $row['worksheets'];
        }

    }
}

$howework_link = "";

/*portal_CurrentClass*/
//print_r($_SESSION);

$header = "Homework";
$link_text = "Download Homework";
$updated_link = "";

$homeworks_arr = [];

$homeworks_arr['homeworks'] = array('Caption'=>' Homework', 'FileUrl'=>'');

if ($_SESSION['portal_CurrentClass'] == "M1"){
    $homeworks_arr['homeworks'] = array('Caption'=>'M1 Homework', 'FileUrl'=>'data/2019-20/homework/m1-homework-worksheets.rar');

	//$howework_link = "data/2019-20/homework/m1-homework-worksheets.rar";
}elseif ($_SESSION['portal_CurrentClass'] == "E2"){
    $homeworks_arr['homeworks'] = array('Caption'=>'E2 Homework', 'FileUrl'=>'data/2019-20/homework/e2-homework-worksheets.rar');

	//$howework_link = "data/2019-20/homework/e2-homework-worksheets.rar";
}elseif ($_SESSION['portal_CurrentClass'] == "K1"){
    $homeworks_arr['homeworks'] = array('Caption'=>'K1 Homework', 'FileUrl'=>'data/2019-20/homework/K1.zip');

	//$howework_link = "data/2019-20/homework/K1.zip";
}elseif ($_SESSION['portal_CurrentClass'] == "K2"){
    $homeworks_arr['homeworks'] = array('Caption'=>'K2 Homework', 'FileUrl'=>'data/2019-20/homework/K2.zip');

	//$howework_link = "data/2019-20/homework/K2.zip";
}elseif ($_SESSION['portal_CurrentClass'] == "K3"){
    $homeworks_arr['homeworks'] = array('Caption'=>'K3 Homework', 'FileUrl'=>'data/2019-20/homework/K3.zip');

	//$howework_link = "data/2019-20/homework/K3.zip";
}elseif ($_SESSION['portal_CurrentClass'] == "K4"){
    $homeworks_arr['homeworks'] = array('Caption'=>'K4 Homework', 'FileUrl'=>'data/2019-20/homework/K4.zip');

	//$howework_link = "data/2019-20/homework/K4.zip";
}elseif ($_SESSION['portal_CurrentClass'] == "K5"){
    $homeworks_arr['homeworks'] = array('Caption'=>'K5 Homework', 'FileUrl'=>'data/2019-20/homework/K5.zip');

	//$howework_link = "data/2019-20/homework/K5.zip";
}elseif ($_SESSION['portal_CurrentClass'] == "K6"){
    $homeworks_arr['homeworks'] = array('Caption'=>'K6 Homework', 'FileUrl'=>'data/2019-20/homework/K6.zip');

	//$howework_link = "data/2019-20/homework/K6.zip";

}elseif ($_SESSION['portal_CurrentClass'] == "Pre C1") {

    $homeworks_arr = getWorkSheets('Pre C1', '28032020');

    //$updated_link = "Updated on 28/3/2020.";
    $header = "Worksheets - Pre C1";
    $link_text = "Download Worksheets";

}elseif ($_SESSION['portal_CurrentClass'] == "C1"){
    $homeworks_arr = getWorkSheets('C1', '28032020');

    //$updated_link = "Updated on 28/3/2020.";
    $header = "Worksheets - C1";
    $link_text = "Download Worksheets";
}


//$howework_link = Filing::GetURL("", "Home Work", "../".$howework_link);


?>

<!DOCTYPE html>
<html lang="en">

<?php $title = $header; include($path."includes.php"); ?>
<!-- FullCalendar -->
<link href="vendors/fullcalendar/dist-v4/fullcalendar.min.css" rel="stylesheet">
<link href="vendors/fullcalendar/dist-v4/fullcalendar.print.css" rel="stylesheet" media="print">

<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	.fc-day-grid-container.fc-scroller {
		height: auto!important;
		overflow-y: auto;
	}
</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="row">
							  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								  <div class="page-title">
									  <h4 style="margin-top:0;"><?php echo $header; ?></h4>
								  </div>
							  </div>
							  
						  </div>
						  <?php
						  if ($_SESSION['portal_CurrentClass'] == "Pre C1" || $_SESSION['portal_CurrentClass'] == "C1" ) {
						  ?>
						  <p>These are the original worksheets now available to download by subject.</p>
						  <?php
						  }
						  ?>
                          <div class="row">
						  <?php //if(false){?>
                          <?php

                          foreach ( $homeworks_arr as $row ) {
                                //var_dump($row);
                              if( true ) {

                                  ?>

                                  <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
                                      <p>
                                          <a href="<?php echo Filing::GetURL("", $purifier->purify($row['Caption']), $purifier->purify("../".$row['FileUrl']), $header ); ?>"
                                             target="parent" class="active lnkDownload"
                                             style="display: inline-flex; padding: inherit; margin-left: 0;"
                                             data-page-title="<?php echo $header; ?>" data-file-name="<?php echo $purifier->purify($row['Caption']); ?>">
                                              <span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7;"></span> <?php echo $purifier->purify($row['Caption']); ?> </span>
                                          </a>
                                      </p>
                                  </div>

                                  <?php

                              }
                          }

                          ?>

                          </div>

						  <div class="row" align="right" style="margin: 15px 0;">

                              <?php if(strlen( $updated_link ) > 0 ) { ?>
                                  <div><p  style="font-size:12px;"><?php echo $updated_link; ?></p></div>
                              <?php } ?>
						  </div>
						  <div class="row">
						  	<p><span style="font-size:12px;">The downloadable file is in zip/rar format.&nbsp; You need to unpack its contents in order to use it.&nbsp;</span></p>

								<div>
								<p><span style="font-size:12px;"><strong>Open Zip/RAR&nbsp;File in 2 Easy Steps:</strong></span></p>

								
								<ol>
									<li><span style="font-size:12px;"><strong>Download &amp; install WinRAR</strong></span></li>
									<li><span style="font-size:12px;"><strong>Double-click OR right-click on the .RAR file to open it with WinRAR</strong></span></li>
								</ol>
								

								<p><span style="font-size:12px;"><strong>Other Ways to Open A&nbsp;Zip/RAR File:</strong></span></p>

								<p><span style="font-size:12px;">Open WinRAR and select the file/folder from the WinRAR file panel.</span></p>

								<p><span style="font-size:12px;"><strong>Open RAR files with WinRAR in the following Windows versions:</strong></span></p>

								<p><span style="font-size:12px;">Windows 10, Windows 8, Windows 7, Windows Vista, Windows XP</span></p>

								<div><span style="font-size:12px;"><strong>How to&nbsp;<strong>Open RAR Files</strong>&nbsp;on&nbsp;Mobile Phone:</strong></span></div>

								<div>
								<ol>
									<li><span style="font-size:12px;">Download and install the&nbsp;<strong>RAR</strong>&nbsp;app for&nbsp;<strong>Mobile</strong></span></li>
									<li><span style="font-size:12px;"><strong>Open</strong>&nbsp;the&nbsp;<strong>RAR</strong>&nbsp;app</span></li>
									<li><span style="font-size:12px;">Navigate to the folder containing the&nbsp;<strong>file</strong>&nbsp;you wish to&nbsp;<strong>open</strong></span></li>
									<li><span style="font-size:12px;">Tap the individual&nbsp;<strong>files</strong>&nbsp;to&nbsp;<strong>open</strong>&nbsp;them</span></li>
								</ol>
								</div>
								</div>

						  </div>
						  <?php //}?>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include("today-classes.php")?>
				  </div>
				</div>
            </div>
            
          	<!-- footer content -->
        	
        	<?php include($path."footer.php"); ?>
            
        	<!-- /footer content -->
          
        </div>
        
		
		
		
      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>
    
    
    <!-- /FullCalendar -->
</body>

<script>

$(document).ready(function () {
/*
    $('.lnkDownload').click(function(e){

        const url = window.location.pathname;
        const pageTitle = $(this).attr("data-page-title");
        const fileName  = $(this).attr("data-file-name");
        //alert("services/portalService.php?select=10&url="+url+"&pageTitle="+pageTitle+"&fileName="+fileName);
        $.post("services/portalService.php?select=10&url="+url+"&pageTitle="+pageTitle+"&fileName="+fileName,function(data) {
            //alert(data);
            var tokens = data.split(",");
            var status = tokens[0];

            var message = tokens[1];

            alert(message);

            if (status == 1) {
                //location.href = "monthly-tests.php";
            }
        });

    });

    */
});
</script>
</html>
