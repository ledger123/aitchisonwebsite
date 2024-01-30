<?php
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1; mode=block;");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header('X-Frame-Options: SAMEORIGIN');
header("strict-transport-security: max-age=0");

//include("standard/main.php");
$banner_image_url="img/pageimages/misc.jpg";
//$banner_text="About Aitchison College";
$banner_text="";
$default_open=2;


$speeches =
    [
        array('title'=>'133 Years of Aitchison College', 'date'=>'11/18/2019', 'duration'=>'2:45', 'fileName'=>'133-Years-of-Aitchison-College', 'desc'=>''),
        array('title'=>'Inauguration of Cricket Scoreboard', 'date'=>'05/4/2019', 'duration'=>'5:39', 'fileName'=>'Inauguration-of-Cricket-Scoreboard', 'desc'=>''),
        array('title'=>'General Assembly 2019', 'date'=>'03/24/2019', 'duration'=>'4:57', 'fileName'=>'Aitchison-College-General-Assembly', 'desc'=>''),
        array('title'=>'Speech at National Music Academy', 'date'=>'03/11/2019', 'duration'=>'1:31', 'fileName'=>'Aitchison-College-Principal', 'desc'=>''),
        array('title'=>'Foundersday Assembly 2018', 'date'=>'03/08/2018', 'duration'=>'10:31', 'fileName'=>'Foundersday-Assembly-2018', 'desc'=>''),
        array('title'=>'Speech at Gwyn House', 'date'=>'03/30/2018', 'duration'=>'4:25', 'fileName'=>'Speech at Gwyn House', 'desc'=>''),
        //array('title'=>'', 'date'=>'', 'duration'=>'', 'fileName'=>'', 'desc'=>'')
    ];



date_default_timezone_set("Asia/Karachi");

define( 'TIMEBEFORE_NOW',         'now' );
define( 'TIMEBEFORE_MINUTE',      '{num} minute ago' );
define( 'TIMEBEFORE_MINUTES',     '{num} minutes ago' );
define( 'TIMEBEFORE_HOUR',        '{num} hour ago' );
define( 'TIMEBEFORE_HOURS',       '{num} hours ago' );
define( 'TIMEBEFORE_YESTERDAY',   'yesterday' );

define( 'TIMEBEFORE_DAYS',    	'{num} days ago' );
define( 'TIMEBEFORE_WEEK',    	'{num} week ago' );
define( 'TIMEBEFORE_WEEKS',   	'{num} weeks ago' );
define( 'TIMEBEFORE_MONTH',   	'{num} month ago' );
define( 'TIMEBEFORE_MONTHS',  	'{num} months ago' );

define( 'TIMEBEFORE_FORMAT',      '%e %b' );
define( 'TIMEBEFORE_FORMAT_YEAR', '%e %b, %Y' );

define( 'FORMAT_MONTH_YEAR', '%B, %Y' );

function time_ago( $time )
{
    $out    = ''; // what we will print out
    $now    = time(); // current time
    $diff   = $now - strtotime( $time ); // difference between the current and the provided dates

    $diff   = (int)$diff;


    if( $diff < 60 ) // it happened now
        return TIMEBEFORE_NOW;

    elseif( $diff < 3600 ) // it happened X minutes ago
        return str_replace( '{num}', ( $out = round( $diff / 60 ) ), $out == 1 ? TIMEBEFORE_MINUTE : TIMEBEFORE_MINUTES );

    elseif( $diff < 3600 * 24 ) // it happened X hours ago
        return str_replace( '{num}', ( $out = round( $diff / 3600 ) ), $out == 1 ? TIMEBEFORE_HOUR : TIMEBEFORE_HOURS );

    elseif( $diff < 3600 * 24 * 2 ) // it happened yesterday
        return TIMEBEFORE_YESTERDAY;

    elseif( $diff < 3600 * 24 * 7 )
        return str_replace( '{num}', round( $diff / ( 3600 * 24 ) ), TIMEBEFORE_DAYS );

    elseif( $diff < 3600 * 24 * 7 * 4 )
        return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 ) ) ), $out == 1 ? TIMEBEFORE_WEEK : TIMEBEFORE_WEEKS );

    elseif( $diff < 3600 * 24 * 7 * 4 * 12 )
        return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 * 4 ) ) ), $out == 1 ? TIMEBEFORE_MONTH : TIMEBEFORE_MONTHS );


    else // falling back on a usual date format as it happened later than yesterday
        return strftime( date( 'Y', strtotime( $time ) ) == date( 'Y' ) ? TIMEBEFORE_FORMAT : TIMEBEFORE_FORMAT_YEAR, strtotime( $time ) );
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aitchison College - Principal's Speechs</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="/nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="/nne_logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once("phpinclude/headercontrol.php");  ?>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='css/circliful.css'><!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- preloader
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style_29082018.css" rel="stylesheet">
    <link href="css/sidemenu.css" rel="stylesheet">

    <link rel="stylesheet" href="speeches/css/videolightbox.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="speeches/css/overlay-minimal.css"/>



    <!-- Google fonts -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/sidemenu.js"></script>

    <style>
        .videos {
            margin: 0 auto;
            margin-left: 13px;
            margin-bottom: 40px;
        }
        .videos video {
            width: 75%;
            display: block;
            margin-top: 5px;
            border:2px #939393 solid;
        }
        .videos:before {
            content: '';
            background: #000;
            border-radius: 5px;
        }

    </style>
</head>
<body>

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<?php include("phpinclude/header.php");?>
<!--=========== END HEADER SECTION ================-->

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="imgBanner" style=" background-image: url(<?php echo $banner_image_url;?>);">
    <h2><?php echo $banner_text;?></h2>
</section>
<!--=========== END COURSE BANNER SECTION ================-->


<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="gallery">
    <div class="container">
        <div class="row" style="min-height: 300px;">
            <!-- start course content -->
            <div class="col-lg-3 col-md-3 col-sm-3">
                <script>
                    $(document).ready(function () {

                        //active state
                        $(function () {
                            $('a').click(function (e) {
                                $('a').removeClass('active');
                                $(this).addClass('active');
                            });
                        });
                        $(function () {
                            if (location.pathname.length > '1') {
                                $('a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
                            }
                        });

                        $(".submenu").hover(function () {
                                if($(this).is(":visible")) {
                                    $(".glossymenu a").removeClass("active");
                                    $(this).prev().addClass("active");
                                }
                            },
                            function(){
                                //$(this).prev().removeClass("active");
                            });
                    });
                </script>

                <?php include("phpinclude/sidmenu.php");?>
                <script type="text/javascript">
                    ddaccordion.init({
                        headerclass: "submenuheader", //Shared CSS class name of headers group
                        contentclass: "submenu", //Shared CSS class name of contents group
                        revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
                        mouseoverdelay: 400, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
                        collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
                        defaultexpanded: ["<?php echo $default_open;?>"], //index of content(s) open by default [index1, index2, etc] [] denotes no content
                        onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
                        animatedefault: false, //Should contents open by default be animated into view?
                        persiststate: false, //persist state of opened contents within browser session?
                        toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
                        togglehtml: ["suffix", "<img src='img/plus.png' class='statusicon' />", "<img src='img/minus.png' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
                        animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
                        oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
                            //do nothing
                        },
                        onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
                            //do nothing
                        }
                    });
                </script>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="aboutus_area wow fadeInLeft">
                    <h2 align="center"><strong>Principal's Speeches</strong></h2>

                    <br/>

                    <div class="videogallery">

                        <?php foreach($speeches as $speech) {?>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                <div class="video-card">
                                    <a class="voverlay" href="js/video/vdbplayer.swf?volume=100&url=../../../speeches/<?php echo $speech['fileName']; ?>.mp4" title="<?php echo $speech['title']; ?>">
                                        <img src="speeches/posters/<?php echo $speech['fileName']; ?>.jpg" alt="<?php echo $speech['title']; ?>" />
                                        <span class="video-play"></span>
                                        <span class="video-time"><?php echo $speech['duration']; ?></span>
                                    </a>
                                    <div><?php echo $speech['title']; ?></div>
                                    <span><?php echo $speech['desc']; ?></span>
                                    <div class="video-duration"><?php echo strftime(FORMAT_MONTH_YEAR, strtotime($speech['date'])); ?></div>

                                </div>
                            </div>

                        <?php } ?>


                    </div>

                </div>


                <br><br>

            </div>



        </div>
    </div>
    <!-- End course content -->

    <!-- start course archive sidebar -->

    <!-- start course archive sidebar -->
    </div>
    </div>
</section>
<!--=========== END COURSE BANNER SECTION ================-->

<!--=========== BEGIN FOOTER SECTION ================-->
<?php include("phpinclude/footer.php");?>
<!--=========== END FOOTER SECTION ================-->



<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->

<!-- Preloader js file
<script src="js/queryloader2.min.js" type="text/javascript"></script>
<!-- For smooth animatin  -->
<script src="js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="js/slick.min.js"></script>
<!-- superslides slider -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script language="javascript" src='/js/jquery.circliful.min.js'></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

<!-- Custom js-->
<?php
if(empty($_SESSION['mynotify'])){
    $_SESSION['mynotify']="Show Me.";
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
        ?>
        <script src="js/notifications.js"></script>
        <?php
    }
}
?>
<script src="js/custom1.js"></script>

<script>
    var imageIndex = "1";

    var img1 = "newsletter/news/images/photographic-history-1-469.jpg";
    var img2 = "newsletter/news/images/photographic-history-2-469.jpg";

    $("#imgHistory, #arrowLeft, #arrowRight").click(function(){
        if(imageIndex == 1) {
            $('#imgHistory').attr('src', img2);
            imageIndex = 2;
        }
        else {
            $('#imgHistory').attr('src', img1);
            imageIndex = 1;
        }
    });

</script>

</body>
</html>