<?php
$path = "";

include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");


$calendar_link = "";
//echo 'boarder: '. $_SESSION['portal_Boarder'];


if($_SESSION['portal_Boarder']=='B') {
    $boarder = "'ParentPortal', 'BoarderPortal'";
}
else {
    $boarder = "'ParentPortal'";
}
//echo $boarder;
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "All Events"; include($path."includes.php"); ?>

<!-- FullCalendar -->
<link href="vendors/fullcalendar/dist-v4/fullcalendar.min.css" rel="stylesheet">
<link href="vendors/fullcalendar/dist-v4/fullcalendar.print.css" rel="stylesheet" media="print">

<style>

.fc-day-grid-container.fc-scroller {
	height: auto!important;
	overflow-y: auto;
}
.tblEvent {
    margin-top: 15px;
    margin-left: 10px;
}
.tblEvent tr td {
    border-bottom: 4px #F7F7F7 solid;
}
.tblEvent td:first-child {
    width: 20px;
    border-radius: 20%;
}
.tblEvent td:last-child {
    padding-left: 10px;
}
/**ADDED ON 2022-02-09**/	
#div_top_hypers {        
	float: right;
}
	#div_top_hypers .ul_top_hypers_bg{		
		display: inline-block;
		width: 20px !important; 
		height: 20px;
		margin: 3px;		
		background: red;
		margin: 0px 5px 0px 5px;
		padding: 0px 5px 0px 0px;		
	}
#ul_top_hypers li{
    display: inline;
}
@media only screen and (max-width: 1023px){
	#div_top_hypers {  
		float: none;
	}
	#ul_top_hypers li{
	    display: block;
	}
	
}
/**ADDED ON 2022-02-09 IS ENDED HERE**/		
</style>

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
                        <?php /*?><div class="row">
                            <div class="alert alert-primary" role="alert">
                                <strong>Please refer to Principal's Letters for updates.</strong>
                            </div>

                        </div><?php */?>

                        <?php if(true) { ?>
					  <div class="x_content">
						  <div class="row">
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								  <div class="page-title">
									  <h4 style="margin-top:0;display:inline-block"><?php echo $title; ?></h4>
										<div id="div_top_hypers">
											<ul id="ul_top_hypers">
												<li><div class="ul_top_hypers_bg" style="background: blue;"></div> Academics</li>
												<li><div class="ul_top_hypers_bg" style="background: red;"></div> Co-curricular</li>
												<li><div class="ul_top_hypers_bg" style="background: green;"></div> Sports</li>
												<li><div class="ul_top_hypers_bg" style="background: #3a87ad;"></div> Miscellaneous</li>
											</ul>
										</div>
                                      <?php /*?><table class="tblEvent" style="display:inline-block; float: right;margin-top: 0">
                                          <tbody>
                                          <tr>
                                              <td style="background: blue;"></td><td style="padding-left: 10px;">Academics</td>
                                          <td style="width: 10px;"></td><td style="background: red;width: 20px;"></td><td style="padding-left: 10px;">Co-curricular</td>
                                              <td style="width: 10px;"><td style="background: green;width: 20px;"></td><td style="padding-left: 10px;">Sports</td>
                                              <td style="width: 10px;"><td style=" background: #3a87ad;width: 20px;"></td><td>Miscellaneous</td>
                                          </tr>
                                          </tbody>
                                      </table><?php */?>

								  </div>
							  </div>

						  </div>

                          <?php if(true) { ?>

						  <div class="row">
							  <div id='calendar'></div>
						  </div>



                          <?php } ?>

					  </div>

                        <?php } ?>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                      <div>
                          <div><h3>Important Events</h3></div>
                          <a href="term_dates" class="btn btn-primary" style="width: 100%; text-align: left; font-size: 16px;">
                              Term Dates<br>
                              Designated Holidays<br>
                              Major Assessments
                          </a>
                      </div>
                      <br>
                      <?php /*?><div>
                          <div><h3>Download</h3></div>
                          <a href="general_calendar" class="btn btn-primary" style="width: 100%; text-align: left; font-size: 16px;">
                              Monthly Schedule of Events<br>
                              Important Events Calendar<br>
                              Termwise Sports Events
                          </a>
                      </div>
                      <br><?php */?>
                      <?php /*?><div class="alert alert-info" role="alert">
                          <p>This information is subject to change based on government policies and guidelines related to the mitigation of COVID-19.</p>
                      </div><?php */?>



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
	
	<script src="vendors/fullcalendar/dist-v4/lib/moment.min.js"></script>
    <script src="vendors/fullcalendar/dist-v4/fullcalendar.min.js"></script>
	<!--<script src="vendors/fullcalendar/dist-v4/theme-chooser.js"></script>-->
	
	<!-- FullCalendar -->
    <script>
      $(window).load(function() {

		var isView = true;
        var date = new Date(),
            d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear(),
            started,
            categoryClass;

        var calendar = $('#calendar').fullCalendar({
			/*contentHeight: 500,*/
		  aspectRatio: 2,
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,listMonth' /* 'month,agendaWeek,agendaDay,listMonth' */
          },
          eventClick: function(calEvent, jsEvent, view) {
			  if ( isView ) {
				$('#fc_view').click();
				$('#vtitle2').text(calEvent.title);
				//$('#startDate').text( moment(calEvent.start).format('MMMM Do, YYYY') );
				var startDate = moment(calEvent.start);
				$('#startDate').text( eventDateFormat( startDate ) );

				if ( calEvent.end ) {

					var endDate = moment(calEvent.end);

					if (parseInt( startDate.format('D') ) == parseInt( endDate.format('D') )  )
						$('#endDate').text( eventDateFormat( endDate ) );
					else
						$('#endDate').text( eventDateFormat( endDate.add(-1, 'day') ) );
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
		  eventRender: function(event, element) {
			  //var start_date =  $('#calendar').fullCalendar('getView').start;
          	  //var end_date  =   $('#calendar').fullCalendar('getView').end;
			  //console.log(new Date(start_date).toString() +'sart----------end date'+end_date);
		  },
		  fixedWeekCount: false,
          weekNumbers: false,
          navLinks: true, // can click day/week names to navigate views
          editable: false,
          eventLimit: true, // allow "more" link when too many events
		  views: {
			month: {
			  eventLimit: 2 // adjust to 6 only for agendaWeek/agendaDay
			}
		  },
          events: {
			url: 'services/portalService.php?select=3&school=<?php echo $_SESSION['portal_SchoolName'];?>',
			error: function(e) {
			  $('#script-warning').show();
				//alert(e.error);
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
    <!-- /FullCalendar -->
</body>
</html>
