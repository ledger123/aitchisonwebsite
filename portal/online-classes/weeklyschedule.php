<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Online Classes Schedule"; include($path."includes.php"); ?>

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

                                <div class="row">
                                    <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                        <div class="page-title">
                                            <h3>Weekly Schedule for Online Classes</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12" style="text-align: right;">
                                        <a href="onlinelearning.php" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                                <br/>

								<?php if ( $_SESSION['portal_CurrentClass'] == "Pre C1" ) { ?>

									<img src="ss/images/c1-current-prec1.jpg" alt="" class="img-responsive" />

								<?php }elseif ( $_SESSION['portal_CurrentClass'] == "C1" ) { ?>

									<img src="ss/images/c2-current-c1.jpg" alt="" class="img-responsive" />

								<?php }elseif ( $_SESSION['portal_CurrentClass'] == "H1" ) { ?>

									<img src="ss/images/h2-current-h1.jpg" alt="" class="img-responsive" />

								<?php } ?>
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
