<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="index.php" class="site_title"><img class="img-circle" src="<?php echo $path; ?>images/icon39x39.png" /> <span>Aitchison</span></a>
    </div>
	
    <div class="clearfix"></div>
	
    <!-- menu profile quick info -->
    <div class="profile">
      <div class="profile_pic">
        <img src="<?php echo $path."accounts/".$_SESSION['n_UserPicture']; ?>" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2><?php echo $_SESSION['n_userTitle']; ?></h2>
        <h5><?php echo $_SESSION['n_GroupName']; ?></h5>
      </div>
    </div>
    <!-- /menu profile quick info -->
	
    <br />
	
    
    
    <!-- sidebar menu -->
    <?php include("menu/menu.php"); ?>
    
    <!--<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <div class="clearfix"></div>
        <ul class="nav side-menu">
          <li><a href="index.php"><i class="fa fa-home"></i> Dashboard </a></li>
          
          <li><a><i class="fa fa-edit"></i> Newsletter <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="page_404.html">Create News</a></li>
              <li><a href="page_404.html">Publish News</a></li>
              <li><a href="page_404.html">Change News</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-edit"></i> Subscribers <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="page_404.html">Add Subscribers</a></li>
              <li><a href="page_404.html">Subscriber Stats</a></li>
            </ul>
          </li>
          <li><a><i class="fa fa-bug"></i> Users <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="page_404.html">Create Group</a></li>
              <li><a href="page_404.html">Create User</a></li>
              <li><a href="page_404.html">Group Rights</a></li>
            </ul>
          </li>
        </ul>      
      </div>
    </div>-->
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

<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
		
      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="<?php echo $path."accounts/".$_SESSION['n_UserPicture']; ?>" alt=""><?php echo $_SESSION['n_userTitle']; ?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo $path; ?>accounts/userprofile.php"> Profile</a></li>
            <li><a href="<?php echo $path; ?>logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>

        
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->