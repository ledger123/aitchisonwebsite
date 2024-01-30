<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

?>

<!DOCTYPE html>
<html lang="en">

<style>
#links div
{
    padding: 15px;
}
</style>

<?php $title = "Online Learning"; include($path."includes.php"); ?>

<body class="nav-md footer_fixed">
<div class="container body">
	<div class="main_container">

		<?php include($path."leftheader.php"); ?>

		<!-- page content -->
		<div class="right_col" role="main">

			<div class="container">
				<div class="row" id="examinations">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_content">
								<div align="center" class="page-title">
									<h1>Online Learning</h1>
								</div>
                                <br/>
                                <div id="links">
								<?php if ( $_SESSION['portal_School'] == "SSD" ) { ?>

                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

									<a href="ss/pdf/Student-Guide-to-Google-Classroom.pdf" target="_blank" rel="noopener noreferrer">
                                        <img src="ss/small/google-classroom-ss.jpg" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                    <a href="ss/pdf/Joining-Google-Meet.pdf" target="_blank" rel="noopener noreferrer">
                                        <img src="ss/small/google-meet-ss.jpg" alt="" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="ss/pdf/Rules-for-Google-Meet-v1.pdf" target="_blank" rel="noopener noreferrer">
                                        <img src="ss/small/rules-ss.jpg" alt="" class="img-responsive" />
                                    </a>
                                </div>

                                    <?php
                                    $src = 'schedule-ss.jpg';
                                    if ( $_SESSION['portal_CurrentClass'] == "Pre C1" ) {

                                        $href = "ss/pdf/c1-current-prec1.pdf";

                                     }elseif ( $_SESSION['portal_CurrentClass'] == "C1" ) {

                                        $href = "ss/pdf/c1.pdf";

                                    }elseif ( $_SESSION['portal_CurrentClass'] == "C2" ) {

                                        //$href = "ss/pdf/Online-Support-for-C2.pdf";
                                        $href = "ss/pdf/c2.pdf";
                                        //$src = 'onlinesupport-c2.jpg';

                                    }elseif ( $_SESSION['portal_CurrentClass'] == "H1" ) {

                                        $href = "ss/pdf/h1.pdf";

                                     }elseif ( $_SESSION['portal_CurrentClass'] == "H2" ) {

                                        $href = "ss/pdf/h2.pdf";

                                    }
                                     ?>


                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="<?php echo $href; ?>" target="_blank" rel="noopener noreferrer">
                                        <img src="ss/small/<?php echo $src; ?>" alt="" class="img-responsive" />
                                    </a>
                                </div>




                                    <?php /* ?>
                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <a href="ss/pdf/Timetables-for-Online-Learning.pdf" target="_blank" rel="noopener noreferrer">
                                        <img src="ss/small/timetable-ss.jpg" alt="" class="img-responsive" />
                                    </a>
                                </div>

                                <?php */ ?>

								<?php }elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                        <a href="ps/pdf/Student-Guide-to-Google-Classroom.pdf" target="_blank" rel="noopener noreferrer">
                                            <img src="ps/small/google-classroom-ps.jpg" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                        <a href="ps/pdf/Joining-Google-Meet.pdf" target="_blank" rel="noopener noreferrer">
                                            <img src="ps/small/google-meet-ps.jpg" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <a href="ps/pdf/Rules-for-Online-Learning.pdf" target="_blank" rel="noopener noreferrer">
                                            <img src="ps/small/rules-ps.jpg" alt="" class="img-responsive" />
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
										<?php /*?><a href="ps/pdf/Timetable-for-Online-Learning.pdf" target="_blank" rel="noopener noreferrer"> till 26th aug 2020<?php */?>
                                        <a href="ps/pdf/Timetable-for-Online-Classes.pdf" target="_blank" rel="noopener noreferrer">
                                            <img src="ps/small/timetable-ps.jpg" alt="" class="img-responsive" />
                                        </a>
                                    </div>

                                <?php }elseif ( $_SESSION['portal_School'] == "JSD" ) { ?>


                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                        <a href="js/pdf/Guidance-for-Online-Learning.pdf" target="_blank" rel="noopener noreferrer">
                                            <img src="js/small/google-classroom-guide-js.jpg" alt="" class="img-responsive" />
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                        <a href="js/pdf/Howto-join-google-classroom-js-v1.2.pdf" target="_blank" rel="noopener noreferrer">
                                            <img src="js/small/google-classroom-js.jpg" alt="" class="img-responsive" />
                                        </a>
                                    </div>

                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">

                                        <a href="js/pdf/Classwork-Tutorial.pdf" target="_blank" rel="noopener noreferrer">
                                            <img src="js/small/classwork-js.jpg" alt="" class="img-responsive" />
                                        </a>
                                    </div>
                                <?php } ?>
                                </div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!-- footer content -->

			<?php include($path."footer.php"); ?>

			<!-- /footer content -->

		</div>
		<!-- /page content -->

	</div>
</div>
<?php include($path."footerincludes.php"); ?>

</body>
</html>
