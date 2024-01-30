<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "General Calendar"; include($path."includes.php"); ?>

<!-- FullCalendar -->
<link href="vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
<link href="vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">


<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
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
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row" align="right">
							  <p style="margin-bottom: 15px;">
								  <a href="data/cc-dates-calendar-07112018-ss.pdf" target="_blank" download class="active lnkDownload"><span style=""><span class="glyphicon"></span> Download Complete Calendar </span> </a>
							  </p>
						  </div>
						  <div class="row">
							  <div id='calendar'></div>
						  </div>
						  
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
        
		<!-- calendar modal -->
		<div id="CalenderModalNew" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">

			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">New Calendar Entry</h4>
			  </div>
			  <div class="modal-body">
				<div id="testmodal" style="padding: 5px 20px;">
				  <form id="antoform" class="form-horizontal calender" role="form">
					<div class="form-group">
					  <label class="col-sm-3 control-label">Title</label>
					  <div class="col-sm-9">
						<input type="text" class="form-control" id="title" name="title">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Description</label>
					  <div class="col-sm-9">
						<textarea class="form-control" style="height:55px;" id="descr" name="descr"></textarea>
					  </div>
					</div>
				  </form>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default antoclose" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary antosubmit">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		<div id="CalenderModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">

			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel2">Edit Calendar Entry</h4>
			  </div>
			  <div class="modal-body">

				<div id="testmodal2" style="padding: 5px 20px;">
				  <form id="antoform2" class="form-horizontal calender" role="form">
					<div class="form-group">
					  <label class="col-sm-3 control-label">Title</label>
					  <div class="col-sm-9">
						<input type="text" class="form-control" id="title2" name="title2">
					  </div>
					</div>
					<div class="form-group">
					  <label class="col-sm-3 control-label">Description</label>
					  <div class="col-sm-9">
						<textarea class="form-control" style="height:55px;" id="descr2" name="descr"></textarea>
					  </div>
					</div>

				  </form>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary antosubmit2">Save changes</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<div id="CalenderModalView" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">

			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				  <h4 class="modal-title" id="myModalLabel2"><i class="fa fa-calendar" aria-hidden="true"></i> View Event</h4>
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
					  
				  </form>
				</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>

		<div id="fc_create" data-toggle="modal" data-target="#CalenderModalNew"></div>
		<div id="fc_edit" data-toggle="modal" data-target="#CalenderModalEdit"></div>
		  <div id="fc_view" data-toggle="modal" data-target="#CalenderModalView"></div>
		  
		<!-- /calendar modal -->

      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>

    <script src="vendors/fullcalendar/dist/fullcalendar.min.js"></script>
	<!--<script src="vendors/fullcalendar/dist/theme-chooser.js"></script>-->

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
		  themeSystem: 'Cerulean',
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            //$('#fc_create').click();

            started = start;
            ended = end;
			  
            $(".antosubmit").on("click", function() {
              var title = $("#title").val();
              if (end) {
                ended = end;
              }

              categoryClass = $("#event_type").val();

              if (title) {
                calendar.fullCalendar('renderEvent', {
                    title: title,
                    start: started,
                    end: end,
                    allDay: allDay
                  },
                  true // make the event "stick"
                );
              }

              $('#title').val('');

              calendar.fullCalendar('unselect');

              $('.antoclose').click();

              return false;
            });
          },
          eventClick: function(calEvent, jsEvent, view) {
			  if ( isView ) {
				$('#fc_view').click();
				$('#vtitle2').text(calEvent.title);
				$('#startDate').text(calEvent.start);
				//$('#endDate').text(calEvent.end);
				  
				  
				  
				//var dateFormat = require('dateformat');
				//var now = new Date(calEvent.start);
				//dateFormat(now, "dddd, mmmm dS, yyyy, h:MM:ss TT");
				  //alert(calEvent.start);
				  
				  //alert($.fullCalendar.formatDate( calEvent.start, "ddd, mmmm dS, yyyy" ));
				  
				  //alert(dateFormat(new Date(calEvent.start), "dddd, mmmm dS, yyyy, h:MM:ss TT"));
				  
				  //alert( moment(calEvent.start, "MMMM Do YYYY, h:mm:ss a") );
				  
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
          editable: false,
		  eventLimit: true,
          events: {
			url: 'data/php/get-events.php?fn=general-calendar',
			error: function() {
			  $('#script-warning').show();
			}
		  },
		  
        });
      });
    </script>
    <!-- /FullCalendar -->
</body>
</html>
