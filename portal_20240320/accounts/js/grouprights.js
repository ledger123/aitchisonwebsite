$( document ).ready(function() {
		
	$(function(){
		
		var OptUserGroup = document.getElementById("userGroupId");
		var optAllForms = document.getElementById("optAllForms");
		var optSelectedForms = document.getElementById("optSelectedForms");
		
		$("#OptUserGroup").change(function(){
			removeAllOptions(optAllForms);
			removeAllOptions(optSelectedForms);
		});
		
		$("#CmdSave").click(function()
		{
			var groupId = Number( OptUserGroup.value );
			//alert(groupId);
			if ( groupId < 1 )
			{
				alert("Please select a valid user group.");
				return;
			}
			
			var selectedIds = "";
			for(var i = 0; i < optSelectedForms.options.length; i++)
			{
				selectedIds += optSelectedForms.options[i].value + ",";
			}
			
			if( selectedIds.length > 0 )
			{
				selectedIds = selectedIds.substr(0, selectedIds.length -1);
			}
			
			//alert(selectedIds);
			
			if (selectedIds == "" || selectedIds == "undefined")
			{
				alert("Selected forms list is empty. Please select a valid forms.");
				return;
			}
			
			if (confirm('Are you sure you want to assign to rights to selected group?'))
			{
				
				$.post("../services/schoolService.php?select=1&groupId="+groupId+"&selectedIds="+selectedIds,function(data){
					//alert(data);
					var tokens = data.split(",");
					var status = tokens[0];
					
					var message = tokens[1];
					alert(message);
				});
				
			}
			
		});
		
		var selectedValues = Array();
		
		$("#CmdAdd").click(function(){
			
			selectedValues = getOptions(optAllForms, true);
			
			if ( selectedValues.length > 0 )
			{
				addOptions(optSelectedForms, selectedValues);
				
			}
			
		});
		
		$("#CmdAddAll").click(function(){
			
			
			allValues = getOptions(optAllForms, false);
			
			if ( allValues.length > 0 )
			{
				addOptions(optSelectedForms, allValues);
				
			}
			
		});
		
		$("#CmdRemove").click(function(){
			
			selectedValues = getOptions(optSelectedForms, true);
			
			if ( selectedValues.length > 0 )
			{
				addOptions(optAllForms, selectedValues);
				
			}
			
		});
		
		$("#CmdRemoveAll").click(function(){
			
			
			allValues = getOptions(optSelectedForms, false);
			
			if ( allValues.length > 0 )
			{
				addOptions(optAllForms, allValues);
				
			}
			
		});
		
	});
	
	
});


function getOptions(option, isSelected)
{
	var data = Array();
	
	for(var i = 0; i < option.options.length; i++)
	{
		//copy all Options
		if ( !isSelected )
		{
			data.push(option.options[i]);
		}
		else	//copy selected Options
		if (option.options[i].selected)
		{
			data.push(option.options[i]);
		}
	}
	return data;
}

function addOptions(option, data)
{
	var length = data.length;
	for(var i = 0; i < length; i++)
	{
		option.options.add(data[i]);
	}
	
}

function removeAllOptions(option)
{
	var length = option.options.length;
	for(var i = 0; i < length; i++)
	{
		option.options[0].remove();
	}
	
}
		