
    <!-- jQuery -->
    <script src="<?php echo $path; ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $path; ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <!-- bootstrap-progressbar -->
    <script src="<?php echo $path; ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <?php if ( false ) { ?>
    
    <!-- FastClick -->
    <script src="<?php echo $path; ?>vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo $path; ?>vendors/nprogress/nprogress.js"></script>
    
    <!-- Chart.js -->
    <script src="<?php echo $path; ?>vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo $path; ?>vendors/gauge.js/dist/gauge.min.js"></script>
    
    <!-- iCheck -->
    <script src="<?php echo $path; ?>vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo $path; ?>vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo $path; ?>vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo $path; ?>vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo $path; ?>vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo $path; ?>vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo $path; ?>vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo $path; ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo $path; ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo $path; ?>vendors/flot.curvedlines/curvedLines.js"></script>
    
    <!-- JQVMap -->
    <script src="<?php echo $path; ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo $path; ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo $path; ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    
    <!-- DateJS -->
    <script src="<?php echo $path; ?>vendors/DateJS/build/date.js"></script>
    
	
    <?php } ?>

	<!-- jQuery custom content scroller -->
    <script src="<?php echo $path; ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo $path; ?>js/moment/moment.min.js"></script>
    <script src="<?php echo $path; ?>js/datepicker/daterangepicker.js"></script>
    
	<!-- Slider -->
    <script type="text/javascript" language="javascript" src="<?php echo $path; ?>../js/jquery.tosrus.min.all.js"></script>  

    <!-- Custom Theme Scripts -->
	<script src="<?php echo $path; ?>build/js/custom.min.js"></script>
	
	<!-- Page refresh on the message of Deprecated of HTMLPurifier. -->
    <script src="<?php echo $path; ?>js/refresh-page.js"></script>

<script>
    //document.addEventListener('contextmenu', event => event.preventDefault());
    //document.addEventListener('copy', event => event.preventDefault());
    //document.addEventListener('cut', event => event.preventDefault());

    //$(document).bind('contextmenu', function(e) {         alert('Right Click  is not allowed !!!');         e.preventDefault();     });









	$( document ).ready(function() {
		var w = window,
			d = document,
			e = d.documentElement,
			g = d.getElementsByTagName('body')[0],
			x = w.innerWidth || e.clientWidth || g.clientWidth,
			y = w.innerHeight|| e.clientHeight|| g.clientHeight;
		//alert(x + ' × ' + y + '\n' + panelHeight);
		
		//calculate and setting the x_panel min-height
		margins = 50;
		
		panelHeight = $( ".container" ).height() - ( $( ".nav_menu" ).height() + $( "footer" ).height() + margins );
		
		//$( ".x_panel" ).height( panelHeight );
		
		/*if (y > panelHeight)
			$('.x_panel').css('min-height', panelHeight);*/
		

	});
	
	
	
$(document).ready(function() {
/*   GALLERY SLIDER
	 ----------------------------------------------------------- */
	 $('#gallerySLide a').tosrus({
          buttons: 'inline',
          pagination : {
            add     : true,
            type    : 'thumbnails'            
          },
          keys: {
            next: true,
			prev: true,
			close: true
          },
          wrapper  : {
            onClick     : 'close',
          },
          caption   : {
            add     : true
          }
     }); 
}); 
	
	
	
	var screenWidth, screenHeight, dialogWidth, dialogHeight, isDesktop, screenfactor;

    screenWidth = window.screen.width;
    screenHeight = window.screen.height;
	screenfactor=parseInt(screenWidth)/parseInt(screenHeight);
    if ( screenWidth < 500 ) {		
        dialogWidth = screenWidth * .95;
        dialogHeight = dialogWidth/1.5;//screenHeight * .63;		
    } else {
        dialogWidth = 760;
        dialogHeight = 480;
        isDesktop = true;
    }
		
		if($("#vid3").length > 0)
        $(function () {
			$("#vid3").dialog({
			 autoOpen: false, 
			 show: {
					effect: "blind",
					duration: 1000,
					complete: function() {
						  startPlay3() 
					}
        	},
			modal: false,
			height: dialogHeight,
            width: dialogWidth,
		   dialogClass: "no-close",
		  close : function(){
			  var vid = document.getElementById('introVid3');			  
			  vid.pause();			  
			  //alert(document.getElementById("speech3").scrollIntoView());
			  //document.body.scrollTop = 80%;
		  }  
		 });
			
			
			
			$("#speech3").click(function () {
				$("#vid3").dialog("open");
				startPlay3();
			});

			function startPlay3() {
				var vid = document.getElementById('introVid3');

				if (vid.readyState===4) {
					vid.play();
				} else {
					alert("Please wait while video is downloading");
				}                    
			}
			
			
        });
	
		if($("#vid4").length > 0)
		$(function () {
			$("#vid4").dialog({
			 autoOpen: false, 
			 show: {
					effect: "blind",
					duration: 1000,
					complete: function() {
						  startPlay4() 
					}
        	},
			modal: false,
			height: dialogHeight,
            width: dialogWidth, 
		   dialogClass: "no-close",
		  close : function(){
			  var vid = document.getElementById('introVid4');
			  vid.pause();
		  }  
		 });
			$("#speech4").click(function () {
				$("#vid4").dialog("open");
				startPlay4();
			});

			function startPlay4() {
				var vid = document.getElementById('introVid4');

				if (vid.readyState===4) {
					vid.play();
				} else {
					alert("Please wait while video is downloading");
				}                    
			}
        });
function printDoc(title, content){	
	var prtTitle = document.getElementsByClassName(title)[0].innerHTML;	
	var prtContent = document.getElementById(content).innerHTML;	
	//alert(prtTitle);
	var WinPrint = window.open('', '', 'letf=0,top=0,width=100%,height=auto,toolbar=0,scrollbars=0,status=0');
	WinPrint.document.writeln("<!DOCTYPE html PUBLIC  \"-//W3C//DTD XHTML 1.0 Transitional//EN \" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");	
	WinPrint.document.writeln("<html xmlns=\"http://www.w3.org/1999/xhtml\">");
	WinPrint.document.writeln("<head>");
	WinPrint.document.writeln("<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />");	
	WinPrint.document.writeln("</head>");
	WinPrint.document.writeln("<body>");
	WinPrint.document.write(prtTitle);
	WinPrint.document.write(prtContent);
	WinPrint.document.writeln("</body>");
	
	WinPrint.document.writeln("</html>");
	WinPrint.focus();
	WinPrint.print();
	WinPrint.close();
}


</script>