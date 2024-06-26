<?php
if(empty($_GET['selection']) || mktime(23,59,59,5,25,2022) > time()){
    //$_GET['selection']="position2-tab";	
}
if(empty($_GET['selection']) || mktime(23,59,59,5,25,2022) > time()){
    //$_GET['selection']="position3-tab";	
}
if(empty($_GET['selection']) || mktime(23,59,59,8,1,2022) > time()){
    //$_GET['selection']="position4-tab";
}
if(empty($_GET['selection']) || mktime(23,59,59,7,8,2023) > time()){
	//echo date("Y-m-d", mktime(23,59,59,6,6,2022));
   $_GET['selection']="position5-tab";
}

//$_GET['selection']="position4-tab";
//echo $_GET['selection'];
?>
<!DOCTYPE html>
<html>
<?php
include_once("path-settings.php");
$path = '';

$title = "Careers"; include_once("header-includes.php");

$banner_url = 'resources/assets/images/admissions/banner.jpg';
$page_header = $title;
?>
<style>
.tab-content {
  display: flex;
}

.tab-content > .tab-pane {
  display: block; /* undo "display: none;" */
  visibility: hidden;
  margin-right: -100%;
  width: 100%;
}

.tab-content > .active {
  visibility: visible;
}	
</style>
<body>
<?php include_once ('new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="contact-info">Careers</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>



<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <ul class="nav nav-tabs mb-3" id="careerTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link <?php (($_GET['selection']))?' active':'';?>" id="career-tab" data-bs-toggle="tab" data-bs-target="#career" type="button" role="tab" aria-controls="career" aria-selected="true">Careers</button>
                </li>
				<?php 
				if(mktime(23,59,59,7,8,2023) > time()){
				?>
				<li class="nav-item" role="presentation">
                    <button class="nav-link <?php echo (!empty($_GET['selection']) && $_GET['selection']=="position5-tab")?' active':'';?>" id="position5-tab" data-bs-toggle="tab" data-bs-target="#position5" type="button" role="tab" aria-controls="position5" aria-selected="false">Teachers for Junior School</button>
                </li>
				<?php 
				}
				?>

                <?php
                if(mktime(23,59,59,5,31,2023) > time()){
                    ?>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link <?php echo (!empty($_GET['selection']) && $_GET['selection']=="position4-tab")?' active':'';?>" id="position4-tab" data-bs-toggle="tab" data-bs-target="#position4" type="button" role="tab" aria-controls="position4" aria-selected="false">Teachers for Senior School</button>
                    </li>
                    <?php
                }
                ?>
                <?php /*?><li class="nav-item" role="presentation">
                    <button class="nav-link" id="position1-tab" data-bs-toggle="tab" data-bs-target="#position1" type="button" role="tab" aria-controls="position1" aria-selected="false">Position 1</button>
                </li><?php */?>
                
            </ul>
            <div class="tab-content" id="careerTabContent" style="display: flex !important;">
                <div class="tab-pane fade show <?php echo (($_GET['selection']))?' active':'';?>" id="career" role="tabpanel" aria-labelledby="career-tab">
                    <p>
                        Aitchison College seeks teachers who are deeply committed to boys' education and an understanding of how boys are motivated and learn best in and beyond the classroom. Teachers at Aitchison are more than just teachers; they are inspired to help beyond the perfunctory and take an active interest in the progress and attainments of boys. We expect our teachers to form positive and effective relationships with students; combining compassion with an unfussy but effective way of going about things. Aitchison values above all else the building of character and expects its teachers to be exemplary mentors.
                    </p>
                    <p>
                        Only experienced teachers are considered with a minimum of a Masters degree in their teaching discipline. Applications must come through the Careers platform and not directly to the Principal or any other member of staff. <strong>HR reviews and shortlists all applicants, and handles employment enquiries. Contact by any other means will be ignored. Do not send applications or resumes to the Principal's Office. Appointments to staff are made by the College Principal and Heads of School.</strong>
                    </p>
                    <p>Applications and enquiries for non teaching positions must be directed to the Bursar: email <span style="color:#000099;">bursar@aitchison.edu.pk</span></p>
                </div> 

				<?php 
				if(mktime(23,59,59,7,8,2023) > time()){
				?>
                <div class="tab-pane fade show <?php echo (!empty($_GET['selection']) && $_GET['selection']=="position5-tab")?' active':'';?>" id="position5" role="tabpanel" aria-labelledby="position5-tab">
					<div class="col-lg-12 col-md-12 col-sm-12">
                        <h4 style="margin-top: 0; margin-bottom: 15px; ">
                            <strong style="color:#800000;">English, Mathematics & General Teachers</strong>
                        </h4>
                        <p>Applications are invited for the above-mentioned positions in our Junior School. The applicant must be familiar with Cambridge Primary Curriculum (Grade 1 - 6) and must have a minimum 5 years verifiable teaching experience in a well-reputed school, along with excellent language and teaching skills. A Master’s degree would be an advantage but is not essential.</p>
					  

                        <p style="line-height: 1.6em;">
                        Please apply to HR with a full resume at <span style="color:#0000ff;">hr@aitchison.edu.pk</span></strong> no later than Saturday, 8<sup>th</sup> July, 2023.
                        </p>


                  </div>
                </div>
				<?php 
				}
				?>
                <?php
                if(mktime(23,59,59,5,31,2023) > time()){
                    ?>
                    <div class="tab-pane fade show <?php echo (!empty($_GET['selection']) && $_GET['selection']=="position4-tab")?' active':'';?>" id="position4" role="tabpanel" aria-labelledby="position4-tab">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h4 style="margin-top: 0; margin-bottom: 15px; ">
                                <strong style="color:#800000;">Teachers for Senior School (Starting August 2023)</strong>
                            </h4>
							<h6 style="margin-top: -10px;">
								<strong>
									Principles of Accounting, Business Studies, English and Pakistan Studies
								</strong>
							</h6>
							<p style="line-height: 1.6em;">Applications are invited for the above mentioned subjects in Senior School.</p>
							<p style="line-height: 1.6em;">Applicants must have experience of teaching the relevant subjects at O Level /IGCSE and A Level (Cambridge international), with a related Master’s degree.</p>
                            <p style="line-height: 1.6em;">
                            Applications must reach the college by 31<sup>st</sup> May 2023 via email to the Director HR at:  <span style="color:#0000ff;">hr@aitchison.edu.pk</span>. 
                        </p>
							

                        </div>
                    </div>
                    <?php
                }
                ?>



            </div>

        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">

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

</body>

</html>