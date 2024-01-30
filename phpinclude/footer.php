<style>
.g20-logo { padding: 0px;margin: 0px; }

@media only screen and (min-width: 1025px) {
	.internationalwordwrap{
		white-space: nowrap;		
	}
}
@media only screen and (max-width: 992px) {
		.aku_logo{			
			/*padding-left: 35px;*/
			padding-left: -35px;			
		}	
	}
	@media only screen and (min-width: 992px) {
		.aku_logo{
			margin: auto;
			padding-left: 35px;
			/*padding-left: 35px;*/
		}		
	}
</style>
<style>
#firstDiv { padding: 0 5px; }
#secondDiv { padding: 0 5px; }
#thirdDiv { padding: 0 5px; }

#topMessage { font-size: 20px;}

@media (max-width: 1024px) {
    #topMessage { font-size: 16px;}
    #yfooter a.cright { font-size: 8px;}
}

@media (max-width: 768px) {
    #firstDiv { padding: 0 8px; }
	#yfooter a { font-size: 11px;}
	.col-xs-1-5, .col-sm-1-5, .col-md-1-5, .col-lg-1-5, .col-xs-2-5, .col-sm-2-5, .col-md-2-5, .col-lg-2-5, .col-xs-3-5, .col-sm-3-5, .col-md-3-5, .col-lg-3-5, .col-xs-4-5, .col-sm-4-5, .col-md-4-5, .col-lg-4-5{
		padding-left: 0px;
		padding-right: 0px;
		
		
	}

	.row, .aku_logo{
		margin-left: -10px;
	}	

	.g20-logo { padding-right: 3px; }
}

@media (max-width: 425px) {
    #firstDiv { padding: 0 17px; }
    #secondDiv { padding: 0 17px; }
    #thirdDiv { padding-right: 10px; }
}
.cambridge-footer {
		color:#FFFFFF; text-align: center; line-height: 1.2em; height: 48px; padding-top: 5px;
	}
.cambridge-footer span{
		font-size: 9px;
}
@media only screen and (max-width: 991px) and (min-width: 768px) {
	.cambridge-footer {
		color:#FFFFFF; text-align: center; line-height: 1.2em; height: 60px; padding-top: 5px;
	}	
}	
@media (min-width: 1025px) {
	.cambridge-footer span{
		font-size: 11px;
		white-space: nowrap;
	}
	
}
	
@media (max-width: 425px) {
	.cambridge-footer span{
		font-size: 11px;
		white-space: nowrap;
	}
	
}
</style>
<?php /*?><footer style="background:#FFC600; float: left; width:100%;"><?php */?>
<footer style="float: left; width:100%;">	
<div align="center">    
    <nav id="yfooter" class="navbar navbar-default" role="navigation" style="opacity:1; padding-bottom:0px; margin-bottom:0px;">
    
	<div id="blueRow" align="center">
        <div class="container" align="center">
        	
            <div class="row" style="position: relative; top: 0px; color:#fff;">
                
                <div class="col col-lg-1-5 col-md-1-5 col-sm-1-5 col-xs-12">
                    <a href="our-schools" class="" role="button">Our Schools</a>
                </div>
                <div class="col col-lg-1-5 col-md-1-5 col-sm-1-5 col-xs-12">
                    <a href="academics" class="" role="button">Academics</a>
                </div>
                <div class="col col-lg-1-5 col-md-1-5 col-sm-1-5 col-xs-12">
                    <a href="boarding-houses" class="" role="button">Boarding</a>
                </div>
                <div class="col col-lg-1-5 col-md-1-5 col-sm-1-5 col-xs-12">
                    <a href="sports" class="" role="button">Sports</a>
                </div>
                <div class="visible-xs col col-lg-1-5 col-md-1-5 col-sm-1-5 col-xs-12">
                    <a href="available-positions" class="" role="button">Careers</a>
                </div>
                <div class="col col-lg-1-5 col-md-1-5 col-sm-1-5 col-xs-12" style="padding-right: 0px !important;">
                    <a href="principal-recent-newsletter" class="" role="button"><span  style="white-space: nowrap; white-space: pre;">Principal's  Public  Letters</span></a>
                </div>
                
                
            </div>
                
        </div>
    
    </div>
    

	<div style="background:#FFC600; min-height:50px; padding-top:5px;">
	
        <div class="container">            
          <div class="row"> 
			  <?php
			  if(isset($_GET['logo'])){
				  $akuwidth="206px";
				  $akulogo="img/agha-khan/0002-a.png";				  
			  }else{
				  $akuwidth="148px";
				  $akulogo="img/agha-khan/0001.png";				  
			  }
			  ?>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12" style="padding: 0px;">
				<div class="row aku_logo">
					<div id="firstDiv" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="img/cambridge/cambridge-international-school-new2.png" width="148" height="48" style="vertical-align:top; display:inline; padding-top: 4px;" class="img-responsive" alt="Cambridge International School">	
					</div>
					<div id="secondDiv" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <img src="img/cambridge/cambridge-international-school-text2.png" width="148" height="48" style="vertical-align:top; display:inline; padding-top: 4px;" class="img-responsive" alt="Cambridge International School">
					</div>
                    <div id="thirdDiv" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<img src="<?php echo $akulogo; ?>" width="<?php echo $akuwidth; ?>" height="48" style="vertical-align:top; display:inline; padding-left: 10px;" class="img-responsive" alt="Agha Khan University Examination Board">
					</div>
				</div>
				<?php /*?><img src="img/cambridge/cambridge-international-school.png" width="148" height="48" style="vertical-align:top; display:inline; padding-top: 4px;" class="img-responsive" alt="Cambridge International School">
				&nbsp;<img src="<?php echo $akulogo; ?>" width="<?php echo $akuwidth; ?>" height="48" style="vertical-align:top; display:inline; padding-left: 10px;" class="img-responsive" alt="Agha Khan University Examination Board"><?php */?>
				
			  </div>

            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12" align="center">
                <div align="center">            
                    <span id="topMessage" style="position: relative; margin: 0px; padding: 0px;">Perseverance Commands Success</span><br />
					<span id="msgcopyright" class="hidden-xs" style="font-size: 11px;">
						<a href="copyrights.php" class="cright"> <?php echo date("Y"); ?> © Aitchison College, Lahore. All Rights Reserved.</a></span>
				</div>
            </div>
            
            <?php /*?><div class="col-lg-1 col-md-1 col-sm-1 col-xs-4"><img src="img/g20-logo-100x100.png" width="44" height="62" style="display:inline;" class="img-responsive" alt="G20 School of the world"></div><?php */?>
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                <div id="cambridge2" class="row">
					  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 g20-logo">
						  	<img src="img/g20-logo-100x100.png" width="44" height="62" style="display:inline;" class="img-responsive" alt="G20 School of the world">
					  </div>
                      <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 cambridge-footer" style="background-color: #C51E49;">
                           <span>Cambridge International</span> <br><span style="font-weight: bold;">A Level </span>
                    </div>
                    
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 cambridge-footer" style="background-color: #E25527;">
                        
                        <span>Cambridge </span> <br><span style="font-weight: bold;">IGCSE</span>
                    </div>
                    
                    <p style="line-height:1.4;"></p>
                    
               </div>
            </div>
            
            
            
          </div>	
             <span class="visible-xs" style="font-size: 11px;">
				 <a href="copyrights.php" class="cright"><?php echo date("Y"); ?> © Aitchison College, Lahore. All Rights Reserved.</a>
             </span>
      </div>
    
    
    </div>
    </nav>
    
</div>
</footer>

    
	<?php 
		if(isset($db)) {
			//$db->closeDatabase();
			$db->closeDatabase();
			//echo "Akhtar Rafiq";
		}
	?>    
    <?php include_once("analyticstracking.php") ?>
	
    
	<script language="javascript" src='js/jquery.circliful.min.js'></script>
<script>

// disabling the contextmenu on images
$(document).ready(function()
{
	$('a[href="#"]').click(function(e) {
		e.preventDefault ? e.preventDefault() : e.returnValue = false;
	});

});
if ($('.p-top-menu').length > 0){
	if(screen.width > 767)
		$(document).scrollTop(350);
	else
		$(document).scrollTop(1000);
}
</script> 
