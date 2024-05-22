<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Principal Aitchison College"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/school/principal-office.jpg';
$page_header = $title;
?>

<body>
	<style>
		.principal_img{
			width: 450px;
		}
		@media (max-width: 600px) {
			
		}		
	</style>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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

            <div class="float-end ms-3 mb-1">
                <img src="<?php echo $image_path;?>img/principal/principal-20240522.jpg" class="img-fluid principal_img" alt="Dr Syed Turab Hussain">
                <div class="text-center"><small>Dr Syed Turab Hussain, Principal Aitchison College</small></div>
            </div>


            <div>
                <p style="padding:1px;"><strong>Sample Draft:</strong> Dr. Syed Turab Hussain has recently taken up the prestigious role of the 19<sup>th</sup> Principal of Aitchison College, one of Pakistan's most esteemed educational institutions. His academic journey began with an undergraduate degree from the College of Wooster in Ohio, USA, completed in 1996. He then advanced his studies in the UK, earning both a Master's and a Ph.D. in Economics from the University of Essex. His doctoral research delved into the new Economics of labour migration, reflecting his interest in the economic impacts of migration.</p>
                <p>After completing his doctoral studies, Dr. Hussain served as a Lecturer at the University of Essex for a year. In 2003, he joined the Economics faculty at the Lahore University of Management Sciences (LUMS), a leading institution in Pakistan. Throughout his tenure at LUMS, Dr. Hussain has explored various critical areas within Development Economics and International Trade, including migration and policy, regional trade, dispute settlement mechanisms, and services trade within the World Trade Organization (WTO).</p>
                <p>Dr. Hussain's extensive academic background and his expertise will significantly contribute to the academic and administrative leadership at Aitchison College, fostering an environment of intellectual growth and excellence.</p>
                <h4>A message from the Principal</h4>
                <p style="padding:1px;">While the College will always produce outstanding academic results, we do not measure boys by grades alone. We place the importance of character, self-discipline, community, integrity and effort at the heart of everything we do. Boys admitted to Aitchison must live up to high standards, play sport and engage in clubs and societies to broaden their capabilities and preparedness for life. We are an inclusive school that promotes respect and tolerance for others and we value talent in its broadest possible guise. We produce modern gentlemen. And being blessed with one of the world's finest campuses, sitting as it does in Lahore, we educate boys from all parts of the country and from all backgrounds. </p>
                <p>Our ambition for every boy is to see him graduate from the College with a clear set of values and the highest standards of effort, accomplishment and personal integrity.</p>
            </div>
            <div align="center" style="padding-top: 30px; padding-bottom: 20px;"><a href="<?php echo $path;?>principal-letters" style="color: #3A12DB;"><button type="button" class="btn btn-primary btn-sm">Principal's Newsletters</button></a></div>
            <div style="padding-bottom: 20px; padding-top: 30px;"><strong>CONTACT:</strong></div>
            <p>All appointments with the Principal must be pre-arranged with his office
(<a href="mailto:pa.principal@aitchison.edu.pk">pa.principal@aitchison.edu.pk</a>) 
and with the purpose of the visit clearly stated. Matters pertaining to individual student queries should first be directed to the relevant Head of School. </p>
            <p>Contact Details:</p>
            <p>UAN [92 42] 111 363 063
                <br>
                Fax: [92 42] 3636 2989</p>
            <p>Email: principal@aitchison.edu.pk </p>
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

</body>

</html>
