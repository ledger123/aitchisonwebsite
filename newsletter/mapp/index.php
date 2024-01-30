<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
//ini_set('precision',30);
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");


require_once 'messagerepository.php';
$messageRepo = new MessageRepository($dc);

$response = -1;

$offset = 0;

if ( isset($_REQUEST['CmdSend']) )
{
	require_once 'firebase.php';
	require_once 'push.php';

	$firebase = new Firebase();
	$push = new Push();

	// optional payload
	$payload = array();
	$payload['admin'] = 'Asim Ansari';
	//$payload['ver'] = '1.0';
	
	//echo "topic: ". $topic. "<br>";
	
	// notification title
	$title = isset($_POST['TxtTitle']) ? $_POST['TxtTitle'] : '';
	 
	// notification message
  $message = isset($_POST['TxtMessage']) ? $_POST['TxtMessage'] : '';
  
  $TxtUrl = isset($_POST['TxtUrl']) ? $_POST['TxtUrl'] : '';
	
	$push->setTitle($title);
  $push->setMessage($message);
  $push->setUrl($TxtUrl);

	$push->setImage('');
	
	/*if ($include_image) {
		$push->setImage('images/image_name.jpg');
	} else {
		$push->setImage('');
  }*/
  
	$push->setIsBackground(FALSE);
  $push->setPayload($payload);

  $json = $push->getPush();
  
  $response = "1";
  $response = $firebase->sendToTopic('all', $json);

	if( $response != false && $response != -1 )
	{
    $jsonVal = "[". $response ."]";
    //echo "hmmm"; exit;
    $jObj = json_decode( $jsonVal );

    $message_id = $jObj[0]->message_id;
    
    $response = $message_id;

		//echo $jObj[0]->message_id. "<br />";
		if( strlen($message_id) > 0 )
		{
      $messageRepo->Save( $json['notification'], $message_id, 1 );
		}
	}
	
}

$tMessages = $messageRepo->GetAll();

?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">


<?php $title = "Cloud Messaging"; include($path."includes.php"); ?>
<style>

#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}


</style>
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
          	<div class="page-title">
              <div class="title_left">
                <h3>Cloud Messaging</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    
                    <form id="messageForm" method="post" class="form-horizontal form-label-left" >
                        <p><h5></h5></p>
                        <div class="form-group">
                    	    <?php if($response == false) { ?>
                          <div class="alert alert-danger">
                          	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	          <?php echo $response; ?>
                          </div>
                          <?php } elseif($response != false && $response != -1 ) { ?>
                            <div class="alert alert-success">
                            	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								              <?php echo $response; ?>
                            </div>
                      	  <?php } ?>
                         </div>
                         
                         <div align="center">
                            <div class="form-horizontal form-label-left">
                            
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTitle">Message Title</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TxtTitle" name="TxtTitle" maxlength="50" required="required" placeholder="Enter message title"
                                  class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtMessage">Message</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="TxtMessage" name="TxtMessage" required placeholder="Type notification message!" rows="5" maxlength="200"
                                class="form-control col-md-7 col-xs-12"></textarea>
                              </div>
                            </div>
                              
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtUrl">URL</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="TxtUrl" name="TxtUrl" maxlength="250" placeholder="Enter url"
                                  class="form-control col-md-7 col-xs-12">

                              </div>
                            </div>
                              
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" id="CmdSend" name="CmdSend" class="btn btn-primary" onsubmit="return javascript:save();">Send</button>
                                  <button type="button" id="CmdCancel" name="CmdCancel" class="btn btn-default" onClick="javascript:clears();">Cancel</button>
                                </div>
                              </div>
                            </div>
                          
                          </div>
                  		
                    <!--</form>-->
                    </form>
                    
                	<div class="row">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel" style="border:none;">
                          <div class="x_content">
                            
                            <form id="form1" method="post" data-parsley-validate class="form-horizontal form-label-left">
                            	
                                <table class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th style="width:40px; text-align:center;">#</th>
                                      <th style="width:100px;">Date</th>
                                      <th style="width:125px;">Subject</th>
                                      <th style="width:375px;">Message</th>
                                      <th style="width:70px;">User</th>
                                      <th style="width:100px;">Server Id</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  if ($tMessages)
                                  {
                                      $index = $offset +1;
                                      foreach($tMessages->Rows as $row)
                                      {
                                  ?>
                                    <tr>
                                      <th scope="row" style="text-align:center;"><?php echo $index++; ?></th>
                                      <td><?php echo $functions->formatDate($row->MsgDateTime, "d M, Y"); ?></td>
                                      <td><?php echo stripslashes($row->Subject); ?></td>
                                      <td><?php echo stripslashes($row->Message); ?></td>
                                      <td><?php echo $row->UserTitle; ?></td>
                                      <td><?php echo $row->ServerMessageId; ?></td>
                                    </tr>
                                    <?php
                                        }
                                   }
                                    ?>
                                    
                                  </tbody>
                                </table>
        						
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clear-fix"></div>
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
	<script src="js/messaging.js"></script>

</body>
</html>
