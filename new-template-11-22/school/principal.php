<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Principal Aitchison College"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
//$banner_url = $path.'resources/assets/images/banners/school/about.jpg';

$page_header = "Principal";
if(is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"))){
	$background_align="left left; background-position-x: 25%";
}	
?>
<style>
    /*
	.principal-office p {		
		line-height: 1.57;
		
	}	
	@media (max-width: 1919px) {
		.principal-office p {		
			line-height: 1.55;
		}
	}
	@media (max-width: 1599px) {
		.principal-office p {		
			line-height: 2.1;
		}
	}
	@media (max-width: 1399px) {
		.principal-office p {		
			line-height: 1.5;
		}
	}
	@media (max-width: 1365px) {
		.principal-office p {		
			line-height: 1.5;
		}
	}
	@media (max-width: 1200px) {
		.principal-office p {		
			line-height: 1.48;
		}
	}
	@media (max-width: 1024px) {
		.principal-office p {		
			line-height: 1.0;
		}
	}
	@media (max-width: 600px) {
		.principal-office p {		
			line-height: 1.55;
		}
	}
	*/
</style>
<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

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
</div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-sm-12 principal-office">
				<p>Australian Michael Thomson is the 18<sup>th</sup> Principal of Aitchison College. With extensive experience in international education and a strong boarding background, he believes in a broad and challenging school experience for every boy. He is the first foreign principal appointed since Independence. </p>
                <p>“While the College will always produce outstanding academic results, we do not measure boys by grades alone. We place the importance of character, self-discipline, community, integrity and effort at the heart of everything we do. Boys admitted to Aitchison must live up to high standards, play sport and engage in clubs and societies to broaden their capabilities and preparedness for life. We are an inclusive school that promotes respect and tolerance for others and we value talent in its broadest possible guise. We produce modern gentlemen. And being blessed with one of the world's finest campuses, sitting as it does in Lahore, we educate boys from all parts of the country and from all backgrounds.</p>
                <p>Our ambition for every boy is to see him graduate from the College with a clear set of values and the highest standards of effort, accomplishment and personal integrity.”</p>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12">
				<img src="https://aitchison.edu.pk/img/principal/principal-20220905.jpg" class="img-responsive" style="width: 100%; height: auto;" alt="Michael Alister Thomson">
				</div>
			</div>
			<div class="row">

				<div class="col-lg-7 col-md-7 col-sm-12 principal-office">
                    <div><h3>CONTACT:</h3></div>
					<p>All appointments with the Principal must be pre-arranged with his office (<span class="text-blue">pa.principal@aitchison.edu.pk</span>) and with the purpose of the visit clearly stated.</p>
					<hr class="hr-yellow start">
					<?php /*?><p>Contact Details:</p><?php */?>
                    <p>
                        <span class="text-blue">UAN:</span> [92 42] 111 363 063<br>
                        <span class="text-blue">Fax:</span> [92 42] 3636 2989<br>
                        <span class="text-blue">Email:</span> principal@aitchison.edu.pk
                    </p>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12">
				<img src="https://aitchison.edu.pk/img/principal/principal-newsletter-20220727.jpg" class="img-responsive" style="width: 100%; height: auto;" alt="Principal Newsletter">
				</div>
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

</body>

</html>
