
function save()
{
	//alert($('input[name=template]:checked', '#messageForm').val());
	if ( validates() )
	{
		
		if ( confirm('Are you sure you want to send message?') )
		{
			//document.forms['messageForm'].submit();
			return true;
		}
		return false;
	}
}


function validates()
{
	
	if(document.getElementById("topics") !== null)
	{
		var topic = $("#topics").find('input[type="radio"]:checked').val();
		
		if (topic === undefined)
		{
			alert("Please select atleast one school.");
			$("#topics").focus();
			return false;
		}
	}
	
	
	if ( $("#TxtTitle").val().trim() == "" )
	{
		alert("Please enter message title.");
		$("#TxtTitle").focus();
		return false;
	}
	
	if ( $("#TxtMessage").val().trim() == "" )
	{
		alert("Please enter nitification message.");
		$("#TxtMessage").focus();
		return false;
	}
	
	return true;
}

function clears()
{
	window.location = "index.php";
}
