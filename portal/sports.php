<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");
include($path."sports/sportsrepository.php");

$sportsRepo = new SportsRepository($dc);

$schoolNo = $_SESSION['portal_SchoolNo'];
$school = $_SESSION['portal_School'];
$class = $_SESSION['portal_CurrentClass'];

$tMySports = $sportsRepo->GetMySports( $schoolNo );

$days =
    [
        'E2'=>'Wednesday',
        'M1'=>'Thursday',
        'M2'=>'Tuesday',

        'C1'=>'Monday',
        'C2'=>'Tuesday',
        'H1'=>'Wednesday',
        'H2'=>'Thursday'
    ];

$timings =
    ['SSD'=>'2:15 pm to 3:15 pm',
        'PSD'=>'1:40 pm to 2:15 pm'];

$game = "N/A";
$facility = "N/A";

if(isset($tMySports) && $tMySports->rowsCount() > 0) {
    $game = $tMySports->Rows[0]->Game;
    $facility = $tMySports->Rows[0]->Facility;;
}

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "My Sports"; include($path."includes.php"); ?>
<style>
    hr {
        border-top: 1px solid #d9d7d7;
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
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div align="center" class="page-title">
                                    <?php if ( $_SESSION['portal_School'] == "PSD" ) { ?>
                                        <h3>Sports Master Plan (Compulsory Sports)<br/>2023-24</h3>
                                    <?php } else if ( $_SESSION['portal_School'] == "SSD" ) {?>
                                        <h3>Sports Master Plan (After School)<br/>2023-24</h3>
                                    <?php }?>
                                </div>


                                <?php if (true) { ?>
                                <label>My Sports</label>
                                <table class="table table-bordered" style="padding-bottom: 25px">
                                    <tr>
                                        <th>Day</th>
                                        <th>Game</th>
                                        <th>Facility</th>
                                        <th>Timing</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $days[$class]; ?></td>
                                        <td><?php echo $game; ?></td>
                                        <td><?php echo $facility; ?></td>
                                        <td><?php echo $timings[$school]; ?></td>
                                    </tr>
                                </table>
                                <?php } ?>
                                <hr/>


                                <?php if ( $_SESSION['portal_School'] == "JSD" ) { ?>

                                <?php }

                                elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>

                                    <h3 align="center">Programme</h3>
                                    <h3 align="center">W.E.F Tuesday - 5<sup>th</sup> September, 2023</h3>

                                    <div class="table-responsive">
                                        <table class="table table-bordered jambo_table" style="width:100%;text-align:center;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">Day</th>
                                                <th style="text-align:center;">Class</th>
                                                <th style="text-align:center;">Timings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Tuesday</td>
                                                <td>M2</td>
                                                <td rowspan="4" style="vertical-align: middle;"><?php echo $timings[$school];?></td>
                                            </tr>
                                            <tr>
                                                <td>Wednesday</td>
                                                <td>E2</td>
                                            </tr>
                                            <tr>
                                                <td>Thursday</td>
                                                <td>M1</td>
                                            </tr>
                                            </tbody>

                                        </table>


                                        <p><strong>Facilities</strong></p>

                                        <table class="table table-bordered jambo_table" style="width:100%;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">Sr. #</th>
                                                <th style="text-align:center;">Games</th>
                                                <th style="text-align:center;">Facility</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Athletics</td>
                                                <td>ACOBA Ground</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Badminton</td>
                                                <td>Badminton Grass Courts (Behind SK Hall)</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Basketball</td>
                                                <td>Court-3</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="3" style="vertical-align: middle;">4</td>
                                                <td rowspan="3" style="vertical-align: middle;">Cricket</td>
                                                <td>M2: Pitch-1 (Zulfiqar Block)</td>
                                            </tr>
                                            <tr>
                                                <td>E2: Pitch-2 (Zulfiqar Block)</td>
                                            </tr>
                                            <tr>
                                                <td>M1: Pitch-5 (Principal’s Lane)</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" style="vertical-align: middle;">5</td>
                                                <td rowspan="2" style="vertical-align: middle;">Football</td>
                                                <td>F-4 Field (Zulfiqar Block)</td>
                                            </tr>
                                            <tr>
                                                <td>F-5 Field (Adjacent to Jafar Field)</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Hockey</td>
                                                <td>Jafar Hockey Field</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Swimming</td>
                                                <td>Swimming Pool, PS</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Squash</td>
                                                <td>Monnoo Squash Complex</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Table Tennis</td>
                                                <td>Shamim Khan Hall (1st Floor)</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Touch Rugby</td>
                                                <td>Rugby Field</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Tennis</td>
                                                <td>Tennis Grass Courts (Monnoo)</td>
                                            </tr>
                                            </tbody>

                                        </table>

                                        <p><strong>Note:</strong></p>
                                        <ul style="list-style: disc;">
                                            <li>Boarders, Team Probables and those have registered for Riding and Marksmanship are exempted from Compulsory Sports.</li>
                                            
                                        </ul>


                                    </div>

                                <?php }

                                elseif ( $_SESSION['portal_School'] == "SSD" ) { ?>

                                    <h3 align="center">Programme</h3>
                                    <h3 align="center">W.E.F Monday - 4<sup>th</sup> September, 2023</h3>

                                    <div class="table-responsive">
                                        <table class="table table-bordered jambo_table" style="width:100%;text-align:center;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">Day</th>
                                                <th style="text-align:center;">Class</th>
                                                <th style="text-align:center;">Timings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Monday</td>
                                                <td>C1</td>
                                                <td rowspan="4" style="vertical-align: middle;"><?php echo $timings[$school];?></td>

                                            </tr>
                                            <tr>
                                                <td>Tuesday</td>
                                                <td>C2</td>
                                            </tr>
                                            <tr>
                                                <td>Wednesday</td>
                                                <td>H1</td>
                                            </tr>
                                            <tr>
                                                <td>Thursday</td>
                                                <td>H2</td>
                                            </tr>
                                            </tbody>

                                        </table>


                                        <p><strong>Facilities</strong></p>

                                        <table class="table table-bordered jambo_table" style="width:100%;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">Sr. #</th>
                                                <th style="text-align:center;">Games</th>
                                                <th style="text-align:center;">Facility</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Athletics</td>
                                                <td>ACOBA Ground</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Badminton</td>
                                                <td>Badminton Grass Courts</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" style="vertical-align: middle;">3</td>
                                                <td rowspan="2" style="vertical-align: middle;">Basketball</td>
                                                <td>Court-1</td>
                                            </tr>
                                            <tr>
                                                <td>Court-2</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Cricket</td>
                                                <td>Cricket Academy</td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" style="vertical-align: middle;">5</td>
                                                <td rowspan="2" style="vertical-align: middle;">Football</td>
                                                <td>F-1 Field (Godley House)</td>
                                            </tr>
                                            <tr>
                                                <td>F-2 Field (LJ House)</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Hockey</td>
                                                <td>Jafar Hockey Field</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Swimming</td>
                                                <td>Swimming Pool, SS</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Squash</td>
                                                <td>Monnoo Squash Complex</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Table Tennis</td>
                                                <td>Shamim Khan Hall</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Tackle Rugby</td>
                                                <td>Rugby Field</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Tennis</td>
                                                <td>Tennis Grass Courts (Monnoo)</td>
                                            </tr>
                                            </tbody>

                                        </table>

                                        <?php if(true) { ?>
                                        <p><strong>Note:</strong></p>
                                        <ul style="list-style: disc;">
                                            <li>Boarders, Sports Probables, College/ School/ House Prefects, Academic Council, Riding & Marksmanship Boys are exempted from the Sports Master Plan.</li>
                                        </ul>
                                        
                                        <?php } ?>

                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <?php include($path."rightpanel.php"); ?>

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
