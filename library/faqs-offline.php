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

<style>
    p{margin-top:10px; margin-bottom:20px;}

    .accordion-button {
        font-weight: bold;
        color: #337ab7;
        background-color: #fcf6f6; /*#f3e6c1;*/
        border-left: 10px solid #c8102e; /*orange;*/

    }

    .accordion-button:not(.collapsed) {
        color: #337ab7;
        background-color: #fcf6f6;
        box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
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
            
            <h3>FAQs</h3>
            <h5 style="text-align: center;">Page is under construction</h5>

            <?php /* ?>
            <p>Our mission is to excel in supporting the academic and scholarly endeavors of our users, in their core instructional and research requirements by utilizing the best possible resources, systems, and services.</p>
            <p>We welcome your valued suggestions and comments. Please email to <span style="color: blue;">library@aitchison.edu.pk</span></p>
            
            <h5>Get Started</h5>

            <div class="accordion" id="accordionFaq" aria-multiselectable="true">
                <?php $sr = 1; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Who is eligible to become a member of the SBA library?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            All Students, Faculty Staff & Other Staff of the collage except class 4 staff can become the members of library.
                        </div>
                    </div>
                </div>

                <?php $sr = 2; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How do I get a library card?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            A library card is a card provided by a library so that library patrons can borrow a variety of materials. Holders of library cards can check out items such as books, CDs, videos, DVDs, audiobooks, and more. The SBA library issues library cards free of charge to library users.  User has required School /Staff ID for become member of SBA library.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 3; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How do I borrow books?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Once you are registered, you may check out library books while presenting your valid SBA ID card at circulation desk.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 4; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What should I do if I lose my library ID card?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            If your card is lost or stolen, be sure to let us know immediately. You will be held responsible for any items checked out on your card if you do not inform us that it is missing. Also report this via email and get a duplicate card.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 5; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What are library visiting hours?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Syed Babar Ali Library (SBA) remains open Monday through Thursday, 7:30 a.m. to 5:00 p.m. Friday: 7:30 a.m. to 12:00 p.m. Saturday: 10:00 a.m. to 9:30 p.m. The library shall remain closed on Sundays and other public holidays. During vacations and the holy month of Ramzan, according to college timing.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 6; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How many books can be borrowed from the library and for how long?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            The borrowing privileges of the users (with valid library cards) are mentioned as under:
                            
                            <div class="table-responsive">                                
                                <table class="table table-bordered" style="text-align:center;">
                                    <thead>
                                        <tr style="background-color:#293594;color:#FFF;">
                                            <th>Category</th>
                                            <th>Borrowing Privileges</th>
                                            <th>Loan Period</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Teachers (Senior, Prep &amp; Junior School)</td>
                                            <td>5</td>
                                            <td>30 Days</td>
                                        </tr>
                                        <tr>
                                            <td>Head of Departments</td>
                                            <td>5</td>
                                            <td>30 Days</td>
                                        </tr>
                                        <tr>
                                            <td>Teachers (Campus schools)</td>
                                            <td>3</td>
                                            <td>30 Days</td>
                                        </tr>
                                        <tr>
                                            <td>Non-Teaching Staff</td>
                                            <td>1 or 2</td>
                                            <td>30 Days</td>
                                        </tr>
                                        <tr>
                                            <td>Students</td>
                                            <td>2</td>
                                            <td>14 Days</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                
                <?php $sr = 7; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Who can borrow books from the SBA library?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            You can avail the borrowing facility of the library if you are:
                            <ul style="list-style: none;">
                                <li>Student</li>
                                <li>Employee of Aitchison College</li>
                                <li>Faculty member</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <?php $sr = 8; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Can I renew my books?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Yes, you can renew a book for a further loan period, if someone has not reserved the same. You can renew the book(s) as well.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 9; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How do I renew/reissued my books?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Library users can re-new or reissue their library books for one time. To keep a book for another borrowing period, visit the library circulation desk along with the book to be renewed before the end of due date. The staff on duty will re-issue the book to you if another user has not reserved it. Your previous signature on book card will not be considered for renewal process. Only new signature will be considered on book card for renewal process. “Overdue” & “Reserved” books will not be “re-issued”.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 10; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How can I know about the due date?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            On each checked out material, you will find a due date stamp on its date slip.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 11; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Can someone else check out books for me?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            No. No one can check out books on someone else’s behalf.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 12; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How can I find out what I have checked out?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            You can come to the library and ask circulation staff about the item(s) checked out by you.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 13; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How can I get a book that someone else has checked out?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Books already checked-out by some other user can be reserved. You can place a request for a checked-out item by visiting the library.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 14; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What happens when someone wants a book I have?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            
                        </div>
                    </div>
                </div>
                
                <?php $sr = 15; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What happens when someone wants a book I have?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            
                        </div>
                    </div>
                </div>
                
                <?php $sr = 16; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What happens when someone wants a book I have?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            If a hold has been placed on one of your books, you may not renew it. Please return it by the due date. The library may recall any material issued to you. You must return the book by the shortened due date in order to avoid fines.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 17; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Is it necessary to show School ID card while returning the books?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            No, you can return the library materials without showing the School ID card.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 18; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Can someone else return my books for me?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Yes, books can be returned by anyone.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 19; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What happens if I return a book late?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            A fine begins accruing as soon as the book is overdue. If you do not return a RECALLED book by the date requested, your borrowing privileges can be suspended.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 20; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What happens if I lose a book?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Report it immediately in black and white at the circulation desk so that your overdue fine can be stopped. Then you will be charged three times the current price of the book.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 21; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What happens if I damage library materials?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            In case you damage library material, the policy for “Book Lost” will be implemented.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 22; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                I like to use highlighters and pencils for notation. Is this "damage"?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Yes, it is. We understand the temptation to mark books in order to aid your studying or research, but keep in mind what might help you will most certainly make it more difficult for someone else to use the book. Besides, it & content/how-do-i#39;s simply bad for the books. You will most definitely be fined a replacement charge for any books which have been damaged by underlining or highlighting.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 23; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How much fine do I have to pay on an overdue item?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            10/- per book per day will be charged after due date.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 24; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                How do I pay fines?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            All library fines are handled by the Aitchison Account Office. You will receive the fine notice through your fee bill.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 25; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Can you borrow library material if you have a fine against your name?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            SBA library gives you relaxation in borrowing up to a fine limit of 1000 rupees. After crossing this limit your membership is automatically suspended till the submission of fine.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 26; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What would be compensation if any library material has been lost by the library user?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            He / She has to compensate in the following way:
                            <ol style="list-style: decimal; margin-left: 15px; line-height: 1.9;">
                                <li>If library material is available (in the same format) in the local market, he / she has to pay the market price of the item along with rupees one hundred processing charges.</li>
                                <li>He / She may purchase it on fine or pay that price along with shipment charges and taxes.</li>
                                <li>3.	In case of non-availability of material, he / she has to pay three times the current price.</li>
                            </ol>
                        </div>
                    </div>
                </div>
                
                <?php $sr = 27; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                If the same edition / version of the item is not available?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            One can submit the latest edition/ version if the same is unavailable in the market or out of print.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 28; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What subject areas are represented at SBA library?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            The library’s collection covers a wide range of subjects including Computer Science, Religion, Psychology, Sociology, Economics, Business, Physics, Biology, Chemistry, Electronics, Telecommunication, Law, Education, English language and literature, Accounting, Management, Banking, HRM, Current Affairs, Leadership, Technology, Marketing, Biography, History, Sports, Urdu literature.  Reference Urdu and English Resources and Reputed journals are also provided.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 29; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Where are the journals located? Or Where is the journal's section?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            Current journals are displayed besides the main entrance of the library. (Daily newspapers are also available there). We however request our users to read the newspapers and journals within the journal section.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 31; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                Can the journals be checked out?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            No, Journals are non-circulating material. They are only lent out for photocopy purpose if photocopying facility is not available in the library. If they do leave the library, they must be returned immediately after photocopying.
                        </div>
                    </div>
                </div>
                
                <?php $sr = 32; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                        <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;">
                                What are the major sections of the SBA library?
                                </td></tr>
                            </table>
                        </button>
                    </h2>
                    <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                        <div class="accordion-body">
                            The library comprises of the following sections:
                        </div>
                    </div>
                </div>

            </div>
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
