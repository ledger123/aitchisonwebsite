<?php $title = "Troubleshoot"; include ('header.php'); ?>


<style>

    p{margin-top: 5px; margin-bottom: 10px;}
	<?php /*?>p{margin-top: 0px; margin-bottom: 5px;}<?php */?>
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

    .card-body p {
        background-color: transparent;
    }

    .card .card-body {
        padding: 0 25px 0 15px;
    }

    #accordionFaq > div > div:hover {
        background-color: #fddae3;
    }
    #accordionFaq > div:hover {
        background-color: #fff;
    }	
	.parentguide_img{
		width: 98%; height: auto; text-align: center; padding-bottom: 10px;
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
                                <h2>A Troubleshooting Guide for Technical Issues</h2>                               
								<p>Below you will find a list of frequently asked questions concerning Online Classes. For more helpful guides, visit the <a href="../online-classes/onlinelearning.php" target="_blank"><span class="highlight">Online Learning Section</span></a> on the My Aitchison. If you have a problem not answered here, feel free to submit a support request to IT Helpdesk at <span class="text-blue">helpdesk@aitchison.edu.pk</span></p>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
									<p>FAQs on Online Classes</p>

                                    <?php /*?><div>
                                        <div>&nbsp;</div>
                                    </div><?php */?>

                                    <div class="accordion" id="accordionFaq" aria-multiselectable="true">

                                        <?php $index = 1;?>
                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">I can&#39;t sign into Classroom</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>You might be trying to sign in to Classroom with a&nbsp;wrong email account.&nbsp;You must have an active internet connection to sign in. Please make sure that you have signed in with School Account and no other private account is active&nbsp;in the browser. Please sign out from all other email accounts.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">I forgot my password</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>

                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>Username and passwords have been mailed to all Parents. In case, if you still have not received or want to reset the password, please email at <span class="text-blue">helpdesk@aitchison.edu.pk</span>. Please do not forget to mention the student&rsquo;s school number, registered mobile number, or email address. You will receive a username and password on your registered mobile or email address.</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">How to use Student&#39;s School Email Address?</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>Your official email address is <span class="text-blue">schoolnumber@aitchison.edu.pk</span></p>

                                                    <p>How to login:</p>

                                                    <ol>
                                                        <li>Go to <a href="http://mail.google.com/a/aitchison.edu.pk"  target="_blank"><span class="highlight">mail.google.com/a/aitchison.edu.pk</span></a></li>
                                                        <li>Enter your school email address</li>
                                                        <li>Enter the current password of My Aitchison for the first time</li>
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">Using multiple email accounts at the same time</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>If you have signed in to multiple accounts at the same time, Google might apply settings from your default or private email account.&nbsp;Please make sure that you have signed in with School Account and no other private account is active&nbsp;in the browser.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">I deleted my class invitation</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>If you delete your class invitation before joining a class, ask your teacher to resend the class invitation.</p>

                                                    <p><strong>Note:</strong> You can&nbsp;use the class invitation once to enroll. You don&#39;t need to re-use the class invitation again.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">I unenrolled from a class and want to re-enroll</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>If you accidentally unenrolled from a class, ask your teacher to resend you a class&nbsp;invitation again.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">I can&#39;t post a comment</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>Your teacher turned off posting for that class. Ask your teacher for more information.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card panel">
                                            <div class="card-header panel panel-heading" id="item<?php echo $index;?>">
                                                <h2 class="mb-0">
                                                    <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $index;?>" aria-expanded="true" aria-controls="collapse<?php echo $index;?>">
                                                        <table><tr><td style="vertical-align: top;"><?php echo $index;?>. </td><td style="padding: 0 0 0 10px;">How do I undelete a post?</td></tr></table>
                                                    </a>
                                                </h2>
                                            </div>
                                            <div id="collapse<?php echo $index;?>" class="collapse " aria-labelledby="item<?php echo $index++;?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                <div class="card-body" style="margin: 0 15px 0 15px;">
                                                    <p>You can&rsquo;t undelete a post. However, your teacher can see all your deleted posts.</p>
                                                </div>
                                            </div>
                                        </div>


                                        <?php /*?><p>&nbsp;</p><?php */?>

                                        <p><strong>Note:</strong> Reboot and try another browser is always a quick way to eliminate a possible tech issue. Frequent <a href="https://support.google.com/accounts/answer/41078?co=GENIE.Platform%3DDesktop&hl=en" rel="noopener noreferrer" class="highlight" style="text-decoration: underline;" target="_blank">password changes</a> is recommended to secure your school email account. This is your responsibility to Keep your password safe. If you lost your password, please contact our <strong>IT Helpdesk</strong> at <strong><span class="text-blue">helpdesk@aitchison.edu.pk</span></strong>. Please also turn on <a href="https://www.google.com/landing/2step/" rel="noopener noreferrer" class="highlight" style="text-decoration: underline;" target="_blank">2-Step Verification</a> to secure your school email account.</p>

                                        <p>&nbsp;</p>
                                    </div>
                                </div>
                            </div>









                        </div>

                    </div>
                </div>
            </div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                <div class="message-box">
                    <div class="box-head">Dedicated IT Support</div>
                    <div class="box-body">
                        <p>Regardless of how you contact us, we’ll create a case for your request and keep you aware of its status.</p>

                    </div>
                </div>

                <div class="message-box">
                    <div class="box-head">How to Request a Service:</div>
                    <div class="box-body">
                        <p>Faculty and staff may submit requests by sending an e-mail on <span class="text-blue">helpdesk@aitchison.edu.pk</span> or by visiting the following website link where a complaint registration form is available.</p>

                        <p>If the problem is delayed or not resolved to the user’s satisfaction, please send an email to <span class="text-blue">info@aitchison.edu.pk</span></p>
                    </div>
                </div>
				<div class="message-box">
					<div class="box-head">Your Account Information</div>
					<div class="box-body">

						<p>Your username is unique to you and stays the same as long as you remain at Aitchison College. It is made up of your school number at the time of admission. You’ll use it to log in to your IT account, and to other services.</p>

						<p>Some services, notably Google apps, require you to log in with your email address, for example: <span class="text-blue">schoolnumber@aitchison.edu.pk</span></p>

					</div>
				</div>



            </div>
            <?php /*?><div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">				
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="https://support.google.com/edu/classroom/answer/9582854?co=GENIE.Platform%3DDesktop&hl=en&oco=0" target="new">
							<img class="responsive parentguide_img" src="images/get-started-with-Classroom-for-teachers.jpg" style="padding-top: 10px;" />
						</a>	
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="../online-classes/ss/pdf/Student-Guide-to-Google-Classroom.pdf" target="new">
							<img class="responsive parentguide_img" src="images/get-started-with-Classroom-for-students-1.jpg" style="padding-top: 10px;" />
						</a>	
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<a href="https://play.google.com/store/apps/details?id=com.google.android.apps.classroom&hl=en_US" target="new">
							<img class="responsive parentguide_img" src="images/mange-classroom.jpg" style="padding-top: 10px;" />
						</a>	
					</div>
				</div>
				
            </div><?php */?>
        </div>
    </div>

    <!-- footer content -->

    <?php include("footer.php"); ?>
