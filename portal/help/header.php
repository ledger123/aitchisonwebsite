<?php
$path = '../';

$current_file_name = basename($_SERVER['PHP_SELF']);
$current_url=basename($_SERVER['REQUEST_URI']);
$url_arr=array(
			"index.php"		=> "it-helpdesk",
			"parents-guide.php"		=> "parentsguide",
			"itessentials.php"		=> "it-essentials",	
			"study-support.php"		=> "studysupport",
			"troubleshoot.php"		=> "troubleshoot-guide",
			"internet-services.php"	=> "internet-wifi",
			"feedback.php"			=> "feedbacks",
			"copyrights.php"		=> "copyright",
			"disclaimer.php"		=> "disclaimers"
		  );
	if(isset($url_arr[$current_url]) && strlen($url_arr[$current_url]) > 0){
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: ".$url_arr[$current_url]);
		exit();
	}
if(!isset($banner) || $banner == '') {
    $banner = 'help-banner3.jpg';
}
?>

<!DOCTYPE html>
<html lang="en">


<title><?php echo $title;?> | <?php echo $current_url; ?>Aitchison College</title>
<link rel="icon" type="image/png" href="../favicon.png" />


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="INDEX, FOLLOW">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- <link href="build/bootstrap-4.6.0/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->




<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">


<link href="../build/css/custom.css" rel="stylesheet">

<link href="../css/style.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Montserrat:200,300,500' rel='stylesheet' type='text/css'>

<style>
    body, p, li {
        color: #000;
        font-size: 18px;
        line-height: 28px;
        font-family: 'Montserrat', sans-serif;
    }

    h3 {
        margin-top: 0;
    }

    hr {
        border-top: 1px solid #000;
        margin-top: 10px;
        margin-bottom: 0;
    }

    .navbar-header {
        background: none;
    }
    .navbar-nav > li > a, .navbar-brand {
        color: #fff !important;
    }

    .nav.navbar-nav > li > a {
        color: #fff !important;
        font-size: 22px;
        font-weight: 300;
        font-variant: all-small-caps;
    }

    .x_panel {
        background-color: #fff;
    }

    .nav.navbar-nav > li > a:hover, .navbar-nav > li > a:hover, .navbar-brand {
        color:#ff003c !important;
    }


    .navbar-default {
        background-color: #07294d !important;
    }

    .navbar-brand {
        color: #ff003c;
        font-size: 24px;
    }

    .page-title > h2 {
        font-size: 32px;
        font-weight: 400;
        color: #fff;
        word-spacing: 3px;
        font-variant: all-small-caps;
        text-align: center;
        background-color: #175f77;
        padding: 1px 10px 10px;
    }

    .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus {

        background-color: #ff003c;
    }

    .navbar-default .navbar-nav>.active>a:hover {
        color: #fff !important;
        background-color: #ff003c;
    }


    .highlight {
        color:#ff003c !important;
    }
    .text-blue {
        color: blue !important;
    }


    .container {
        padding-top: 2%;
    }

    .navbar-brand {
        padding: 5px 15px;
    }

    .navbar-brand img {
        height: 115%;
    }

    .right-side-img {
        width: 98%; height: auto; text-align: center; padding-bottom: 10px;
    }

    @media (max-width: 1024px) {
        .navbar-brand {
            padding: 5px 5px;
        }
        .nav.navbar-nav > li > a {
            font-size: 20px;
        }

        .nav > li > a {
            padding: 13px 10px 12px;
        }
    }


    @media (max-width: 768px) {
        .navbar-brand {
            padding: 5px 0;
        }
        .nav.navbar-nav > li > a {
            font-size: 16px;
        }

        .nav > li > a {
            padding: 13px 5px 12px;
        }

        .page-title > h2 {
            margin-top: 20px;
        }


        .right-side-img {
            padding-left: 10px;
        }
    }

</style>

<style>
    content-banner {
        color: #ffffff;
        height: 400px;
        padding-top: 115px;
    }

    .content-banner {
        height: 300px;
        text-align: center;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-top: 100px;
        margin-top: 40px;
        position: relative;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .content-banner .first-title {
        font-size: 44px;
        font-weight: 400;
        text-align: center;
        color: #fff;
        line-height: 1.2;
        position: relative;
        z-index: 2;
        margin: 0 0 12px;
    }

    .content-banner .banner-des {
        font-size: 24px;
        color: #fff;
        text-align: center;
        line-height: 150%;
        letter-spacing: 0;
        position: relative;
        z-index: 2;
        font-weight: 400;
        margin-top: 0;
    }

    .content-banner1::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgba(57, 49, 49, 0.7);
        left: 0;
        top: 0;
        z-index: 1;
    }

    .message-box {

        background-color: #f0f2e9; margin-top: 25px; margin-right: 5%; margin-left: 5%;
    }
    .message-box .box-head {
        background-color: #175f77; color: #fff; padding: 5px;
    }

    .message-box .box-body {
        line-height: 24px;
        font-size: 14px;
        padding: 15px;
    }

    .message-box .box-body > body {
        font-size: 14px;
    }

    .message-box .box-body > p,
    .message-box .box-body li {
        line-height: 24px;
        font-size: 14px;
    }


</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
          <nav class="navbar navbar-default navbar-fixed-top">
              <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">

                      <a class="navbar-brand" href="./">
                          <img src="../images/logo100x70.png" alt="" class="d-inline-block align-top">
                      </a>

                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>

                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="navbar-collapse collapse" id="bs-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                          <li class="<?php if($current_file_name=='index.php')echo 'active';?>"><a href="it-helpdesk">IT Helpdesk</a></li>
                          <li class="<?php if($current_file_name=='itessentials.php')echo 'active';?>"><a href="it-essentials">IT Essentials</a></li>
                          <li class="<?php if($current_file_name=='parents-guide.php')echo 'active';?>"><a href="parentsguide">Parents Guide</a></li>

                          <li class="<?php if($current_file_name=='study-support.php')echo 'active';?>"><a href="studysupport">Study Support</a></li>
                          <li class="<?php if($current_file_name=='troubleshoot.php')echo 'active';?>"><a href="troubleshoot-guide">Troubleshoot</a></li>
                          <li class="<?php if($current_file_name=='internet-services.php')echo 'active';?>"><a href="internet-wifi">Internet/WIFI</a></li>
                          <li class="<?php if($current_file_name=='feedback.php')echo 'active';?>"><a href="feedbacks">Feedback</a></li>

                          <?php /* ?>
                          <li class="<?php if($current_file_name=='copyrights.php')echo 'active';?>"><a href="copyrights.php">Copyright</a></li>
                          <li class="<?php if($current_file_name=='disclaimer.php')echo 'active';?>"><a href="disclaimer.php">Disclaimer</a></li>
                          <?php */ ?>
                      </ul>

                  </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
          </nav>
          <?php /* ?>
          <section class="content-banner" style="background-image: url('images/<?php echo $banner; ?>')">
              <!-- <p class="first-title">IT Essentials for Students and Staff</p>
              <p class="banner-des">IT Helpdesk, Aitchison College, Lahore</p> -->
          </section>
 <?php */?>