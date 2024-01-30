<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "My Library"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sba-library.jpg';


$data = [
         
    ["url" => 'https://podcasters.spotify.com/pod/show/b-j-sadiq/episodes/Seven-Ages-of-Man-by-William-Shakespeare-e2822uu', 'title' => 'Literary Pearls',
    'contents' => 'The podcast was set up by British Pakistani writer, biographer, journalist and poet, B.J. Sadiq . He is a Cambridge University Alumni, a prolific columnist and a former World Bank Advisor.',
    'imgsrc' => '../img/library/h.jpg'],
     
    ["url" => 'https://storylineonline.net/', 'title' => 'Storyline-online',
    'contents' => '',
    'imgsrc' => '../img/library/storyonline.jpg'],

    ["url" => 'https://kids.nationalgeographic.com/videos', 'title' => 'National Geographic Kids',
    'contents' => '',
    'imgsrc' => '../img/library/national-geographic.jpg'],

    ["url" => 'https://www.factmonster.com/', 'title' => 'FACT MONSTER',
    'contents' => '',
    'imgsrc' => '../img/library/fact-monster.jpg'],

    ["url" => 'https://starchild.gsfc.nasa.gov/docs/StarChild/StarChild.html', 'title' => 'STAR CHILD',
    'contents' => '',
    'imgsrc' => '../img/library/starchild.jpg'],

    ["url" => 'http://www.childrensbooksonline.org/library.htm', 'title' => 'Children Books Online',
    'contents' => 'A largest collection of illustrated antique books online for different age group children.',
    'imgsrc' => '../img/library/childrens-books-online.jpg'],

    ["url" => 'http://www.alvietheburro.com/storypage.html', 'title' => 'Audio Books',
    'contents' => 'Audio stories with visual effect Alive books series.',
    'imgsrc' => '../img/library/alvie.jpg'],

    ["url" => 'http://www.childrensbooksonline.org/library-audio.htm', 'title' => 'Audio Books',
    'contents' => 'Children’s books and literary resources available online and for download in a user friendly pdf format.',
    'imgsrc' => '../img/library/childrens-books-online.jpg'],

    ["url" => 'https://alifkitab.com/alif-nagar/', 'title' => 'Alif-Nagar',
    'contents' => '',
    'imgsrc' => '../img/library/alifkitab.jpg'],
	
	["url" => 'https://www.youtube.com/@BJSadiq/videos', 'title' => 'A Literary Monomaniac BJ Reads',
    'contents' => 'B.J.Sadiq is a British Pakistani writer, journalist, poet and a literary monomaniac. you have found this section an ear for metre and rhyme, for ancient wit and for literary criticism. Oscar Wilde, consider Art as the supreme reality, and life as a mere mode of fiction.',
    'imgsrc' => '../img/library/bj-reads.jpg'],

];


?>

<style>

.item {
    width: 100%;
    display: inline-block;
}

.alogo {
    display: inline-block;
    position: relative;
}

.acontents {
    display: inline-block;
    position: absolute;
    padding: 15px;
    vertical-align: top;
}


.acontents .card-title {
    text-transform: uppercase;
}

hr {
    width: 120px;
    background-color: #ffc845;
    margin-left: auto;
    margin-right: auto;
    border: 2px solid #ffc845;
    border-radius: 2px;
    opacity: unset;
    margin-top: 1rem;
}


.card-body {
    padding: 0;
}

.card a {
    padding: 0;
    box-shadow: 0.1em 0.1em 0.3em rgba(0, 0, 0, 0.3);
}

.card a:hover {
    box-shadow: 0.1em 0.1em 0.7em rgba(0, 0, 0, 0.3);
}
.card-text{
	line-height: 1.4;
    text-align: justify;
	}
.alogo img {
    height: 170px;
}

@media(max-width: 425px) {

        
    .alogo img {
        height: 100%;
    }

    .acontents {
        position: initial;
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

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            
        <h3>Audio/Video Resources</h3>
        <p><strong>Note:</strong> Some online resources below require username and password. You will need to contact library staff for assistance.</p>

        <?php foreach($data as $row) { ?>
            
            <div class="card" style="margin-bottom: 15px">
                <a href="<?php echo $row['url']; ?>" target="_blank">
                    <div class="card-body">
                        <div class="item">
                            <div class="alogo">
                                <img src="<?php echo $row['imgsrc']; ?>" class="img-responsive" />
                            </div>
                            <div class="acontents">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <hr style="margin-left: 0;">
                                <p class="card-text"><?php echo $row['contents']; ?></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            
        <?php } ?>

    
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
