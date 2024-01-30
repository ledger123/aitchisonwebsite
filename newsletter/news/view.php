<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("newsrepository.php");

$newsRepo = new NewsRepository( $dc );
$message = "";
$response = -1;

$newsId = isset($_REQUEST['id']) ? (int)$_REQUEST['id']	: 0;

//echo "id: ".$newsId."<br />";

#load news
if ( $newsId > 0 )
{
	$tNews = $newsRepo->GetNews($newsId, "", "", "", 0);
	$row = NULL;
	
	$templateId 	   ="";
	$TxtNewsDate 	   = "";
	$TxtNewsHeading	   = "";
	$ChkShowHeading	   = 0;
	$TxtNewsSubheading = "";
	$OptNewsType	   = "";
	$active = "";
	
	if($tNews && $tNews->rowsCount() > 0)
	{
		$row = $tNews->Rows[0];
		
		
		$TxtNewsDate 	   = $row->Date;
		$TxtNewsHeading	   = $row->Heading;
		$ChkShowHeading	   = $row->ShowHeading;
		$TxtNewsSubheading = $row->Subheading;
		$OptNewsType	   = $row->NewsType;
		$active    	  	   = $row->Active;
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../vendors/jquery.superslides/superslides.css">
<link rel="stylesheet" href="../vendors/jquery.tosrus/jquery.tosrus.all.css">


<?php $title = "News Contents"; include($path."includes.php"); ?>
  
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
          	<div class="page-title">
              <div class="title_left">
                <h3>News Contents</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                    <form id="contentsForm" method="post" action="contents.php<?php if($newsId>0) echo "?id=".$newsId; ?>" class="form-horizontal form-label-left" >
                  	<?php
					
					$templatePath = "../../";
					include("addtemplate.php");
					
					?>
                	</form>
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
    <script src="../vendors/jquery.superslides/jquery.superslides.min.js"></script>
    <script src="../vendors/jquery.superslides/jquery.tosrus.min.all.js"></script>
    <script src="../vendors/ckeditor/ckeditor.js"></script>
	<script src="js/news.js"></script>

</body>
</html>
