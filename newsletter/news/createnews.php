<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("newsrepository.php");

$newsRepo = new NewsRepository( $dc );
$message = "";
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

if ($id > 0 && $mode == "delete")
{
	$response = $newsRepo->SetActiveNews( $id, 0, USER_ID );
	
	if ($response > 0)
		$message = "Record deleted successfully.";
	else
		$message = "Record not delete.";
	
	$mode = "";
	$id = 0;
}

#load news for edit
else if ( $id > 0 && $TxtEditId == 0 )
{
	$news = $newsRepo->GetNews( $id, "", "", "", 0, 0, 1, 1, USER_ID );
	
	$templateId 	    = 0;
	$template	 	    = "";
	$TxtNewsDate 	    = "";
	$TxtNewsHeading	    = "";
	$ChkShowHeading	    = 0;
	$TxtNewsSubheading  = "";
	$OptNewsType	    = "";
	$OptNewsFor			= "";
	$OpenAccess			= 1;
	$Archived			= 1;
	$active = "";
	
	if($news && $news->rowsCount() > 0)
	{
		$row = $news->Rows[0];
		
		$templateId 	   = $row->TemplateId;
		$template	 	   = $row->Template;
		$TxtNewsDate 	   = $row->Date;
		$ChkShowDate	   = $row->ShowDate;
		$TxtNewsTitle	   = $row->Title;
		$TxtNewsHeading	   = $row->Heading;
		$ChkShowHeading	   = $row->ShowHeading;
		$TxtNewsSubheading = $row->Subheading;
		$TxtNewsSubheading2= $row->Subheading2;
		$OptNewsType	   = $row->NewsType;
		$OptNewsFor		   = $row->NewsFor;
		$NewsIcon		   = $row->NewsIcon;
		$TxtNewsIconLink   = $row->NewsIconLink;
		$OpenAccess		   = $row->OpenAccess;
		$Archived		   = $row->Archived;
		$active    	  	   = $row->Active;
		
	}
	
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	#upate news
	$templateId 	    = isset($_REQUEST['template'])  		 ? (int)$_REQUEST['template']     : "";
	$ChkDefaultIcon	    = isset($_REQUEST['ChkDefaultIcon'])     ? 1								: 0;
	$TxtNewsDate 	    = isset($_REQUEST['TxtNewsDate']) 	     ? $_REQUEST['TxtNewsDate']  	    : "";
	$ChkShowDate	    = isset($_REQUEST['ChkShowDate'])        ? 1							    : 0;
	$TxtNewsTitle	    = isset($_REQUEST['TxtNewsTitle'])	     ? $_REQUEST['TxtNewsTitle']		: "";
	$TxtNewsHeading	    = isset($_REQUEST['TxtNewsHeading'])     ? $_REQUEST['TxtNewsHeading']     : "";
	$ChkShowHeading	    = isset($_REQUEST['ChkShowHeading'])     ? 1							   : 0;
	$TxtNewsSubheading  = isset($_REQUEST['TxtNewsSubheading'])  ? $_REQUEST['TxtNewsSubheading']  : "";
	$TxtNewsSubheading2 = isset($_REQUEST['TxtNewsSubheading2']) ? $_REQUEST['TxtNewsSubheading2'] : "";
	$OptNewsType	    = isset($_REQUEST['OptNewsTypes'])	     ? $_REQUEST['OptNewsTypes']		: 0;
	$OptNewsFor	   		= isset($_REQUEST['OptNewsFor'])	     ? $_REQUEST['OptNewsFor']			: 0;
	$OpenAccess	   		= isset($_REQUEST['OptOpenAccess'])	     ? $_REQUEST['OptOpenAccess']		: 1;
	$Archived	   		= isset($_REQUEST['OptArchived'])	     ? $_REQUEST['OptArchived']			: 0;
	$TxtNewsIconLink    = isset($_REQUEST['TxtNewsIconLink'])    ? $_REQUEST['TxtNewsIconLink']    : "";
	
	/*if (isset($_REQUEST['template']))
	{
		echo "id: ".$templateId = filter_input(INPUT_POST, 'template', FILTER_SANITIZE_NUMBER_INT);
	}*/
	
	
	//$ChkShowHeading = $ChkShowHeading == "on"  ? 1 : 0;
	//echo "Heading: ".$TxtNewsHeading."<br />";
	$TxtNewsTitle       = $purifier->purify($TxtNewsTitle);
	$TxtNewsHeading     = $purifier->purify($TxtNewsHeading);
	$TxtNewsSubheading  = $purifier->purify($TxtNewsSubheading);
	$TxtNewsSubheading2 = $functions->placeQuote($TxtNewsSubheading2);
	$TxtNewsDate 		= $functions->formatDate($TxtNewsDate);
	
	//echo "ChkDefaultIcon: ".$ChkDefaultIcon."<br />";
	
	#updating
	if( $TxtEditId > 0 && strlen ($TxtNewsHeading) > 3 )
	{
		#some alumni news has same news headings
		//if ( !$newsRepo->IsNewsHeadingExists( $TxtEditId, $TxtNewsHeading ) )
		if ( true )
		{
			//UpdateNews($newsId, $templateId, $date, $showDate, $title, $heading, $subHeading, $subHeading2, $newsType, $newsFor, $showHeading, $newsIcon, $txtNewsIconLink, $OpenAccess)
			$response = $newsRepo->UpdateNews( $TxtEditId, $templateId, $TxtNewsDate, $ChkShowDate, $TxtNewsTitle, $TxtNewsHeading, $TxtNewsSubheading, $TxtNewsSubheading2, $OptNewsType, $OptNewsFor, $ChkShowHeading, $ChkDefaultIcon, $TxtNewsIconLink, $OpenAccess, $Archived );
			
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
	
	$id 			    = "0";
	$TxtNewsDate 	    = "";
	$TxtNewsTitle		= "";
	$TxtNewsHeading     = "";
	$TxtNewsSubheading  = "";
	$TxtNewsSubheading2 = "";
	$ChkShowHeading	    = "";
	$TxtNewsIconLink	= "";
	
	unset($_SERVER['QUERY_STRING']);
}
elseif ( $id == 0 && $TxtEditId == 0 )
{
	#new news
	$templateId 	   = isset($_REQUEST['template'])  		    ? (int)$_REQUEST['template']      : "";
	$TxtNewsDate 	   = isset($_REQUEST['TxtNewsDate']) 	    ? $_REQUEST['TxtNewsDate']  	  : "";
	$ChkShowDate	   = isset($_REQUEST['ChkShowDate'])        ? 1							      : 0;
	$TxtNewsTitle	   = isset($_REQUEST['TxtNewsTitle'])	    ? $_REQUEST['TxtNewsTitle']		  : "";
	$TxtNewsHeading	   = isset($_REQUEST['TxtNewsHeading'])     ? $_REQUEST['TxtNewsHeading']     : "";
	$ChkShowHeading	   = isset($_REQUEST['ChkShowHeading'])     ? 1							      : 0;
	$TxtNewsSubheading = isset($_REQUEST['TxtNewsSubheading'])  ? $_REQUEST['TxtNewsSubheading']  : "";
	$newsSubheading2   = isset($_REQUEST['TxtNewsSubheading2']) ? $_REQUEST['TxtNewsSubheading2'] : "";
	$OptNewsType	   = isset($_REQUEST['OptNewsTypes'])	    ? $_REQUEST['OptNewsTypes']		  : "";
	$OptNewsFor		   = isset($_REQUEST['OptNewsFor'])	   		? $_REQUEST['OptNewsFor']		  : 0;
	$OpenAccess		   = isset($_REQUEST['OptOpenAccess'])	    ? $_REQUEST['OptOpenAccess']	  : 1;
	$Archived		   = isset($_REQUEST['OptArchived'])	    ? $_REQUEST['OptArchived']		  : 0;
	$TxtNewsIconLink   = isset($_REQUEST['TxtNewsIconLink'])    ? $_REQUEST['TxtNewsIconLink']    : "";
	
	$active = 1;
	
	$TxtNewsTitle       = $purifier->purify($TxtNewsTitle);
	$TxtNewsHeading     = $purifier->purify($TxtNewsHeading);
	$TxtNewsSubheading  = $purifier->purify($TxtNewsSubheading);
	
	$newsSubheading2    = $functions->placeQuote($newsSubheading2);
	$TxtNewsDate 		= $functions->formatDate($TxtNewsDate);
	
	#create news
	if( strlen ($TxtNewsHeading) > 3 )
	{
		if ( !$newsRepo->IsNewsHeadingExists(0, $TxtNewsHeading) )
		{
			$response = $newsRepo->SaveNews($templateId, $TxtNewsDate, $ChkShowDate, $TxtNewsTitle, $TxtNewsHeading, $TxtNewsSubheading, $newsSubheading2, $OptNewsType, $OptNewsFor, $ChkShowHeading, $active, USER_ID, $TxtNewsIconLink, $OpenAccess, $Archived);
			
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
	
	$id 			    = "0";
	$TxtNewsDate 	    = "";
	$TxtNewsTitle		= "";
	$TxtNewsHeading     = "";
	$TxtNewsSubheading  = "";
	$TxtNewsSubheading2 = "";
	$ChkShowHeading	    = "";
	$TxtNewsIconLink	= "";
}


$tNewsTypes = new DataTable();
$tNewsTypes->SetColumns( array("Id", "Value") );

$tNewsTypes->addRow( array("News",   "News") );
$tNewsTypes->addRow( array("Notice", "Notice") );
$tNewsTypes->addRow( array("Event",  "Event") );
$tNewsTypes->addRow( array("URL",   "URL") );
$tNewsTypes->addRow( array("ParentMeeting", "Parents Meeting") );

$OptNewsTypes = new ComboBox("OptNewsTypes", "class='form-control'", $tNewsTypes);
$OptNewsTypes->valueField = "Id";
$OptNewsTypes->textField = "Value";


/*$OptActive = new ComboBox("OptActive", "class='form-control'", $tActive);
$OptActive->valueField = "Id";
$OptActive->textField = "Value";

if($active!="") $OptActive->SetSelectedValue($active);*/


if($OptNewsType!="") $OptNewsTypes->SetSelectedValue($OptNewsType);

$TxtSearchText = isset($_POST['TxtSearchText']) ? $_POST['TxtSearchText'] : "";


#GetNews($newsId, $newsType, $fromDate, $toDate, $approvedById)
$data = $newsRepo->SearchNews($TxtSearchText, $offset, $recordsPerPage, 1, USER_ID);

$tNews = $data[0];

#GetNewsCounts($active, $userId)
$totalRecords = $data[1]; //$newsRepo->GetNewsCounts(1, USER_ID);

?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">


<?php $title = "Create News"; include($path."includes.php"); ?>
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
                <h3>Create News</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                  	
                    <form id="newsForm" method="post" action="createnews.php" class="form-horizontal form-label-left" >
                        <h5>Select a template and enter news heading and other details.</h5>
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
                            <div id="templates" class="cc-selector form-group">
                                <div class="box1">
                                    <input <?php if($template=="Standard") echo "checked"?> id="template1" type="radio" name="template" value="1" />
                                    <label class="drinkcard-cc template1" for="template1">Standard</label>
                                </div>
                                <div class="box1">
                                    <input <?php if($template=="Image Gallery") echo "checked"?> id="template2" type="radio" name="template" value="2" />
                                    <label class="drinkcard-cc template2"for="template2">Image Gallery</label>
                                </div>
                                <div class="box1">
                                    <input <?php if($template=="Image Gallery2") echo "checked"?> id="template5" type="radio" name="template" value="5" />
                                    <label class="drinkcard-cc template5" for="template5">Image Gallery2</label>
                                </div>
                                <div class="box1">
                                    <input <?php if($template=="Simple") echo "checked"?> id="template3" type="radio" name="template" value="3" />
                                    <label class="drinkcard-cc template3"for="template3">Simple</label>
                                </div>
                                <div class="box1">
                                    <input <?php if($template=="NewsLetter") echo "checked"?> id="template7" type="radio" name="template" value="7" />
                                    <label class="drinkcard-cc template7" for="template7">News Letter</label>
                                </div>
                                <div class="box1">
                                    <input <?php if($template=="NewsLetter2") echo "checked"?> id="template4" type="radio" name="template" value="4" />
                                    <label class="drinkcard-cc template4" for="template4">News Letter 2</label>
                                </div>
                                <div class="box1">
                                    <input <?php if($template=="URL") echo "checked"?> id="template6" type="radio" name="template" value="6" />
                                    <label class="drinkcard-cc template6" for="template6">News URL</label>
                                </div>
                            </div><br />
                            
                            <?php if((int)$id>0) { ?>
                                <div class="row form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">News Icon </label>
                                    <div id="defaultIcon" class="col-md-6 col-sm-6 col-xs-12" align="left">
                                    	<label for="ChkDefaultIcon">Default Icon</label>
                                    	<input id="ChkDefaultIcon"
                                         <?php if($NewsIcon==App::$logoUrl) echo " checked "; ?>
                                         name="ChkDefaultIcon" type="checkbox" /> &nbsp;&nbsp;&nbsp;
                                    	<img id="ImgIcon" src="<?php echo $NewsIcon; ?>" alt="img" width="100" height="70" style="max-width:100px; max-height:70px;" />
                                        <input type="button" value="Change" onclick="javascript:onSetIcon(<?php echo $id; ?>)"/>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsIconLink">News Icon Link</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TxtNewsIconLink" name="TxtNewsIconLink" required="required" 
                                  class="form-control col-md-7 col-xs-12" value="<?php echo $TxtNewsIconLink; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsDate">News Date</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<div class="col-md-4 col-sm-4 col-xs-12" style="padding-left:0px;">
                                      <input type="text" id="TxtNewsDate" name="TxtNewsDate" required="required" 
                                      class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $functions->formatDate($TxtNewsDate, "m/d/Y"); ?>"/>
                                  	</div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ChkShowDate">Show Date</label>
                                      <div class="col-md-8 col-sm-8 col-xs-12" align="left" style="padding-top:5px;">
                                          <input type="checkbox" id="ChkShowDate" name="ChkShowDate"
                                          class="col-md-2 col-md-2 col-xs-12" <?php if ((int)$ChkShowDate==1) echo "checked"; ?>/>
                                      </div>
                                  	</div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsTitle">News Title</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TxtNewsTitle" name="TxtNewsTitle" 
                                  class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtNewsTitle))); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsHeading">News Heading <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TxtNewsHeading" name="TxtNewsHeading" required="required" 
                                  class="form-control col-md-7 col-xs-12" value="<?php echo (stripslashes(utf8_decode($TxtNewsHeading))); ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ChkShowHeading">Show</label>
                                <div class="col-md-2 col-sm-2 col-xs-12" align="left" style="padding-top:5px;">
                                  
                                  <input type="checkbox" name="ChkShowHeading" id="ChkShowHeading"
                                  class="col-md-2 col-md-2 col-xs-12" <?php if ((int)$ChkShowHeading==1) echo "checked"; ?>>&nbsp; <label for="ChkShowHeading">News Heading</label>
                                </div>
                            </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsSubheading">Sub Heading </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" id="TxtNewsSubheading" name="TxtNewsSubheading" required="required" 
                                  class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtNewsSubheading))); ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsSubheading2">Sub Heading2</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <textarea id="TxtNewsSubheading2" name="TxtNewsSubheading2" rows="1" cols="80">
								                    <?php echo $functions->replaceQuote($TxtNewsSubheading2); ?>
                                  </textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptNewsTypes">News Type <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                  <?php $OptNewsTypes->Bind(); ?>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptNewsFor">News For <span class="required">*</span></label>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                  <select id="OptNewsFor" name="OptNewsFor" class="form-control">
                                  	<option <?php if ($OptNewsFor=="1") echo "selected "; ?> value="1">News and Events</option>
                                    <option <?php if ($OptNewsFor=="2") echo "selected "; ?>value="2">Alumni</option>
                                  </select>
                                </div>
                              </div>
                              
							  <div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptOpenAccess">Open Access</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                	<div class="col-md-4 col-sm-4 col-xs-12" style="padding-left:0px;">
                                      <select id="OptOpenAccess" name="OptOpenAccess" class="form-control">
										<option <?php if ($OpenAccess=="1") echo "selected "; ?> value="1">Yes</option>
										<option <?php if ($OpenAccess=="0") echo "selected "; ?>value="0">No</option>
									  </select>
                                  	</div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="OptArchived" style="padding-left: 0;">Archived</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                      <select id="OptArchived" name="OptArchived" class="form-control">
										<option <?php if ($Archived=="1") echo "selected "; ?> value="1">Yes</option>
										<option <?php if ($Archived=="0") echo "selected "; ?>value="0">No</option>
									  </select>
                                        </div>
                                  	</div>
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
                            
                            <form id="form1" method="post" data-parsley-validate class="form-horizontal form-label-left">
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
                              
                                <table class="table table-bordered table-hover">
                                  <thead>
                                    <tr>
                                      <th style="width:40px; text-align:center;">#</th>
										<th style="width:40px; text-align:center;">Id</th>
                                      <th style="width:110px;">Template</th>
                                      <th style="width:100px;">Date</th>
                                      <th style="width:375px;">News Heading</th>
                                      <th style="width:60px;">Type</th>
                                      <th style="width:70px;">Access</th>
                                      <th style="width:70px;">Action</th>
                                      <th style="width:120px;">News Content</th>
                                      <th style="width:60px;">View</th>
                                      <th style="width:60px;">Delete</th>
                                      <th style="width:60px;">Archive</th>
                                      <!--<th style="width:120px;">User</th>-->
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  if ($tNews)
                                  {
                                      $index = $offset +1;
                                      foreach($tNews->Rows as $row)
                                      {
                                  ?>
                                    <tr>
                                      <th scope="row" style="text-align:center;"><?php echo $index++; ?></th>
                                      <td><?php echo $row->Id; ?></td>
									                    <td><?php echo $row->Template; ?></td>
                                      <td><?php echo $functions->formatDate($row->Date, "m/d/Y"); ?></td>
                                      <td><?php echo stripslashes($row->Heading); ?></td>
                                      <td><?php echo $row->NewsType; ?></td>
                                      <td style="text-align: center;"><?php if($row->OpenAccess==1) echo "<strong style='font-weight:800'>Yes</strong>"; else echo "No"; ?></td>
                                      <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onEdit(<?php echo $row->Id.",".$page;?>)">Edit</a></td>
                                      <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onAddDetails(<?php echo $row->Id;?>)">Add Contents</a></td>
                                      <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onViewNews(<?php echo $row->Id;?>)">View <i class="fa fa-external-link"></i></a></td>
                                      <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onDeleteNews(<?php echo $row->Id.",".$page;?>)" style="color:red;">Delete</a></td>
                                      <td style="text-align: center;"><?php if($row->Archived==1) echo "<strong style='font-weight:800'>Yes</strong>"; else echo "No"; ?></td>
                                      <!--<td><?php //echo $row->UserTitle; ?></td>-->
                                      
                                    </tr>
                                    <?php
                                        }
                                   }
                                    ?>
                                    
                                    <tr style='background-color:#F3F3F8;border-bottom:1px solid lightgray;border-left:1px solid gray;'>
                                        <td colspan="12">
                                        <?php
                                            include("../paging.php");
                                            $url = $domainName . "news/createnews.php";
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
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="../vendors/jquery.superslides/jquery.superslides.min.js"></script>
    <script src="../vendors/jquery.tosrus/jquery.tosrus.min.all.js"></script>
    <script src="../vendors/ckeditor/ckeditor.js"></script>
    <script src="../vendors/ckeditor/config.js"></script>
	<script src="js/news.js"></script>

</body>
</html>
