<?php
$path = "../";

include($path."sports/calendarrepository.php");


$calendarRepo = new CalendarRepository($dc);

$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = $_SESSION['portal_CurrentClass'];

$tCalendar = $calendarRepo->GetPublishedCalendar( $group, $subGroup, $location, $game );
//$tCalendar->PrintTable();


				  foreach ( $tCalendar->Rows as $row )
				   {
					   //if ($row->Tab == "Weekly")
					   {
				  ?>
					  <div class="row" style="margin-left: 15px;">
						 <h4><?php echo $row->Title; ?></h4>
						 <br>
						 <div class="table-responsive">

							<?php
								echo $functions->replaceQuote($row->Content);
							 ?>

						 </div>
					  </div>
				  <?php
					   }
				  }
				 ?>
