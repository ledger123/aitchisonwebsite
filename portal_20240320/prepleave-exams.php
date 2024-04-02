<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Prep Leave and Exams"; include($path."includes.php"); ?>

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
                                    <h3>Prep Leave and Exams</h3>
                                </div>
                                <br />

                                <div class="table-responsive">

                                    <table class="table table-bordered jambo_table">
                                        <thead>
                                        <tr>
                                            <th>Year Levels</th>
                                            <th>Prep Leave</th>
                                            <th>Cambridge Examinations</th>
                                            <th>Regular School &amp; Final Examinations</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>C2</td>
                                            <td>Apr 5<sup>th</sup> &ndash; Apr 26<sup>th</sup></td>
                                            <td>Apr 27<sup>th</sup> &ndash; June 10<sup>th</sup></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>H1</td>
                                            <td>Apr 11<sup>th</sup>&nbsp; - Apr 22<sup>nd</sup></td>
                                            <td>Apr 25<sup>th</sup> &ndash; June 10<sup>th</sup></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>H2</td>
                                            <td>Apr 11<sup>th</sup>&nbsp; - Apr 22<sup>nd</sup></td>
                                            <td>Apr 25<sup>th</sup> &ndash; June 10<sup>th</sup></td>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>C1</td>
                                            <td>Apr 18<sup>th</sup>&nbsp; - Apr 22<sup>nd</sup></td>
                                            <td>Apr 25<sup>th</sup> &ndash; May 9<sup>th</sup></td>
                                            <td>May 11<sup>th</sup> &ndash; June 3<sup>rd</sup></td>
                                        </tr>
                                        <tr>
                                            <td>Pre C1</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>Mar 24<sup>th</sup> - June 3<sup>rd</sup></td>
                                        </tr>
                                        <tr>
                                            <td>H1 Full A- Levels</td>
                                            <td>&nbsp;</td>
                                            <td>&nbsp;</td>
                                            <td>Mar 22<sup>nd</sup> &ndash; June 3<sup>rd</sup></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p>&nbsp;</p>
                                    <table class="table table-bordered jambo_table">
                                        <thead>
                                        <tr>
                                            <th>Year levels</th>
                                            <th>Mocks</th>
                                            <th>Past Paper Sessions</th>
                                            <th>Prep Leave &amp; Eid</th>
                                            <th>Aga Khan Board</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>F.Sc 1 &amp; 2</td>
                                            <td>Apr 11<sup>th</sup>&nbsp; - Apr 18<sup>th</sup></td>
                                            <td>Apr 19<sup>th</sup>&nbsp; - Apr 29<sup>th</sup></td>
                                            <td>May 2<sup>nd</sup> &ndash; May 23<sup>rd</sup></td>
                                            <td>May 24<sup>th</sup> &ndash; June 16<sup>th</sup></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
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
