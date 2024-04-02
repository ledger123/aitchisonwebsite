<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Online Classes Rules"; include($path."includes.php"); ?>

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
                                            <h3>Online Classes Rules</h3>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12" style="text-align: right;">
                                        <a href="onlinelearning.php" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                                <br/>

                                <img src="ss/images/rules.jpg" alt="" class="img-responsive" style="width: 90%;" />

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
