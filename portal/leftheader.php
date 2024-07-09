

<div class="col-md-3 left_col menu_fixed mCustomScrollbar _mCS_1 mCS-autoHide">
  <div class="left_col scroll-view">
	
  <div class="navbar nav_title" style="border: 0;">
      <a href="#" class="site_title"><img class="img-circle" src="<?php echo $path; ?>images/icon46x46.png" /> <span><?php echo PORTAL_NAME;?></span></a>
  </div>
	
	<div class="clearfix"></div>
	
	<?php
		
	  	$user_profile_img_url = "";
	    
	    if (PORTAL_ID == "SuperUser" || PORTAL_ID == "StaffPortal") {
			$user_profile_img_url = 
				$path."accounts/images/".strtolower( $_SESSION['portal_School'] )."/".$_SESSION['portal_sup_username']. ".jpg";
		}
		else if (PORTAL_ID == "administrator" ) {
			$user_profile_img_url = 
				$path."accounts/images/".strtolower( $_SESSION['portal_School'] )."/".$_SESSION['portal_SchoolNo']. ".jpg";
		}
	    elseif (PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" && PORTAL_ID != "StaffPortal" ) {
			/*$user_profile_img_url = 
				$path."accounts/images/".strtolower( $_SESSION['portal_School'] )."/".$_SESSION['portal_SchoolNo']. ".jpg";*/
			$user_profile_img_url = $path."accounts/images/user-avatar.png";
		}
	    else {
			$user_profile_img_url = $path."accounts/images/user-avatar.png";
		}
	  
	  $user_profile_img_url = $path."accounts/images/user-avatar.png";
		//echo $user_profile_img_url;
	  
	  if (PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" && PORTAL_ID != "StaffPortal" ) {
	  	$boarder_dayboy = $_SESSION['portal_Boarder'] == "B" ? "Boarder" : "Day Boy";
	  }
	?>
	  
    <!-- menu profile quick info -->
    <div class="profile">
      <div class="profile_pic">
	  <?php if ( !in_array( PORTAL_ID, array("SuperUser", "StaffPortal", "administrator") ) ) { ?>
		<span class="badge bg-green"><?php echo $boarder_dayboy; ?></span>
	  <?php } ?>
        <img src="<?php echo $user_profile_img_url; ?>" alt="User Profile Image" class="profile_img">
      </div>
      <div class="profile_info">
		  
		  <?php if ( in_array( PORTAL_ID, array("SuperUser", "StaffPortal") ) ) { ?>
		  
        <h2><?php echo ucwords($_SESSION['portal_sup_name']); ?></h2>
        <h5><?php echo ucwords($_SESSION['portal_sup_username']);?></h5>
		<h5>&nbsp;</h5>
		  
		  <?php }  else if (PORTAL_ID == "administrator" ) { ?>
		  
        <h2><?php echo ucwords($_SESSION['portal_userTitle']); ?></h2>
        <h5><?php echo ucwords($_SESSION['portal_SchoolNo']);?></h5>
		<h5>&nbsp;</h5>
		  
		  <?php } else { ?>
		  
        <h2><?php echo $_SESSION['portal_userTitle']; ?></h2>
          <?php if(false) { #hide the school number ?>
            <h5><?php echo $_SESSION['portal_CurrentClass'];?>, (<?php echo $_SESSION['portal_SchoolNo'];?>)</h5>
          <?php } ?>
          <h5><?php //echo $_SESSION['portal_Studing']?><?php echo ($_SESSION['portal_SchoolName']!="Junior School")?$_SESSION['portal_Studing']:$_SESSION['portal_CurrentClass'];?><br/>
              <?php
              if (strpos(strtolower($_SESSION['portal_House']), 'house') === false) {
                echo $_SESSION['portal_House'] . ' House';
              }
              else echo $_SESSION['portal_House']?>
          </h5>
		<h5><?php echo $_SESSION['portal_SchoolName']; ?></h5>
		  
		  <?php } ?>
		  
		  <div>
			  <?php if (false && PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" && PORTAL_ID != "StaffPortal" ) { ?>
			  <a href="<?php echo $path; ?>accounts/userprofile.php" title="Profile">Profile</a>
			  <?php } ?>
			  <a href="<?php echo $path; ?>logout.php" title="Log Out" class="">Logout</a>
		  </div>
      </div>
    </div>
    <!-- /menu profile quick info -->
	
    <br />
	
    <!-- sidebar menu -->
    <?php
	  if(isset($pagePermissions)) {
		  include("permissions/permissions-menu.php");
	  }
	  else {
	      //echo "<!-- ";
	      //echo "temp pass: ".$_SESSION['portal_TempPassword'];
	      //echo "\n PORTAL_ID: " . PORTAL_ID;
          //echo " -->";
          if (PORTAL_ID == 'administrator' || (isset($_SESSION['portal_TempPassword']) && $_SESSION['portal_TempPassword'] == 0))
          {
              include("menu/menu.php");

              $menuHelper = new MenuHelper($dc, $url, $portalDomainName, $purifier);
              $menuHelper->init();
              $menuHelper->draw();
          }


	  }
	?>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small" style="height:50px;">
      <!--<a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>-->
    </div>
    <!-- /menu footer buttons -->
  </div>
</div>

<?php

if (isset($_SESSION['portal_TempPassword'])) {
    //echo "<!--";
    //echo "temp password: ".$_SESSION['portal_TempPassword'];
    //echo "-->";
}
else{
    //echo "<!--";
    //echo "portal_TempPassword not set.";
    //echo "-->";
}


if (isset($_SESSION['portal_TempPassword']) && $_SESSION['portal_TempPassword'] == 0) {
    #fetching the header links

    #filter for student login
    $currentClass = "";
    //if (PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" && PORTAL_ID != "StaffPortal" ) {
    if (PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" ) {

        $currentClass = " AND p.`Location` = '" . $_SESSION['portal_CurrentClass'] . "' ";
    }

    $school = $_SESSION['portal_School'];

    $qry = "SELECT DISTINCT nt.Node title, nt.Address url, nt.Address2 url2, nt.Icon icon, nt.AddressTarget UrlTarget, nt.Level, nt.ParentId, nt.DisplayOrder 
		FROM portal_navigation_tree nt INNER JOIN 
			portal_portal_links pl ON nt.Id = pl.NavigationTreeId INNER JOIN 
			portal_portals p ON pl.PortalCode = p.Code  
		WHERE Active = 1 AND nt.Show = 1 AND p.Group = '" . PORTAL_ID . "' AND p.SubGroup = '" . $school . "' AND  nt.Id <> nt.ParentId AND
			nt.ParentId = (SELECT ParentId FROM portal_navigation_tree WHERE Node = 'Header Links') " . $currentClass . "
		ORDER BY nt.Level, nt.ParentId, nt.DisplayOrder ASC";

    //echo "<!--";
    //echo $qry;
    //echo "-->";

    $headerLinks = $dc->ExecuteQuery($qry, true);

}
$filename = basename( $_SERVER['SCRIPT_FILENAME'] );

?>

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
	  <ul id="header-nav" class="nav navbar-nav navbar-left hidden-xs">
		  
		  <?php
          if( isset($headerLinks) )
		  foreach($headerLinks->Rows as $link) {
			  $current_page = "";
			  $active = "";
			  
			#setting up the current page and active css classes.
			if ($filename == basename( $link["url"] )) {
				$link["active"] = "1";
				$current_page = " current-page";
				$active = " active";
			}
			
			$target = "";
			if ($link["UrlTarget"] != "") {
				$target = "target='". $link["UrlTarget"] ."'";
			}

			$url_ = $link["url"];
			$url_2 = $link["url2"];

			$href = trim($url_2) != "" ? $url_2 : $url_;
		  ?>
		  
		  <li class="nav-item <?php echo $current_page; ?>">
			<a class="nav-link <?php echo $active; ?>" href="<?php echo $purifier->purify($path. $href);?>" <?php echo " ". $purifier->purify($target);  ?>>
				<i class="<?php echo $purifier->purify($link["icon"]); ?>"></i><div><?php echo $purifier->purify($link["title"]); ?></div>
			</a>
		  </li>
		  
		  <?php
		  }
		  ?>
      </ul>
	  
	  <span class="visible-xs" style="color: #fff; font-size: 24px; line-height: 2.3; position: absolute; margin-left: 70px;"><?php echo PORTAL_NAME; ?></span>
	  
      <ul id="userProfile" class="nav navbar-nav navbar-right visible-xs">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
		  <?php if(false){ ?>
			<img src="<?php echo $path."accounts/".$_SESSION['--n_UserPicture---']; ?>" alt="">
		<?php } ?>
			<?php if (PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" && PORTAL_ID != "StaffPortal" ) { ?>
			  <span id="userName"><?php //echo $_SESSION['portal_userTitle']; ?></span>
			  <?php } ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
			  <?php if (false && PORTAL_ID != "SuperUser" && PORTAL_ID != "administrator" && PORTAL_ID != "StaffPortal" ) { ?>
            <li><a href="<?php echo $path; ?>accounts/userprofile.php"> Profile</a></li>
			  <?php } ?>
            <li><a href="<?php echo $path; ?>logout.php"><i class="fa fa-sign-out pull-right" style="font-size: 18px; margin-top: 5px;"></i> Logout</a></li>
          </ul>
        </li>
        
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->