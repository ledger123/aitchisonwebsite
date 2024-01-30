<?php

include_once($path."news/newsrepository.php");

include_once($path."classes/dataCenter2.php");

$dc2 = new DataCenter2();
$dc2->Connect();

$newsRepo = new NewsRepository($dc2);


$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = $_SESSION['portal_CurrentClass'];

$tLetters = $newsRepo->GetPublishedLetters( $group, $subGroup, $location );

?>

<div class="card border border-secondary">
	<div class="card-header" style="background-color: #fbb034; color: #002663;">
		<h4 class="box-title">Principal's Newsletters </h4>
	</div>
	<div class="card-body" style="padding: 0;">
		<ul class="list-group list-group-flush">
			
			<?php
			$index = 0;
			foreach ($tLetters->Rows as $row) {
				if ( $index < 5 ) {
					$index++;
					if ($row->NewsType == "URL") {
						$href = $row->Content1;
						$target = "_blank";
					}
					else {
						$href = "principal-letter.php?id=".$row->NewsId;
						//$href = $domainName."newsandevents-live.php?id=".$row->NewsId;
						//$target = "_blank";
					}
					$date = "&nbsp;";
					if ($row->ShowDate)
						$date = $row->Date;
				?>

				<li class="list-group-item">
					<a href="<?php echo $purifier->purify($href); ?>" target="_blank">
						<div><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode ( str_replace('&amp;', '&', $row->Heading)))));?></div>
					</a>
				</li>

			<?php 
				}
			} ?>
			
		</ul>

		<div class="text-center" style="margin-top: 16px;">
			<p style="text-align: center;"><a href="<?php echo $path; ?>prletters.php">View all</a></p>
		</div>
	</div>
</div>