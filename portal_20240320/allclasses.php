<?php
#13 May 2019
#classes data temprorily blocked and displaying the following message.
if (true && in_array($_SESSION['portal_CurrentClass'], array("H1", "H2", "C1", "C2") ) ) {
	
	//echo "<p style='padding-left: 20px;'><strong>Note:</strong> The detail of classes will be available in this section from the new term.</p>";
	//echo "<p style='padding-left: 20px;'><strong></strong> This Section will be updated soon. </p>";\

    echo '<div class="alert alert-info">Please visit Google Classrooms for further details.</div>';

	//echo "<p style='padding-left: 20px;'><strong>:</strong> The detail of classes will be available in this section from the new term.</p>";
}
elseif (true) {
	#for staff portal
	if( $_SESSION['PORTAL_ID'] == "StaffPortal" ) {
		$qry =
			"SELECT Id, usr_id, daynumber DayNo, `1` Period1, `2` Period2, `3` Period3, `4` Period4, `5` Period5, `6` Period6, `7` Period7, `8` Period8
			FROM
				`portal_teacher_timetable`
			WHERE `usr_id` =" . $_SESSION['portal_sams_user_id'] . "
			ORDER BY daynumber";
		
		$dTable = $dc->ExecuteQuery($qry, true);
		//echo $qry ;
		
		//CrossTab($columnField, $rowFields, $summarizedField, $totalField = '')
		
		//$dTable = $dTable->CrossTab("PNumber", array("DayNumber"), "Subject");
		//$dTable->PrintTable();
		
		
	}
	else {
		#for student portal
		$qry =
			"SELECT `DayNo`, `Period1`, `Period2`, `Period3`, `Period4`, `Period5`, `Period6`, `Period7`, `Period8`
			FROM
				`portal_students_timetable`
			WHERE `SchoolNo` =" . $_SESSION['portal_SchoolNo'];

		$dTable = $dc->ExecuteQuery($qry, true);
		
	}

$daysName = array('', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');

?>

<table class="table table-bordered jambo_table" border="1" style="width: 100%;">
	<thead>
		<tr><th style="vertical-align: middle; padding-left: 20px;" rowspan="2">Day</th><th colspan="8" style="text-align: center;">Period Number</th></tr>
		<tr><th style="width: 11.5%; text-align: center;">1</th><th style="width: 11.5%; text-align: center;">2</th><th style="width: 11.5%; text-align: center;">3</th><th style="width: 11.5%; text-align: center;">4</th><th style="width: 11.5%; text-align: center;">5</th><th style="width: 11.5%; text-align: center;">6</th><th style="width: 11.5%; text-align: center;">7</th><th style="width: 11.5%; text-align: center;">8</th></tr>
	</thead>
	<tbody>
		<?php foreach($dTable->Rows as $row) { 
				//$_SESSION['portal_CurrentClass']
				if(in_array($_SESSION['portal_CurrentClass'], array('H1','C2')) && in_array($row->DayNo, array(1, 3, 5))){
					continue;
				}elseif(in_array($_SESSION['portal_CurrentClass'], array('H2','C1')) && in_array($row->DayNo, array(2, 4, 6))){
					continue;
				}
		?>
		<tr>
			<th><div style="min-height: 40px !important; padding-left: 10px;"><?php echo $purifier->purify($daysName[ $row->DayNo ]); ?></div></th>
			<td><?php echo $purifier->purify($row->Period1); ?></td>
			<td><?php echo $purifier->purify($row->Period2); ?></td>
			<td><?php echo $purifier->purify($row->Period3); ?></td>
			<td><?php echo $purifier->purify($row->Period4); ?></td>
			<td><?php echo $purifier->purify($row->Period5); ?></td>
			<td><?php echo $purifier->purify($row->Period6); ?></td>
			<td><?php echo $purifier->purify($row->Period7); ?></td>
			<td><?php echo $purifier->purify($row->Period8); ?></td>
			
		</tr>
		
		<?php } ?>
	</tbody>
</table>

<?php } ?>

<?php /* ?>

<div id="classes">
	<div id="childNode" style="text-align: center;">
		<a href="javascript:init();" style="color: red;">Click to reload classes</a>
	</div>
</div>
<script>
	
	
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
	
	function init() {
		
		var classes = document.getElementById('classes');
		var tbl = document.createElement('table');
		tbl.setAttribute("class", "table table-bordered jambo_table");
		tbl.style.width = '100%';
		tbl.setAttribute('border', '1');
		var tbdy = document.createElement('tbody');
		
		
		var tr = document.createElement('tr');
		
		var th = document.createElement('th');
		th.appendChild(document.createTextNode("Day"));
		th.setAttribute("style", "vertical-align: middle;");
		th.setAttribute('rowSpan', '2');
		tr.appendChild(th);
		
		var th = document.createElement('th');
		th.appendChild(document.createTextNode("Period Number"));
		th.style.textAlign = 'center';
		th.setAttribute('colSpan', '8');
		tr.appendChild(th);
		
		tbdy.appendChild(tr);
		
		var tr = document.createElement('tr');
		
		
		//add period numbers
		for(var i=1; i < 9; i++) {
			//add the day
			var th = document.createElement('th');
			th.appendChild(document.createTextNode(i));
			th.setAttribute("style", "width: 11.5%; text-align: center;");
			tr.appendChild(th);
		}
		tbdy.appendChild(tr);
		
		
	 loadJSON(function(response) {
	  // Parse JSON string into object
		var objJSON = JSON.parse(response);
		var string = "";
		
		 
		 var tr = null;
		 var day = -1;
		 var newRow = false;
		 
		for(var i=0; i < objJSON.length; i++) {
			
			var record = objJSON[i];
			
			var _date = moment(record.date);
			
			
			if (day != _date.format("D")) {
				
				if(tr)
					tbdy.appendChild(tr);
				
				day = _date.format("D");
				var tr = document.createElement('tr');
				
				//add the day
				var div = document.createElement('div');
				div.appendChild(document.createTextNode(_date.format("ddd")));
				div.setAttribute("style", "min-height: 40px !important;");
				var th = document.createElement('th');
				
				th.appendChild(div);
				tr.appendChild(th);
				
				newRow = true;
			}
			
			if (newRow) {
				
				if(tr)
					tbdy.appendChild(tr);
				
				var td = document.createElement('td');
				td.appendChild(document.createTextNode(record.subject));
				tr.appendChild(td);
			}
			
			//string += "subject: " + record.subject + "date: " + record.date + "period: " + record.period + "teacher: " + record.teacher + "<br>";
			
		}
		 
		 tbl.appendChild(tbdy);
		 var childNode = document.getElementById('childNode');
		 classes.replaceChild(tbl, childNode);
		 
	  	 //classes.appendChild(tbl)
		 
		 //var test = document.getElementById('test');
		 
		// test.innerHTML = string;
		 
	 });
	}
	
	
	function getDiv(text) {
		var div = document.createElement('div');
		div.appendChild(document.createTextNode(text));
		return div;
	}
	
	//init();

</script>

<?php */ ?>