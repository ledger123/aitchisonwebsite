
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta name="google" content="notranslate">
        <meta http-equiv="Content-Language" content="en">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php
		$robotsval="NOINDEX, NOFOLLOW";		
		if(strpos($_SERVER['REQUEST_URI'], "acportal")){
			$robotsval="INDEX, FOLLOW";
		}
		?>
        <meta name="robots" content="<?php echo $robotsval;?>">
        <title><?php echo $title; ?> | My Aitchison</title>
        <meta name="description" content="Welcome to ‘My Aitchison’: instant, online, timely and secure information about your children.">
        
        <link rel="icon" type="image/png" href="<?php echo isset($path)?$path:""; ?>favicon.png" />
        
        <!-- Bootstrap -->
        <link href="<?php echo isset($path)?$path:""; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo isset($path)?$path:""; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        
		<!-- jQuery custom content scroller -->
    	<link href="<?php echo isset($path)?$path:""; ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
		
        <?php if ( false ) { ?>
        
        <!-- NProgress -->
        <link href="<?php echo isset($path)?$path:""; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo isset($path)?$path:""; ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="<?php echo isset($path)?$path:""; ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo isset($path)?$path:""; ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    	
        <?php } ?>
        
		<!-- gallery slider css -->
    	<link type="text/css" media="all" rel="stylesheet" href="<?php echo isset($path)?$path:""; ?>../css/jquery.tosrus.all.css" />
		
        <!-- Custom Theme Style -->
        <link href="<?php echo isset($path)?$path:""; ?>build/css/custom.css?20220209" rel="stylesheet">
    	
        <!-- Custom Style -->
        <link href="<?php echo isset($path)?$path:""; ?>css/style.css" rel="stylesheet">
        
	</head>