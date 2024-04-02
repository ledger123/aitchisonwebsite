<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");
include("mysportsrepository.php");

$sportsRepo = new MySportsRepository($dc);

$schoolNo = $_SESSION['portal_SchoolNo'];
$school = $_SESSION['portal_School'];
$class = $_SESSION['portal_CurrentClass'];

$school_ = substr($school, 0, 2);

$tMySportsDetails = $sportsRepo->GetMySportsDetails( $school_ );

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Sports Facilities"; include($path."includes.php"); ?>
<style>

    hr {
        border-top: 1px solid #d9d7d7;
    }
@media (min-width: 575px){
    .table-container {
        overflow-y: scroll;
        height: 70vh;
    }

    .my-sports {
        overflow: scroll;
        z-index: 1;
    }

    .my-sports tr:nth-child(1)
    {
        position: sticky;
        top: 0;
        z-index: 3;
    }

    .my-sports tr td:nth-child(1)
    {
        position: sticky;
        left: 0;
        z-index: 2;

    }
}

    .my-sports tr:nth-child(1)
    {
        color:#fff;
        background-color: #187bcd; /* #2871cc; rgba(52, 73, 94, 0.94) */
    }

    .col-freeze tr:nth-child(1)
    {
        color:#000;
        background-color: #e3e3e3; /* #2871cc; rgba(52, 73, 94, 0.94) */
    }

    .my-sports tr td:nth-child(1)
    {
        color:#000;
        background-color: #e3e3e3; /* #d0efff rgba(52, 73, 94, 0.94) */
    }


    .my-sports tr th {
        text-align: center;
    }

    .my-sports tr td {
        font-size: 14px;
        vertical-align: middle !important;
    }

    .my-sports tr td:first-child {
        min-width: 270px;
    }

    .my-sports tr td:nth-child(2),
    .my-sports tr td:nth-child(3),
    .my-sports tr td:nth-child(4),
    .my-sports tr td:nth-child(5),
    .my-sports tr td:nth-child(6),
    .my-sports tr td:nth-child(7),
    .my-sports tr td:nth-child(8),
    .my-sports tr td:nth-child(9),
    .my-sports tr td:nth-child(10),
    .my-sports tr td:nth-child(11) {
        min-width: 270px;
        max-width: 270px;
    }

    .col-freeze tr th {

    }

    .col-freeze tr th:first-child {
        width: 60px;
    }

    .col-freeze tr th:nth-child(2) {
        width: 120px;
    }

    .col-freeze tr th:nth-child(3) {
        width: 85px;
    }

</style>

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
                                    <h3>Sports Facilities 2022-23</h3>
                                </div>

                                <div class="table-responsive table-container">
                                    <table class="table table-bordered my-sports">

                                    <?php foreach ($tMySportsDetails->Rows as $row) { ?>

                                    <tr>
                                        <td>
                                            <table class="col-freeze">
                                            <tr>
                                                <th><?php echo $row->FieldNo; ?></th>
                                                <th><?php echo $row->Facility; ?></th>
                                                <th><?php echo $row->Games; ?></th>
                                            </tr>
                                            </table>
                                        </td>
                                        <?php echo $row->Monday; ?>
                                        <?php echo $row->Tuesday; ?>
                                        <?php echo $row->Wednesday; ?>
                                        <?php echo $row->Thursday; ?>
                                        <?php echo $row->Friday; ?>
                                        <?php echo $row->Saturday; ?>
                                    </tr>

                                    <?php } ?>

                                </table>
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
