<?php
header('Content-Type: application/json');

if (  isset( $_REQUEST["newstype"] ) && isset( $_REQUEST["username"] ) && isset( $_REQUEST["password"] ) )
{
	$username = $_REQUEST["username"];
	$password = $_REQUEST["password"];
	$newsType = (int)$_REQUEST['newstype'];
	
	$newsStr = array();
	
	$index = 1;
	$path = "../";
	
	include($path."classes/dataCenter.php");
	
	$dc = new DataCenter();
	$dc->Connect();
	
	require_once 'messagerepository.php';
	$messageRepo = new MessageRepository($dc);
	
	$tNews = $messageRepo->SearchNewsEvents2($newsType);
	
	
	$index = 1;
	foreach($tNews->Rows as $row) {
		$newsStr[] = array("item".($index++) => $row);
	}
	
	echo json_encode( array("news"=> $newsStr) );
	/*
	exit;
	echo "<br/><br/><br/><br/>";
	
	$newsStr = array();
	
	#News & Events
	if($newsType == 1)
	{
		  $newsStr[] = array( "item1" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=191",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/24-9288202500.jpg", "heading"=>"PCB team visit Aitchison college", "subheading"=>"" ));
 		
		  $newsStr[] = array( "item2" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=190",
		  "img"=>"", "heading"=>"Garden and Grounds", "subheading"=>"" ));
	   
 
		  $newsStr[] = array( "item3" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=186",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/8-2111979164.jpg", "heading"=>"Social gathering for upper primary parents", "subheading"=>"" ));
	  
		  $newsStr[] = array( "item4" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=185",
		  "img"=>"", "heading"=>"Swimming Gala 2017", "subheading"=>"" ));
 
		  $newsStr[] = array( "item5" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=184",
		  "img"=>"", "heading"=>"Metacognition", "subheading"=>"October 23, 2017" ));
 
		  $newsStr[] = array( "item6" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=179",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-446238704.jpg", "heading"=>"Inter house essay hand writing 2017", "subheading"=>"" ));
 
		  $newsStr[] = array( "item7" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=182",
		  "img"=>"", "heading"=>"Metacognition", "subheading"=>"" ));
 
		  $newsStr[] = array( "item8" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=178",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/9-5335395550.jpg", "heading"=>"Aitchison college vs Chand Bagh school", "subheading"=>"" ));
  
		  $newsStr[] = array( "item9" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=177",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/5-6321093430.jpg", "heading"=>"AC vs Abdul Qadir cricket academy", "subheading"=>"" ));
 
		  $newsStr[] = array( "item10" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=176",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/2-5935733085.jpg", "heading"=>"Colts team vs m2/c1 boys: Colts team wins by 36 runs", "subheading"=>"" ));
  
		  $newsStr[] = array( "item11" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=180",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/2-5542320753.jpg", "heading"=>"Rugby AC VS Warriors", "subheading"=>"" ));
  
		  $newsStr[] = array( "item12" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=174",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/11-319098010.jpg", "heading"=>"Maulana Altaf Hussain hali challenge cup 2017", "subheading"=>"12th October, 2017" ));
 
		  $newsStr[] = array( "item13" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=170",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/14-4811060614.jpg", "heading"=>"Urdu poet night 2017", "subheading"=>"6th October, 2017" ));
 
		  $newsStr[] = array( "item14" => array("newsurl"=>"./alumni/news-testlink.php?id=168",
		  "img"=>"", "heading"=>"Talk By Salman Ahmad", "subheading"=>"22nd September, 2017" ));
 
		  $newsStr[] = array( "item15" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=167",
		  "img"=>"", "heading"=>"Bird watching excursion", "subheading"=>"22nd September, 2017" ));
 
		  $newsStr[] = array( "item16" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=166",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/3-6583169815.jpg", "heading"=>"Godley house wins inter house water Polo competition", "subheading"=>"" ));
 
		  $newsStr[] = array( "item17" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=165",
		  "img"=>"", "heading"=>"Aitchison college wins the swimming carnival - 2017", "subheading"=>"8th October, 2017" ));
 
		  $newsStr[] = array( "item18" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=164",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/19-5113086733.jpg", "heading"=>"Aitchison College gains a rare victory over ACOBA", "subheading"=>"8th October, 2017" ));
  
		  $newsStr[] = array( "item19" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=163",
		  "img"=>"", "heading"=>"Aitchison under 16 vs Abdul Qadir Academy", "subheading"=>"Saturday Match", "subheading"=>"" ));
 
		  $newsStr[] = array( "item20" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=159",
		  "img"=>"", "heading"=>"Prep school inter house swimming championship", "subheading"=>"Results of Day 2" ));
  
		  $newsStr[] = array( "item21" => array("newsurl"=>"http://aitchisonfest.org",
		  "img"=>"https://aitchison.edu.pk/img/acfest-logo_2minia.png", "heading"=>"Art and Performing Arts Fest 2017", "subheading"=>"From the 27th to 29th of October" ));
  
		  $newsStr[] = array( "item22" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=161",
		  "img"=>"", "heading"=>"Social Gathering for Lower Primary Parents", "subheading"=>"" ));
  
		  $newsStr[] = array( "item23" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=160",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/3-2349637141.jpg", "heading"=>"Academics Prize Day 2017", "subheading"=>"" ));
  
		  $newsStr[] = array( "item24" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=158",
		  "img"=>"", "heading"=>"Prep school inter house swimming championship", "subheading"=>"Results of Day 1", "subheading"=>"" ));
 
		  $newsStr[] = array( "item25" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=156",
		  "img"=>"", "heading"=>"Cricket match - Aitchison college u-16 vs Lahore school of Economics", "subheading"=>"" ));
 
		  $newsStr[] = array( "item26" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=155",
		  "img"=>"", "heading"=>"Participation in external muns", "subheading"=>"" ));
 
		  $newsStr[] = array( "item27" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=154",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-5575765832.jpg", "heading"=>"Students enjoy planting activity", "subheading"=>"" ));
 
		  $newsStr[] = array( "item28" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=153",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-1380271972.jpg", "heading"=>"Science Wins", "subheading"=>"" ));
		  
		  $newsStr[] = array( "item29" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=149",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/4-1450989185.jpg", "heading"=>"New Gwyn boarders' BBQ day", "subheading"=>"" ));
 
		  $newsStr[] = array( "item30" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=148",
		  "img"=>"", "heading"=>"Head of sports senior school elected as a general secretary of pakistan school sports olympic", "subheading"=>"" ));
  
		  $newsStr[] = array( "item31" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=145",
		  "img"=>"", "heading"=>"Aitchison college initiates the MIT launch club", "subheading"=>"" ));
  
		  $newsStr[] = array( "item32" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=139",
		  "img"=>"https://aitchison.edu.pk/newsletter/news/images/1-2601641914.jpg", "heading"=>"Stop press cricket", "subheading"=>"" ));
 
		  $newsStr[] = array( "item33" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=138",
		  "img"=>"", "heading"=>"Aitchison college one step closer to international mathematical olympiad", "subheading"=>"" ));
	}
	#Notices
	elseif ($newsType == 2) {
		$newsStr[] = array( "item1" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=194",
      	"img"=>"https://aitchison.edu.pk/img/nne_logo.png", "heading"=>"Major Langlands’ 100th Birthday DVD", "subheading"=>"" ));
						 
		$newsStr[] = array( "item2" => array("newsurl"=>"https://aitchison.edu.pk/newsandevents-mview.php?id=141",
		"img"=>"https://aitchison.edu.pk/img/nne_logo.png", "heading"=>"Donation Drive for Langlands’ School and College", "subheading"=>"" ));
		
	}
	#Principal's Newsletter
	elseif ($newsType == 3) {
	
		$newsStr[] = array( "item1" => array("newsurl"=>"https://aitchison.edu.pk/ac-principal-news-mview.php?id=187",
      	"img"=>"https://aitchison.edu.pk/img/nl-img50x50.png", "heading"=>"Update: Added Note for October, 2017", "subheading"=>"" ));
                 
		$newsStr[] = array( "item2" => array("newsurl"=>"https://aitchison.edu.pk/ac-principal-news-mview.php?id=119",
      	"img"=>"https://aitchison.edu.pk/img/nl-img50x50.png", "heading"=>"Information Update", "subheading"=>"August 01, 2017" ));
	}
	#Alumni Newsletter
	elseif ($newsType == 4) {
		
		$newsStr[] = array( "item1" => array("newsurl"=>"https://aitchison.edu.pk/alumni/newsletters/newsletter-september-2017.pdf",
			  "img"=>"", "heading"=>"Alumni Newsletter September 2017", "subheading"=>"" ));
						 
		$newsStr[] = array( "item2" => array("newsurl"=>"https://aitchison.edu.pk/alumni/newsletters/newsletter-july-2017.pdf",
			  "img"=>"", "heading"=>"Alumni Newsletter July 2017", "subheading"=>"August 01, 2017" ));
        
	}
	
	echo json_encode( array("news"=> $newsStr) );
	
	*/
}
else
{
	echo json_encode(array("output"=> "0"));
}
?>

    
    