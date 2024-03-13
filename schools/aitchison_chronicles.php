<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title = "Aitchison Chronicles"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>

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
        border: 1px transparent solid;
    }

    .newsletters > div > .item:hover {
        /*box-shadow: 0 0 10px 0 rgb(0 0 0 / 80%);*/
        border: 1px #00205b solid;
    }

    #sect-newsalert {
        position: inherit;
    }


    @media (max-width: 1024px) {

        .newsletters > div > .item > a > div {
            font-size: 1.1rem;
        }

        .newsletters > div > .item > a > h3 {
            font-size: 1.5rem;
        }

    }

    @media (max-width: 768px) {

        .newsletters > div > .item > a > div {
            font-size: .9rem;
        }

        .newsletters > div > .item > a > h3 {
            font-size: 1.3rem;
        }

    }


</style>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>


<div class="container">
    <div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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

            <p>&nbsp;</p>

            <div class="row newsletters pe-3">

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/economics-section.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/economics-section.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>Economics Section</h3>
                        </a>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/english-section.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/english-section.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>English Section</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/entrepreneurial-section.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/entrepreneurial-section.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>Entrepreneurial Section</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/french-section.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/french-section.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>French Section</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/german-section.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/german-section.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>German Section</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/mun-section.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/mun-section.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>MUN Section</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/urdu-section.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/urdu-section.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>Urdu Section</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/spectrum-january-2024.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/spectrum-january-2024.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>Spectrum January 2024</h3>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">
                        <a href="https://aitchison.edu.pk/school_doc/2023-24/chronicles/spectrum-november-2023.pdf" target="_blank">
                            <img src="../img/aitchison-chronicles/spectrum-november-2023.jpg" alt="Aitchison Chronicles" class="img-fluid"/>
                            <div>Aitchison Chronicles</div>
                            <h3>Spectrum November 2023</h3>
                        </a>
                    </div>
                </div>


            </div>


            <p>&nbsp;</p>

        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
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

<?php include_once ($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once ($path."footer-includes.php");?>

<!-- End Footer Includes -->


</body>

</html>