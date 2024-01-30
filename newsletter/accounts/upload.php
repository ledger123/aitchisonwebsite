<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

$newsId = isset($_REQUEST['id'])   ? (int)$_REQUEST['id'] : 0;
$type   = isset($_REQUEST['type']) ? $_REQUEST['type']	  : "";
$from   = isset($_REQUEST['from']) ? $_REQUEST['from']	  : "";

if ( $newsId > 0 )
{
	$message = "";
	$response = -1;
	
	if( isset($_FILES['ImageFile0']) )
	{
		$ImageFile = "ImageFile0";
		
		$Destination = 'images';
		
		$ImageName = str_replace(' ','-',strtolower($_FILES[$ImageFile]['name']));
		
		$fileName = $functions->makeRandomFileName( $ImageName );
		
		$fileName = $Destination."/".$fileName;
		
		if ( move_uploaded_file($_FILES[$ImageFile]['tmp_name'], $fileName) )
		{
			include_once("accountrepository.php");
			$accountRepo = new AccountRepository( $dc );
			$response = $accountRepo->AddUserPicture( $newsId, $fileName );
			
			if ($response == 1)
				$message = "File uploaded successfully.";
			else
				$message = "File not uploaded.";
		}
	
	}
	
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
                <h3>User Picture</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    
                    <table>
                    <tr>
                    <td>
                        <form action="upload.php?id=<?php echo $newsId; if($type=="icon") echo "&type=icon";  if($from!="") echo "&from=".$from; ?>" method="post" enctype="multipart/form-data" id="UploadForm1">
                        	
                            <?php if($type=="icon") { ?>
                            <table width="500" border="0">
                            	<?php if (strlen(trim($message)) > 0 ) { ?>
                                	<tr>
                                        <td colspan="2"><?php echo $message; ?></td>
                                    </tr>
                                <?php } ?>
                            	<tr>
                                	<td>New Icon :</td>
                                    <td><input name="ImageFile0" type="file"/></td>
                                </tr>
                                <tr>
                                    <td style="padding-top:20px;">&nbsp;</td>
                                    <td><input type="submit" id="SubmitButton0" value="Upload file" /></td>
                                </tr>
                                
                            </table>
                            <?php } ?>
                        </form>
                    </td>
                    </tr>
                    </table>
                    
                    <div style="height:50px;"></div>
                    
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

</body>
</html>

<script>


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
	
});
</script>