$(document).ready(function() {
	//$( "#CmdPublish" ).on( "click", onSave );
	
});

function onPublish(id,g)
{
	"use strict";
	
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["frmPublishNews"].submit();
}

function onSave()
{
	"use strict";
	/*
	var selected = 0;
	$('#chkLocations input:checked').each(function() {
		selected++;
	});
	*/
	
	document.forms["frmPublishNews"].submit();
}

function onPaging(g,id)
{
	//alert("g: "+g+", id: "+id);
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["frmPublishNews"].submit();
}


function onCancel(g)
{
	window.location = "publishnews.php?Txtg="+g;
}