<?php include('path-settings.php'); ?>
<!-- jquery -->
<script type="text/javascript" src="<?php echo $path;?>resources/vendors/jquery-3.6.0/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script type="text/javascript" src="<?php echo $path;?>resources/vendors/bootstrap-5.1.3/js/bootstrap.min.js"></script>

<!-- mega menu -->
<script type="text/javascript" src="<?php echo $path;?>resources/vendors/slidermenu/slidermenu.js"></script>


<script src="<?php echo $path;?>resources/vendors/OwlCarousel2/dist/owl.carousel.js"></script>

<!-- fontawesome -->
<script type="text/javascript" src="<?php echo $path;?>resources/assets/fontawesome-web/js/all.min.js"></script>

<!-- Swiper Slider -->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<?php if ($fileName !== 'index') {?>
    <!-- tosrus -->
    <script src="<?php echo $path;?>resources/js/jquery.tosrus.min.all.js"></script>
    <script src="<?php echo $path;?>resources/js/photo-gallery-jquery.js?id=3"></script>
<?php }?>



<script>

    $( document ).ready(function() {


        $('#announcements').owlCarousel({
            loop:true,
            margin:10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1024:{
                    items:3
                },
                1029:{
                    items:4
                },
                1400:{
                    items:4
                }
            }
        });

        $('#boarding-houses').owlCarousel({
            loop:true,
            margin:10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            nav:false,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                769:{
                    items:1
                },
                1025:{
                    items:2
                }
            }
        });

        $('#discover-us').owlCarousel({
            //center: true,
            loop:true,
            margin:10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items:1,
            singleItem: true,
            //dots:false,
            //navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
        });


        $('.news-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            items:3,
            singleItem: true,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2
                },
                1024:{
                    items:3
                }

            }
        });


        $('#news-ticker').owlCarousel({
            //center: true,
            loop:true,
            //margin:10,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items:1,
            singleItem: true,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            nav: true,

            margin:30,
            stagePadding:30,
            smartSpeed:450

            //animateOut: 'slideOutUp',

            //dots:false,
            //navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']
        });


        $('#sports').owlCarousel({
            loop:true,
            margin:2,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:2,
                    slideBy: 2
                },
                600:{
                    items:2,
                    slideBy: 2
                },
                768:{
                    items:3,
                    slideBy: 3
                },
                1024:{
                    items:4,
                    slideBy: 4
                },
                1366:{
                    items:5,
                    slideBy: 5
                },
                1920:{
                    items:5,
                    slideBy: 5
                }
            },
            navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']

        });


        

        $('#logos1').owlCarousel({
            loop:true,
            margin:2,
            //autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            //nav:true,
            autoWidth:true,
            items:1,
            singleItem: true,
            dots:false,
            responsive:{
                0:{
                    items:2,
                    slideBy: 2
                },
                600:{
                    items:2,
                    slideBy: 2
                },
                768:{
                    items:3,
                    slideBy: 3
                },
                1024:{
                    items:4,
                    slideBy: 4
                },
                1366:{
                    items:5,
                    slideBy: 5
                },
                1920:{
                    items:5,
                    slideBy: 5
                }
            },
            navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>']

        });


        var announcementsEl = $('#announcements');


        $(".announcements-next-button").click(function() {
            announcementsEl.trigger('next.owl.carousel');
        });

        $(".announcements-previous-button").click(function() {
            announcementsEl.trigger('prev.owl.carousel');
        });

        var boardingHousesEl = $('#boarding-houses');

        $(".boarding-next-button").click(function() {
            boardingHousesEl.trigger('next.owl.carousel');
        });

        $(".boarding-previous-button").click(function() {
            boardingHousesEl.trigger('prev.owl.carousel');
        });

        var discoverUsEl = $('#discover-us');

        $(".discover-next-button").click(function() {
            discoverUsEl.trigger('next.owl.carousel');
        });

        $(".discover-previous-button").click(function() {
            discoverUsEl.trigger('prev.owl.carousel');
        });

    });


    $(document).ready(function() {

        $("#read-more-toggle").click(function(e) {
            e.preventDefault();

            var elem = $("#read-more-toggle").text();
            if (elem == "Read More") {
            //Stuff to do when btn is in the read more state
            $("#read-more-toggle").text("Read Less");
            $(".show-hide").slideDown();
            //$(".show-hide").css("display", "initial");
            } else {
            //Stuff to do when btn is in the read less state
            $("#read-more-toggle").text("Read More");
            $(".show-hide").slideUp();
            //$(".show-hide").css("display", "none");
            }
        });
    });


    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("#goDown").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (true || this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $('#sect-newsalert').offset().top
                }, 200, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    //window.location.hash = hash;
                });
            } // End if
        });

    });

    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('#backtotop').fadeIn();
            } else {
                $('#backtotop').fadeOut();
            }

            if ($(this).scrollTop() > 400) {
                $('.toaster').fadeOut();
            } else {
                $('.toaster').fadeIn();
            }

        });
        $('#backtotop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });


        $('#jumpto li').click(function(e){
            e.preventDefault();

            // target element id
            let id = $(this).find("a").attr('href');


            if(id === "https://aitchison.edu.pk/principal-letters" ||
               id === "https://aitchison.edu.pk/portal/acportal") {
                window.location.href = id;
            }

            // target element
            $id = $(id);
            if ($id.length === 0) {
                return;
            }



            // top position relative to the document
            let pos = $id.offset().top;

            // animated top scrolling
            $('body, html').animate({scrollTop: pos});

        });


    });

    var swiper = new Swiper(".news-ticker", {
        direction: "vertical",
        centeredSlides: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });

    let sections = ['#sect-announcements', '#sect-discover-us', '#featured-news', '#sect-our-schools', '#sect-aitchison-college', '#sect-boarding', '#sect-sports', '#sect-associations'];
    let index = 1;
/*
    $(window).on('mousewheel DOMMouseScroll', function (e) {

        e.preventDefault();
        return ;

        let direction = (function () {

            let delta = (e.type === 'DOMMouseScroll' ?
                e.originalEvent.detail * -40 :
                e.originalEvent.wheelDelta);

            return delta > 0 ? 0 : 1;
        }());

        if (direction > 0) {
            index = index + 1; //up

            let $section = $(sections[index]); alert((index));
            if ($section.length === 0) {
                return;
            }

            let pos = $section.offset().top;

            $('body, html').animate({scrollTop: pos});

            //$('body, html').stop().animate({ scrollTop: $section.offset().top }, 'slow');
        } else if (direction < 0) {
            index = index - 1; //down

            let $section = $(sections[index]); alert((index));
            if ($section.length === 0) {
                return;
            }

            let pos = $section.offset().top;

            $('body, html').animate({scrollTop: pos});

            //$('body, html').stop().animate({ scrollTop: $section.offset().top }, 'slow');
        }
        return false;
    });
*/
</script>


<script>
    var imageIndex = 0;

    var img1 = "../newsletter/news/images/photographic-history-1-469.jpg";
    var img2 = "../newsletter/news/images/photographic-history-2-469.jpg";

    var images =
        ["../newsletter/news/images/photographic-history-1-469.jpg",
            "../newsletter/news/images/photographic-history-2-469.jpg",
            "../galimages/reliving-aitchison/bookImages/3-v3.jpg",
            "../galimages/reliving-aitchison/bookImages/4-v3.jpg",
            "../galimages/reliving-aitchison/bookImages/5-v3.jpg",
            "../galimages/reliving-aitchison/bookImages/6-v3.jpg"];

    $("#imgHistory1, #arrowRight1").click(function() {
        setImageIndex(1); //imageIndex++;
        $('#imgHistory1').attr('src', images[imageIndex]);

    });

    $("#arrowLeft1").click(function(){
        setImageIndex(-1); //imageIndex--;
        $('#imgHistory1').attr('src', images[imageIndex]);

    });

    function setImageIndex(next) {

        if (next === 1) {
            if((images.length -1) === imageIndex) imageIndex = 0;
            else imageIndex++;
        }

        if (next === -1) {
            if(0 === imageIndex) imageIndex = (images.length -1);
            else imageIndex--;
        }
    }

</script>