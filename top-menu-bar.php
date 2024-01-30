<?php

$topLinks = [
    ['title'=>'School', 'url'=>$path.'school/about-us'],
    ['title'=>'Admissions', 'url'=>$path.'admission/admissions-info'],
    ['title'=>'Academics', 'url'=>$path.'academics/ac-academics'],
    ['title'=>'Our Schools', 'url'=>$path.'schools/our-schools'],
    ['title'=>'Boarding', 'url'=>$path.'boarding/boarding-houses'],
    ['title'=>'Alumni', 'url'=>'https://aitchison.edu.pk/alumni'],
    ['title'=>'Careers', 'url'=>$path.'careers'],
    ['title'=>'Sports', 'url'=>$path.'sports/sports'],
    ['title'=>'Gallery', 'url'=>$path.'gallery/event-gallery'],
    ['title'=>'News & Events', 'url'=>$path.'news-room'],
    ['title'=>'Principal\'s Letters', 'url'=>$path.'principal-letters'],
    ['title'=>'Support College', 'url'=>$path.'support/support-college']
];

?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container-fluid" style="background-color: #0d2f4f;">
        <div class="collapse navbar-collapse flex-grow-1 text-right" id="navbarTopContent">
            <ul class="navbar-nav ms-auto flex-nowrap justify-content-end">
                <?php foreach ($topLinks as $item) {?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                    </li>
                <?php } ?>

            </ul>

        </div>
    </div>
</nav>