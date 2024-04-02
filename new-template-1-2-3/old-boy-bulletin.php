<?php
include_once("path-settings.php");
$path = '';
$imagePath = '../';
?>

<!DOCTYPE html>
<html>

<?php $title = "Old Boys' Bulletin"; include_once ("header-includes.php");

$banner_url = 'resources/assets/images/banners/old-boys-bulletin.jpg';
$page_header = $title;

?>

<?php include_once ('new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<style>

    .newsletters > div {
        padding: 0;
    }

    .newsletters > div  > .item {
        text-align: center;
        text-transform: uppercase;
    }

    .newsletters > div > .item > a > div {
        color: var(--color-light-text);
        font-size: 1.2rem;
        margin-top: 1rem;
    }



    .newsletters > div > .item > a > h3 {
        font-size: 2rem;
        margin-top: 0;
    }

    .newsletters > div > .item {
        padding-bottom: 1rem;
        /*box-shadow: 0 0 20px 0 rgb(0 0 0 / 50%);*/
        transition: box-shadow 0.1s ease-in-out;
    }

    .newsletters > div > .item:hover {
        /*box-shadow: 0 0 10px 0 rgb(0 0 0 / 80%);*/
        border: 1px var(--color-blue) solid;
    }

    #sect-newsalert {
        position: inherit;
    }

</style>


<body>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="contact-info">Old Boys' Bulletin</a></li>
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

        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="row newsletters pe-3">
                <?php if(true) { ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="item">
                            <a href="https://aitchison.edu.pk/alumni/newsletters/old-boys-bulletin-may-2022.pdf" target="_blank">
                                <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-202205.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                                <div>Old Boys' Bulletin</div>
                                <h3>May 2022</h3>
                            </a>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/OLD-BOYS-BULLETIN-NOVEMBER-2021.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-202111-2.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>November 2021</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="news-988-alumni-newsletter-april-2021" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-202104.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>April 2021</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="news-763-alumni-newsletter-july-2020" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-202007.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>July 2020</h3>
                        </a>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/old-boys-bulletin-2019-vol-4.1.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-201911.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>November 2019</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-august-2018.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-201808.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>August 2018</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-april-2018.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-201804.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>April 2018</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-december-2018.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-201812.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>December 2018</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-december-2017.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-201712.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>December 2017</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-september-2017.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters-new/alumni-newsletter-201709.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>September 2017</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-july-2017.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201707.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <div>Old Boys' Bulletin</div>
                            <h3>July 2017</h3>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">

            <div style="margin-left: -12px; margin-right: -12px;">
                <a href="principal-letters" target="_parent">
                    <img src="resources/assets/images/banners/right-side/principal-letters.jpg" class="img-fluid mt-3" alt="Principal Letters">
                </a>

                <a href="news-room" target="_parent">
                    <img src="resources/assets/images/banners/right-side/news-event.jpg" class="img-fluid mt-3" alt="News Events">
                </a>


                <a href="school/aitchison-publications" target="_parent">
                    <img src="resources/assets/images/banners/right-side/publications.jpg" class="img-fluid mt-3" alt="News Events">
                </a>
            </div>

        </div>
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">


            <div class="divider"></div>

        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once ("footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once ("footer-includes.php");?>

<!-- End Footer Includes -->

<script>
    $(function() {
        var cyear=new Date().getFullYear();
        $(".next").click(function() {
            var yearval=parseInt(document.getElementById("nyear").innerText);
            if(cyear > yearval){
                document.getElementById("nyear").innerText=yearval+1;
            }

        })
        $(".prev").click(function() {

            var yearval=parseInt(document.getElementById("nyear").innerText);
            if(yearval > 2016){
                document.getElementById("nyear").innerText=yearval-1; //alert(document.getElementById("nyear").value+"\n"+cyear);
            }

        })
        $(".month-number").click(function(){
            var yearval=parseInt(document.getElementById("nyear").innerText);
            var monthNumber=$(this).val();
            window.location.href = "newslist-"+monthNumber+"-"+yearval;

        })
        $(".categoryselection").click(function(){

            var clsName="."+$(this).attr('name');
            if($(this).is(":checked")){

                $(clsName).show();
            }else{
                $(clsName).hide();
            }
        })
    })

</script>

</body>

</html>