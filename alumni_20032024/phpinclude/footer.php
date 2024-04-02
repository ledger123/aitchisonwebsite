  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-8">
          <div class="footer-left">
           <p>Designed by <a href="https://www.aitchison.edu.pk">Aitchison College</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-4">
          <div class="footer-right">
          	<?php /*?><a href="https://www.facebook.com/aitchisonalumni" class="visible-xs" target="_blank" style="padding: 0px;">
					<img src="../img/facebook-icon.png" style="width:20px; height:24px;"> 
				</a><?php */?>
            <?php /*?>
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
			<a href="https://twitter.com/home?status=<?php echo $title;?> <?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>&title=<?php echo $title;?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a><?php */?>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
  <?php if(true) { ?>
		  <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-89156764-1', 'auto');
			  ga('send', 'pageview');

		</script>
<?php } ?>

<script>

// without jQuery (doesn't work in older IEs)
// disabling the contextmenu on images
document.addEventListener('DOMContentLoaded', function(){ 
    
	$("body").on("contextmenu", "img", function(e) {
	  return false;
	});
	
}, false);

/*
// disabling the contextmenu on images
$(document).ready(function()
{
	$("body").on("contextmenu", "img", function(e) {
	  return false;
	});

});
*/

</script> 