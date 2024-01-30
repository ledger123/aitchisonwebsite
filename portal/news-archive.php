<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/dataCenter2.php");
include($path."news/newsrepository.php");

$dc2 = new DataCenter2();
$dc2->Connect();


$newsRepo = new NewsRepository($dc2);

//include($path."classes/dataCenter2.php");
//$dc2 = new DataCenter2();
//$dc->Connect();
//$dc2= new DataCenter2();
//$dc2->connect();
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Archived News"; include($path."includes.php"); ?>
<style>
#defaultIcon {
  position: relative;
}
.card-body1{
	float: left;	
	padding: 0px;
	margin: 0px;
	margin-bottom:  1em !important;
	text-align: inherit;
	width: 100%;
	height: 130px;
	max-height: 130px;
	overflow: hidden;
}
	.card-title{
		max-height:  auto !important;		
	}
/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white !important;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}	
	
</style>
<body class="nav-md footer_fixed">
	<?php //print_r($_SESSION);?>
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
            <div class="row" id="news" style="float: none;">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
					  <div class="page-title">
						  <h3><?php echo $title; ?></h3>
						</div>
                    	<br />
                  		<div class="news-item">
							<?php
							
							$qry_details1="SELECT `Id` as location_ids FROM `n_news_locations` WHERE (Id=3) or (`Group`='".$_SESSION['PORTAL_ID']."' and `Location`='".$_SESSION['portal_CurrentClass']."')";	
							//$qry_details1="SELECT `Id` as location_ids FROM `n_news_locations` WHERE  (`Group`='".$_SESSION['PORTAL_ID']."' and `Location`='".$_SESSION['portal_CurrentClass']."')";	
							$query_details="SELECT `NewsId` as `NewsIds` FROM  `n_news_publish_locations` where LocationCode IN(".$qry_details1.")";
							
							$qry_news="SELECT  DISTINCT `Id` , `NewsFor`, `NewsType`, `Heading` ,  `Subheading2` ,  `NewsIcon`, TemplateId, CreateDate FROM  `n_news_news` WHERE `Active`=1 AND Archived = 0  and `Id` IN ( ".$query_details." ) and TemplateId != 4 and `NewsType` !='Notice' ORDER BY  `n_news_news`.`CreateDate` DESC Limit 12, 36";
							/*echo "<br><br>";
							echo $qry_news;
							echo "<br><br>";	*/
							$dTable = $dc2->ExecuteQuery($qry_news, true);
							//print_r($dTable);
							//$dTable->PrintTable();
							
							
							
							
							/*echo "<br><br>";	
							echo $newsIds;
							echo "<br><br>";	
							foreach($dTable->Rows as $row){
								print_r($row);
								echo "<br><br>Akhtar";	
								echo $row->location_ids;
								echo "Rafiq<br><br>";		
								
							}*/
							// echo "<br><br>";	
//							 echo $dTable->Select($dTable->Select(0));
//							echo "<br><br>";
//							 print_r($dTable->Select(0));
//							 echo "<br><br>";
//							print_r($dTable);
							?>
							<?php
							foreach($dTable->Rows as $row){
								if($row->NewsFor== 1){
									$newslink="https://aitchison.edu.pk/newsandevents-live-new.php?id=".$row->Id;	
								}elseif($row->NewsFor== 2){
									$newslink="https://aitchison.edu.pk/alumni/news-new.php?id=".$row->Id;
								}
								if($row->NewsType== "Notice"){
									$newslink="https://aitchison.edu.pk/portal/notice.php?id=".$row->Id;
								}
								
								#if template is URL
								if ($row->TemplateId == 6) {
									
									$tContents = $newsRepo->GetNewsContents($row->Id);
									
									if ($tContents->rowsCount() > 0) {
										
										$contentsRow = $tContents->Rows[0];
										
										echo "<!--";
										//echo "template: ".$row->TemplateId;
										//echo "contents: ".$contentsRow->Content1;
										echo "-->";
										
										$newslink = $purifier->purify($contentsRow->Content1);
									}
								}
								
							?>
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="<?php echo $newslink; ?>" target="_blank">
									<div class="card">
										<img class="card-img-top" src="../newsletter/news/<?php echo str_replace("../","", $purifier->purify($row->NewsIcon));?>" alt="Card image cap">										
										<div class="card-body">
											<div class="card-body1" style="display: block;">
											<h4 class="card-title"><?php echo $purifier->purify(stripslashes($row->Heading)); //echo $row->NewsType; ?></h4>
											<p class="card-text"><?php echo str_replace("</p>","", str_replace("<p>","",$purifier->purify($row->Subheading2))); ?>&nbsp;</p>
											</div>	
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
							<?php	
							}
							?>
							<?php /*?><div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=466" target="new">
									<div class="card">
										<img class="card-img-top" src="images/news/haydarpara-mun.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">HAYDARPASA MUN</h4>
											<p class="card-text">The Aitchison College Model United Nations Society had already proved itself to be the best in Pakistan.</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>							
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=450" target="new">
									<div class="card">
										<img class="card-img-top" src="images/9-8271984993.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Junior School Cross Country 2019</h4>
											<p class="card-text">The whole school cross country took place on 18th January 2019. The boys had been practicing for the competition since November 2018.</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=429" target="new">
									<div class="card">
										<img class="card-img-top" src="images/news/syed-babar-ali-1565700415.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Aitchison founders' day assembly</h4>
											<p class="card-text">Syed Babar Ali graced this special assembly with the whole school in attendance. Syed Babar Ali graced this special assembly</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=428" target="new">
									<div class="card">
										<img class="card-img-top" src="images/news/17-6798713449.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Annual play - Junior School</h4>
											<p class="card-text">The most awaited event of the year, the annual plays were held on Friday, 23rd November.</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=426" target="new">
									<div class="card">
										<img class="card-img-top" src="images/news/2-5195339862.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Aitchison inaugural Arena Polo Tournament</h4>
											<p class="card-text">Aitchison Inaugural Arena Polo Tournament held on Saturday 24th November 2018.</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
							
						
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=414" target="new">
									<div class="card">
										<img class="card-img-top" src="images/news/10-3243024139.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Staff defeat 1<sup>st</sup> XI hockey in showcase match</h4>
											<p class="card-text">In the showcase match between the 1<sup>st</sup> XI Hockey and Staff, the staff won the match.</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
					  
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=404" target="new">
									<div class="card">
										<img class="card-img-top" src="images/news/barnstorming-success-4-404.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Aitchison's Barnstorming season of success</h4>
											<p class="card-text">Aitchison College's Ist Cricket XI continues its barnstorming season of success, remaining undefeated in seven matches.</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
								<a href="https://aitchison.edu.pk/newsandevents-testlink.php?id=401" target="new">
									<div class="card">
										<img class="card-img-top" src="images/news/8-4854076900.jpg" alt="Card image cap">
										<div class="card-body">
											<h4 class="card-title">Greener Pakistan</h4>
											<p class="card-text">In order to promote a “Greener Pakistan”, our K6 boys went to Jahangir’s tomb for the plantation of trees.</p>
											<div>Read More</div>
										</div>
									</div>
								</a>
							</div>
							
						</div>

						<div class="col-sm-12 col-md-12">
							<div class="dataTables_paginate paging_simple_numbers" id="datatable-keytable_paginate">
								<ul class="pagination">
									<li class="paginate_button previous disabled" id="datatable-responsive_previous"><a href="#" aria-controls="datatable-responsive" data-dt-idx="0" tabindex="0">Previous</a>
									</li>
									<li class="paginate_button active"><a href="#" aria-controls="datatable-keytable" data-dt-idx="1" tabindex="0">1</a>
									</li>
									<li class="paginate_button next disabled" id="datatable-keytable_next"><a href="#" aria-controls="datatable-keytable" data-dt-idx="7" tabindex="0">Next</a>
									</li>
								</ul>
							</div>
						</div><?php */?>
						
                  </div>
                </div>
					<div  align="right" style="padding-right: 2em;"><button class="btn"><a href="news-list.php"><span style="color: white !important;">Latest News</span></a></button>&nbsp;&nbsp;&nbsp;</div>
							<p>&nbsp;</p>	
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
</html>
