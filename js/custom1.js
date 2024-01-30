/**	
	* Template Name: WpF Degree - Ultra Responsive Bootstrap Educational Html5 Template
	* Version: 1.0	
	* Template Scripts
	* Author: WpFreeware Team
	* Author URI: http://wpfreeware.com/

	Custom JS
	
	1. DROPDOWN MENU
	2. SUPERSLIDES SLIDER
	3. NEWS SLIDER
	4. SKILL CIRCLE
	5. WOW SMOOTH ANIMATIN
	6. COURSE SLIDER
	7. TUTORS SLIDER
	8. BOOTSTRAP TOOLTIP
	9. PRELOADER
	10. EVENTS SLIDER
	11. GALLERY SLIDER
	12. SCROLL TOP BUTTON
	13. SCROLL UP BUTTON	 	
	
**/

jQuery(function($){


	/* ----------------------------------------------------------- */
  /*  1. DROPDOWN MENU
  /* ----------------------------------------------------------- */

   // for hover dropdown menu
  $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });
	
	/* ----------------------------------------------------------- */
	/*  2. SUPERSLIDES SLIDER
	/* ----------------------------------------------------------- */
	$('#slides').superslides({
      animation: 'fade',
      animation_easing: 'linear',
      pagination: 'true'
    });
	
	/* ----------------------------------------------------------- */
	/*  3. NEWS SLIDER
	/* ----------------------------------------------------------- */
	$('.single_notice_pane').slick({     
      slide: 'ul'
      
    });
    $('[href="#notice"]').on('shown.bs.tab', function (e) {
    $('.single_notice_pane').resize();
	});
	 $('[href="#news"]').on('shown.bs.tab', function (e) {
    $('.single_notice_pane').resize();
	});   
    


	/* ----------------------------------------------------------- */
	/*  4. SKILL CIRCLE
	/* ----------------------------------------------------------- */

	$('#myStathalf').circliful();
	$('#myStat').circliful();
	$('#myStathalf2').circliful();
	$('#myStat2').circliful();
	$('#myStat3').circliful();
	$('#myStat4').circliful();
	$('#myStathalf3').circliful();

	/* ----------------------------------------------------------- */
	/*  5. WOW SMOOTH ANIMATIN
	/* ----------------------------------------------------------- */

	wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();


	/* ----------------------------------------------------------- */
	/*  6. COURSE SLIDER
	/* ----------------------------------------------------------- */
	
    $('.course_nav').slick({
	  dots: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 3,
	  arrows:true,  
	  slidesToScroll: 3,
	  slide: 'li',
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});

	/* ----------------------------------------------------------- */
	/*  7. TUTORS SLIDER
	/* ----------------------------------------------------------- */

	 $('.tutors_nav').slick({
	  dots: true,	  
	  infinite: true,
	  speed: 300,
	  slidesToShow: 5,
	  arrows:false,  
	  slidesToScroll: 1,
	  slide: 'li',
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3,
	        infinite: true,
	        arrows:false
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
		

	/* ----------------------------------------------------------- */
	/*  8. BOOTSTRAP TOOLTIP
	/* ----------------------------------------------------------- */
		$('.soc_tooltip').tooltip('hide')



	/* ----------------------------------------------------------- */
	/*  9. PRELOADER 
	/* ----------------------------------------------------------- */
	  /*window.addEventListener('DOMContentLoaded', function() {
        new QueryLoader2(document.querySelector("body"), {
            barColor: "#efefef",
            backgroundColor: "#111",
            percentage: true,
            barHeight: 1,
            minimumTime: 200,
            fadeOutTime: 1000
        });
    });*/


    /* ----------------------------------------------------------- */
	/*  10. EVENTS SLIDER
	/* ----------------------------------------------------------- */
	   
	$('.events_slider').slick({
	  dots: true,
	  infinite: true,
	  speed: 500,
	  fade: true,
	  cssEase: 'linear'
	});

    /* ----------------------------------------------------------- */
	/*  11. GALLERY SLIDER
	/* ----------------------------------------------------------- */

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

	/* ----------------------------------------------------------- */
	/*  12. SCROLL UP BUTTON
	/* ----------------------------------------------------------- */

	//Check to see if the window is top if not then display button

	  $(window).scroll(function(){
	    if ($(this).scrollTop() > 300) {
	      $('.scrollToTop').fadeIn();
	    } else {
	      $('.scrollToTop').fadeOut();
	    }
	  });
	   
	  //Click event to scroll to top

	  $('.scrollToTop').click(function(){
	    $('html, body').animate({scrollTop : 0},800);
	    return false;
	  });
	

	
});

$(document).ready(function () {		
	 $('.navbar-nav li a').click(function() {
			if ($(this).hasClass('dropdown-toggle active')){
				//alert("Active");
				$('.navbar-nav li ul').removeAttr('style');// attr("style","");
				$(this).toggleClass('active');					
				$(this).classList.remove('active');
				/* if(typeof $('.navbar-nav li ul').attr("style")==="undefined"){
					alert("undefined");
				}else{						
					alert("Defined "+$('.navbar-nav li ul').attr("style"));
				}*/
			}else if(!$(this).hasClass('dropdown-toggle active')){
				//alert("Inactive");
				$(this).addClass('active');
				//alert("Inactive1");
				$('.navbar-nav li ul').removeAttr('style');
				//alert("Inactive2");
				if(!$('.navbar-nav li ul').attr("style")){
					$(this).parent().find('ul').attr("style", "display: block; opacity: 1; transition-property: all; transition-duration: 0s; transition-timing-function: ease;");

				}
			}
		});	
	
	$("#closeit").click(function(){
		
		$("#videoply123").attr('src', "https://aitchison.edu.pk/newsletter/news/images/prime-minister-news-6280622300.jpg");
		$("#videoModal").dialog('close'); 
	});
	
	$("#speech1").click(function(){
		//alert("akhtar");
	  //autoPlayYouTubeModal("https://aitchison.edu.pk/videos/principal-speech-518.mp4");
		
		//$("#videoModal").dialog();
		
		
		$( "#videoModal" ).css("display", "inline");
		$( "#videoModal" ).dialog({
		   width: "550px"
		});
		
		$( ".ui-dialog" ).css("height", "400px");
		
		
		$("#videoply123").attr('src', "https://aitchison.edu.pk/videos/principal-speech-518.mp4");
		
		//$("#videoply123").attr('src', "https://aitchison.edu.pk/school_doc/happynewyear-2019.mp4");
		
	});
	
	
	
	$("#speech2").click(function(){
	  $( "#videoModal" ).css("display", "inline");
		$( "#videoModal" ).dialog({
		   width: "550px"
		});
		
		$( ".ui-dialog" ).css("height", "400px");
		
		
		$("#videoply123").attr('src', "https://aitchison.edu.pk/videos/imran-khan-speech-518.mp4");
	});

});


function autoPlayYouTubeModal(src) {
	  //alert("akhtar"+videosrc);
      var trigger = $("body").find('[data-toggle="modal"]');
      trigger.click(function () {
          var theModal = $(this).data("target"),
              videoSRC = src, //$(this).attr("data-theVideo"),
              videoSRCauto = videoSRC + "?autoplay=1";
          $(theModal + ' iframe').attr('src', videoSRCauto);
          $(theModal + ' button.close').click(function () {
              $(theModal + ' iframe').attr('src', videoSRC);
          });
      });
  }

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
var elmnt = document.getElementById("imgBanner"); //
//alert("akhtar"+elmnt);  //getElementById("content");
 if(elmnt){
	elmnt.scrollIntoView();  
 }
/*****************STARTED: AUTOPLAY VIDOES ON PAGE***********************/
		var autoplayid = document.getElementById('autoplayvideoid');
		var browsertype=navigator.userAgent;
		if(autoplayid){
			autoplayid.autoplay=true;	   			
			autoplayid.load(); 
			if(browsertype.indexOf("Firefox") <= 0){				
				//autoplayid.muted = false; 
				/***********UNCOMMENT ABOVE LINE TO PLAY SOUND. BUT THIS WILL ONLY PLAY IN CHROME.***********/	   		
			}
		}
		

/*****************ENDED: AUTOPLAY VIDOES ON PAGE***********************/


/*****************STARTED: RELIVING AITCHISON ON PAGE***********************/
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
/*****************ENDED: RELIVING AITCHISON ON PAGE***********************/	
