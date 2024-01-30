<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Revision Classes"; include($path."includes.php"); ?>

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
                                <div class="page-title" align="center">
                                    <h3>Revision Classes</h3>
                                </div>
                                <br />
                                

                                <?php if($_SESSION['portal_School'] == 'SSD') { ?>

                                    <?php if($_SESSION['portal_CurrentClass'] == 'C2') { ?>

                                    <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
                                        <p>
                                            <a href="https://aitchison.edu.pk/portal/accounts/schedule/C2-Revision-Classes.pdf" target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7; font-size: 12px;"></span> Download Revision Classes </span> </a>
                                        </p>
                                    </div>

                                    <?php } elseif($_SESSION['portal_CurrentClass'] == 'H1') { ?>
                                        <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
                                            <p>
                                                <a href="https://aitchison.edu.pk/portal/accounts/schedule/H1-Revision-Classes.pdf" target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7; font-size: 12px;"></span> Download Revision Classes </span> </a>
                                            </p>
                                        </div>

                                    <?php } elseif($_SESSION['portal_CurrentClass'] == 'H2') { ?>

                                        <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
                                            <p>
                                                <a href="https://aitchison.edu.pk/portal/accounts/schedule/H2-Revision-Classes.pdf" target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7; font-size: 12px;"></span> Download Revision Classes </span> </a>
                                            </p>
                                        </div>

                                    <?php }?>


                                <?php } elseif($_SESSION['portal_School'] == 'PSD') { ?>


                                <?php } elseif($_SESSION['portal_School'] == 'JSD') { ?>

                                <?php } ?>
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
        <!-- /page content -->

    </div>
</div>
<?php include($path."footerincludes.php"); ?>

</body>
</html>
