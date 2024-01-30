<?php

class Paging
{
	public static function Draw( $page_num = 0, $totalrecords = 0, $recordsPerPage = 0, $url, $newsId = 0 )
	{
		echo "<input type='hidden' name='IL_IN_TAG' value='1'/>";
	
		$numofpages = ceil( $totalrecords / $recordsPerPage );
		
		if($numofpages > 0)
		{
			
			// by default we show first page
			//$page_num = $page;
			if($page_num == 0) $page_num = 1;
	
			$adjacents = 7; //set this to what ever adjacents you want to show in the pagination link
			$adjacents_min = ($adjacents % 2 == 0) ? ($adjacents / 2) - 1 : ($adjacents - 1) / 2;
			$adjacents_max = ($adjacents % 2 == 0) ? $adjacents_min + 1 : $adjacents_min;
			$page_min = $page_num- $adjacents_min;
			$page_max = $page_num+ $adjacents_max;
	
			$page_min = ($page_min < 1) ? 1 : $page_min;
			$page_max = ($page_max < ($page_min + $adjacents - 1)) ? $page_min + $adjacents - 1 : $page_max;
			
			if ($page_max > $numofpages) {
				$page_min = ($page_min > 1) ? $numofpages - $adjacents + 1 : 1;
				$page_max = $numofpages;
			}
			
			$page_min = ($page_min < 1) ? 1 : $page_min;
			
			//$self = "/" . $domainName . "/search.php?q=" . $searchTerm . "&";
			$self = $url;
			
			$page_pagination = "<ul class='pagination' style='margin:0px'>";
			
			if ( ($page_num > ($adjacents - $adjacents_min)) && ($numofpages > $adjacents) ) {
				$page_pagination .= '<li><a title="First" href="#" onclick="javascript:onPaging(1,'.$newsId.')">First</a></li> ';
			}
			
			if ($page_num != 1) {
				$page_pagination .= '<li><a title="Previous" href="#" onclick="javascript:onPaging('. ($page_num-1) . ','.$newsId.')">&laquo;</a></li> ';
			}
			
			
			for ($i = $page_min;$i <= $page_max;$i++) {
				if ($i == $page_num)
					$page_pagination .= '<li class="active"><a href="#" onclick="javascript:onPaging('. ($i) . ','.$newsId.')">'.$i.'</a></li> ';
				else
					$page_pagination .= '<li><a href="#" onclick="javascript:onPaging('. ($i) . ','.$newsId.')">'. $i .'</a></li> ';
			}
			
			if ($page_num < $numofpages) {
				$page_pagination.= ' <li><a title="Next" href="#" onclick="javascript:onPaging('. ($page_num+1) . ','.$newsId.')">&raquo;</a></li>';
			}
			
			
			if (($page_num< ($numofpages - $adjacents_max)) && ($numofpages > $adjacents)) {
				$page_pagination .= ' <li><a title="Last" href="#" onclick="javascript:onPaging('. ($numofpages) . ','.$newsId.')">Last</a></li> ';
			}
		}
		
		$page_pagination .= "</ul>";
		echo $page_pagination;
	}
}
?>