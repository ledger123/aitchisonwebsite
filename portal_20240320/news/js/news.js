$(document).ready(function() {
	/*
	 $('#gallerySLide a').tosrus({
          buttons: 'inline',
          pagination  : {
            add     : true,
            type    : 'thumbnails'            
          },
          caption   : {
            add     : true
          }
        });
		*/
	
	$('#TxtNewsDate').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4"
		}, function(start, end, label) {
		  console.log(start.toISOString(), end.toISOString(), label);
	});
	
	$( "#CmdSubmit" ).on( "click", save );
	$( "#CmdCancel" ).on( "click", clears );
	$( "#ChkDefaultIcon" ).on( "click", onDefaultIcon );
	
	var cktoolbar = [
			// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
			{ name: 'document', items: [ 'Source', '-', 'Save', 'DocProps','Preview','Print' ] },	
			// Defines toolbar group without name.
			[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],	
			{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Link', 'Button', 'ImageButton',
					'HiddenField' ] },		
			'/',	// Line break - next group will be placed in new line.
			{ name: 'basicstyles', items: [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
			{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
			{ name: 'colors', items : [ 'TextColor','BGColor',  'EqnEditor',  'FMathEditor' ] },
			{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
		];
	
	/*
	CKEDITOR.allowedContent = true;
	FCKConfig.editorConfig.FullPage = true;
	CKEDITOR.ProtectedTags = 'html|head|body';
	*/
	
	
	CKEDITOR.editorConfig = function( config )
	{
		config.skin = 'moono';
		config.allowedContent = true;
	    config.removeFormatAttributes = '';
		config.extraPlugins = 'eqneditor';
	
		//config.FullPage = false;
		//config.forcePasteAsPlainText = true;
	};
	
	/*
	filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
	filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
	filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
	filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
	*/
	
	CKEDITOR.replace( 'TxtNewsContents', {
		extraAllowedContent: '*[id,role,img,align,video,source](*){*};img[src,width,height,alt,title];video[width,autoplay,controls];source[src,type];ol;li',
		toolbar: cktoolbar
	});
	
	
	CKEDITOR.replace( 'TxtNewsContents2', { 
		extraAllowedContent: '*[id,role,img,align,video,source](*){*};img[src,width,height,alt,title];video[width,autoplay,controls];source[src,type];ol;li',
		toolbar: cktoolbar } );
	
	
	/*
	 CKEDITOR.editorConfig = function( config ) {
		config.skin = 'bootstrapck';
		// Define changes to default configuration here. For example:
		// config.language = 'fr';
		// config.uiColor = '#AADC6E';
		config.toolbar_Full =
			[
				{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
				{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
				{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
				{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton',
					'HiddenField' ] },
				'/',
				{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
				{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
					'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
				{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },
				{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
				'/',
				{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
				{ name: 'colors', items : [ 'TextColor','BGColor' ] },
				{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
			];
	
		config.toolbar_Basic =
			[
				['Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink','-','About']
			];
	};
	
	*/
	
});


function onEdit(id,g)
{
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["newsForm"].submit();
}


function onPaging(g,id)
{
	//alert("g: "+g+", id: "+id);
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["newsForm"].submit();
}


function onAddDetails(id)
{
	//window.location = "contents.php?id="+id;
	window.open("contents.php?id="+id+"&mode=update",'_blank');
}

function onViewNews(id)
{
	//window.location = "contents.php?id="+id+"&mode=view";
	window.open("contents.php?id="+id+"&mode=view",'_blank');
}

function onDeleteNews(id,g)
{
	if (confirm('Are you sure you want to delete the news?'))
	{
		$("#id").val(id);
		$("#TxtEditId").val("0");
		$("#Txtg").val(g);
		$("#mode").val("delete");
		document.forms["newsForm"].submit();
	}
}

function onNewsUndo(id,g)
{
	if (confirm('Are you sure you want to undo this news?'))
	{
		$("#id").val(id);
		$("#Txtg").val(g);
		document.forms["frmNewsTrash"].submit();
	}
}



//https://aitchison.edu.pk/img/logo100x70.png
//../images/logo100x70.png
var iconUrl = "";
var logoUrl = "../images/logo100x70.png";
//var logoUrl = "https://aitchison.edu.pk/img/logo100x70.png";
function onDefaultIcon()
{
	if ( $("#ChkDefaultIcon").is(':checked') )
	{
		iconUrl = $("#ImgIcon").attr("src");
		$("#ImgIcon").attr("src", logoUrl);
	}
	else
	{
		$("#ImgIcon").attr("src", iconUrl);
	}
}


function onSetIcon(id)
{
	$("#ChkDefaultIcon").attr('checked', false);
	$("#ImgIcon").attr("src", "");
	window.open("upload.php?id="+id+"&type=icon&from=news",'_blank');
}

function save()
{
	//alert($('input[name=template]:checked', '#newsForm').val());
	if ( validates() )
	{
		
		if (confirm('Are you sure you want to save the news?'))
		{
			document.forms['newsForm'].submit();
			//return true;
		}
		return false;
	}
}

function saveContents()
{
	if ( validates() )
	{
		if (confirm('Are you sure you want to save the news contents?'))
		{
			//return true;
			$("#mode").val("update");
			$("#TxtAction").val("update");
			document.forms['contentsForm'].submit();
		}
		
	}
}

function validates()
{
	
	if(document.getElementById("templates") !== null)
	{
		var template = $("#templates").find('input[type="radio"]:checked').val();
		
		if (template === undefined)
		{
			alert("Please select news template first.");
			$("#templates").focus();
			return false;
		}
	}
	
	if ( !IsDate($("#TxtNewsDate").val()) )
	{
		alert("Please enter valid date");
		$("#TxtNewsDate").focus();
		return false;
	}
	
	if ( $("#TxtNewsHeading").val().trim() == "" )
	{
		alert("Please enter news heading.");
		$("#TxtNewsHeading").focus();
		return false;
	}
	
	return true;
}

function clears()
{
	window.location = "createnews.php";
	/*
	$("#id").val("");
	$("#TxtEditId").val("0");
	
	$("#TxtNewsDate").val("");
	$("#TxtNewsHeading").val("");
	$("#TxtNewsSubheading").val("");
	$("#OptNewsTypes").val("");
	$("#OptNewsTypes").val("");
	$("#OptActive").val("");
	
	$('input[name="template"][value="1"]').prop('checked', true);
	$('input[name="ChkShowHeading"][value="1"]').prop('checked', true);
	*/ 
}

function IsDate(text)
{
	//var text = '2/30/2011';
	var comp = text.split('/');
	var m = parseInt(comp[0], 10);
	var d = parseInt(comp[1], 10);
	var y = parseInt(comp[2], 10);
	var date = new Date(y,m-1,d);
	if (date.getFullYear() == y && date.getMonth() + 1 == m && date.getDate() == d) {
	  return true;
	} else {
	  return false;
	}
}


function FinishCallback(objs, context)
{
	//alert("FinishCallback");
	alert("Finish step " + context.fromStep + " to go to step " + context.toStep);
	//$('form').submit();
	
	return true;
}




function leaveAStepCallback(obj, context)
{
	//alert("Leaving step " + context.fromStep + " to go to step " + context.toStep);
	
	$.ajax({
        type: "GET",
        url: "template.php",
        data: {"action":"1"},
        success: function(data){
			//alert(data);
            $('#step-2').append(data);

        }
    });
	
	
	return true;
}