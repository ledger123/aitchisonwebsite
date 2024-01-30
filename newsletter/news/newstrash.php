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
if ( $id > 0 )
{
	$response = $newsRepo->SetActiveNews( $id, 1, USER_ID );
	
	if ($response > 0)
		$message = "Undo completed successfully.";
	else
		$message = "Problem in undo operation.";
	
	$id = 0;
}

$tNews = $newsRepo->GetNews(0, "", "", "", 0, $offset, $recordsPerPage, 0, USER_ID );

$totalRecords = $newsRepo->GetNewsCounts(0, USER_ID);

?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">

<?php $title = "News Trash"; include($path."includes.php"); ?>

<style>

th:first-child, th:last-child, td:last-child{text-align:center;}

</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
          	<div class="page-title">
              <div class="title_left">
                <h3>News Trash</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <form id="newsForm" method="post" data-parsley-validate class="form-horizontal form-label-left">
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
                        <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
                        
                    </form>
                    <?php
                        if($id==0) { ?>
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th style="width:40px;">#</th>
                          <th style="width:40px;">Code</th>
                          <th style="width:50px;">Date</th>
                          <th style="width:375px;">News Heading</th>
                          <th style="width:60px;">Type</th>
                          <th style="width:60px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      if ( $tNews )
                      {
                          $index = 1;
                          foreach($tNews->Rows as $row)
                          {
                      ?>
                        <tr>
                          <th scope="row"><?php echo $index++; ?></th>
                          <td><?php echo $row->Id; ?></td>
                          <td><?php echo $functions->formatDate( $row->Date, "m/d/Y" ); ?></td>
                          <td><?php echo $row->Heading; ?></td>
                          <td><?php echo $row->NewsType; ?></td>
                          <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onNewsUndo(<?php echo $row->Id.",".$page;?>)">Undo</a></td>
                        </tr>
                        <?php
                            }
                       }
                        ?>
                        
                        <tr style='background-color:#F3F3F8;border-bottom:1px solid lightgray;border-left:1px solid gray;'>
                            <td colspan="9" style="text-align:left;">
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
	<script src="js/news.js"></script>

</body>
</html>