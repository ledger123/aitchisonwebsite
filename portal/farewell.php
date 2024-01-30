<?php
$path = "";
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

<?php $title = "Farewell"; include($path."includes.php"); ?>

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

								</div>
                                <br/>
                                <div id="links">
								<?php if ( $_SESSION['portal_CurrentClass'] == "K1" ) { ?>

                                <div align="center">
                                    <img src="images/farewell/k1-farewell.jpg" alt="" class="img-responsive" />
                                </div>

								<?php }elseif ( $_SESSION['portal_CurrentClass'] == "K2" ) { ?>

                                    <div align="center">
                                        <img src="images/farewell/k2-farewell.jpg" alt="" class="img-responsive" />
                                    </div>

                                <?php }elseif ( $_SESSION['portal_CurrentClass'] == "K3" ) { ?>

                                    <div align="center">
                                        <img src="images/farewell/k3-farewell.jpg" alt="" class="img-responsive" />
                                    </div>

                                <?php }elseif ( $_SESSION['portal_CurrentClass'] == "K4" ) { ?>

                                    <div align="center">
                                        <img src="images/farewell/k4-farewell.jpg" alt="" class="img-responsive" />
                                    </div>

                                <?php }elseif ( $_SESSION['portal_CurrentClass'] == "K5" ) { ?>

                                    <div align="center">
                                        <img src="images/farewell/k5-farewell.jpg" alt="" class="img-responsive" />
                                    </div>
                                <?php }elseif ( $_SESSION['portal_CurrentClass'] == "K6" ) { ?>

                                    <div align="center">
                                        <img src="images/farewell/k6-farewell.jpg" alt="" class="img-responsive" />
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
