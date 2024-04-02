
function exportToExcel(gridId, filename)
{
	var data = [];
	var tbl = "";
	$( "#" + gridId + " tr" )
		.get().map(function(row){
		
		var x = $(row).children();
		var row = [];
		x.each(function() {
			
			row.push('"' + trim( $(this).text() ) + '"');
		});
		
		data += row.join(',') + '\n';
		
	});
	//alert(data.join(','));
	
	var csvContent = "data:text/csv;charset=utf-8,";
	csvContent += data;
	
	var encodedUri = encodeURI(csvContent);
	var link = document.createElement("a");
	link.setAttribute("href", encodedUri);
	link.setAttribute("download", filename+".csv");
	
	link.click();
	
}

function trim(x)
{
	return x.replace(/^\s+|\s+$/gm, '');
}