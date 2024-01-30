<?php

include_once($path."news/newsrepository.php");
include_once($path."classes/dataCenter2.php");

/*$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = $_SESSION['portal_CurrentClass'];
*/
$dc2 = new DataCenter2();
$dc2->Connect();

$newsRepo = new NewsRepository( $dc2 );
//$tNews = $newsRepo->GetPublishedNews( $group, $subGroup, $location );

$tNews = $newsRepo->GetPublishedNewsByLocationId( NewsLocations::NewsEvents );

//$tNews->PrintTable();

?>

<div class="card border border-secondary">
	<div class="card-header" style="background-color: #002663; color: #fff;">
		<h4 class="box-title">Latest News </h4>
	</div>
	<div class="card-body" style="padding: 0;">
		<ul class="list-group list-group-flush">
			
			<?php
			$index = 0;
			foreach ( $tNews->Rows as $row ) {
				if ($row->NewsType == "News" && $row->TemplateId != 4 && $index < 5) {
					
					$index++;
					if ( $row->TemplateId == "6" && $row->Downloadable != "1" ) {
						$href = $row->Content1;
						//echo $href;
						$target = "_blank";
					}
					else {
						$href = $path."../newsandevents-live-new.php?id=".$row->NewsId;
						$target = "";
					}
				?>

				<li class="list-group-item">
					<a href="<?php echo $purifier->purify($href); ?>" target="<?php echo $target; ?>">
						<div><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($row->Heading))));?></div>
					</a>
				</li>

			<?php
				}
			}
			?>
			
		</ul>

		<div class="text-center" style="margin-top: 16px;">
			<p style="text-align: center;"><a href="news-list.php">View all</a></p>
		</div>
	</div>

</div>