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

$id		   = isset($_REQUEST['id']) 	   ? (int)$_REQUEST['id'] 		 : 0;
$TxtEditId = isset($_REQUEST['TxtEditId']) ? (int)$_REQUEST['TxtEditId'] : 0;

#load locations for user selection
if ( $id > 0 && $TxtEditId == 0 )
{
	$data = $newsRepo->GetPublishNewsLocations( $id );
	
	$heading = $data[0];
	$tpublishNews = $data[1];
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	#updating
	#UpdateNewsLocations($newsId, $locationIds, $userId)
	$response = $newsRepo->UpdateNewsLocations($TxtEditId, $_REQUEST['TxtLocations'], USER_ID);
	
	if ($response > 0)
	{
		$message = "Record updated successfully.";
	}
	else
		$message = "Record not updated.";	
	
	unset($_SERVER['QUERY_STRING']);
}


$TxtSearchText = isset($_REQUEST['TxtSearchText']) ? $_REQUEST['TxtSearchText'] : "";

$data = $newsRepo->GetPublishNews($TxtSearchText, $offset, $recordsPerPage, USER_ID);

$totalRecords = $data[0];

$tNews = $data[1];
//$tpublishNews->PrintTable();
?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">

<?php $title = "Publish News"; include($path."includes.php"); ?>

<style>

th:first-child, th:last-child, td:last-child{text-align:center;}

/*.radio-wrap.half {
    width: 50%;
	-webkit-border-top-left-radius: 4px;
	-webkit-border-bottom-left-radius: 4px;
}
.radio-wrap {
    height: 30px;
    position: relative;
    float: left;
    display: inline-block;
    margin-bottom: 20px;
}
:root input.custom-radio ~ label {
    display: inline-block;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 1px solid #bebebe;
    background-image: -moz-linear-gradient(top,#fefefe, #e1e1e1);
    background-image: -webkit-linear-gradient(top, #fefefe, #e1e1e1);
    text-align: center;
    line-height: 28px;
    cursor: pointer;
    color: #888;
    text-shadow: 0 1px 0 #fff;
}
*/

/*
input[type=checkbox] {
   visibility: hidden;
}

label {
   background: green;
   width: 400px;
   height: 100px;
   line-height: 100px;
   color: white;
   text-align: center;
}

input[type=checkbox]:checked ~ label {
   background: red;
}
*/

div label input {
   margin-right:100px;
}




#ck-button {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
	cursor: pointer; cursor: hand;
}

#ck-button:hover {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #929292;
    overflow:auto;
    float:left;
	cursor: pointer; cursor: hand;
    /*color:red;*/
}

#ck-button label {
    float:left;
	margin-bottom:0px;
    /*width:4.0em;*/
}

#ck-button label span {
    text-align:center;
    padding:3px 7px;
    display:block;
}

#ck-button label input {
    position:absolute;
    top:-20px;
}

#ck-button input:checked + span {
    background-color: #C3C3C3;
    color:#fff;
}
#ck-button input[type=checkbox] {
   visibility: hidden;
}

label { cursor: pointer; cursor: hand; }

</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
          	<div class="page-title">
              <div class="title_left">
                <h3>Publish News</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <form id="frmPublishNews" method="post" data-parsley-validate class="form-horizontal form-label-left">
                        <p><h3><?php echo $heading; ?></h3></p>
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
                        <input type="hidden" id="TxtEditId" name="TxtEditId" value="<?php echo $id; ?>" />
                        <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
                        
                        <?php
                        if($id>0) { ?>
                        	<div id="chkLocations">
                        <?php
							if($tpublishNews) {
								$group = "";
								foreach($tpublishNews->Rows as $row)
								{
									if($group!="" && $row->Group != $group) { ?>
                                        </div>
                                    </div>
                                 <?php } 
									
									if($row->Group != $group)
									{
										$group=$row->Group; 
							?>
								<div class="row form-group">
                                	
									<label class="control-label col-md-2 col-sm-2 col-xs-12" id="<?php echo $row->Group; ?>" name="<?php echo $row->Group; ?>"><?php echo $row->Group; ?></label>
                                    
									<div class="col-md-10 col-sm-10 col-xs-12">
                                    <?php } ?>
                                    	
                                    	<div id="ck-button">
                                           <label>
                                              <input type="checkbox" id="TxtLocations" <?php if($row->NewsId>0) echo " checked='checked' "; ?> name="TxtLocations[]"  
                                              value="<?php echo $row->Code; ?>"><span><?php echo $row->Location; ?></span>
                                           </label>
                                        </div>
                                
					  	<?php }
							}?>
							</div>
                            <div style="height:60px;"></div>
                            
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                	<button type="submit" id="CmdPublish" name="CmdPublish" class="btn btn-primary">Publish</button>
                                	<button type="button" id="CmdCancel" name="CmdCancel" onClick="javascript:onCancel(<?php echo $page; ?>)" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                            
                            <?php
						} ?>
                    </form>
                    <?php
                        if($id==0) { ?>
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
                          <th style="width:40px;">#</th>
                          <th style="width:50px;">Id</th>
                          <th style="width:50px;">Date</th>
                          <th style="width:375px;">News Heading</th>
                          <th style="width:50px;">Type</th>
                          <th style="width:60px;">Template</th>
                          <th style="width:150px;">Publish Locations</th>
                          <th style="width:60px;">Action</th>
                          <!--<th style="width:100px;">User</th>-->
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      if ( $tNews )
                      {
                          $index = $offset +1;
                          foreach($tNews->Rows as $row)
                          {
                      ?>
                        <tr>
                          <th scope="row"><?php echo $index++; ?></th>
                          <td><?php echo $row->Id; ?></td>
							<td><?php echo $row->Date; ?></td>
                          <td><?php echo stripslashes($row->Heading); ?></td>
                          <td><?php echo $row->NewsType; ?></td>
                          <td><?php echo $row->Template; ?></td>
                          <td><?php echo $row->PublishLocations; ?></td>
                          <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onPublish(<?php echo $row->Id.",".$page;?>)">Publish</a></td>
                          <!--<td><?php //echo $row->Title; ?></td>-->
                        </tr>
                        <?php
                            }
                       }
                        ?>
                        
                        <tr style='background-color:#F3F3F8;border-bottom:1px solid lightgray;border-left:1px solid gray;'>
                            <td colspan="10" style="text-align:left;">
                            <?php
                                include("../paging.php");
                                $url = $domainName . "news/publishnews.php";
                                $newsId = $id > 0 ? (int)$id : (int)$TxtEditId;
                                Paging::Draw($page, $totalRecords, $recordsPerPage, $url, (int)$newsId);
                            ?>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                    </form>
                    <?php } ?>
                    
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
	<script src="js/publishnews.js"></script>
<script>

$(document).ready(function() {
	
	/*$("#chkLocations").find('input:checkbox').each(function() {
		
		//$( this ).click( {object: this}, checkedUnchecked );
		
	});*/
	
	$("#Principal").click( {name: "#Principal"}, checkedAll );
	
	$("#News").click( {name: "#News"}, checkedAll );
	
	$("#Alumni").click( {name: "#Alumni"}, checkedAll );
	
	$("#ParentPortal").click( {name: "#ParentPortal"}, checkedAll );
	
	$("#BoarderPortal").click( {name: "#BoarderPortal"}, checkedAll );
	
	$("#StudentPortal").click( {name: "#StudentPortal"}, checkedAll );
});

function checkedAll( event )
{
	var parentTag = $( event.data.name ).parent().get( 0 );
	
	$(parentTag).find('input:checkbox').each(function() {
		
		//$( this ).attr('checked', 'checked');
		$( this ).prop('checked', true);
	});
	
	

	//alert( selected );
}

function checkedUnchecked( event )
{
	var obj = event.data.object;
	
	//$(this).is(':checked')
	//if ( obj.hasAttribute("checked") )
	if ( $( obj ).is(':checked') )
	{
		//$( obj ).removeAttr( "checked" );
		$( obj ).prop('checked', false);
	}
	else
	{
		//$( obj ).attr('checked', 'checked');
		$( obj ).prop('checked', true);
	}
}


</script>

</body>
</html>




<!--div label input {
   margin-right:100px;
}
body {
    font-family:sans-serif;
}

#ck-button {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
}

#ck-button:hover {
    background:red;
}

#ck-button label {
    float:left;
    width:4.0em;
}

#ck-button label span {
    text-align:center;
    padding:3px 0px;
    display:block;
}

#ck-button label input {
    position:absolute;
    top:-20px;
}

#ck-button input:checked + span {
    background-color:#911;
    color:#fff;
}


<div id="ck-button">
   <label>
      <input type="checkbox" value="1"><span>red</span>
   </label>
</div>
-->







