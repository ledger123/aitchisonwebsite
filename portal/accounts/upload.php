<?php
//ini_set('post_max_size', '8M');
//ini_set('upload_max_filesize', '4M');

//echo "post_max_size: ". ini_get('post_max_size');
//echo "<br/>upload_max_filesize: ". ini_get('upload_max_filesize');


//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

$syllabusId = isset($_GET['id'])   ? (int)$_GET['id'] : 0;
$type   = isset($_POST['type']) ? $_POST['type']	  : "";

if ( $syllabusId > 0 )
{
	include("syllabusrepository.php");
	
	$syllabusRepo = new SyllabusRepository( $dc );
	$message = "";
	$response = -1;
	
	$dTable = $syllabusRepo->Get( $syllabusId );
	$title = "";
	if (isset($dTable) && $dTable->rowsCount() > 0)
	{
		$title = $dTable->Rows[0]->Title;
	}
	
	
	if( isset($_FILES['ImageFile0']) )
	{
		if 	   ( isset($_FILES['ImageFile0']) ) $ImageFile = "ImageFile0";
		
		
		
		$Destination = 'syllabus-files';
		
		foreach($_FILES[$ImageFile]["tmp_name"] as $key=>$tmp_name)
		{
			$ImageName = str_replace(' ','-',strtolower($_FILES[$ImageFile]['name'][$key]));

			$fileName = $functions->makeRandomFileName( $ImageName );

			$fileType = $_FILES[$ImageFile]['type'][$key]; //"image/png", image/jpeg etc.

			$fileType = substr($fileType, strrpos($fileType, '/') +1);

			$fileName = $Destination."/".$fileName;

			//echo "fileName: ".$fileName."<br />";
			if (is_uploaded_file($_FILES[$ImageFile]['tmp_name'][$key]))
			{
				
				//echo "path info: " . pathinfo($_FILES[$ImageFile]['tmp_name'][$key], PATHINFO_EXTENSION). "<br />";
				
				//$functions->isFileValid( $ImageFile, $_FILES[$ImageFile]['tmp_name'][$key], $key );
				
				if ( move_uploaded_file($_FILES[$ImageFile]['tmp_name'][$key], $fileName) )
				{
					//echo $fileName;
					if(chmod($fileName,0777)){ }
					if ($ImageFile == "ImageFile0") {
						$response = $syllabusRepo->SaveFile( $syllabusId, "", $fileName, 1 );
						$response = "File uploaded successfully.";
					}

				}
			}
		}

	}
	
}
if ( $syllabusId > 0 )
{
	$tSyllabusFiles = $syllabusRepo->GetFilesList($syllabusId);
}
?>
<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">

<style>
img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
	  
    #progressbox {
    border: 1px solid #0099CC;
    padding: 1px; 
    position:relative;
    width:400px;
    border-radius: 3px;
    margin: 10px;
    display:none;
    text-align:left;
    }
    #progressbar {
    height:20px;
    border-radius: 3px;
    background-color: #003333;
    width:1%;
    }
    #statustxt {
    top:3px;
    left:50%;
    position:absolute;
    display:inline-block;
    color: #000000;
    }
</style>

<?php "Upload files"; include($path."includes.php"); ?>
  

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <a href="syllabus-list.php" class="btn btn-success">Syllabus List</a>
						
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
                    <table>
                    <tr>
                    <td>
                        <form action="upload.php?id=<?php echo $syllabusId; ?>" method="post" enctype="multipart/form-data" id="UploadForm1">
                        	
                            
                            <table width="500" border="0">
                            	
                                <tr>
                                    <td colspan="2"> <?php if ($response != -1) echo $response; ?> </td>
                                    
                                </tr>
                                
                                
                                <tr>
                                    <td colspan="2"><label></label></td>
                                </tr>
                                <tr>
                                    <td>File : </td>
                                    <td><input name="ImageFile0[]" type="file" multiple/></td>
                                    
                                </tr>
                                <tr>
                                    <td style="padding-top:20px;">&nbsp;</td>
                                    <td><input type="submit" style="color: #000;" id="SubmitButton1" value="Upload file(s)" /></td>
                                    
                                </tr>
                                <tr>
                                	<td colspan="2">
                                    	
                                        <div id="progressbox1">
                                            <div id="progressbar1"></div>
                                            <div id="statustxt1"></div>
                                        </div>
                                        <div id="output1"></div>
                                        
                                    </td>
                                </tr>
                            </table>
                            
                        </form>
                    </td>
                    </tr>
                    </table>
                    
                    <div style="height:50px;"></div>
                    <div class="row">
						<?php if(isset($tSyllabusFiles)) foreach($tSyllabusFiles->Rows as $row) { ?>
                        <div class="row" align="left">
                        	<div class="col-lg-12 col-md-12 col-sm-12" align="left" style="border-left:1px #C1C1C1 solid; border-bottom:1px #C1C1C1 solid; margin-bottom:8px;"> 
								<span>Delete file:</span>
                                <a href="#" onClick="javascript:deleteFile(<?php echo $row->Id.",".$syllabusId; ?>)" 
                                			class="btn" title="delete this file" ><i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
                                </a><br />
                                
                                
                                <span><label>Name: </label><?php echo $row->FileUrl; ?></span><br />
                                <table>
                                	
                                    <tr>
                                        <td>Caption:</td>
                                        <td colspan="3"><input style="width:100%;" id="Txt<?php echo $row->Id; ?>Title1" value="<?php echo $row->Caption; ?>" /></td>
                                        <td><a href="#" onClick="javascript:updateFileTitle(1,<?php echo $row->Id.",".$syllabusId; ?>)" class="btn" 
                                        	   title="Change image title" ><i class="fa fa-pencil-square-o" aria-hidden="true" 
                                               style="color:#000;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                            
                            
                        </div>
                        
                        <?php } ?>
                    </div>
                    <br /><br /><br />

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
	<?php include($path."footerincludes.php"); ?>

	
</body>
</html>

<script>

function updateImageSize (image, id) {
	
	var width  = Number( document.getElementById("Txt"+id+"Width"+image).value );
	var height = Number( document.getElementById("Txt"+id+"Height"+image).value );
	
	if( id < 1 )
	{
		alert("Invalid parameters for updating the width and height, please reload the page.");
		return;
	}
	
	
	if (width < 1)
	{
		alert("Please enter valid image width.");
		return;
	}
	
	if (height < 1)
	{
		alert("Please enter valid image height.");
		return;
	}
	//alert("../services/schoolService.php?select=2&fileId="+id+"&width="+width+"&height="+height+"&image="+image);
	
	$.post("../services/schoolService.php?select=2&fileId="+id+"&width="+width+"&height="+height+"&image="+image,function(data){
		//alert(data);
		var tokens = data.split(",");
		var status = tokens[0];
		
		var message = tokens[1];
		alert(message);
	});
}


function deleteFile( id, syllabusId )
{
	if (confirm('Are you sure you want to delete this file?'))
	{
		$.post("../services/portalService.php?select=6&fileId="+id,function(data){
			//alert(data);
			var tokens = data.split(",");
			var status = tokens[0];
			
			var message = tokens[1];
			alert(message);
			
			if (status == 1)
			{
				window.location = "upload.php?id="+syllabusId;
			}
		})
		.fail(function(xhr, status, error) {
			alert( error );
		});
	}
}


function updateFileTitle( image, id, syllabusId )
{
	if (confirm('Are you sure you want to update title?'))
	{
		var title = document.getElementById("Txt"+id+"Title"+image).value;
		
		if( syllabusId < 1 || id < 1 )
		{
			alert("Invalid parameters for updating the title, please reload the page.");
			return;
		}
		
		//alert("../services/portalService.php?select=5&fileId="+id+"&title="+title);
		$.post("../services/portalService.php?select=5&fileId="+id+"&title="+title,function(data){
			//alert(data);
			var tokens = data.split(",");
			var status = tokens[0];
			
			var message = tokens[1];
			alert(message);
			
			if (status == 1)
			{
				//window.location = "upload.php?id="+syllabusId;
			}
		})
		.fail(function(xhr, status, error) {
			alert( error );
		  });
	}
}


$(document).ready(function() {
	//elements
	var progressbox1     = $('#progressbox1');
	var progressbar1     = $('#progressbar1');
	var statustxt1       = $('#statustxt1');
	var submitbutton1    = $("#SubmitButton1");
	var myform1          = $("#UploadForm1");
	var output1          = $("#output1");
	var completed       = '0%';
	
	$(myform1).ajaxForm({
		beforeSend: function() { //brfore sending form
			submitbutton1.attr('disabled', ''); // disable upload button
			statustxt1.empty();
			progressbox1.slideDown(); //show progressbar
			progressbar1.width(completed); //initial value 0% of progressbar
			statustxt1.html(completed); //set status text
			statustxt1.css('color','#000'); //initial color of status text
			},
			uploadProgress: function(event, position, total, percentComplete) { //on progress
			progressbar1.width(percentComplete + '%') //update progressbar percent complete
			statustxt1.html(percentComplete + '%'); //update status text
			if(percentComplete>50)
			{
				statustxt1.css('color','#fff'); //change status text to white after 50%
			}
		},
		complete: function(response) { // on complete
			output1.html(response.responseText); //update element with received data
			myform1.resetForm();  // reset form
			submitbutton1.removeAttr('disabled'); //enable submit button
			progressbox1.slideUp(); // hide progressbar
		}
	});
	
	//elements
	var progressbox2     = $('#progressbox2');
	var progressbar2     = $('#progressbar2');
	var statustxt2       = $('#statustxt2');
	var submitbutton2    = $("#SubmitButton2");
	var myform2          = $("#UploadForm2");
	var output2          = $("#output2");
	
	$(myform2).ajaxForm({
		beforeSend: function() { //brfore sending form
			submitbutton2.attr('disabled', ''); // disable upload button
			statustxt2.empty();
			progressbox2.slideDown(); //show progressbar
			progressbar2.width(completed); //initial value 0% of progressbar
			statustxt2.html(completed); //set status text
			statustxt2.css('color','#000'); //initial color of status text
			},
			uploadProgress: function(event, position, total, percentComplete) { //on progress
			progressbar2.width(percentComplete + '%') //update progressbar percent complete
			statustxt2.html(percentComplete + '%'); //update status text
			if(percentComplete>50)
			{
				statustxt2.css('color','#fff'); //change status text to white after 50%
			}
		},
		complete: function(response) { // on complete
			output2.html(response.responseText); //update element with received data
			myform2.resetForm();  // reset form
			submitbutton2.removeAttr('disabled'); //enable submit button
			progressbox2.slideUp(); // hide progressbar
		}
	});
});
</script>