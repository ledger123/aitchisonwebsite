<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "College Swimming Records"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sports/college_records.jpg';
$page_header = $title;

?>
<style>
    .college-records table tr td,
    .college-records table tr td p {
        font-size: 12px;
    }
</style>

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
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
        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a style="padding: 0px 10px;" href="college-records" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                </div>
            </div>

            <div class="text-center">
                <img src="<?php echo $image_path;?>/img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore.">
                <div class="col-12 page-title" style="padding-left: 0!important;">
                    <h1><?php echo $title; ?></h1>
                </div>

            </div>



            <div class="row table-responsive" style="margin: auto; padding: auto; margin-top:22px; max-width: 99%; display: block; ">
                <h4 style="text-align: left;">U/15 Age Group</h4>
                <table class="table table-bordered table-striped" style="width:100%; font-size: 12px;">
                    <thead>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th nowrap="nowrap" rowspan="2" style="text-align: center; vertical-align: middle;">Events</th>
                        <th colspan="3" nowrap="nowrap" style="text-align: center; vertical-align: middle;">Present</th>
                        <th colspan="3" nowrap="nowrap" style="text-align: center; vertical-align: middle;">Previous</th>
                    </tr>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Year</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Time</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Name</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Year</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Time</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>100 M Breaststroke</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">1 Min 15.74 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">1 Min 17.24 Sec.</td>
                        <td>Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td>50 M Backstroke</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">33.04 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">35.08 Sec.</td>
                        <td>Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td>100 M Backstroke</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">1 Min 12.79 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2019</td>
                        <td nowrap="nowrap">1 Min 16.24 Sec.</td>
                        <td>Asfandyar Khan Sherdil</td>
                    </tr>
                    <tr>
                        <td>200 M Individual Medley</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">2 Min 34.29 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">2 Min 46.30 Sec.</td>
                        <td nowrap="nowrap">Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td>50 M Breaststroke</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">33.42 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">34.83 Sec.</td>
                        <td>Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">50 M Butterfly</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">29.84 Sec.</td>
                        <td>Mikail Faisal Ejaz</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">31.68 Sec.</td>
                        <td>Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">100 M Butterfly</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">1 Min 10.59 Sec.</td>
                        <td>Mikail Faisal Ejaz</td>
                        <td nowrap="nowrap">2019</td>
                        <td nowrap="nowrap">1 Min 14.11 Sec.</td>
                        <td>Asfandyar Khan Sherdil</td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">50 M Freestyle</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">26.51 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">28.10 Sec.</td>
                        <td>Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td>100 M Freestyle</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">59.68 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">1 Min 06.71 Sec.</td>
                        <td>Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td>200 M Freestyle</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">2 Min 19.82 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2018</td>
                        <td nowrap="nowrap">2 Min 33.57 Sec.</td>
                        <td>Zain Yunus Sheikh</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p>&nbsp;</p>
            <div class="row table-responsive" style="margin: auto; padding: auto; margin-top:22px; max-width: 99%; display: block; ">
                <h4 style="text-align: left;">U/16 Age Group</h4>
                <table class="table table-bordered table-striped" style="width:100%; font-size: 12px;">
                    <thead>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th nowrap="nowrap" rowspan="2" style="text-align: center; vertical-align: middle;">Events</th>
                        <th colspan="3" nowrap="nowrap" style="text-align: center; vertical-align: middle;">Present</th>
                        <th colspan="3" nowrap="nowrap" style="text-align: center; vertical-align: middle;">Previous</th>
                    </tr>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Year</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Time</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Name</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Year</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Time</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>50 M Freestyle</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">25.44 Sec.</td>
                        <td>Mikail Faisal Ejaz</td>
                        <td nowrap="nowrap">2021</td>
                        <td nowrap="nowrap">25.89 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                    </tr>
                    <tr>
                        <td>100 M Backstroke&nbsp;</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">1 Min 08.80 Sec.</td>
                        <td>Mikail Faisal Ejaz</td>
                        <td nowrap="nowrap">2021</td>
                        <td nowrap="nowrap">1 Min 08.86 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                    </tr>
                    <tr>
                        <td>100 M Butterfly</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">1 Min 06.64 Sec.</td>
                        <td>Mikail Faisal Ejaz</td>
                        <td nowrap="nowrap">2021</td>
                        <td nowrap="nowrap">1 Min 07.81 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                    </tr>
                    <tr>
                        <td>4x50 M Freestyle Relay</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">2 Min 17.28 Sec.</td>
                        <td nowrap="nowrap">Jubilee House</td>
                        <td nowrap="nowrap">1995</td>
                        <td nowrap="nowrap">2 Min 23.54 Sec.</td>
                        <td nowrap="nowrap">Hali House</td>
                    </tr>
                    <tr>
                        <td>
                            <p>100 M Breaststroke</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>1 Min 10.34 Sec.</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2020</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>1 Min 19.54 Sec.</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>Rafay Raza Khan</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">
                            <p>50 M Backstroke</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>30.79 Sec.</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2020</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>32.36 Sec.</p>
                        </td>
                        <td>
                            <p>Asfandyar Khan Sherdil</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">
                            <p>50 M Butterfly&nbsp;</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>28.78 Sec.</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2020</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>28.90 Sec.</p>
                        </td>
                        <td>
                            <p>Asfandyar Khan Sherdil</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>200 M Individual Medley</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2 Min 27.50 Sec.</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2019</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2 Min 45.08 Sec.</p>
                        </td>
                        <td>
                            <p>Zain Yunus Sheikh</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>100 M Freestyle</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>58.57 Sec.</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>1996</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>1 Min 03.60 Sec.</p>
                        </td>
                        <td>
                            <p>Faraan Ahmad Irfan</p>
                        </td>
                    </tr>
                    <?php /*
                    <tr>
                        <td>
                            <p>100 M Butterfly</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>1 Min 07.81 Sec.</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2020</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>1 Min 09.86 Sec.</p>
                        </td>
                        <td>
                            <p>Asfandyar Khan Sherdil</p>
                        </td>
                    </tr>
                    */ ?>
                    <tr>
                        <td nowrap="nowrap">
                            <p>50 M Breaststroke</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>33.26 Sec&nbsp;</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2019</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>33.41 Sec.</p>
                        </td>
                        <td>
                            <p>Zain Yunus Sheikh</p>
                        </td>
                    </tr>
                    <tr>
                        <td nowrap="nowrap">
                            <p>200 M Freestyle&nbsp;</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2 Min 27.50 Sec.</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2014</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2 Min 27.53 Sec.</p>
                        </td>
                        <td>
                            <p>Hamza Ata ullah</p>
                        </td>
                    </tr>
                    <?php /*
                    <tr>
                        <td nowrap="nowrap">
                            <p>50 M Freestyle</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2021</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>25.80 sec</p>
                        </td>
                        <td>
                            <p>Daniyal Ghulam Nabi</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>2019</p>
                        </td>
                        <td nowrap="nowrap">
                            <p>26.68 sec</p>
                        </td>
                        <td>
                            <p>Zain younus Sheikh</p>
                        </td>
                    </tr>
                     */?>
                    </tbody>
                </table>
            </div>
            <p>&nbsp;</p>
            <div class="row table-responsive" style="margin: auto; padding: auto; margin-top:22px; max-width: 99%; display: block; font-size: 12px; ">
                <h4 style="text-align: left;">O/16 Age Group</h4>
                <table class="table table-bordered table-striped" style="width:100%; font-size: 12px;">
                    <thead>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th nowrap="nowrap" rowspan="2" style="text-align: center; vertical-align: middle;">Events - O/16</th>
                        <th colspan="3" nowrap="nowrap" style="text-align: center; vertical-align: middle;">Present</th>
                        <th colspan="3" nowrap="nowrap" style="text-align: center; vertical-align: middle;">Previous</th>
                    </tr>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Year</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Time</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Name</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Year</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Time</th>
                        <th nowrap="nowrap" style="text-align: center; vertical-align: middle;">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>50 M Freestyle</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">25.48 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2016</td>
                        <td nowrap="nowrap">25.78 Sec.</td>
                        <td>Ismail Najeeb Vohra</td>
                    </tr>
                    <tr>
                        <td>50 M Breaststroke</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">31.51 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2020</td>
                        <td nowrap="nowrap">35.10 Sec.</td>
                        <td nowrap="nowrap">Zain Yunus Sheikh</td>
                    </tr>
                    <tr>
                        <td>100 M Breaststroke</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">1 Min 11.91 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2006</td>
                        <td nowrap="nowrap">1 Min 15.77 Sec.</td>
                        <td>Zain Tariq</td>
                    </tr>
                    <tr>
                        <td>100 M Backstroke&nbsp;</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">1 Min 07.12 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2021</td>
                        <td nowrap="nowrap">1 Min 12.16 Sec.</td>
                        <td>Asfandyar khan Sherdil</td>
                    </tr>
                    <tr>
                        <td>200 M Individual Medley</td>
                        <td nowrap="nowrap">2022</td>
                        <td nowrap="nowrap">2 Min 25.76 Sec.</td>
                        <td>Daniyal Ghulam Nabi</td>
                        <td nowrap="nowrap">2016</td>
                        <td nowrap="nowrap">2 Min 32.95 Sec.</td>
                        <td>Ismail Najeeb Vohra</td>
                    </tr>
                    <?php /*
                    <tr>
                        <td>100 M Backstroke</td>
                        <td>
                            <p align="center">2021</p>
                        </td>
                        <td>1 Min 12.16 Sec.</td>
                        <td>Asfandyar khan Sherdil</td>
                        <td>
                            <p align="center">2006</p>
                        </td>
                        <td>1 Min 15.77 Sec.</td>
                        <td>
                            <p align="center">Zain Tariq</p>
                        </td>
                    </tr>
                    */ ?>
                    <tr>
                        <td nowrap="nowrap">50 M Backstroke</td>
                        <td nowrap="nowrap">
                            <p align="right">2020</p>
                        </td>
                        <td nowrap="nowrap">35.10 Sec.</td>
                        <td nowrap="nowrap">Zain Yunus Sheikh</td>
                        <td nowrap="nowrap">
                            <p align="right">2016</p>
                        </td>
                        <td nowrap="nowrap">35.53 Sec.</td>
                        <td>Ismail Najeeb Vohra</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <p>&nbsp;</p>
            <div class="row table-responsive" style="margin: auto; padding: auto; margin-top:22px; max-width: 99%; display: block; ">
                <table class="table table-bordered table-striped" style="width:100%">
                    <thead>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th rowspan="2" style="width: 22%; vertical-align: middle;">Events - Junior&nbsp;</th>
                        <th colspan="3" style="text-align: center !important; width: 40%;">Present&nbsp;</th>
                        <th colspan="3" style="text-align: center !important; width: 40%;">Previous&nbsp;</th>
                    </tr>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF;">
                        <th style="text-align: center !important; width: 5%;">Year</th>
                        <th style="text-align: center !important; width: 13%;">Time</th>
                        <th style="text-align: center !important; width: 21%;">Name</th>
                        <th style="text-align: center !important; width: 5%;">Year</th>
                        <th style="text-align: center !important; width: 13%;">Time</th>
                        <th style="text-align: center !important; width: 21%;">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2017</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">27.96 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Azlan Khan</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1996</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">28.19 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Faraan Ahmed Irfan</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1996</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 03.60 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Faraan Ahmed Irfan</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1996</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">1 Min 03.60 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Faraan Ahmed Irfan</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">200 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.53 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.53 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">400 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">5 Min 21.77 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">5 Min 21.77 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Breaststroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">37.09 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">37.09 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Breaststroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">1 Min 21.78 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 21.78 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">200 M Breaststroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">3 Min 07.69 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">3 Min 07.69 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Backstroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.40 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.40 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Backstroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 13.34 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 13.34 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Backstroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 47.47 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">2 Min 47.47 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Butterfly</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.32 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.32 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Butterfly</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.47 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 11px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.47 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 11px;">Ismail Najeeb Vohra</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Individual Medley</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 48.13 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 48.13 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Medley Relay</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.63 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.63 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Freestyle Relay</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 23.54 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 23.54 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                    </tr>
                    </thead>
                </table>
            </div>
            <p>&nbsp;</p>
            <div class="row table-responsive" style="margin: auto; padding: auto;margin-top:22px; max-width: 99%; display: block; ">
                <table class="table table-bordered table-striped" style="width:100%">
                    <thead>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th rowspan="2" style="width: 22%; vertical-align: middle;">Events - Senior</th>
                        <th colspan="3" style="text-align: center !important; width: 40%;">Present&nbsp;</th>
                        <th colspan="3" style="text-align: center !important; width: 40%;">Previous&nbsp;</th>
                    </tr>
                    <tr style="background-color: #0F0456 !important; color:#FFFFFF;">
                        <th style="text-align: center !important; width: 5%;">Year</th>
                        <th style="text-align: center !important; width: 13%;">Time</th>
                        <th style="text-align: center !important; width: 21%;">Name</th>
                        <th style="text-align: center !important; width: 5%;">Year</th>
                        <th style="text-align: center !important; width: 13%;">Time</th>
                        <th style="text-align: center !important; width: 21%;">Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">26.39 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">27.61 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">58.77 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 2.22 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 13.20 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 20.38 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">400 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">4 Min 50.95 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">5 Min 12.02 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">800 M Freestyle</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">11 Min 11.03 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Mansoor Ali Khan</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">11 Min 11.03 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Mansoor Ali Khan</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Breaststroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">36.98 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">38.13 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ahmed Saeed</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Breaststroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2006</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.77 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Zain Tariq</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2006</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.77 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Zain Tariq</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Breaststroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.50 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Bilal Hussain</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.50 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Bilal Hussain</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Backstroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">31.09 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.58 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Backstroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 11.26 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 13.16 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Backstroke</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 34.56 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 43.41 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Butterfly</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">28.59 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">29.87 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Butterfly</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 05.77 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 09.13 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Individual Medley</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 34.51 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap="">2 Min 42.86 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Medley Relay</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2005</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.50 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ghazi House</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">2005</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.50 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ghazi House</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Freestyle Relay</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1997</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 4.64 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                        <td style="text-align: center; padding-left: 6px; font-size: 12px;">1997</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 4.64 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                    </tr>
                    </thead>
                </table>
            </div>

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
