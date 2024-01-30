<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("newsrepository.php");

$newsRepo = new NewsRepository( $dc );
$message = "";
$response = -1;

$id		   = isset($_REQUEST['id']) 	   ? (int)$_REQUEST['id'] 		 : 0;

#load locations for user selection
//if ( $id == 0 )
{
	$data = $newsRepo->GetPublishNewsLocations( $id );
	
	$heading = $data[0];
	$tpublishNews = $data[1];
}
//elseif ( $id > 0 )
{
	$tNews = $newsRepo->GetDetailedPublishedNewsByLocationId( $id );
	//$tNews->PrintTable();
}


?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">

<?php $title = "Published News by Location"; include($path."includes.php"); ?>

<style>

th:first-child, th:last-child, td:last-child{text-align:center;}


div label input {
   margin-right:100px;
}


.ck-button {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
	cursor: pointer; cursor: hand;
}

.ck-button:hover {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #929292;
    overflow:auto;
    float:left;
	cursor: pointer; cursor: hand;
    /*color:red;*/
}

.ck-button-checked {
    background-color: #337ab7;
    color: #fff;
}

/* Start tool tip */
.wrapper {
  
  /*cursor: help;*/
  
  position: relative;
  
  width: 200px;
  -webkit-transform: translateZ(0); /* webkit flicker fix */
  -webkit-font-smoothing: antialiased; /* webkit text rendering fix */
}

.wrapper .tooltip {
  background: #1496bb;
  bottom: 100%;
  color: #fff;
  display: block;
  left: 25px;
  margin-bottom: 15px;
  opacity: 0;
  padding: 20px;
  pointer-events: none;
  position: absolute;
  width: 90%;
  -webkit-transform: translateY(10px);
     -moz-transform: translateY(10px);
      -ms-transform: translateY(10px);
       -o-transform: translateY(10px);
          transform: translateY(10px);
  -webkit-transition: all .25s ease-out;
     -moz-transition: all .25s ease-out;
      -ms-transition: all .25s ease-out;
       -o-transition: all .25s ease-out;
          transition: all .25s ease-out;
  -webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
     -moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
      -ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
       -o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
          box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
}

/* This bridges the gap so you can mouse into the tooltip without it disappearing */
.wrapper .tooltip:before {
  bottom: -20px;
  content: " ";
  display: block;
  height: 20px;
  left: 0;
  position: absolute;
  width: 100%;
}  

/* CSS Triangles - see Trevor's post */
.wrapper .tooltip:after {
  border-left: solid transparent 10px;
  border-right: solid transparent 10px;
  border-top: solid #1496bb 10px;
  bottom: -10px;
  content: " ";
  height: 0;
  left: 50%;
  margin-left: -13px;
  position: absolute;
  width: 0;
}
  
.wrapper:hover .tooltip {
  opacity: 1;
  pointer-events: auto;
  -webkit-transform: translateY(0px);
     -moz-transform: translateY(0px);
      -ms-transform: translateY(0px);
       -o-transform: translateY(0px);
          transform: translateY(0px);
}

/* IE can just show/hide with no transition */
.lte8 .wrapper .tooltip {
  display: none;
}

.lte8 .wrapper:hover .tooltip {
  display: block;
}
/* End tool tip */
	
</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
          	<div class="page-title">
              <div class="title_left">
                <h3>Published News by Location</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                  	
                    <form id="frmPublishNews" method="post" data-parsley-validate class="form-horizontal form-label-left">
                        
                        <input type="hidden" id="id" name="id" />
                        
                        <?php
                        //if($id==0)
						 { ?>
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
                                	
									<label class="control-label col-md-2 col-sm-2 col-xs-12" style="font-size:14px; color:#3c86d4;"><?php echo $row->Group; ?></label>
                                    
									<div class="col-md-10 col-sm-10 col-xs-12">
                                    <?php } ?>
                                    	   
                                          <button class="ck-button <?php if ($row->Code == $id) echo " ck-button-checked";?>" type="button" id="TxtLocation<?php echo $row->Code; ?>" name="TxtLocation<?php echo $row->Code; ?>"  
                                          onclick="javascript:showNewsList('<?php echo $row->Code; ?>')"><?php echo $row->Location; ?></button>
                                        
                                
					  	<?php }
							}?>
							</div>
                            <div style="height:60px;"></div>
                            
                            <?php
						} ?>
                    </form>
                    <?php
                        if($id>0) { ?>
                        
                    <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <th style="width:40px;">#</th>
                          <th style="width:75px;">Date</th>
                          <th style="width:375px;">News Heading</th>
                          <th style="width:50px;">Type</th>
                          <th style="width:60px;">Template</th>
                          <th style="width:90px;">News For</th>
                          <th style="width:100px;">Created By</th>
                          <th style="width:100px;">Published By</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      if ( $tNews )
                      {
						  //$tNews->PrintTable();
                          $index = $offset +1;
                          foreach($tNews->Rows as $row)
                          {
                      ?>
                        <tr>
                          <th scope="row"><?php echo $index++; ?></th>
                          <td><?php echo $row->Date; ?></td>
                          <td class="wrapper"><?php echo stripslashes($row->Heading); ?>
                          	<div class="tooltip"><u>Published Locations</u><br><?php echo stripslashes($row->Locations); ?></div>
                          </td>
                          <td><?php echo $row->NewsType; ?></td>
                          <td><?php echo $row->Template; ?></td>
                          <td><?php if($row->NewsFor==1) echo "News & Events"; else echo "Alumni"; ?></td>
                          <td><?php echo $row->CreatedBy; ?></td>
                          <td><?php echo $row->PublishedBy; ?></td>
                        </tr>
                        <?php
                            }
                       }
                        ?>
                        
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
	<script src="js/publishnews.js"></script>
<script>

$(document).ready(function() {
	
});

function showNewsList( value )
{
	window.location = "publishednews.php?id="+value;
}


</script>

</body>
</html>
