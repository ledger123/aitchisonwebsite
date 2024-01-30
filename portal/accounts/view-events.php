<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

$qry = 
	"SELECT
	pe.Id, pe.`Title` title, 
	CASE
		WHEN DATE_FORMAT(pe.`StartDate`, '%H:%i:%s') = '00:00:00' 
		THEN DATE_FORMAT(pe.`StartDate`, '%Y-%m-%d')
		ELSE DATE_FORMAT(pe.`StartDate`, '%Y-%m-%dT%H:%i')
	END AS `start`,
	CASE
		WHEN pe.`EndDate` > pe.`StartDate`
		THEN DATE_FORMAT( DATE_ADD(pe.`EndDate`, INTERVAL 1 DAY), '%Y-%m-%d')
		WHEN pe.`EndDate` IS NOT NULL 
		THEN DATE_FORMAT(pe.`EndDate`, '%Y-%m-%dT%H:%i')
		ELSE ''
	END AS `end`,
	CASE
		WHEN pe.Active = 0 AND pe.IsDelete = 1 THEN 'purple'
		WHEN pe.Active = 0 THEN 'orange'
		WHEN pe.IsDelete = 1 THEN 'red'
		ELSE ''
	END AS color,
	(SELECT GROUP_CONCAT(t.Tag SEPARATOR ', ')
	FROM	`portal_events_tags` et INNER JOIN
		`portal_tags` t ON t.Id = et.TagId INNER JOIN
		`portal_head_tags` ht ON ht.Id = t.HeadTagId
	WHERE   et.EventId = pe.Id AND ht.HeadTag = 'School'
	GROUP BY et.EventId) schools
	
FROM
	`portal_session` ps  INNER JOIN
	`portal_events` pe ON (ps.`Id` = pe.`SessionId`) INNER JOIN
	`portal_events_tags` et ON et.EventId = pe.Id INNER JOIN
	`portal_tags` t ON t.Id = et.TagId INNER JOIN
	`portal_head_tags` ht ON ht.Id = t.HeadTagId
WHERE ps.Active = 1
GROUP BY et.EventId";

/*
$tEvents = $dc->ExecuteQuery($qry, true);

foreach ($tEvents->Rows as $row) {
	$row->title = htmlentities(stripslashes(utf8_decode($row->title)));
}

//$tEvents->PrintTable();
echo "<pre>";
echo json_encode($tEvents->Rows);
echo "</pre>";

*/
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Events Management"; include($path."includes.php"); ?>
<!-- FullCalendar -->
<link href="<?php echo $path; ?>vendors/fullcalendar/dist-v4/fullcalendar.min.css" rel="stylesheet">
<link href="<?php echo $path; ?>vendors/fullcalendar/dist-v4/fullcalendar.print.css" rel="stylesheet" media="print">
	
<style>
	.tblEvent tr td {
		 border-bottom: 4px #fff solid;
	}
	.tblEvent td:first-child {
		width: 20px;
	}
	.tblEvent td:last-child {
		padding-left: 10px;
	}
</style>
	
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
            <div class="container">
				<div class="row" id="messages">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row" id="viewEvents">
							  <div id='calendar'></div>
						  </div>
						  <br />
						  <div class="ln_solid"></div>
						  <div class="row">
							  <table class="tblEvent">
								  <tr><td style=" background: #3a87ad;"></td><td>Event</td></tr>
								  
								  <tr><td style="background: orange;"></td><td>Inactive Event</td></tr>
								  
								  <tr><td style="background: red;"></td><td>Deleted Event</td></tr>
								  
								  <tr><td style="background: purple;"></td><td>Inactive &amp; Deleted Event</td></tr>
							  </table>
							  
						  </div>
						  
						  <div class="ln_solid"></div>
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
				  <a id="cmdEdit" class="btn btn-primary" href="#" target="_self">Edit</a>
				<button type="button" class="btn btn-default antoclose2" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>

    
	<div id="fc_view" data-toggle="modal" data-target="#CalenderModalView"></div>
    <!-- /calendar modal -->
        
	<?php include($path."footerincludes.php"); ?>

	
	<script src="<?php echo $path; ?>vendors/fullcalendar/dist-v4/lib/moment.min.js"></script>
    <script src="<?php echo $path; ?>vendors/fullcalendar/dist-v4/fullcalendar.min.js"></script>
	<script src="<?php echo $path; ?>vendors/tooltip/tooltip.js"></script>
	
    <!-- FullCalendar -->
    <script>
      $(window).load(function() {
		  
		  
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
          
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
			  
            started = start;
            ended = end;
			
			var url = "<?php echo "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>/add-events.php?d="+moment(started).format('MM/D/YYYY');
			  
			//alert(url);
			window.location = url;

          },
          eventClick: function(calEvent, jsEvent, view) {
            $('#fc_view').click();
				$('#vtitle2').text(calEvent.title.stripSlashes());
			  
			  //htmlentities(stripslashes(utf8_decode($TxtTitle)));
			  
				//$('#startDate').text( moment(calEvent.start).format('MMMM Do, YYYY') );
				var startDate = moment(calEvent.start);
				$('#startDate').text( eventDateFormat( startDate ) );
			  $("#cmdEdit").attr("href", "add-events.php?id="+calEvent.Id);
				//alert("add-events.php?id="+calEvent.Id);
				if ( calEvent.end ) {
					
					var endDate = moment(calEvent.end);
					
					if (parseInt( startDate.format('D') ) == parseInt( endDate.format('D') )  )
						$('#endDate').text( eventDateFormat( endDate ) );
					else
						$('#endDate').text( eventDateFormat( endDate.add(-1, 'day') ) );
				}
				else
					$('#endDate').html('&nbsp;');
          },
          fixedWeekCount: false,
          weekNumbers: false,
          navLinks: true, // can click day/week names to navigate views
          editable: false,
          eventLimit: true, // allow "more" link when too many events
		  allDay:true, //
		  /*eventRender: function(info) {
			var tooltip = new Tooltip(info.el, {
			  title: "Test",
			  placement: 'top',
			  trigger: 'hover',
			  container: 'body'
			});
		  },*/
          events: {
			url: '../services/portalService.php?select=1',
			error: function(xhr, statusText, errorThrown) {
			  
				//alert(errorThrown);
			}
		  }
        });
      });
		
	/*
		$('#schools_selector').on('change', function () {
			$('#calendar').fullCalendar('rerenderEvents');
		});
		
		
		$('#state_selector').on('change', function () {
			$('#calendar').fullCalendar('rerenderEvents');
		});
		$('#color_selector').on('change', function () {
			$('#calendar').fullCalendar('rerenderEvents');
		});
		*/
		
	String.prototype.stripSlashes = function(){
		return this.replace(/\\(.)/mg, "$1");
	}
	
		function eventDateFormat(eventDate) {
			//var d = moment(eventDate);
			if (parseInt(eventDate.format('HH')) == 0) {
				return moment(eventDate).format('MMMM Do, YYYY')
			}
			else {
				return moment(eventDate).format('MMMM Do, YYYY HH:mm a')
			}
			
		}
		
    </script>
    <!-- /FullCalendar -->
</body>
</html>
