<?php
$path = "";
/*
$ploc="notice.php?id=718";
header("location: ".$ploc);
exit();
*/
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");


$calendar_link = "";

if ($_SESSION['portal_School'] == "JSD") $calendar_link = "data/2021-22/sports-calendar-20210621-js.pdf";
elseif ($_SESSION['portal_School'] == "PSD") $calendar_link = "data/2021-22/sports-calendar-20210621-ps.pdf";
elseif ($_SESSION['portal_School'] == "SSD") $calendar_link = "data/2021-22/sports-calendar-20210621-ss.pdf";

$calendar_link = Filing::GetURL("", "General Calendar", "../". $calendar_link);

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Sports Calendar"; include($path."includes.php"); ?>
<!-- FullCalendar -->
<link href="vendors/fullcalendar/dist-v4/fullcalendar.min.css" rel="stylesheet">
<link href="vendors/fullcalendar/dist-v4/fullcalendar.print.css" rel="stylesheet" media="print">

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
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
                        

                        <?php if(true) { ?>
					  <div class="x_content">
						  <div class="row">
							  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								  <div class="page-title">
									  <h4 style="margin-top:0;"><?php echo $title; ?></h4>
								  </div>
							  </div>
                              <!--
							  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								  <p style="font-size: 14px;"><strong>Note:</strong> Please click on the event to view the details.</p>
							  </div>
                              -->
						  </div>

                          
						  
						  <div class="row" align="right" style="margin: 15px 0;">
							  <p>
								  <a href="<?php echo $calendar_link; ?>" target="_blank" class="active lnkDownload"><span style=""><span class="glyphicon"></span> Download Sports Calendar </span> </a>
							  </p>
						  </div>
                          

					  </div>

                        <?php } ?>
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
            right: 'month,agendaWeek,agendaDay,listMonth'
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
