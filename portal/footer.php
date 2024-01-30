<br/>
<footer>
  <div class="pull-left" style="margin-top: 15px; font-size: 13px;">
	  
	  <?php if($_SESSION['PORTAL_ID'] == "ParentPortal") {?>
	  <a href="dashboards" target="_parent">Dashboard</a>&nbsp;|&nbsp;
	  <?php }?>
	  <a href="help" target="_blank">Help</a>&nbsp;|&nbsp;
	  <a href="help/copyrights.php" target="_blank">Copyrights</a>&nbsp;|&nbsp;
	  <a href="help/disclaimer.php" target="_blank">Disclaimer</a>
	  
  </div>
  <div class="pull-right hidden-xs">
      Version 1.6, Developed by IT Department<br />For technical assistance, please email at <span style="color: #34495e;">helpdesk@aitchison.edu.pk</span>
  </div>
  <div class="clearfix"></div>
</footer>
<?php if(true) { ?>
		  <script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-71871598-1', 'auto');
			  ga('send', 'pageview');

		</script>
<?php } ?>