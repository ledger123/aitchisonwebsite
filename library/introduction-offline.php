<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "My Library"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sba-library.jpg';

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
            
            <h3>Introduction</h3>

            <p>SBA Library is more than just a physical space; it is your gateway to a wealth of information, research materials, and learning tools. We encourage you to explore these online resources and make the most of this valuable asset in your academic journey. Utilize SBA Library&#39;s digital offerings to expand your knowledge, conduct thorough research, and excel in your studies.</p>

            <p><strong>Electronic Databases:</strong>&nbsp;SBA Library offers access to a wide-ranging collection of electronic databases spanning diverse subjects, from scientific research to literature and the arts. Within these databases, you will find a treasure trove of peer-reviewed articles, research papers, e-books, and more, all at your fingertips.</p>

            <p><strong>E-books and Audiobooks:</strong>&nbsp;Immerse yourself in the world of knowledge by borrowing e-books and audiobooks from our diverse digital collection. This feature empowers you to read and learn at your own pace, anytime, and from any location.</p>

            <p><strong>Online Journals and Magazines:</strong>&nbsp;Stay current with the latest research and emerging trends by tapping into our extensive collection of online academic journals and magazines. These valuable resources offer profound insights and reliable references for your research projects.</p>

            <p><strong>Tutorials and Learning Materials:</strong>&nbsp;SBA Library provides access to various tutorials and learning materials carefully designed to help you enhance your research and information literacy skills. Strengthen your abilities and excel academically with these supportive resources.</p>

            <p><strong>Expert Librarian Assistance:</strong>&nbsp;Our dedicated team of librarians is here to support you on your academic journey. They are readily available for consultations, offering guidance on navigating online resources, locating specific materials, and answering any questions you may have.</p>

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
