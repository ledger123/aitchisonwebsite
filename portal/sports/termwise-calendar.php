<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/controls/tabControl.php");
include($path."sports/calendarrepository.php");
include($path."classes/filing.php");




$calendarRepo = new CalendarRepository($dc);



$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = $_SESSION['portal_CurrentClass'];

$tCalendar = $calendarRepo->GetPublishedCalendar( $group, $subGroup, $location );
//$tCalendar->PrintTable();
/*
echo "<!-- ";
echo Filing::GetFileKey("Term-wise Sports Events 2019-20", "sports-calendar-ss-201920-21062019", "data/2019-20/sports-calendar-ss-201920-21062019.pdf");
echo " -->";
*/
#for junior school
if($_SESSION['portal_School'] == "JSD") {
	$arr_sports_calendar["JSD"]["termwise"] = array(
		/*array("title"=>"Term-wise Sports Events 2018-19", "url"=>"../school_doc/2018-2019/sports/term-wise-sports-calendar-js.pdf"),
		array("title"=>"Term-wise Sports Events 2019-20", "url"=>"data/2019-20/short-sports-calendar-js-proposed-201920.pdf")*/
		//array("title"=>"Term-wise Sports Events 2019-20", "url"=>"data/2019-20/sports-calendar-js-201920-21062019.pdf")
		//array("title"=>"Term-wise Sports Events 2019-20", "url"=>"filing/?d=Termwise_Sports_Events_2019_20")	

		array("title"=>"Term-wise Sports Events 2019-20", "url"=> "filing/?d=".Filing::GetFileKey("", "sports-calendar-js-201920-21062019", "../data/2019-20/sports-calendar-js-201920-21062019.pdf"))
	);
}

if($_SESSION['portal_School'] == "PSD") {
	#for prep school
	$arr_sports_calendar["PSD"]["termwise"] = array(
		/*array("title"=>"Term-wise Sports Events 2018-19", "url"=>"../school_doc/2018-2019/sports/term-wise-sports-calendar-ps.pdf"),
		array("title"=>"Term-wise Sports Events 2019-20", "url"=>"data/2019-20/short-sports-calendar-ps-proposed-201920.pdf")*/
		//array("title"=>"Term-wise Sports Events 2019-20", "url"=>"data/2019-20/sports-calendar-ps-201920-21062019.pdf")
		//array("title"=>"Term-wise Sports Events 2019-20", "url"=>"filing/?d=Termwise_Sports_Events_2019_20")

		array("title"=>"Term-wise Sports Events 2019-20", "url"=> "filing/?d=".Filing::GetFileKey("", "sports-calendar-ps-201920-21062019", "../data/2019-20/sports-calendar-ps-201920-21062019.pdf"))
	);
}

if($_SESSION['portal_School'] == "SSD") {
	#for senior school
	$arr_sports_calendar["SSD"]["termwise"] = array(
		/*array("title"=>"Term-wise Sports Events 2018-19", "url"=>"../school_doc/2018-2019/sports/term-wise-sports-calendar-ss.pdf"),
		array("title"=>"Term-wise Sports Events 2019-20", "url"=>"data/2019-20/short-sports-calendar-ss-proposed-201920.pdf")*/

		//array("title"=>"Term-wise Sports Events 2019-20", "url"=>"data/2019-20/sports-calendar-ss-201920-21062019.pdf")
		//array("title"=>"Term-wise Sports Events 2019-20", "url"=>"filing/?d=Termwise_Sports_Events_2019_20")

		array("title"=>"Term-wise Sports Events 2019-20", "url"=> "filing/?d=".Filing::GetFileKey("", "sports-calendar-ss-201920-21062019", "../data/2019-20/sports-calendar-ss-201920-25112019.pdf"))
	);
}


$weekly = false;
$weekly_after = false;
$morning = false;

if ( $_SESSION['portal_SchoolName'] == "Junior School" ) {
	$weekly_after = $weekly = false;
}
elseif ( $_SESSION['portal_SchoolName'] == "Prep School" ) {
	$weekly_after = $morning = false;
	
	if ( $_SESSION['portal_CurrentClass'] == "E2" ) $morning = true;
}
elseif ( $_SESSION['portal_SchoolName'] == "Senior School" ) {
	$weekly_after = false;
}


?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Termwise Calendar"; include($path."includes.php"); ?>
	
<!-- FullCalendar -->
<link href="<?php echo $path; ?>vendors/fullcalendar/dist-v4/fullcalendar.min.css" rel="stylesheet">
<link href="<?php echo $path; ?>vendors/fullcalendar/dist-v4/fullcalendar.print.css" rel="stylesheet" media="print">

<style>

.fc-day-grid-container.fc-scroller {
	height: auto!important;
	overflow-y: auto;
}
</style>


<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row" style="margin-left: 0;">
							  <div class="" role="tabpanel" data-example-id="togglable-tabs">
								  <ul id="tabs" class="nav nav-tabs bar_tabs" role="tablist">
									<li role="presentation" class="active"><a href="#term-wise" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Term-wise Calendar</a>
									</li>
									
									<?php if ( $weekly ) { ?>
									<li role="presentation" class=""><a href="#weekly" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Weekly Sports Programme</a>
									</li>
									<?php } if ( $weekly_after ) { ?>
									
									<li role="presentation" class=""><a href="#after-school" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Weekly After School</a>
									</li>
									<?php } if ( $morning ) { ?>
									  
									<li role="presentation" class=""><a href="#morning" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Morning Games</a>
									</li>
									  
									<?php } ?>
								  </ul>
									
								  <div id="myTabContent" class="tab-content">
									  
									  <div class="tab-pane fade in active" id="term-wise">
										  
										  
										<br>
										<div>
											<h4>Games &amp; Sports Department - <?php echo $_SESSION['portal_SchoolName'];?></h4>
										</div>
										 <br />
										 <div class="">
										 	<div id='calendar'></div>
										 </div>
										 <br>
										 
										 <?php foreach ( $arr_sports_calendar[$_SESSION['portal_School']]["termwise"] as $row ) { ?>
										  
										 <div class="col-lg-6 col-md-6 col-sm-9">
											 
										 <div style="max-width: 170px;">
											 <a href="<?php echo $path.$row["url"]; ?>"><img class="img-responsive" src="<?php echo $path; ?>images/sports-calendar.png" style="max-width:275px;" alt="<?php echo $row["title"]; ?>"></a>
										 </div>
										 <br>
										 <p><a href="<?php echo $path.$row["url"]; ?>"><span style="font-weight: bold; color: #07095B;"> <?php echo $row["title"]; ?> </span><img src="<?php echo $path; ?>images/pdf_small.png"> </a></p>

										 </div>
										  
										 <?php } ?> 
										  
										 
									  </div>
									  
									  <?php if ( $weekly ) { ?>
									  
									  <div class="tab-pane fade in" id="weekly">
										<br>
										
										 <?php
										   foreach ( $tCalendar->Rows as $row )
										   {
											   if ($row->Tab == "Weekly") {
										  ?>
										  <h4><?php echo $purifier->purify($row->Title); ?></h4>
										 <br>
										 <div class="row table-responsive">
											 
										 	<?php
												//echo $functions->replaceQuote($row->Content);
											 ?>
										 </div>
										  
										 <?php 
												}
											}
									  	?> 

									  </div>
									  
									  <?php } //end weekly ?>
									  
									  
									  <?php if ( $morning ) { ?>
									  <div class="tab-pane fade in" id="morning">
										<br>
										<h3>Routine Morning House-wise Games</h3>

										<p><strong>W.E.F. 16th to 30th April, 2019</strong></p>
										  
										  <table class="table table-bordered jambo_table" style="width:100%; text-align:center;">
											<thead>
												<tr>
													<td>Timings</td>
													<td>Game</td>
													<td>Facility Used</td>
													<td>House</td>
													<td>Staff</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="11" style="vertical-align: middle;">07:30 am to<br/>09:00 am</td>
													<td>Tennis</td>
													<td>Tennis Hard Courts</td>
													<td>Iqbal</td>
													<td>Mr. Hameed Gul &amp; Mr. Zaka Ullah</td>
												</tr>
												<tr>
													<td>Hockey</td>
													<td>Hockey Field-2</td>
													<td>Khalid</td>
													<td>Mr. Rizwan-ul-Haq &amp; Mr. Wajahat Hussain</td>
												</tr>
												<tr>
													<td>Basketball</td>
													<td>Basketball Court-1 &amp; 2</td>
													<td>Liaqat</td>
													<td>Mr. Sajid Hussain &amp; Mr. Anwar-ul-Haq</td>
												</tr>
												<tr>
													<td>Football</td>
													<td>F-3 Field&nbsp;(Kelly House)</td>
													<td>Magsi</td>
													<td>Mr. Muhammad Azhar</td>
												</tr>
												<tr>
													<td>Squash/ Badminton</td>
													<td>Squash Courts/<br/>Badminton Courts</td>
													<td>Niazuddin</td>
													<td>Mr. Awais Amin &amp; Mr. Muhammad Javed</td>
												</tr>
												<tr>
													<td>Swimming</td>
													<td>Swimming Pool, PS</td>
													<td>Qasim</td>
													<td rowspan="2">Mr. Sikander Khan, Mr. Akhtar Zaib,<br/> Mr. Arshad &amp; Mr. Muhammad Akhtar</td>
												</tr>
												<tr>
													<td>Swimming</td>
													<td>Swimming Pool, PS</td>
													<td>Saigol</td>
												</tr>
												<tr>
													<td rowspan="2">Cricket</td>
													<td rowspan="2">Zulfiqar Block Field</td>
													<td>Salahuddin</td>
													<td>Mian Waqar Ahmad, Mr. Sharoon George &amp;<br/> Mr. Muhammad Waqas</td>
												</tr>
												<tr>
													<td style="height:53px;">Sher Shah</td>
													<td>Mr. Sohail Pasha, Mr. Nadeem Amin &amp;<br/>Mr. Irfan Ali</td>
												</tr>
												<tr>
													<td>Football</td>
													<td rowspan="2">F-4 Field<br/>(Zulfiqar Block)</td>
													<td>Sir Syed</td>
													<td>Mr. Yasin Khan</td>
												</tr>
												<tr>
													<td>Football</td>
													<td>Tariq</td>
													<td>Mr. Mohammad Bilal</td>
												</tr>
											</tbody>
										</table>
										  
									  </div>
									  
									  <?php } //end weekly_after ?>
									  
									  
									  <?php if ( $weekly_after ) { ?>
									  <div class="tab-pane fade in" id="after-school">
										<br>
										
										 <h4>Games &amp; Sports Department - <?php echo $_SESSION['portal_SchoolName'];?></h4>
										 <br>
										 <?php foreach ( $arr_sports_calendar[$_SESSION['portal_School']]["weekly-after"] as $row ) { ?>
										  
										 <div class="col-lg-6 col-md-6 col-sm-9">
											 
										 <div style="max-width: 170px;">
											 <a href="<?php echo $purifier->purify($row["url"]); ?>" target="_blank" download><img class="img-responsive" src="images/sports-calendar.png" style="max-width:275px;" alt="<?php echo $purifier->purify($row["title"]); ?>"></a>
										 </div>
										 <br>
										 <p><a href="<?php echo $purifier->purify($row["url"]); ?>" download target="_blank"><span style="font-weight: bold; color: #07095B;"> <?php echo $purifier->purify($row["title"]); ?> </span><img src="images/pdf_small.png"> </a></p>

										 </div>
										  
										 <?php } ?> 
									  </div>
									  
									  <?php } //end weekly_after ?>
									  
								  </div>
								</div>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
					  <?php include($path."rightpanel.php"); ?>
				  </div>
				</div>
            </div>
            
          	<!-- footer content -->
        	
        	<?php include($path."footer.php"); ?>
            
        	<!-- /footer content -->
          
        </div>
        <!-- /page content -->
        
		<!-- calendar modal -->
		
		<div id="CalenderModalView" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">

			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				  <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-calendar" aria-hidden="true" style="color: #3a87ad;"></i> View Event</h4>
			  </div>
			  <div class="modal-body">

				<div id="testmodal2" style="padding: 5px 20px;">
				  <form id="antoform2" class="form-horizontal calender" role="form">
					<div class="form-group">
					  <label class="col-sm-3 control-label">Event</label>
					  <div class="col-sm-9">
						<label style="width: 100%; text-align: left; border: 1px #ccc solid; padding: 7px 5px 7px;" class="col-sm-3 control-label" id="vtitle2" name="vtitle2"></label>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Start Date</label>
					  <div class="col-sm-9">
						<label style="width: 100%; text-align: left; border: 1px #ccc solid; padding: 7px 5px 7px;" class="col-sm-3 control-label" id="startDate" name="startDate"></label>
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">End Date</label>
					  <div class="col-sm-9">
						<label style="width: 100%; text-align: left; border: 1px #ccc solid; padding: 7px 5px 7px;" class="col-sm-3 control-label" id="endDate" name="endDate"></label>
					  </div>
					</div>
					  
				  </form>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>

		<div id="fc_view" data-toggle="modal" data-target="#CalenderModalView"></div>
		  
		<!-- /calendar modal -->
		  
      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>

	
	<script src="<?php echo $path; ?>vendors/fullcalendar/dist-v4/lib/moment.min.js"></script>
    <script src="<?php echo $path; ?>vendors/fullcalendar/dist-v4/fullcalendar.min.js"></script>
	<!--<script src="vendors/fullcalendar/dist-v4/theme-chooser.js"></script>-->
	
	<script>
      $(document).ready(function() {
		  
		var isView = true;
    	
        $('#calendar').fullCalendar({
			/*contentHeight: 500,*/
			aspectRatio: 2,
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay,listMonth'
          },
          eventClick: function(calEvent, jsEvent, view) {
			  if ( isView ) {
				$('#fc_view').click();
				$('#vtitle2').text(calEvent.title);
				$('#startDate').text( eventDateFormat( moment(calEvent.start) ) );
				
				if ( calEvent.end ) {
					
					$('#endDate').text( eventDateFormat( moment(calEvent.end).add(-1, 'day') ) );
				}
				else
					$('#endDate').html('&nbsp;');
				
			  }
			  else {
				$('#fc_edit').click();
				$('#title2').val(calEvent.title);

				categoryClass = $("#event_type").val();

				$(".antosubmit2").on("click", function() {
				  calEvent.title = $("#title2").val();

				  calendar.fullCalendar('updateEvent', calEvent);
				  $('.antoclose2').click();
				});

				calendar.fullCalendar('unselect');
			  }
          },
		  fixedWeekCount: false,
          weekNumbers: false,
          navLinks: true, // can click day/week names to navigate views
          editable: false,
          eventLimit: true, // allow "more" link when too many events
		  /*themeSystem:'bootstrap3',*/
		  views: {
			month: {
			  eventLimit: 2 // adjust to 6 only for agendaWeek/agendaDay
			}
		  },
          events: {
			url: '<?php echo $path;?>services/portalService.php?select=4&school=<?php echo $_SESSION['portal_SchoolName'];?>',
			error: function() {
			  $('#script-warning').show();
			}
		  }
        });
     
  	});
	
	
	function eventDateFormat(eventDate) {
		//var d = moment(eventDate);
		if (parseInt(eventDate.format('HH')) == 0) {
			return moment(eventDate).format('MMMM Do, YYYY')
		}
		else {
			return moment(eventDate).format('MMMM Do, YYYY HH:mm')
		}

	}
</script>
</body>
</html>
