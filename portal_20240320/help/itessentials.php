<?php
$banner = '';
$title = "IT Essentials for Staff and Students";
include ('header.php');
?>

<style>

    p{margin-top:10px; margin-bottom:10px;}

    .panel {
        border: none;
        margin-bottom:5px;
    }
    .panel .panel-heading {

        background-color: #fddae3;
        border-left: 10px solid #ff003c;
        font-weight: 300;

        text-transform: none;

        padding: 5px 15px 5px 5px;
    }

    .panel .panel-heading h2 {
        font-weight: 300;
        text-transform: none;

        /*font-family: "Open Sans","Frutiger",Helvetica,Arial,sans-serif;*/

        text-rendering: optimizelegibility;
        line-height: 30px;
        padding-bottom: 0;
    }

    .panel .panel-heading h2 a {
        text-align: left;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        display: block;
        padding: 6px 25px 6px 6px;
    }

    .card .card-body {
        padding: 0 25px 0 15px;
    }

    .card .card-body ol, ul {
        margin-top: 10px;
    }

    .card-body p {
        background-color: transparent;
    }

    #accordionFaq > div > div:hover {
        background-color: #fddae3;
    }
    #accordionFaq > div:hover {
        background-color: #fff;
    }
</style>

<!-- page content -->
<div class="" role="main">

    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">

                        <div class="row">

                            <div class="page-title">
                                <h2><?php echo $title; ?></h2>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="accordion" id="accordionFaq" aria-multiselectable="true">

                                    <?php $index = 1;?>
                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">Your Email and My Aitchison Accounts</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">

                                                <p>Your IT account gives you access to official email, My Aitchison and many other IT services. You can access Google Apps for Education by logging in with your email address.</p>

                                                <h4 class="highlight">Students:</h4>
                                                <p>All new students are centrally registered by the college administration. Once you become a student, you will receive your account details on how to use your IT account to get full access to IT facilities.</p>

                                                <h4 class="highlight">Staff:</h4>
                                                <p>If you are a new member of staff and have not yet been given your account details, you can download application form and send request to <span class="text-blue">helpdesk@aitchison.edu.pk</span> for internet and email facility.</p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse2">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">Change your password and enable two-factor authentication</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">

                                                <p>Once you receive the credentials for your account, you are required to change the password and enable two-factor authentication.</p>
                                                <p><a href="https://support.google.com/accounts/answer/41078?co=GENIE.Platform%3DDesktop&hl=en" target="_blank"><span class="highlight">How to change Password</span></a></p>
                                                <p><a href="https://www.google.com/landing/2step/" target="_blank"><span class="highlight">How to enable Two Factor Authentication</span></a></p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse3">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">Check List for Students and Staff</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">

                                                <ul style="line-height: 1.8">
                                                    <li>Install Google Chrome on your computers</li>
                                                    <li>Install Google Meet</li>
                                                    <li>Change your password and secure your account</li>
                                                    <li>Setup your devices and customize the Google workspace. You can download Apps for Google Classroom, Google Meet and Google Drive.</li>
                                                    <li>Install Antivirus and Update your computers.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>



                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse4">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">Parents’ Guide to Google Workspace for Education</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">
                                                <p>Aitchison College, Lahore is using the collaborative and productive tools of Google Workspace for Education. These tools help strengthen student's learning and the connections between school, and parents – all within a secure digital learning environment.</p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse6">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">How to access your school email</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">
												<p>Your official email address is <span class="text-blue">schoolnumber@aitchison.edu.pk</span></p><p><strong>How to login:</strong></p>
												<p>
													Go to <a href="https://mail.google.com/a/aitchison.edu.pk" target="_blank"><span class="text-blue">mail.google.com/a/aitchison.edu.pk</span></a><br>
													Enter your school email address<br>Enter the current password of Parents' Portal for the first time</p>
                                                <?php /*?><p>Your email is provided by Google Workspace for Education.</p>
                                                <p><a href="https://aitchison.edu.pk/portal/help/account/tutorials/how-to-use-aitchison-email-system.pdf" target="_blank"><span class="highlight">Sign in to your email account</span></a></p><?php */?>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse7">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">How to Access Calendar and events schedule</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">
                                                <p>You can access all information as you log in to My Aitchison.</p>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse8">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">Online Training and Guides</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">

                                                <p>You can access the official email account and other key resources including:</p>
                                                <ol style="line-height: 1.8; font-weight: 600;">
                                                    <li>Google Classroom - A quick reference guide for students</li>
                                                    <li>Joining Google Meet </li>
                                                    <li>Rules for google meet sessions</li>
                                                    <li>Weekly schedule for online classes</li>
                                                </ol>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="card panel">
                                        <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                            <h2 class="mb-0">
                                                <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse9">
                                                    <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">Questions or Concerns</td></tr></table>
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                            <div class="card-body" style="margin: 0 15px 0 15px;">

                                                <p><span class="text-blue">helpdesk@aitchison.edu.pk</span></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div style="margin-right: 5%; margin-left: 5%; margin-top: 15px;">
                    <a href="account/tutorials/how-to-edit-email-contacts-information.pdf" target="_blank">
                        <img class="responsive right-side-img" src="images/how-to-edit-email-contacts.jpg" style="padding-top: 10px;" alt="Aitchison College">
                    </a>
                </div>

                <div class="message-box" style="margin-top: 15px;">
                    <div class="box-head">Stay Secure</div>
                    <div class="box-body">
                        <ol style="line-height: 1.8; padding-left: 10px;">
                            <li>Keep your computers and other devices up to date.</li>

                            <li>Set strong passwords.</li>

                            <li>Watch out for Phishing and Spam Emails.</li>

                            <li>Keep personal information personal.</li>

                            <li>Change your password regularly.</li>

                            <li>Enable two-factor authentication.</li>

                            <li>Install licensed antivirus and Operating Systems on your computers.</li>
                        </ol>

                    </div>
                </div>


                <?php /*
                <div class="message-box">
                    <div class="box-head">How to edit Gmail contact?</div>
                    <div class="box-body">
                        <p>
                            <a href="account/tutorials/How-to-edit-gmail-contact-information.pdf" target="_blank">

                                <span class="highlight">Download how to edit Gmail contact information Guide</span>
                            </a>
                        </p>

                    </div>
                </div>
                */ ?>

                <?php /* ?>
                <div style="margin: 25px 25px">
                    <img style="padding: 0 12% 10px 12%;" src="../online-classes/ss/small/google-classroom-ss.jpg" alt="" class="img-responsive">
                </div>

                <div style="margin: 25px 25px">
                    <img style="padding: 0 12% 10px 12%;" src="../online-classes/ss/small/google-meet-ss.jpg" alt="" class="img-responsive">
                </div>
                <?php */ ?>
            </div>
        </div>
    </div>

    <!-- footer content -->

    <?php include("footer.php"); ?>
