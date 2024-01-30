<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "My Library"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sba-library.jpg';


$data = [
    ["url" => 'https://app.myloft.xyz/user/authenticate?authId=cknirw9vffi2q09863wb1bsu0', 'title' => 'My Loft',
     'contents' => 'The British Digital Library app, MyLOFT, enables instant access to all our digital resources in one place i.e.  Newspapers, Magazines, JStor.',
     'imgsrc' => '../img/library/b.jpg'],
     
    ["url" => 'https://www.labxchange.org/library', 'title' => 'LabXchange',
     'contents' => 'LabXchange offers a wide range of educational content, including videos, simulations, animations, and assessments.',
     'imgsrc' => '../img/library/a.jpg'],
     
     ["url" => 'https://www.britannica.com/', 'title' => 'Britannica',
     'contents' => 'Britannica offers features and tools, such as educational resources for teachers, quizzes, and learning games, digital access, high-quality content, multimedia enhancements, search and navigation.',
     'imgsrc' => '../img/library/c.jpg'],
     
     ["url" => 'https://www.elsevier.com/en-gb', 'title' => 'Elsevier',
     'contents' => 'Elsevier helps researchers and healthcare professionals to advance science and improve health outcomes, striving to create a better future worldwide.',
     'imgsrc' => '../img/library/d.jpg'],
     
     ["url" => 'https://www.teachingenglish.org.uk/user/login?destination=/training&autologout_timeout=1', 'title' => 'Teaching English',
     'contents' => 'Browse fascinating case studies, research papers, publications and books by researchers and ELT experts from around the world.',
     'imgsrc' => '../img/library/e.jpg'],
     
     ["url" => 'https://www.khanacademy.org/', 'title' => 'Khan Academy',
     'contents' => 'Khan Academy offers practice exercises, instructional videos, and a personalized learning dashboard that empower learners to study.',
     'imgsrc' => '../img/library/f.jpg'],
     
     ["url" => 'https://cudl.lib.cam.ac.uk/', 'title' => 'Cambridge Digital Library',
     'contents' => 'The Cambridge Digital Library serves as a digital repository for rare and valuable items, including manuscripts, books, maps, photographs, and other archival materials.',
     'imgsrc' => '../img/library/g.jpg'],
     
     ["url" => 'https://pll.harvard.edu/catalog?price%5B1%5D=1&max_price=&start_date=&keywords', 'title' => 'HARWARD UNIVERSITY',
     'contents' => 'Subject area (Art & Design, Business, Computer Science, Data Science, Education & Teaching, Health & Medicine, Humanities, Mathematics, Programming, Science, Social Sciences).',
     'imgsrc' => '../img/library/i.jpg'],
          
     ["url" => 'https://academicjournals.org/journal', 'title' => 'Academic Journals',
     'contents' => 'Academic Journals publishes over 100 open access journals covering art and humanities, engineering, medical science, social sciences, biological sciences, physical sciences and agricultural sciences.',
     'imgsrc' => '../img/library/j.jpg'],
          
     ["url" => 'https://www.merriam-webster.com/', 'title' => 'Merriam Webster',
     'contents' => 'Provides phonetic transcriptions and audio pronunciations for many words, helping users understand how to say them correctly.',
     'imgsrc' => '../img/library/k.jpg'],
          
     ["url" => '#', 'title' => 'OPAC',
     'contents' => 'You can use the online catalog (OPAC) to look up books and other materials. Searching can be done by author, title, subject, keyword, series or call number.',
     'imgsrc' => '../img/library/l.jpg'],
          
          
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
            
        <h3>Digital Resources</h3>
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
