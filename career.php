<?php
date_default_timezone_set('Asia/Karachi');

?>
<!DOCTYPE html>
<html>
<?php
include_once("path-settings.php");
$path = '';

$title = "Careers"; include_once("header-includes.php");

$banner_url = 'resources/assets/images/banners/old-building-v6.jpg';
$page_header = $title;

//datetime format: m/d/y h:m:s
$posts = [
    ["id" => 1, "heading" => "Announcement of Teaching Positions", "alive" => "05/29/2024 20:59:59", "expiry" => "06/08/2024 23:59:59", "active" => "true",
        "details" => "
            <p>Applications are invited for the following positions in three schools. The applicant must be familiar with Cambridge Curriculum system & possess a Bachelors Degree for Junior School and Masters or equivalent related degree for Prep & Senior School with strong verifiable three years’ experience in teaching.</p>
            <h4 class='mt-0 mb4'>
                Junior School (Year Group: 1 - 6) Cambridge Primary Curriculum:
            </h4>
            <ul class='ms-4' style='list-style: disc;'>
                <li>English</li>            
                <li>Urdu</li>
                <li>Mathematics</li>
                <li>Qari</li>
            </ul>
            
            <h4 class='mt-3 mb4'>
                Preparatory (Middle) School (Year Group: 7, 8 & 9) Cambridge Secondary Curriculum:
            </h4>
            <ul class='ms-4' style='list-style: disc;'>
                <li>English</li>            
                <li>Geography</li>
                <li>Islamiyat</li>
                <li>Urdu</li>
            </ul>
            
            
            <h4 class='mt-3 mb4'>
                Senior School (Year Group: O/A Levels) Cambridge IGCSE/A Levels Curriculum:
            </h4>
            <ul class='ms-4' style='list-style: disc;'>
                <li>Mathematics</li>     
                <li>Islamiyat</li>
                <li>Urdu</li>
            </ul>
            
            <p class='mt-4'>Applications must reach by: <strong>Saturday, 8<sup>th</sup> June, 2024</strong> via courier to: <span style='font-style: italic; font-weight: bold;'>Director Human Resources, Aitchison College, The Mall Road, Lahore.</span></p>
            <div class='mt-5 text-center'>ACTING PRINCIPAL</div>

        "
    ],
    /*["id" => 2, "heading" => "Teachers for Senior School", "expiry" => "02/09/2024 09:40:00", "active" => "false",
            "details" => "
            <h4 style='margin-top: 0; margin-bottom: 15px;'>
                Teachers for Senior School (Starting August 2023)
            </h4>
            <h6 style='margin-top: -10px;'>
                <strong>
                    Principles of Accounting, Business Studies, English and Pakistan Studies
                </strong>
            </h6>
            <p style='line-height: 1.6em;'>Applications are invited for the above mentioned subjects in Senior School.</p>
            <p style='line-height: 1.6em;'>Applicants must have experience of teaching the relevant subjects at O Level /IGCSE and A Level (Cambridge international), with a related Master’s degree.</p>
            <p style='line-height: 1.6em;'>
                Applications must reach the college by 31<sup>st</sup> May 2023 via email to the Director HR at:  <span style='color:#0000ff;'>hr@aitchison.edu.pk</span>.
            "
        ],
        ["id" => 3, "heading" => "Principal Aitchison College", "expiry" => "03/11/2024 23:59:59", "active" => "true",
            "details" => "
            <p>
            <img src='img/principal/press-ad-aitchison-college-20240204.webp' class='img-fluid' alt='Ad'>
            </p>
            "
        ],
    */
//
//    ["id" => 2, "heading" => "", "expiry" => "03/09/2024 09:40:00", "active" => "false",
//        "details" => ""
//    ],
]

?>
<style>
    .accordion {

    }

    .accordion-button::after {
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M492 236H276V20c0-11.046-8.954-20-20-20s-20 8.954-20 20v216H20c-11.046 0-20 8.954-20 20s8.954 20 20 20h216v216c0 11.046 8.954 20 20 20s20-8.954 20-20V276h216c11.046 0 20-8.954 20-20s-8.954-20-20-20z" fill="%23001952" opacity="1" data-original="%23000000" class=""></path></g></svg>');
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 6.35 6.35" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M.794 2.91a.265.265 0 0 0 0 .53h4.762a.265.265 0 0 0 0-.53z" fill="%23001952" opacity="1" data-original="%23000000" class=""></path></g></svg>');
    }

    .accordion-item {

        border: none;
        border-bottom: 2px solid rgba(0, 0, 0, .125);

    }

    .accordion-button {
        font-size: 1.5rem;
        font-weight: bold;
        color: #001952;
    }
    .accordion-button:not(.collapsed) {
        color: #001952;
        background-color: transparent;
        box-shadow: none;
    }
</style>
<body>

<?php include_once ('new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="careers">Careers</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background-color: #001952;">
    <div class="container">
        <div class="row page-contents">
            <div class="fade show text-white pb-4">
                <p>
                    Aitchison College seeks teachers who are deeply committed to boys' education and an understanding of how boys are motivated and learn best in and beyond the classroom. Teachers at Aitchison are more than just teachers; they are inspired to help beyond the perfunctory and take an active interest in the progress and attainments of boys. We expect our teachers to form positive and effective relationships with students; combining compassion with an unfussy but effective way of going about things. Aitchison values above all else the building of character and expects its teachers to be exemplary mentors.
                </p>
                <p>
                    Only experienced teachers are considered with a minimum of a Masters degree in their teaching discipline. Applications must come through the Careers platform and not directly to the Principal or any other member of staff. <strong>HR reviews and shortlists all applicants, and handles employment enquiries. Contact by any other means will be ignored. Do not send applications or resumes to the Principal's Office. Appointments to staff are made by the College Principal and Heads of School.</strong>
                </p>
                <?php /*
                <p>Applications and enquiries for non teaching positions must be directed to the Bursar: email <span>bursar@aitchison.edu.pk</span></p>
                 */?>
            </div>
        </div>
    </div>

</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="text-center mb-5">
                <h2 style="color: #001952;">CURRENT JOB POSTINGS</h2>
            </div>


            <div class="accordion" id="accordionExample">

                <?php
                $hasJob = false;
                if(true) {
                    foreach ($posts as $post) {

                        if( $post['active'] === 'true' && strtotime( $post['alive']) < time() &&  strtotime( $post['expiry'])  > time() ) {
                            $hasJob = true;
                            ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo $post['id']; ?>">
                                    <button class="accordion-button<?php if ($post['active']==="false") echo " collapsed"; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $post['id']; ?>" aria-expanded="<?php echo $post['active']; ?>" aria-controls="collapse<?php echo $post['id']; ?>">
                                        <?php echo $post['heading']; ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo $post['id']; ?>" class="accordion-collapse collapse<?php if ($post['active']==="true") echo " show"; ?>" aria-labelledby="heading<?php echo $post['id']; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <?php echo $post['details']; ?>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                }
                if( !$hasJob ){
                    ?>
                    <p class="alert alert-info" style="text-align: center;">Currently, there are no new job openings. Please check back soon for updates on career opportunities at Aitchison College.</p>

                    <?php
                }
                ?>

            </div>

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