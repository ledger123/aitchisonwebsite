<?php

$path = '';
$imagePath = '../';
?>

<!DOCTYPE html>
<html>

<?php $title = "Old Boys' Bulletin"; include_once ("header-includes.php");?>

<style>

    .newsletters > div {
        padding: 1.5rem;
    }

    .newsletters > div  > .item > a > img {

    }

    .newsletters > div > .item > a > h3 {
        font-size: 1.5rem;
        text-align: center;
        margin-top: 1rem;
    }

    .newsletters > div > .item {
        padding: 1rem;
        box-shadow: 0 0 20px 0 rgb(0 0 0 / 50%);
        transition: box-shadow 0.1s ease-in-out;
    }

    .newsletters > div > .item:hover {
        box-shadow: 0 0 10px 0 rgb(0 0 0 / 80%);
    }

    #sect-newsalert {
        position: inherit;
    }

</style>


<body>

<!-- News Header -->
<?php include_once ('news-header.php'); ?>

<!-- News Alerts -->
<div class="container-fluid" style="padding-right: 0; background-color: #ffc845;">
    <?php include_once ('news-alerts.php'); ?>

</div>

<!-- End News Alerts -->


<div class="container">

    <div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Old Boys' Bulletin</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title page-title2">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>

    <!-- Contents -->
    <div class="row">

        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="row newsletters">
				<?php
				if(false){
				?>
				<div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/old-boys-bulletin-may-2023.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-may-2023-v1.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>May 2023</h3>
                        </a>
                    </div>
                </div>
				<?php
				}
				?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/old-boys-bulletin-december-2022-v2.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-202212-2.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>December 2022</h3>
                        </a>
                    </div>
                </div>

                <?php if(true) { ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/old-boys-bulletin-may-2022.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-202205.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>May 2022</h3>
                        </a>
                    </div>
                </div>
                <?php } ?>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/OLD-BOYS-BULLETIN-NOVEMBER-2021.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-202111.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>November 2021</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="news-988-alumni-newsletter-april-2021" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-202104.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>April 2021</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="news-763-alumni-newsletter-july-2020" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-202007.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>July 2020</h3>
                        </a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/old-boys-bulletin-2019-vol-4.1.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201911.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>November 2019</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-august-2018.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201808.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>August 2018</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-april-2018.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201804.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>April 2018</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-december-2018.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201812.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>December 2018</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-december-2017.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201712.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>December 2017</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-september-2017.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201709.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>September 2017</h3>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/alumni/newsletters/newsletter-july-2017.pdf" target="_blank">
                            <img src="<?php echo $imagePath; ?>alumni/newsletters/posters/alumni-newsletter-201707.jpg" alt="Alumni Newsletter" class="img-fluid"/>
                            <h3>July 2017</h3>
                        </a>
                    </div>
                </div>

            </div>

        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">

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