<?php
//ini_set('precision',30);
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

require_once 'messagerepository.php';
$messageRepo = new MessageRepository($dc);

$response = -1;


// how many rows to show per page
$recordsPerPage = 10;

$page = isset($_REQUEST['Txtg']) ? (int)$_REQUEST['Txtg'] : 0;

if($page == 0 || $page == 1) $offset = 0;
else if($page > 1) $offset = (($page -1) * $recordsPerPage);

$id	   = isset($_REQUEST['id'])	   ? (int)$_REQUEST['id']	 : 0;
$mode  = isset($_REQUEST['mode'])  ? $_REQUEST['mode']	 	 : "";
$TxtEditId = isset($_REQUEST['TxtEditId']) ? (int)$_REQUEST['TxtEditId'] : 0;

//echo "id: ".$id."<br />";
//echo "TxtEditId: ".$TxtEditId;
//echo "mode: ".$mode."<br />";

if ($id > 0 && $mode == "archive")
{
	$response = $messageRepo->ArchiveNewsEvents( $id, USER_ID );
	
	if ($response > 0)
		$message = "Archive status updated successfully.";
	else
		$message = "Archive status not updated.";
	
	$mode = "";
	$id = 0;
}

#load news for edit
elseif ( $id > 0 && $TxtEditId == 0 )
{
	$news = $messageRepo->GetNewsEvents( $id );
	
	$templateId 	   = 0;
	$template	 	   = "";
	$TxtNewsDate 	   = "";
	$TxtNewsHeading	   = "";
	$ChkShowHeading	   = 0;
	$TxtNewsSubheading = "";
	$OptNewsType	   = "";
	$active 		   = "";
	
	if($news && $news->rowsCount() > 0)
	{
		$row = $news->Rows[0];
		
		$newsAndEventsId = $row->Id;
		$TxtPostDate 	 = $row->PostDate;
		$OptNewsType	 = $row->NewsType;
		$TxtNewsUrl 	 = $row->NewsUrl;
		$TxtImage  		 = $row->Image;
		$TxtHeading	   	 = $row->Heading;
		$TxtSubheading	 = $row->Subheading;
		$active    	  	 = $row->Active;
		
	}
	
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	#upate news
	$TxtPostDate 	= isset($_REQUEST['TxtPostDate'])  	? $_REQUEST['TxtPostDate']   : "";
	$OptNewsType	= isset($_REQUEST['OptNewsTypes'])	? $_REQUEST['OptNewsTypes']	 : "";
	$TxtNewsUrl 	= isset($_REQUEST['TxtNewsUrl']) 	? $_REQUEST['TxtNewsUrl']  	 : "";
	$TxtImage	    = isset($_REQUEST['TxtImage'])      ? $_REQUEST['TxtImage']      : "";
	$TxtHeading 	= isset($_REQUEST['TxtHeading']) 	? $_REQUEST['TxtHeading']	 : "";
	$TxtSubheading	= isset($_REQUEST['TxtSubheading']) ? $_REQUEST['TxtSubheading'] : "";
	$active			= isset($_REQUEST['OptActive'])		? $_REQUEST['OptActive']	 : 0;
	
	$TxtHeading    = $purifier->purify($TxtHeading);
	$TxtSubheading = $purifier->purify($TxtSubheading);
	$TxtPostDate   = $functions->formatDate($TxtPostDate);
	
	#updating
	if( $TxtEditId > 0 && strlen ($TxtHeading) > 3 )
	{
		if ( !$messageRepo->IsNewsHeadingExists( $TxtEditId, $TxtHeading ) )
		{
									//UpdateNewsEvents($newsEventsId, $postDate, $newsUrl, $image, $heading, $subHeading, $active)
			$response = $messageRepo->UpdateNewsEvents( $TxtEditId, $TxtPostDate, $OptNewsType, $TxtNewsUrl, $TxtImage, $TxtHeading, $TxtSubheading, $active );
			
			if ($response > 0)
				$message = "Record updated successfully.";
			else
				$message = "Record not updated.";
		}
		else
		{
			$response = 0;
			$message = "This news heading already exists.";
		}
	}
	
	$id 			= "0";
	$TxtPostDate 	= "";
	$TxtNewsUrl     = "";
	$TxtImage		= "";
	$TxtHeading	    = "";
	$TxtSubheading	= "";
	$active			= 1;
	$OptNewsType	= "News";
	
	unset($_SERVER['QUERY_STRING']);
}
elseif ( $id == 0 && $TxtEditId == 0 )
{
	#new news
	$TxtPostDate 	= isset($_REQUEST['TxtPostDate'])  	? $_REQUEST['TxtPostDate']   : "";
	$OptNewsType	= isset($_REQUEST['OptNewsTypes'])	? $_REQUEST['OptNewsTypes']	 : "";
	$TxtNewsUrl 	= isset($_REQUEST['TxtNewsUrl']) 	? $_REQUEST['TxtNewsUrl']  	 : "";
	$TxtImage	    = isset($_REQUEST['TxtImage'])      ? $_REQUEST['TxtImage']      : "";
	$TxtHeading 	= isset($_REQUEST['TxtHeading']) 	? $_REQUEST['TxtHeading']	 : "";
	$TxtSubheading	= isset($_REQUEST['TxtSubheading']) ? $_REQUEST['TxtSubheading'] : "";
	$active			= isset($_REQUEST['OptActive'])		? $_REQUEST['OptActive']	 : 0;
	
	
	$TxtHeading    = $purifier->purify($TxtHeading);
	$TxtSubheading = $purifier->purify($TxtSubheading);
	$TxtPostDate   = $functions->formatDate($TxtPostDate);
	
	#create news
	if( strlen ($TxtHeading) > 3 )
	{
		if ( !$messageRepo->IsNewsHeadingExists(0, $TxtHeading) )
		{
									//SaveNewsEvents($postDate, $newsUrl, $newsType, $image, $heading, $subHeading, $active, $userId)
			$response = $messageRepo->SaveNewsEvents($TxtPostDate, $TxtNewsUrl, $OptNewsType, $TxtImage, $TxtHeading, $TxtSubheading, $active, USER_ID);
			
			if ($response > 0)
				$message = "Record saved successfully.";
			else
				$message = "Record not saved.";
		}
		else
		{
			$response = 0;
			$message = "This news heading already exists.";
		}
	}
	else
	{
		$message = "Invalid news heading.";
	}
	
	$id 			= "0";
	$TxtPostDate 	= "";
	$TxtNewsUrl     = "";
	$TxtImage		= "";
	$TxtHeading	    = "";
	$TxtSubheading	= "";
	$active			= 1;
	$OptNewsType	= "News";
}


$tNewsTypes = new DataTable();
$tNewsTypes->SetColumns( array("Id", "Value") );

$tNewsTypes->addRow( array("News",   "News") );
$tNewsTypes->addRow( array("Notice", "Notice") );
$tNewsTypes->addRow( array("Letter", "Pr. News Letter") );
$tNewsTypes->addRow( array("Alumni", "Alumni News Letter") );

$OptNewsTypes = new ComboBox("OptNewsTypes", "class='form-control'", $tNewsTypes);
$OptNewsTypes->valueField = "Id";
$OptNewsTypes->textField = "Value";

$tActive = new DataTable();
$tActive->SetColumns( array("Id", "Value") );

$tActive->addRow( array("Yes", "Yes") );
$tActive->addRow( array("No",  "No") );
$OptActive = new ComboBox("OptActive", "class='form-control'", $tActive);
$OptActive->valueField = "Id";
$OptActive->textField = "Value";


if($active!="") $OptActive->SetSelectedValue($active);

if($OptNewsType!="") $OptNewsTypes->SetSelectedValue($OptNewsType);

$dTable = $messageRepo->SearchNewsEvents();

$tNewsEvents = $dTable[0];

$totalRecords = $data[1];

?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">


<?php $title = "Add News for Mobile"; include($path."includes.php"); ?>
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
                <h3>Add News for Mobile</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                  	
                    <form id="newsForm" method="post" action="newsevents.php" class="form-horizontal form-label-left" >
                        <p><h5>Enter news heading and other details.</h5></p>
                        <div class="form-group">
                    	<?php if($response == 0) { ?>
                          <div class="alert alert-danger">
                          	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						  	<?php echo $message; ?>
                          </div>
                          <?php } else if($response == 1) { ?>
                            <div class="alert alert-success">
                            	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<?php echo $message; ?>
                            </div>
                      	  <?php } ?>
                         </div>
                         <input type="hidden" id="id" name="id" />
                         <input type="hidden" id="mode" name="mode" value="<?php echo $mode; ?>" />
                         <input type="hidden" id="TxtEditId" name="TxtEditId" value="<?php echo $id; ?>" />
                         <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
                         <div align="center">
                            <div class="form-horizontal form-label-left">
                            
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtPostDate">News Date <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<div class="col-md-4 col-sm-4 col-xs-12" style="padding-left:0px;padding-right:0px;">
                                      <input type="text" id="TxtPostDate" name="TxtPostDate" required="required" 
                                      class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $functions->formatDate($TxtPostDate, "m/d/Y"); ?>"/>
                                  	</div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptNewsTypes">News Type <span class="required">*</span></label>
                                    <div class="col-md-5 col-sm-5 col-xs-12" style="padding-right:0px;">
                                      <?php $OptNewsTypes->Bind(); ?>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsUrl">News Url <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TxtNewsUrl" name="TxtNewsUrl" required="required" 
                                  class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtNewsUrl))); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtHeading">Heading <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TxtHeading" name="TxtHeading" required="required" 
                                  class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtHeading))); ?>">
                                </div>
                            </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtSubheading">Sub Heading </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="TxtSubheading" name="TxtSubheading" required="required" 
                              class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtSubheading))); ?>">
                            </div>
                          </div>
                          <div class="row form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtImage">Image Link</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="TxtImage" name="TxtImage" 
                              class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtImage))); ?>">
                            </div>
                          </div>
                          
                          <div class="row form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptActive">Active <span class="required">*</span></label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <?php $OptActive->Bind(); ?>
                            </div>
                          </div>
                              
                          <div class="ln_solid"></div>
                          <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                              <button type="button" id="CmdSubmit" name="CmdSubmit" class="btn btn-primary">Submit</button>
                              <button type="button" id="CmdCancel" name="CmdCancel" class="btn btn-default">Cancel</button>
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
                            
                            <form id="form1" data-parsley-validate class="form-horizontal form-label-left">
                            	<?php /* ?>
                            	<div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtSearchText">Search News </label>
                                		
                                  <div class="input-group col-md-6 col-xs-12">
                                  <input type="text" id="TxtSearchText" placeholder="" name="TxtSearchText" 
                                  		 class="form-control" value="<?php echo $TxtSearchText; ?>">
                                  <span class="fa fa-search form-control-feedback right" aria-hidden="true"></span>
                                  <!--<span class="input-group-btn">
                                      <button type="button" class="btn btn-primary"><span class="fa fa-search" aria-hidden="true"></span></button>
                                  </span>-->
                                  </div>
                                  
                                </div>
                                <?php */ ?>
                                
                                <table class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th style="width:40px; text-align:center;">#</th>
                                      <th style="width:40px;">Id</th>
                                      <th style="width:100px;">Date</th>
                                      <th style="width:100px;">Type</th>
                                      <th style="width:375px;">Heading</th>
                                      <th style="width:120px;">URL</th>
                                      <th style="width:60px;">Active</th>
                                      <th style="width:120px;">User</th>
                                      <th style="width:80px;">Action</th>
                                      <th style="width:80px;">Archived</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  if ($tNewsEvents)
                                  {
                                      $index = $offset +1;
                                      foreach($tNewsEvents->Rows as $row)
                                      {
										  if ( $row->Archived == "0" ) {
											  $archived = "Unarchive";
											  $color = "";
										  }else {
											  $archived = "Archived";
											  $color = "color:blue;";
										  }
										  
                                  ?>
                                    <tr>
                                      <th scope="row" style="text-align:center;"><?php echo $index++; ?></th>
                                      <td><?php echo $row->Id; ?></td>
                                      <td><?php echo $functions->formatDate($row->PostDate, "d M, Y"); ?></td>
                                      <td><?php echo $row->NewsType; ?></td>
                                      <td><?php echo stripslashes($row->Heading); ?></td>
                                      <td><a href="<?php echo $row->NewsUrl; ?>" target="_blank">News Url <i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                                      <td><?php echo $row->Active; ?></td>
                                      <td><?php echo $row->UserTitle; ?></td>
                                      <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onEdit(<?php echo $row->Id.",".$page;?>)">Edit</a></td>
                                      <td style="background:#ecf0f1;<?php echo $color; ?>"><?php echo $archived; ?><br/><a href="#" style="font-size:11px;" onclick="javascript:onArchived(<?php echo $row->Id.",".$page;?>)">Change</a></td>
                                    </tr>
                                    <?php
                                        }
                                   }
                                    ?>
                                    
                                    <tr style='background-color:#F3F3F8;border-bottom:1px solid lightgray;border-left:1px solid gray;'>
                                        <td colspan="10">
                                        <?php
                                            include("../paging.php");
                                            $url = $domainName . "mapp/newsevents.php";
											$newsId = $id > 0 ? (int)$id : (int)$TxtEditId;
                                            Paging::Draw($page, $totalRecords, $recordsPerPage, $url, (int)$newsId);
                                        ?>
                                        </td>
                                    </tr>
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

</body>
<script>

$(document).ready(function() {
	
	$('#TxtPostDate').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4"
		}, function(start, end, label) {
		  console.log(start.toISOString(), end.toISOString(), label);
	});
	
	$( "#CmdSubmit" ).on( "click", save );
	$( "#CmdCancel" ).on( "click", clears );
	
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

function onArchived(id,g)
{
	if (confirm('Are you sure you want to change archive status?'))
	{
		$("#id").val(id);
		$("#TxtEditId").val("0");
		$("#Txtg").val(g);
		$("#mode").val("archive");
		document.forms["newsForm"].submit();
	}
}

function save()
{
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


function validates()
{
	
	if ( !IsDate($("#TxtPostDate").val()) )
	{
		alert("Please enter valid date");
		$("#TxtPostDate").focus();
		return false;
	}
	
	if ( $("#TxtHeading").val().trim() == "" )
	{
		alert("Please enter news heading.");
		$("#TxtHeading").focus();
		return false;
	}
	
	if ( $("#TxtNewsUrl").val().trim() == "" )
	{
		alert("Please enter valid news URL.");
		$("#TxtNewsUrl").focus();
		return false;
	}
	
	return true;
}

function clears()
{
	window.location = "newsevents.php";
	
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


</script>

</html>
