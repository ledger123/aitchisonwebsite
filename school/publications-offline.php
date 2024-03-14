<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title = "Publications"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>

<style>
    .publications {
        /*transition: all .5s ease-in-out;*/

    }

    .publications > div {
        padding: 0;
    }

    .publications > div  > .item {
        text-align: center;
        text-transform: uppercase;
    }

    .publications > div > .item > div {
        color: #a5a5a5;
        font-size: 1.2rem;
        margin-top: 1rem;
    }



    .publications > div > .item > h3 {
        font-size: 2rem;
        margin-top: 0;
        color: #1b3f8f;
    }

    .publications > div > .item {
        padding-bottom: 1rem;
        /*box-shadow: 0 0 20px 0 rgb(0 0 0 / 50%);*/
        transition: box-shadow 0.1s ease-in-out;
        border: 1px transparent solid;
    }

    .publications > div > .item:hover {
        /*box-shadow: 0 0 10px 0 rgb(0 0 0 / 80%);*/
        border: 1px #00205b solid;
    }


    @media (max-width: 1024px) {

        .publications > div > .item > div {
            font-size: 1.1rem;
        }

        .publications > div > .item > h3 {
            font-size: 1.5rem;
        }

    }

    @media (max-width: 768px) {

        .publications > div > .item > div {
            font-size: .9rem;
        }

        .publications > div > .item > h3 {
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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

            <p>Aitchison College publishes a number of school magazines. Junior (Comet), Prep (Preppy) and Senior (Newsletter).</p>
            <p>The most historical publication is 'The Aitchisonian'.</p>

            <p>&nbsp;</p>
            <div class="row text-center publications">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">

                        <img src="../resources/assets/images/publications/the-preppy-2022.jpg" alt="Publications" class="img-fluid"/>
                        <div>Publications</div>
                        <h3>The Preppy 2022</h3>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">

                        <img src="../resources/assets/images/publications/the-aitchisonian-2018-19.jpg" alt="Publications" class="img-fluid"/>
                        <div>Publications</div>
                        <h3>The Aitchisonian 2018-2019</h3>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">

                        <img src="../resources/assets/images/publications/js-comet-2019.jpg" alt="Publications" class="img-fluid"/>
                        <div>Publications</div>
                        <h3>Comet 2019</h3>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">

                        <img src="../resources/assets/images/publications/newsletter2019.jpg" alt="Publications" class="img-fluid"/>
                        <div>Publications</div>
                        <h3>Newsletter 2019</h3>

                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="item">

                        <img src="../resources/assets/images/publications/the-preppy-2019.jpg" alt="Publications" class="img-fluid"/>
                        <div>Publications</div>
                        <h3>The Preppy 2019</h3>

                    </div>
                </div>

            </div>

            <p>&nbsp;</p>
            <hr/>
            <p>&nbsp;</p>

            <div class="col-12 page-title page-title2">
                <h1>Download Aitchison Chronicles</h1>
            </div>

            <div class="row publications mt-5 pe-3">

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