<!DOCTYPE html>
<html>


<?php

include_once("../path-settings.php");

$title = "Important School Dates"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/admissions/banner.jpg';
?>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>



<div class="container">
<div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="ac-academics">Academics</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>



<div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title page-title2">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>

    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
			<div class="row">
			  <div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0 0 4px 0px; text-align: center;">
					<a href="#term-dates" class="button-link" style="width: 99%; margin-top: 0px;">Term Information</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0 0 4px 0px; text-align: center;">
					<a href="#boarder-return-dates" class="button-link" style="width: 99%; margin-top: 0px; ">Boarders Returning Dates</a>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0 0 4px 0px; text-align: center;">
					<a href="#tpm-dates" class="button-link" style="width: 99%;  margin-top: 0px;">Teacher Parent Meeting</a>
				</div>
				<?php /*?><div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0 0 4px 0px; text-align: center;">
					<a href="#admission-test-dates" class="button-link" style="width: 99%; margin-top: 0px; ">Admission Tests</a>
				</div><?php */?>
				<div class="col-lg-6 col-md-6 col-sm-12" style="margin: 0 0 4px 0px; text-align: center;">
					<a class="button-link" style="width: 99%;  margin-top: 0px;" href="#founders-day-dates">Founders’ Days</a>
				</div>
			</div><br>

            <?php /*?><blockquote style="border-color: #369; font-style:  italic; width: fit-content;">
                <q>Out beyond ideas of wrongdoing and right-doing, there is a field. I will
                    meet you there.</q><br>
                <div class="text-end text-black-50">(Rumi)</div>
            </blockquote>
            <p>The Adjunct faculty has a special role in helping the College develop units in meta-cognition, bridging learning and thought between school and university. They meet with students and staff from the College to discuss initiatives. The first meta-cognition syllabus commences in 2017 for participating O and A level students. The Faculty comprises 'Old Boys' from esteemed universities.</p><p>&nbsp;</p>
<?php */?>   <div class="table-responsive">

                <table class="table table-bordered" style="width: 97%;" id="term-dates">
                    <thead class="text-center">
                        <?php /*?><tr class="table-dark">
                            <th colspan="3">THE ADJUNCT FACULTY MEMBERS </th>
                        </tr><?php */?>
					  <tr class="table-dark-3rd">
                            <th colspan="2" style="text-align: center;">Term Information</th>
                        </tr>
                        <tr class="table-dark-4th">
                            <th width="49%">Event / Programme</th>
                            <th width="49%">Days and Dates</th>
                        </tr>
                    </thead>
                    <tbody>						
                        <tr>
                            <td>Winter Term</td>
                            <td>Monday, 28<sup>th</sup> August 2023 to Friday, 22<sup>nd</sup> December 2023 (17 Weeks, 85 Days)</td>
                        </tr>
                        <tr>
                          <td>Mid Term Break</td>
                          <td>Sunday, 22<sup>nd</sup> October - Tuesday, 24<sup>th</sup> October,2023</td>
                        </tr>
                        <tr>
                          <td>Winter Break</td>
                          <td>Saturday,23<sup>rd</sup> December, 2023 to Sunday, 7<sup>th</sup> January, 2024</td>
                        </tr>
                        <tr>
                          <td>Spring Term</td>
                          <td>Monday, 8<sup>th</sup> January 2024 to Wednesday, 3<sup>rd</sup> April 2024 (13 Weeks, 65 Days)</td>
                        </tr>
                        <tr>
                          <td>Spring Break</td>
                          <td>Thursday, 4<sup>th</sup> April, 2024 to Sunday, 14<sup>th</sup> April, 2024</td>
                        </tr>
                        <tr>
                          <td>Summer Term</td>
                          <td>Monday, 15<sup>th</sup> April 2024 to Friday, 31<sup>st</sup> May 2024 (7 Weeks, 35 Days)</td>
                        </tr>
                        <tr>
                          <td>Summer Holidays</td>
                          <td>Saturday, 1<sup>st</sup> June 2024 to onwards </td>
                        </tr>
					</tbody>
                </table><br>
				<table class="table table-bordered" style="width: 97%;"  id="boarder-return-dates">
                    <thead class="text-center">
                        <?php /*?><tr class="table-dark">
                            <th colspan="3">THE ADJUNCT FACULTY MEMBERS </th>
                        </tr><?php */?>
						<tr class="table-dark-3rd">
                            <th colspan="2" style="text-align: center;">Boarders Returning Dates </th>
                        </tr>
                        <tr class="table-dark-4th">
                            <th width="49%">Event / Programme</th>
                            <th width="49%">Days and Dates</th>
                        </tr>
                    </thead>
                    <tbody>						
                        <tr>
                          <td>Junior, Prep and Senior Schools’ Boarders to Report from 10:00 am (Winter Term)</td>
                          <td>Friday, 25<sup>th</sup> August - Sunday, 27<sup>th</sup> August, 2023</td>
                        </tr>
						<tr>
						  <td>Junior, Prep and Senior Schools’ Boarders to Report from 10:00 am (Spring Term)</td>
						  <td>Friday, 5<sup>th</sup> January - Sunday, 7<sup>th</sup> January, 2024</td>
					  </tr>
						<tr>
						  <td>Junior, Prep and Senior Schools’ Boarders to Report from 10:00 am (Summer Term)</td>
						  <td>Friday, 12<sup>th</sup> April - Sunday, 14<sup>th</sup> April, 2024</td>
					  </tr>
					</tbody>
                </table><br>
				<table class="table table-bordered" style="width: 97%;" id="tpm-dates">
                    <thead class="text-center">
                        <?php /*?><tr class="table-dark">
                            <th colspan="3">THE ADJUNCT FACULTY MEMBERS </th>
                        </tr><?php */?>
						<tr class="table-dark-3rd">
                            <th colspan="2" style="text-align: center;">Teacher Parent Meeting</th>
                        </tr>
                        <tr class="table-dark-4th">
                            <th width="49%">Event / Programme</th>
                            <th width="49%">Days and Dates</th>
                        </tr>
                    </thead>
                    <tbody>						
                        <tr>
						  <td>1<sup>st</sup> Teacher Parent Meeting</td>
						  <td>Thursday, 19<sup>th</sup> October - Saturday, 21<sup>st</sup> October, 2023<br>
					      (19<sup>th</sup> October Boarders only)</td>
					  </tr>
						<tr>
						  <td>2<sup>nd</sup> Teacher Parent Meeting</td>
						  <td>Thursday, 15<sup>th</sup> February - Saturday, 17<sup>th</sup> February, 2024<br>(15<sup>th</sup> February Boarders only)</td>
					  </tr>
						<tr>
						  <td>3<sup>rd</sup> Teacher Parent Meeting</td>
						  <td>Thursday, 2<sup>nd</sup> May - Saturday, 4<sup>th</sup> May, 2024<br>
					      (2<sup>nd</sup> May Boarders only)</td>
					  </tr>
					</tbody>
                </table><?php /*?><br>
				<table class="table table-bordered" style="width: 97%;" id="admission-test-dates">
                    <thead class="text-center">                        
						<tr class="table-dark-3rd">
                            <th colspan="2" style="text-align: center;">Admission Tests</th>
                        </tr>
                        <tr class="table-dark-4th">
                            <th width="49%">Event / Programme</th>
                            <th width="49%">Days and Dates</th>
                        </tr>
                    </thead>
                    <tbody>						
                        <tr>
						  <td>Junior/ Prep and Senior Schools’ Admission Tests</td>
						  <td>Saturday, 26<sup>th</sup> March- Sunday, 27<sup>th</sup> March 2023 (To be verified) </td>
					  </tr>
						<tr>
						  <td>Junior/ Prep and Senior Schools’ Admissions Interviews</td>
						  <td>Monday, 4<sup>th</sup> April - Saturday, 9<sup>th</sup> April 2023 (To be verified)</td>
					  </tr>
					</tbody>
                </table><?php */?><br>
				<table class="table table-bordered" style="width: 97%;" id="founders-day-dates">
                    <thead class="text-center">
                        <?php /*?><tr class="table-dark">
                            <th colspan="3">THE ADJUNCT FACULTY MEMBERS </th>
                        </tr><?php */?>
						<tr class="table-dark-3rd">
                            <th colspan="2" style="text-align: center;">Founders’ Days</th>
                        </tr>
                        <tr class="table-dark-4th">
                            <th width="49%">Event / Programme</th>
                            <th width="49%">Days and Dates</th>
                        </tr>
                    </thead>
                    <tbody>						
                        <tr>
						  <td>Founders Day Sports (All Schools) Day 1</td>
						  <td>Friday, 8<sup>th</sup> March, 2024</td>
					  </tr>
						<tr>
						  <td>Founders Day Academics (Amphitheatre)</td>
						  <td>Saturday, 9<sup>th</sup> March 2024</td>
					  </tr>
						<tr>
						  <td>Founders Day Sports (All Schools) Day 2</td>
						  <td>Sunday, 10<sup>h</sup> March, 2024</td>
					  </tr>
                    </tbody>
                </table>

            </div>
      </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">


            <div class="divider"></div>

            <div class="row">

            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->

<!-- tosrus -->
<script src="../resources/js/jquery.tosrus.min.all.js"></script>
<script src="../resources/js/photo-gallery-jquery.js"></script>


</body>

</html>