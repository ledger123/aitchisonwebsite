<!DOCTYPE html>
<html>
<?php
include_once("../path-settings.php");
$title = "Live Scoreboard"; include_once($path."header-includes.php");

//$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
$banner_url = $path.'resources/assets/images/banners/scoreboard-20230224.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>

<div class="container">
	
    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12 text-center">
            <div style="width: 100%; text-align: center; min-height: 350px;">
				<?php								
				function has_ssl( $domain ) {
						$res = false;					
						$stream = @stream_context_create( array( 'ssl' => array( 'capture_peer_cert' => true ) ) );
						$socket = @stream_socket_client( 'ssl://' . $domain . ':443', $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream );						
						// If we got a ssl certificate we check here, if the certificate domain
						// matches the website domain.
						if ( $socket ) {
							$cont = stream_context_get_params( $socket );
							$cert_ressource = $cont['options']['ssl']['peer_certificate'];
							$cert = openssl_x509_parse( $cert_ressource );

							// Expected name has format "/CN=*.yourdomain.com"
							$namepart = explode( '=', $cert['name'] );								
							// We want to correctly confirm the certificate even 
							// for subdomains like "www.yourdomain.com"
							if ( count( $namepart ) >= 2 ) {
								$cert_domain = trim( $namepart[1], '*. ' );
								$check_domain = substr( $domain, -strlen( $cert_domain ) );			$res = true;					
								//$res = ($cert_domain == $check_domain);
							}
						}

						return $res;
					}
				$res=has_ssl("www.totalcricketscorer.com");
				$domainup=file_get_contents("www.totalcricketscorer.com");
				$divvalue=3;
				if($res){
					$divvalue=2;	
				}else{		
					$page_contents=file_get_contents("http://www.totalcricketscorer.com/TCSLive/TCSClubScoresWidget.aspx?ctry=Pakistan&rgn=Lahore&clb=Aitchison+College");					
					if(strpos($page_contents, 'No data for latest match.')){
						$divvalue=3;
					}
				}
				if($divvalue==1){				
				$page_contents=str_replace('<span id="lblAdvert"><a href="TCSLiveScores.aspx" target="_blank"><img src="TCSImages/widget-logo.png" alt="Live Scores" title="Live Scores" /></a></span>', '<span id="lblAdvert"><a href="javascript:;"><span style="color: white;">Live Scores</span></a></span>', $page_contents);
				//http://www.totalcricketscorer.com/TCSLive/TCSMatchDetail.aspx
				$page_contents=str_replace('TCSMatchDetail.aspx', 'http://www.totalcricketscorer.com/TCSLive/TCSMatchDetail.aspx', $page_contents);
				?>
				<div style="width: 100%; text-align: center; min-height: 350px;">					
					<?php echo $page_contents;?>
				</div>				
				<?php
				}elseif($divvalue==2){
				?>
				<!--<?php echo $page_contents."TestTwo";?>-->
                <iframe frameborder='0' id="frmScore" src='http://www.totalcricketscorer.com/TCSLive/TCSClubScoresWidget.aspx?ctry=Pakistan&rgn=Lahore&clb=Aitchison+College&refresh=auto' width="150px" height="300px" style="width: auto;"></iframe>
				<?php
				}else{
					$msg1="<strong>Match status:</strong> No Match is being played. Please visit again.";
					$msg="<strong>Cricket Live Scoreboard Update:</strong> No Match Currently";
				?>
				<div class="alert alert-info">
				 <?php /*?><strong>Match status:</strong> No Match is being played. Please visit again.<?php */?>
					<?php echo $msg1; ?>
			  	</div>
				<?php
				}
				?>				
            </div>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">

        </div>
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="divider"></div>

            <div class="row">

            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>
<!-- End Footer Includes -->

</body>

</html>
