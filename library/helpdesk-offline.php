<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "My Library"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sba-library.jpg';


$data = [
         
    // ["url" => 'https://podcasters.spotify.com/pod/show/b-j-sadiq/episodes/Seven-Ages-of-Man-by-William-Shakespeare-e2822uu', 'title' => 'Literary Pearls',
    // 'contents' => 'The podcast was set up by British Pakistani writer, biographer, journalist and poet, B.J. Sadiq . He is a Cambridge University Alumni, a prolific columnist and a former World Bank Advisor.',
    // 'imgsrc' => '../img/library/h.jpg'],          

];


?>

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

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            
            <h3>Helpdesk</h3>
            <h5 style="text-align: center;">Page is under construction</h5>
            <?php /* ?>
            <p>Dedicated staff at help desk provides the services to library users about the library resources particularly for searching books, journals, periodical & newspaper, etc. The library users may contact the help desk or our specialized librarian for any query in their minds. The queries can be raised in person, through mail, phone or through visiting library.</p>

            <h5>Need Help?</h5>

            <h5>Have a Question?</h5>
            <p>For any query, visit, mail, phone, Your Friendly Library Staff is always there to help you.</p>

            <h5>Library Information Services</h5>
            <p><strong>Personal Visit:</strong> Aitchison College, Shahrah-E-Quaid-E-Azam, Lahore 54000, Pakistan</p>

            <p><strong>Call @ Extension:</strong> +92 42 3 6363063    Ext. 229</p>

            <p><strong>Email Us:</strong> <span style="color: blue;">library@aitchison.edu.pk</span></p>

            <h5>Reference Services through Helpdesk</h5>
            <p>The active specialized Help Desk have been set up to provide in-depth reference and research support. Helpdesk provide services till 5:00 pm (Mon-Thurs) 12 pm (Fri) 9:30pm (Sat), on all working days. Users may make queries by telephone, and e-mail.</p>

            <h5>Ask a Librarian</h5>
            <p>There are lots of ways to contact a librarian, and the reference staff responds to all manner of research questions. Stop by any library to speak to a librarian, either at a reference desk or at a circulation desk. Librarians are also available to provide assistance by appointment, phone, e-mail, or instant message (IM). We are also planning to provide service of virtual help desk.</p>
            <?php */ ?>

        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="divider"></div>

            <div class="row">

            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->

</body>

</html>
