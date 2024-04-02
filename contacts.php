<!DOCTYPE html>
<html>
<?php

include_once("path-settings.php");
$path = '';
//echo 'path: '.$path;

$title = "Contact Details"; 

include_once("header-includes.php");
//echo 'path: '.$path;
$banner_url = 'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;

?>

<body>
<?php include_once ('new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="contact-info">Contacts</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">

            <p></p>

            <p>General enquiries concerning admissions and employment must be directed to the Head of Human Resources on ext 281 during term time.</p>
            <p>Old Aitchisonians wanting to visit the College must send an email to the Alumni Officer in advance to schedule a convenient day and time.</p>

            <span class="sexy_line"></span>
            <p></p><h4 style="color:#0E064E;"><strong>Important email addresses</strong></h4>
            <div class="table-responsive">
                <table class="table" style="margin-top:10px; border-bottom: 1px solid #ddd;">
                    <tbody><tr>
                        <td><strong>Principal:</strong></td><td>principal@aitchison.edu.pk</td>
                    </tr>
                    <tr>
                        <td><strong>Headmistress of Senior School:</strong></td><td>hmss@aitchison.edu.pk (for all Senior pastoral and academic enquiries)</td>
                    </tr>
                    <tr>
                        <td><strong>Deputy Headmaster Senior School:</strong></td><td>dhmss@aitchison.edu.pk (for Senior pastoral and academic enquiries)</td>
                    </tr>
                    <tr>
                        <td><strong>Prep School Headmaster:</strong></td><td>hmps@aitchison.edu.pk (for all Prep pastoral and academic enquiries)</td>
                    </tr>

                    <tr>
                        <td><strong>Junior School Headmistress:</strong></td><td>hmjs@aitchison.edu.pk (for all Junior pastoral and academic enquiries)</td>
                    </tr>
                    <tr>
                        <td><strong>Bursar:</strong></td><td>bursar@aitchison.edu.pk (for all matters pertaining to school fees and accounts)</td>
                    </tr>
                    <tr>
                        <td><strong>Head of Human Resources:</strong></td><td>hr@aitchison.edu.pk (for general employment)</td>
                    </tr>
                    <tr>
                        <td><strong>Controller Examinations Senior School:</strong></td><td>controllerexam@aitchison.edu.pk</td>
                    </tr>
                    <tr>
                        <td><strong>Games Master:</strong></td><td>games@aitchison.edu.pk (for all matters pertaining to Sports)</td>
                    </tr>
                    <tr>
                        <td><strong>IT Support:</strong></td><td>helpdesk@aitchison.edu.pk</td>
                    </tr>
                    <tr>
                        <td><strong>Alumni Office:</strong></td><td>alumniofficer@aitchison.edu.pk (for all Old Boys' enquiries and Old Boy functions)</td>
                    </tr>
                    </tbody></table>
            </div>
            <h4 style="color:#0E064E;"><strong>Postal Address</strong></h4>
            <p></p>

                <div>
                    <p><strong>Aitchison College</strong>,<br>
                        Shahrah-e-Quaid-e-Azam,<br>
                        Lahore 54000 Pakistan
                    </p>
                </div>
                <div>
                    <p><span style="color: #2E40AD; font-weight: bold; font-size: 16px;">UAN: [92 42] 111 363 063</span> <br>
                        Fax: [92 42] 3636 2989</p>
                </div>


            <div class="row" style="margin-bottom: 15px;">
            </div>

            <div class="" style="margin-bottom: 15px;">
                <strong style="color: #2E40AD; ">Additional numbers:</strong>

                <ul class="mt-2 mb-2">
                    <li>+92-42-36271721-25</li>
                    <li>+92-42-36370259-62</li>
                    <li>+92-42-36317201-04</li>
                </ul>

            </div>
            <?php /*
            <div class="" style="margin-bottom: 15px;">
                <p><strong>Follow us on social media</strong></p>

                <ul class="social-color nav-social mt-2 mb-2">
                    <li><a href="https://www.facebook.com/Aitchison-College-368847620484906" alt="Aitchison College Lahore - Facebook" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/aitchisoncollegeofficial" alt="Aitchison College Lahore - Instagram" target="_blank">Instagram</a></li>
                    <li><a href="https://www.linkedin.com/company/14764887" alt="Aitchison College Lahore - LinkedIn" target="_blank">Linkedin</a></li>
                </ul>

            </div>*/?>
        </div>
        <!-- End Left Area -->

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