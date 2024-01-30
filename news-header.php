

<a href="#" id="backtotop" class="backtotop" style="display: none;"><span></span></a>

<?php include_once ('top-menu-bar.php'); ?>
<style>
    .navbar-brand img {
        width: 250px;
    }
    .navbar-toggler {

        margin-right: 20px;

        width: 20px;
        height: 20px;
        position: relative;
        transition: .5s ease-in-out;
    }

    .navbar-toggler,
    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
        outline: none;
        box-shadow: none;
        border: 0;
        position: relative;
    }

    .navbar-toggler span {
        margin: 0;
        padding: 0;
    }

    .toggler-icon {
        display: block;
        position: absolute;
        height: 3px;
        width: 100%;
        background: #707071;
        border-radius: 1px;
        opacity: 1;
        left: 0;
        transform: rotate(0deg);
        transition: .25s ease-in-out;
    }

    .middle-bar {
        margin-top: 0px;
    }


    /* State when the navbar is collapsed */

    .navbar-toggler.collapsed .top-bar {
        position: absolute;
        top: 0px;
        transform: rotate(0deg);
    }

    .navbar-toggler.collapsed .middle-bar {
        opacity: 1;
        position: absolute;
        top: 10px;
        filter: alpha(opacity=100);
    }

    .navbar-toggler.collapsed .bottom-bar {
        position: absolute;
        top: 20px;
        transform: rotate(0deg);
    }

    /* when navigation is clicked */

    .navbar-toggler .top-bar {
        top: inherit;
        transform: rotate(135deg);
    }

    .navbar-toggler .middle-bar {
        opacity: 0;
        top: inherit;
        filter: alpha(opacity=0);
    }

    .navbar-toggler .bottom-bar {
        top: inherit;
        transform: rotate(-135deg);
    }

@media (max-width: 350px) {
    .navbar-brand img {
        width: 220px;
    }
}

    /* Color of 3 lines */

    .navbar-toggler.collapsed .toggler-icon {
        /*background: linear-gradient( 263deg, rgba(252,74,74,1) 0%, rgba(0,212,255,1) 100% );*/
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">

        <a class="navbar-brand" href="https://aitchison.edu.pk">
            <img src="resources/assets/images/aitchison-logo-black-new.svg" alt="Aitchison College">
        </a>
        <button class="navbar-toggler collapsed d-flex d-lg-none flex-column justify-content-around" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-icon top-bar"></span>
            <span class="toggler-icon middle-bar"></span>
            <span class="toggler-icon bottom-bar"></span>
        </button>
        <div class="collapse navbar-collapse main-navbar" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav-scroll">
                <li class="nav-item">

                    <?php if(in_array($fileName, ['pr-letters', 'pr-letter']) ) { ?>
                        <a class="nav-link" href="news-room">News and Events</a>
                    <?php }else { ?>
                        <a class="nav-link" href="principal-letters">Principal's Letters</a>
                    <?php } ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="old-boys-bulletin">Old Boys' Bulletin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="school/aitchison-publications">Publications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://aitchison.edu.pk/portal/acportal">My Aitchison</a>
                </li>

                <div class="d-block d-lg-none">
                    <?php foreach ($topLinks as $item) {?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $item['url']; ?>"><?php echo $item['title']; ?></a>
                        </li>
                    <?php } ?>
                </div>

            </ul>

        </div>
    </div>
</nav>
