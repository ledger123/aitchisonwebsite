<a href="#" id="backtotop" class="backtotop" style="display: none;"><span></span></a>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">

    <a href="/">
        <div class="logo-left">

        </div>
    </a>

</nav>
<?php
if(!isset($background_align) || empty($background_align)){
    $background_align="center center";
}
?>
<section style="background: url(<?php echo $banner_url; ?>); background-repeat: no-repeat;background-size: cover; background-position: <?php echo $background_align; ?>;" class="page-banner">

    <div class="container banner-text">
        <div class="banner-heading"><?php echo $page_header; ?></div>
    </div>
</section>
