<?php
	$thispage=basename($_SERVER['PHP_SELF']);
	//echo $thispage;
?>
  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO 
         <a class="navbar-brand" href="index.php">Aitchison</a>-->            
          <!-- IMG BASED LOGO -->
             <a class="navbar-brand" href="./"><img src="assets/images/logo.png" alt="logo" ></a> 
        </div> 
       
       
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            
           <li><a href="../">Home</a></li>
            <li<?php echo ($thispage=="index.php")?' class="active"':''?>><a href="./">Alumni Home</a></li>
          <li<?php echo ($thispage=="famousaitchisonian.php")?' class="active"':''?>><a href="famous-aitchisonians">Famous&nbsp;&nbsp;&nbsp;Aitchisonians</a></li>
            <li<?php echo ($thispage=="accoba.php")?' class="active"':''?>><a href="acoba">ACOBA</a></li>
            <li class="dropdown<?php echo ($thispage=="news.php" || $thispage=="reminiscence.php" || $thispage=="contribute.php")?' active':''?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">BULLETIN <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="news-bulletin">News</a></li>
                <li><a href="upcoming-events">Events</a></li>                
                <li><a href="reminiscence">Reminiscence</a></li>
                <!--<li><a href="contribute.php">Contribute</a></li>-->
                <li><a href="alumni-profiles">Alumni Profiles</a></li>
                <li><a href="share-your-story">Share your Story</a></li>
                <li><a href="biodata-update">Alumni Biodata Update</a></li>
              </ul>
            </li>
              
             <li<?php echo ($thispage=="overseasalumni.php")?' class="active"':''?>><a href="overseas-ac-alumni">Overseas  Alumni</a></li>
             <li<?php echo ($thispage=="makeagift.php")?' class="active"':''?>><a href="../make-a-gift">Support College</a></li>
             <li<?php echo ($thispage=="gallery.php")?' class="active"':''?>><a href="alumni-gallery">Gallery</a></li>
             <li<?php echo ($thispage=="contactus.php")?' class="active"':''?>><a href="contact-us">Contact</a></li>    
                        
          </ul>                     
        </div><!--/.nav-collapse -->
        <!--<a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a>-->
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 

