<?php
$title = 'Home';
include_once 'header.php';
?>

    <!-- Carousel Start -->
    <div class="carousel">
        <div class="container-fluid">
            <div class="owl-carousel">
                <?php
                $images = ['1', '2', '3', '4', '5', '6', '7', '9'];
                foreach ($images as $img) {?>
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="images/banners2/<?php echo $img;?>.jpg" alt="Image">
                    </div>
                    <div class="carousel-text">
                        <h3 style="font-size: 30px;">Aitchison College</h3>
                        <h1>Archives</h1>
                        <p>
                            Aitchison College has a rich past that is vital to preserve and exhibit.
                        </p>
                        <a class="btn btn-custom" href="department.php">Explore More</a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

<?php
include_once 'footer.php';
?>