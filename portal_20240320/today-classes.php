<?php
if ( $_SESSION['portal_SchoolName'] == "Senior School" ) {

$daysName = array('', 'Monday', 'Tueday', 'Wedday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
date_default_timezone_set('Asia/Karachi');

$day_of_week = date('N', strtotime("now"));
//$day_of_week=date('w');//+1;	strtotime("now")

$qry =
	"SELECT `DayNo`, `Period1`, `Period2`, `Period3`, `Period4`, `Period5`, `Period6`, `Period7`, `Period8`
	FROM
		`portal_students_timetable`
	WHERE `DayNo` = ". $day_of_week ." AND `SchoolNo` =" . $_SESSION['portal_SchoolNo'];

$dTable = $dc->ExecuteQuery($qry, true);

$message = "";

if ($dTable->rowsCount() > 0) {
	$row = $dTable->Rows[0];
}
else {
	$message = "&nbsp;&nbsp;No class today as per your cycle.";
}

?>

<style>
	#todayClasses table td {
		width:50%;
	}
	
	#todayClasses .periodNo {
		font-weight: 600; color: #9499a5; font-size:14px;
	}
	
	#todayClasses .subject {
		font-size: 18px; color: #3a87ad; font-weight: 400;
	}
</style>

<div class="card border border-secondary">
	<div class="card-header" style="background-color: rgba(52, 73, 94, 0.94); color: #fff;">
		<h4 class="box-title">Today's Classes </h4>
	</div>
	<div class="card-body" style="padding: 0;">
		<div class="table-responsive">
			<div id="todayClasses">
				
				<?php if ($message == "") { ?>
					<?php
						if($day_of_week !=5){
					?>
				<table class="table table-bordered jambo_table" border="1" style="width: 100%;">
					<tbody>
						<tr>
							<td colspan="2">
								<div class="periodNo"><?php echo date("l d, F"); ?></div>
							</td>
							
						</tr>						
						<tr>
							<td><div class="periodNo">Period 1</div><div class="subject"><?php echo $row->Period1; ?></div></td>
							<td><div class="periodNo">Period 5</div><div class="subject"><?php echo $row->Period5; ?></div></td>
						</tr>
						
						<tr>
							<td><div class="periodNo">Period 2</div><div class="subject"><?php echo $row->Period2; ?></div></td>
							<td><div class="periodNo">Period 6</div><div class="subject"><?php echo $row->Period6; ?></div></td>
						</tr>
						<tr>
							<td><div class="periodNo">Period 3</div><div class="subject"><?php echo $row->Period3; ?></div></td>
							<td><div class="periodNo">Period 7</div><div class="subject"><?php echo $row->Period7; ?></div></td>
						</tr>
						<tr>
							<td><div class="periodNo">Period 4</div><div class="subject"><?php echo $row->Period4; ?></div></td>
							<td><div class="periodNo">Period 8</div><div class="subject"><?php echo $row->Period8; ?></div></td>
						</tr>
					</tbody>
				</table>
					<?php
						}else{							
					?>
				<table class="table table-bordered jambo_table" border="1" style="width: 100%;">
					<tbody>
						<tr>
							<td colspan="2">
								<div class="periodNo"><?php echo date("l d, F"); ?></div>
							</td>
							
						</tr>						
						<tr>
							<td><div class="periodNo">Period 1</div><div class="subject"><?php echo $row->Period1; ?></div></td>
							<td><div class="periodNo">Period 3</div><div class="subject"><?php echo $row->Period3; ?></div></td>
						</tr>
						
						<tr>
							<td><div class="periodNo">Period 2</div><div class="subject"><?php echo $row->Period2; ?></div></td>
							<td><div class="periodNo">Period 4</div><div class="subject"><?php echo $row->Period4; ?></div></td>
						</tr>
						<?php /*?><tr>
							<td><div class="periodNo">Period 3</div><div class="subject"><?php echo $row->Period3; ?></div></td>
							<td><div class="periodNo">Period 7</div><div class="subject"><?php echo $row->Period7; ?></div></td>
						</tr>
						<tr>
							<td><div class="periodNo">Period 4</div><div class="subject"><?php echo $row->Period4; ?></div></td>
							<td><div class="periodNo">Period 8</div><div class="subject"><?php echo $row->Period8; ?></div></td>
						</tr><?php */?>
					</tbody>
				</table>
					<?php		
						}
					?>
				
				<?php } else { ?>
					<div class="periodNo"><?php echo $message; ?></div>
				<?php } ?>
				
				<!--<div id="childNode" style="text-align: center;">
					<a href="javascript:todayClasses();" style="color: red;">Click to reload classes</a>
				</div>-->
			</div>
		</div>
		<div class="text-center">
			<p style="text-align: center;"><a href="<?php echo $path; ?>classes.php">All Classes</a></p>
		</div>
	</div>

</div>

	
<?php
}

	/* ?>
<script>
	function todayClasses() {
		
		var todayClasses = document.getElementById('todayClasses');
		var tbl = document.createElement('table');
		tbl.setAttribute("class", "table table-bordered jambo_table");
		tbl.style.width = '100%';
		tbl.setAttribute('border', '1');
		var tbdy = document.createElement('tbody');
		
		
	 loadJSON(function(response) {
	  // Parse JSON string into object
		var data = JSON.parse(response);
		
		
		var objJSON = [];
		var dayName = moment().format("ddd");
		//alert(data.length);
		//alert(dayName);
		
		for(var i=0; i < data.length; i++) { 
			var element = data[i];
			var _date = moment(element.date).format("ddd");

			if ( _date === dayName ) {
				objJSON.push(element);
			}
		};
		 
		var half = objJSON.length / 2;
		 
		var string = "";
		
		var tr = null;
		
		
		var newRow = false;
		
		for(var i=0; i < half; i++) {
			
			var record1 = objJSON[i];
			var record2 = objJSON[half + i];
			
			var _date = moment(record1.date);
			

			if(tr)
				tbdy.appendChild(tr);

			var tr = document.createElement('tr');

			newRow = true;

			if (newRow) {

				if(tr)
					tbdy.appendChild(tr);

				var td = document.createElement('td');
				td.setAttribute("style", "width:50%;");
				var div = this.getDiv("Period " + record1.period);
				div.setAttribute("style", "font-weight: 600; color: #9499a5; font-size:14px;");
				td.appendChild( div );
				
				div = this.getDiv(record1.subject);
				div.setAttribute("style", "font-size: 18px; color: #3a87ad; font-weight: 400;");
				td.appendChild(div);
				
				tr.appendChild(td);



				var td = document.createElement('td');
				td.setAttribute("style", "width:50%;");
				var div = this.getDiv("Period " + record2.period);
				div.setAttribute("style", "font-weight: 600; color: #9499a5; font-size:14px;");
				td.appendChild( div );
				
				div = this.getDiv(record2.subject);
				div.setAttribute("style", "font-size: 18px; color: #3a87ad; font-weight: 400;");
				td.appendChild(div);
				tr.appendChild(td);
			}
			
		}
		
		tbl.appendChild(tbdy);
		 var childNode = document.getElementById('childNode');
		 todayClasses.replaceChild(tbl, childNode);
	  	//todayClasses.appendChild(tbl)
		 
		
	 });
	}
	
	function loadJSON(callback) {

		var xobj = new XMLHttpRequest();
			xobj.overrideMimeType("application/json");
		
		
		xobj.open('GET', 'data/json/classes.json', true); // Replace 'my_data' with the path to your file
		xobj.onreadystatechange = function () {
		  if (xobj.readyState == 4 && xobj.status == "200") {
			// Required use of an anonymous callback as .open will NOT return a value but simply returns undefined in asynchronous mode
			callback(xobj.responseText);
			  //alert(xobj.responseText);
		  }
		};
		xobj.send(null);  
		
	 }
	
	
	function getDiv(text) {
		var div = document.createElement('div');
		div.appendChild(document.createTextNode(text));
		return div;
	}
	
	todayClasses();

</script>

<?php */ ?>


<?php

#hide the Next Day Classes
if (false) {

if ( $_SESSION['portal_SchoolName'] == "Senior School") {
$day_of_week = date('N', strtotime("now"))+1;
//echo "<!--Next Day06022020-a".$day_of_week."-->";		
//$day_of_week=date('w')+1;
//echo "<!--Next Day06022020".$day_of_week."-->";	
if($day_of_week <= 5){
	$cdate=strtotime("now")+(24*3600);
}elseif($day_of_week == 6){
	$cdate=strtotime("now")+(3*24*3600);
}elseif($day_of_week == 7){
	$cdate=strtotime("now")+(2*24*3600);
}	
if($day_of_week==0 ||$day_of_week==6 || $day_of_week==7){
	$day_of_week=1;
}
	

$qry1 =
	"SELECT `DayNo`, `Period1`, `Period2`, `Period3`, `Period4`, `Period5`, `Period6`, `Period7`, `Period8`
	FROM
		`portal_students_timetable`
	WHERE `DayNo` = ". $day_of_week ." AND `SchoolNo` =" . $_SESSION['portal_SchoolNo'];
//echo "<!--Next Day".$qry1."-->";	
$dTable1 = $dc->ExecuteQuery($qry1, true);

$message = "";

if ($dTable1->rowsCount() > 0) {	
	$row = $dTable1->Rows[0];
	/*echo "<!--Next Day";
	print_r($row);
	echo $row->Period1;
	echo "-->";*/
}
else {
	$message = "Classes not availabe.";
}

?>

<style>
	#todayClasses table td {
		width:50%;
	}
	
	#todayClasses .periodNo {
		font-weight: 600; color: #9499a5; font-size:14px;
	}
	
	#todayClasses .subject {
		font-size: 18px; color: #3a87ad; font-weight: 400;
	}
</style>

<div class="card border border-secondary">
	<div class="card-header" style="background-color: rgba(52, 73, 94, 0.94); color: #fff;">
		<h4 class="box-title">Next Day Classes </h4>
	</div>
	<div class="card-body" style="padding: 0;">
		<div class="table-responsive">
			<div id="todayClasses">
				
				<?php if ($message == "") { ?>
					<?php
						if($day_of_week !=5){
					?>
				<table class="table table-bordered jambo_table" border="1" style="width: 100%;">
					<tbody>
						<tr>
							<td colspan="2">
								<div class="periodNo"><?php echo date("l d, F", $cdate); ?></div>
							</td>
							
						</tr>
						
						<tr>
							<td><div class="periodNo">Period 1</div><div class="subject"><?php echo $row->Period1; ?></div></td>
							<td><div class="periodNo">Period 5</div><div class="subject"><?php echo $row->Period5; ?></div></td>
						</tr>
						
						<tr>
							<td><div class="periodNo">Period 2</div><div class="subject"><?php echo $row->Period2; ?></div></td>
							<td><div class="periodNo">Period 6</div><div class="subject"><?php echo $row->Period6; ?></div></td>
						</tr>
						<tr>
							<td><div class="periodNo">Period 3</div><div class="subject"><?php echo $row->Period3; ?></div></td>
							<td><div class="periodNo">Period 7</div><div class="subject"><?php echo $row->Period7; ?></div></td>
						</tr>
						<tr>
							<td><div class="periodNo">Period 4</div><div class="subject"><?php echo $row->Period4; ?></div></td>
							<td><div class="periodNo">Period 8</div><div class="subject"><?php echo $row->Period8; ?></div></td>
						</tr>
					</tbody>
				</table>
					<?php
						}else{
					?>
				<table class="table table-bordered jambo_table" border="1" style="width: 100%;">
					<tbody>
						<tr>
							<td colspan="2">
								<div class="periodNo"><?php echo date("l d, F", $cdate); ?></div>
							</td>
							
						</tr>
						
						<tr>
							<td><div class="periodNo">Period 1</div><div class="subject"><?php echo $row->Period1; ?></div></td>
							<td><div class="periodNo">Period 3</div><div class="subject"><?php echo $row->Period3; ?></div></td>
						</tr>
						
						<tr>
							<td><div class="periodNo">Period 2</div><div class="subject"><?php echo $row->Period2; ?></div></td>
							<td><div class="periodNo">Period 4</div><div class="subject"><?php echo $row->Period4; ?></div></td>
						</tr>
						<?php /*?><tr>
							<td><div class="periodNo">Period 3</div><div class="subject"><?php echo $row->Period3; ?></div></td>
							<td><div class="periodNo">Period 7</div><div class="subject"><?php echo $row->Period7; ?></div></td>
						</tr>
						<tr>
							<td><div class="periodNo">Period 4</div><div class="subject"><?php echo $row->Period4; ?></div></td>
							<td><div class="periodNo">Period 8</div><div class="subject"><?php echo $row->Period8; ?></div></td>
						</tr><?php */?>
					</tbody>
				</table>
					<?php
						}
					?>
				<?php } else { ?>
					<div class="periodNo"><?php echo "&nbsp;&nbsp;No class tomorrow as per your cycle."; ?></div>
				<?php } ?>
				
				<!--<div id="childNode" style="text-align: center;">
					<a href="javascript:todayClasses();" style="color: red;">Click to reload classes</a>
				</div>-->
			</div>
		</div>
		<div class="text-center">
			<p style="text-align: center;"><a href="<?php echo $path; ?>classes.php">All Classes</a></p>
		</div>
	</div>

</div>

	
<?php
}#hide the Next Day Classes
    
}


	