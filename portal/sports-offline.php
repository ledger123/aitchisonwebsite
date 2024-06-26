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
        ['E2'=>'Tuesday',
        'M1'=>'Wednesday',
        'M2'=>'Thursday',

        'C1'=>'Monday',
        'C2'=>'Tuesday',
        'H1'=>'Wednesday',
        'H2'=>'Thursday'];

$timings =
    ['SSD'=>'2:00 pm to 3:00 pm',
    'PSD'=>'1:45 pm to 2:45 pm'];


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
                              <h3>After School Sports 2022-23</h3>
                          </div>


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
                          <hr/>

						  <?php if ( $_SESSION['portal_School'] == "JSD" ) { ?>

						  <?php }

                          elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>

                              <h3 align="center">School Programme</h3>
                              <h3 align="center">W.E.F Monday - 23<sup>rd</sup> August, 2022</h3>

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
                                          <td>E2</td>
                                          <td rowspan="4" style="vertical-align: middle;">1:45 pm to 2:45 pm</td>
                                      </tr>
                                      <tr>
                                          <td>Wednesday</td>
                                          <td>M1</td>
                                      </tr>
                                      <tr>
                                          <td>Thursday</td>
                                          <td>M2</td>
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
                                          <td>4</td>
                                          <td>Cricket</td>
                                          <td>Pitch-1 (Zulfiqar Block)</td>
                                      </tr>
                                      <tr>
                                          <td>5</td>
                                          <td>Football</td>
                                          <td>F-4 Field (Zulfiqar Block)</td>
                                      </tr>
                                      <tr>
                                          <td>6</td>
                                          <td>Hockey</td>
                                          <td>Jafar Field</td>
                                      </tr>
                                      <tr>
                                          <td>7</td>
                                          <td>Swimming</td>
                                          <td>Swimming Pool, PS</td>
                                      </tr>
                                      <tr>
                                          <td>8</td>
                                          <td>Table Tennis</td>
                                          <td>Shamim Khan Hall</td>
                                      </tr>
                                      <tr>
                                          <td>9</td>
                                          <td>Touch Rugby</td>
                                          <td>Rugby Field</td>
                                      </tr>
                                      <tr>
                                          <td>10</td>
                                          <td>Tennis</td>
                                          <td>Tennis Grass Courts (Monnoo)</td>
                                      </tr>
                                      </tbody>

                                  </table>

                                  <p><strong>Note:</strong></p>
                                  <p>New admission Boys are required to contact Sports Office for After School Sports.</p>


                              </div>

						  <?php }

                          elseif ( $_SESSION['portal_School'] == "SSD" ) { ?>

                              <h3 align="center">School Programme</h3>
                              <h3 align="center">W.E.F Monday - 22<sup>nd</sup> August, 2022</h3>

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
                                          <td rowspan="4" style="vertical-align: middle;">2:00 pm to 3:00 pm</td>

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
                                              <td rowspan="3" style="vertical-align: middle;">5</td>
                                              <td rowspan="3" style="vertical-align: middle;">Football</td>
                                              <td>F-1 Field</td>
                                          </tr>
                                          <tr>
                                              <td>F-2 Field</td>
                                          </tr>
                                          <tr>
                                              <td>F-5 Field</td>
                                          </tr>
                                          <tr>
                                              <td>6</td>
                                              <td>Hockey</td>
                                              <td>Jafar Field</td>
                                          </tr>
                                          <tr>
                                              <td>7</td>
                                              <td>Swimming</td>
                                              <td>Swimming Pool, SS</td>
                                          </tr>
                                          <tr>
                                              <td>8</td>
                                              <td>Table Tennis</td>
                                              <td>Shamim Khan Hall</td>
                                          </tr>
                                          <tr>
                                              <td>9</td>
                                              <td>Tackle Rugby</td>
                                              <td>Rugby Field</td>
                                          </tr>
                                          <tr>
                                              <td>10</td>
                                              <td>Tennis</td>
                                              <td>Tennis Grass Courts (Monnoo)</td>
                                          </tr>
                                      </tbody>

                                  </table>

                                  <p><strong>Note:</strong></p>
                                  <p>New admission Boys are required to contact Sports Office for After School Sports.</p>


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
