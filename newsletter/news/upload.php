<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

$newsId = isset($_GET['id'])   ? (int)$_GET['id'] : 0;
$type   = isset($_GET['type']) ? $_GET['type']	  : "";
$ImageFile = "";

if ( $newsId > 0 )
{
	include("newsrepository.php");
	
	$newsRepo = new NewsRepository( $dc );
	$message = "";
	$response = -1;
	
	$tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, USER_ID);
	
	if ($tNews && $tNews->rowsCount() > 0)
	{
		$template = $tNews->Rows[0]->Template;
	}
	
	if( isset($_FILES['ImageFile0']) || isset($_FILES['ImageFile1']) || isset($_FILES['ImageFile2']) )
	{
		if 	   ( isset($_FILES['ImageFile0']) ) $ImageFile = "ImageFile0";
		elseif ( isset($_FILES['ImageFile1']) ) $ImageFile = "ImageFile1";
		elseif ( isset($_FILES['ImageFile2']) ) $ImageFile = "ImageFile2";
		
		$title = "";
		if ($tNews && $tNews->rowsCount() > 0)
		{
			if ($ImageFile == "ImageFile1")
				$title = $tNews->Rows[0]->SmallImageTitle;
			else if ($ImageFile == "ImageFile2")
				$title = $tNews->Rows[0]->LargeImageTitle;
		}
		
		$Destination = 'images';
		
		if ($ImageFile == "ImageFile0")
		{
			list($width, $height, $ext, $attr) = $functions->isImage( $ImageFile, $_FILES[$ImageFile]['tmp_name'] );
			
			$ImageName = str_replace(' ','-',strtolower($_FILES[$ImageFile]['name']));
			
			$fileName = $functions->makeRandomFileName( $ImageName );
			
			$fileName = $Destination."/".$fileName;
			
			if ( move_uploaded_file($_FILES[$ImageFile]['tmp_name'], $fileName) )
			{
				//echo $fileName;
				if(chmod($fileName,0777)){ }
				$response = $newsRepo->AddNewsIcon( $newsId, $fileName );
			}
		}
		else
		{
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
					list($width, $height, $ext, $attr) = $functions->isImage( $ImageFile, $_FILES[$ImageFile]['tmp_name'][$key], $key );
					//list($width, $height, $ext, $attr) = getimagesize( $_FILES[$ImageFile]['tmp_name'][$key] );
					
					if ( move_uploaded_file($_FILES[$ImageFile]['tmp_name'][$key], $fileName) )
					{
						//echo $fileName;
						if(chmod($fileName,0777)){ }
						if ($ImageFile == "ImageFile1") {
							$response = $newsRepo->AddNewsFile($newsId, $fileName, $fileType, $width, $height, $title);
							$response = "File uploaded successfully.";
						}
						elseif ($ImageFile == "ImageFile2")
						{
							$response = $newsRepo->AddNewsFile2($newsId, $fileName, $fileType, $width, $height, $title);
							
							if ($response == "Can not updated.")
							{
								unlink ( $fileName );
								
								$response = "File can't uploaded.";
							}
							else
							{
								$response = "File uploaded successfully.";
							}
							
						}
					}
				}
			}
		}
	}
	
}
if ( $newsId > 0 && $type == "" )
{
	$tNewsFiles = $newsRepo->GetNewsFiles__($newsId);
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

<?php $title = "Upload files"; include($path."includes.php"); ?>
  
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
          	<div class="page-title">
              <div class="title_left">
                <h3>News Images</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <p><h3><?php if(isset($tNewsFiles) && $tNewsFiles->rowsCount() > 0) echo stripslashes($tNewsFiles->Rows[0]->Heading); ?></h3></p>
                    <br />
                    <table>
                    <tr>
                    <td>
                        <form action="upload.php?id=<?php echo $newsId; if($type=="icon") echo "&type=icon"; ?>" method="post" enctype="multipart/form-data" id="UploadForm1">
                        	
                            <?php echo "type: ". $type;  if($type=="icon") { ?>
                            <table width="500" border="0">
                            	<tr>
                                	<td>New Image :</td>
                                    <td><input name="ImageFile0" type="file"/></td>
                                </tr>
                                <tr>
                                    <td style="padding-top:20px;">&nbsp;</td>
                                    <td><input type="submit" id="SubmitButton0" value="Upload file" /></td>
                                    
                                </tr>
                            </table>
                            <?php } else { ?>
                            
                            <table width="500" border="0">
                            	
                            	<?php
                                if ($ImageFile == "ImageFile1") {
								?>
                                <tr>
                                    <td colspan="2"> <?php echo $response; ?> </td>
                                    
                                </tr>
                                <?php } ?>
                                
                                <tr>
                                    <td colspan="2"><label><?php if($template=="Image Gallery"||$template=="Image Gallery2") echo "Small Image"; else echo "New Image";?></label></td>
                                </tr>
                                <tr>
                                    <td>File : </td>
                                    <td><input name="ImageFile1[]" type="file" multiple/></td>
                                    
                                </tr>
                                <tr>
                                    <td style="padding-top:20px;">&nbsp;</td>
                                    <td><input type="submit" style="color: #000;" id="SubmitButton1" value="Upload file(s)" /></td>
                                    
                                </tr>
                                <tr>
                                	<td colspan="2">
                                    	
                                        <div id="progressbox1">
                                            <div id="progressbar1"></div >
                                            <div id="statustxt1">0%</div >
                                        </div>
                                        <div id="output1"></div>
                                        
                                    </td>
                                </tr>
                            </table>
                            <?php } ?>
                        </form>
                    </td>
                    <td>
                    	<?php if($type=="" && ($template == "Image Gallery" || $template == "Image Gallery2") ) { ?>
                        <form action="upload.php?id=<?php echo $newsId; ?>" method="post" enctype="multipart/form-data" id="UploadForm2">
                            <table width="500" border="0">
                            	
                            	<?php
                                if ($ImageFile == "ImageFile2") {
								?>
                                <tr>
                                    <td colspan="2"> <?php echo $response; ?> </td>
                                    
                                </tr>
                                <?php } ?>
                                
                                <tr>
                                    <td colspan="2"><label>Large Image</label></td>
                                </tr>
                                <tr>
                                    <td>File : </td>
                                    <td><input name="ImageFile2[]" type="file" multiple/></td>
                                    
                                </tr>
                                <tr>
                                    <td style="padding-top:20px;">&nbsp;</td>
                                    <td><input type="submit" style="color: #000;" id="SubmitButton2" value="Upload file(s)" /></td>
                                    
                                </tr>
                                <tr>
                                	<td colspan="2">
                                    	
                                        <div id="progressbox2">
                                            <div id="progressbar2"></div >
                                            <div id="statustxt2">0%</div >
                                        </div>
                                        <div id="output2"></div>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php } ?>
                    </td
                    ></tr>
                    </table>
                    
                    <div style="height:50px;"></div>
                    <div class="row">
					<?php if( isset( $tNewsFiles ) )
						  foreach($tNewsFiles->Rows as $row) { ?>
							<div class="row" align="left">
							<?php if ( strlen($row->FileName1)>0) { ?>
                        	<div class="col-lg-4 col-md-12 col-sm-4" align="left" style="border-left:1px #C1C1C1 solid; border-bottom:1px #C1C1C1 solid; margin-bottom:8px;"> 
                                <img src="<?php echo $row->FileName1; ?>" 
                                     width="220" 
                                     height="84" style="max-width:200px; max-height:85;" alt="img" class="img-responsive" /><br>
                                
                                <a href="#" onClick="javascript:deleteFile(1,<?php echo $row->Id.",".$newsId; ?>)" 
                                			class="btn" title="delete this image" ><i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
                                </a><br />
                                
                                
                                <span><label>Name: </label><?php echo $row->FileName1; ?></span><br />
                                <table>
                                	<tr>
                                        <td>Width:</td>
                                        <td><input id="Txt<?php echo $row->Id; ?>Width1" value="<?php echo $row->Width1; ?>" /></td>
                                        <td>&nbsp;&nbsp;Height:</td>
                                        <td><input id="Txt<?php echo $row->Id; ?>Height1" value="<?php echo $row->Height1; ?>" /></td>
                                        <td><a href="#" onClick="javascript:updateImageSize(1,<?php echo $row->Id; ?>)" class="btn" 
                                        	   title="Change image width and height" ><i class="fa fa-pencil-square-o" aria-hidden="true" 
                                               style="color:#000;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Title:</td>
                                        <td colspan="3"><input style="width:100%;" id="Txt<?php echo $row->Id; ?>Title1" value="<?php echo $row->Title1; ?>" /></td>
                                        <td><a href="#" onClick="javascript:updateImageTitle(1,<?php echo $row->Id.",".$newsId; ?>)" class="btn" 
                                        	   title="Change image title" ><i class="fa fa-pencil-square-o" aria-hidden="true" 
                                               style="color:#000;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                            
							<?php } if ( strlen($row->FileName2)>0) { ?>
                            
                            <div class="col-lg-6 col-md-12 col-sm-6" align="left" style="border-left:1px #C1C1C1 solid; border-bottom:1px #C1C1C1 solid; margin-bottom:8px;"> 
                                <img src="<?php echo $row->FileName2; ?>" 
                                     width="220" 
                                     height="84" style="max-width:200px; max-height:85;" alt="img" class="img-responsive" /><br>
                                
                                
                                <a href="#" onClick="javascript:deleteFile(2,<?php echo $row->Id.",".$newsId; ?>)" 
                                			class="btn" title="delete this image" ><i class="fa fa-times" aria-hidden="true" style="color:red;"></i>
                                </a><br />
                                
                                
                                <span><label>Name: </label><?php echo $row->FileName2; ?></span><br />
                                <table>
                                	<tr>
                                        <td>Width:</td>
                                        <td><input id="Txt<?php echo $row->Id; ?>Width2" value="<?php echo $row->Width2; ?>" /></td>
                                        <td>&nbsp;&nbsp;Height:</td>
                                        <td><input id="Txt<?php echo $row->Id; ?>Height2" value="<?php echo $row->Height2; ?>" /></td>
                                        <td><a href="#" onClick="javascript:updateImageSize(2,<?php echo $row->Id; ?>)" class="btn" 
                                        	   title="Change image width and height" ><i class="fa fa-pencil-square-o" aria-hidden="true" 
                                               style="color:#000;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Title:</td>
                                        <td colspan="3"><input style="width:100%;" id="Txt<?php echo $row->Id; ?>Title2" value="<?php echo $row->Title2; ?>" /></td>
                                        <td><a href="#" onClick="javascript:updateImageTitle(2,<?php echo $row->Id.",".$newsId; ?>)" class="btn" 
                                        	   title="Change image title" ><i class="fa fa-pencil-square-o" aria-hidden="true" 
                                               style="color:#000;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                            
                            <?php } ?>
                        </div>
                        
						<?php } ?>
                    </div>
                    <br /><br /><br />
                    <div class="row"></div>
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
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="../vendors/ckeditor/ckeditor.js"></script>
	<script src="js/news.js"></script>

</body>
</html>

<script>

function updateImageSize (image, id) {
	
	//var width  = Number( document.getElementById("Txt"+id+"Width"+image).value );
	//var height = Number( document.getElementById("Txt"+id+"Height"+image).value );

    var width  = document.getElementById("Txt"+id+"Width"+image).value;
    var height = document.getElementById("Txt"+id+"Height"+image).value;

	if( id < 1 )
	{
		alert("Invalid parameters for updating the width and height, please reload the page.");
		return;
	}
	
	/*
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
	*/
	//alert("../services/schoolService.php?select=2&fileId="+id+"&width="+width+"&height="+height+"&image="+image);
	
	$.post("../services/schoolService.php?select=2&fileId="+id+"&width="+width+"&height="+height+"&image="+image,function(data){
		//alert(data);
		var tokens = data.split(",");
		var status = tokens[0];
		
		var message = tokens[1];
		alert(message);
	});
}


function deleteFile(image, id, newsId)
{
	if (confirm('Are you sure you want to delete this file?'))
	{
		
		//alert("../services/schoolService.php?select=3&fileId="+id+"&image="+image);
		$.post("../services/schoolService.php?select=3&fileId="+id+"&image="+image,function(data){
			//alert(data);
			var tokens = data.split(",");
			var status = tokens[0];
			
			var message = tokens[1];
			alert(message);
			
			if (status == 1)
			{
				window.location = "upload.php?id="+newsId;
			}
		});
	}
}


function updateImageTitle(image, id, newsId)
{
	if (confirm('Are you sure you want to update title?'))
	{
		var title = document.getElementById("Txt"+id+"Title"+image).value;
		
		if( newsId < 1 || id < 1 )
		{
			alert("Invalid parameters for updating the title, please reload the page.");
			return;
		}
		
		//alert("../services/schoolService.php?select=5&fileId="+id+"&image="+image);
		$.post("../services/schoolService.php?select=5&fileId="+id+"&image="+image+"&title="+title,function(data){
			//alert(data);
			var tokens = data.split(",");
			var status = tokens[0];
			
			var message = tokens[1];
			alert(message);
			
			if (status == 1)
			{
				window.location = "upload.php?id="+newsId;
			}
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