<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Archives"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/history.jpg';
$banner_url = $path.'resources/assets/images/banners/school/about.jpg';	

$page_header = "Archives";
?>
<style>

    p { text-align:justify; }
    #lstArchive {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;

    }
    #lstArchive li { margin-bottom:15px; flex: 0 0 30%;}
    @media (max-width: 1024px) {
        #lstArchive li { margin-bottom:15px; flex: 0 0 45%;}
    }
    @media (max-width: 767px) {
        #lstArchive li { margin-bottom:15px; flex: 0 0 90%;}
    }

    @media (max-width: 480px) {
        #lstArchive li { margin-bottom:15px; flex: 0 0 90%;}
    }

    @media (max-width: 991px) {

    }

    .sport-gallery-menu {
        display: inline;
        float: left;
        text-align: center;
        padding: 0 20px;
        width: 100%;
    }

    .sport-gallery-menu ul li {
        border: 1px solid #ccc;
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        padding: 6px 15px;
        text-transform: uppercase;
        -webkit-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
        font-size: 14px;
    }

    .sport-gallery-menu ul li:hover,
    .sport-gallery-menu ul li.active{
        color: #000;
    }

    .container {
        /*opacity: 1.0;*/
    }
    #archiverunning, #archiverunning p, #archiverunning span, #archiverunning ol, #archiverunning ul{
        /*font-family: 'Lato', 'Roboto', 'Oswald';*/
        /*font-size: 16px;*/
		font-size: 14px;
        line-height: 22px;
    }
    #archiverunning ol, #archiverunning ul{
        line-height: 30px !important;
        padding-left: 25px;
        margin-left: 25px;
    }
    #archiverunning, #archiverunning p{
        margin-left: 1%;
        margin-right: 2%;

    }
    #archiverunning p{
        margin-top: 8px;
    }
    #archiverunning .stdpadding{
        margin-left: 1%;
        margin-right: 2%;
    }
    #archiverunning .nopadding{
        padding-left: 0px;
        margin-left: 0px;
    }
    #archiverunning h1, #archiverunning h2, #archiverunning h3, #archiverunning h4, #archiverunning h5, #archiverunning h6 {
        padding-left: 1%;
        /*font-family: lato;*/
        text-transform: uppercase;
        font-size: 21px;
        line-height: 30px;
    }

</style>
<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div style="background-color: #ffc845;">
<div class="container">

    <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
                </ol>
            </nav>

    </div>
</div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row pt-5">

        <!-- Left Area -->
		<div class="col-lg-9 col-md-12 col-sm-12">
			<?php /*?><div class="page-title">
                <h1><?php echo $title; ?></h1>
            </div><?php */?>
			<div class="sport-gallery-menu">
                <ul id="lstArchive" style="flex-wrap: wrap;">
                    <li class="filter" data-filter="DepartmentSlide" style="background-color: rgb(138, 189, 227);"><a id="lnkDepartment" onclick="showDiv('DepartmentSlide')">Archives Department</a></li>
                    <li class="filter" data-filter="ContributeSlide" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('ContributeSlide')">Contribute to Archives</a></li>
                    <li class="filter" data-filter="MuseumSlide" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('MuseumSlide')">College Museum</a></li>
                    <li class="filter" data-filter="ArchivesSocietySlide" style="background-color: rgb(255, 255, 255);">
                        <a onclick="showDiv('ArchivesSocietySlide')">College Archives Society</a>
                    </li>
                    <li class="filter" data-filter="CollectionsSlide" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('CollectionsSlide')">Available Collections</a></li>

                    <li class="filter" data-filter="StaffGallery" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('StaffGallery')">Staff Gallery </a></li>
                    <li class="filter" data-filter="LanglandRoom" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('LanglandRoom')">Langlands' Room </a></li>
                    <li class="filter" data-filter="HelpupSlide" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('HelpupSlide')">Can you Help us? </a></li>
                    <li class="filter" data-filter="FaqSlide" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('FaqSlide')">FAQ’s</a></li>
                    <li class="filter" data-filter="ContactSlide" style="background-color: rgb(255, 255, 255);"><a onclick="showDiv('ContactSlide')">Contact</a></li>
                </ul>
            </div>

            <div class="clearfix"></div>
            <div id="archiverunning" class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="DepartmentSlide" class="gallery_area" style="display: table-row;">
                        <h2>Archives Department</h2>
                        <p style="display:none;">After the Annexation of the Punjab by the East India Company, a proposal was laid down in 1864 by a Captain Tighe (then Deputy Commissioner, Umballa, Punjab) to build an institution for the Punjabi Sardars. This suggestion was later reformed into a School for Wards of Court continuing the foundational basis of teaching the young Sardars. The proposal fell into the hands of the Lieutenant-Governor Sir Charles Aitchison in May 1885, who further developed the ideology by laying the foundations of the school. It has been reported that the school was to serve education to young men from the ruling families, good families, and the minors under the guardianship of Wards of Court. It was named the Punjab Chief’s College which was later renamed as the Aitchison College in 1886. The history of the College can be traced 'unofficially' to 1868, although the foundation stone of this building was laid on the 3rd November, 1886, by Viceroy Lord Dufferin and Ava.</p>
                        <p>Aitchison College has a rich past that is vital to preserve and exhibit, including invaluable historical narratives, letters and other rare documents. Visiting our Archives offers a pleasant and accessible experience.</p>
                        <p>Among our chief aims is to assemble personal reflections of our Alumni, Faculty and Staff. These experiences will be documented in the form of an Oral History. We would also appreciate donations of photographs, manuscripts, letters, medals or any other interesting archival material. The College archivist Mr. Sajid Husnain is contactable on extension 431</p>
						<div class="mt-4 text-center"><img src="https://aitchison.edu.pk/newsletter/news/images/aas-1126-2-v2.jpg" class="img-fluid" alt="Archives Department"></div>
                    </div>
                    <div id="ArchivesSocietySlide" class="gallery_area" style="display: none;">
                        <h2>College Archives Society</h2>
                        <p>The College Archives Society is currently examining Principals' letters from 1911 to 1933, which were personally written by Frederick Leslie-Jones and James Kelly, among other examples from key staff of the period. Kelly served as Leslie-Jones' vice for 13 years prior to assuming the reins. The original school farm occupied much of their time and concerns as it was a vital component of the school's early financial viability. 'Diseases, discipline and directives' might be a way of summing up much of the early days focussed solely on boarding life. Our Archives team is preparing a special exhibition in 2021.
                        </p>
                    </div>
                    <div id="ContributeSlide" class="gallery_area" style="display: none;">
                        <h2>Contribute to Archives</h2>
                        <p>Our Archives department keeps all available records and displays many of these in the New Archives Centre. The Collection is revised as more material is processed, donated or collected. Great efforts are being made to preserve and conserve our archival material as we are aware of their invaluable significance. We have also started to digitize our archives and aim to continue this process as it is vital for preservation. A vast amount of material exists in our storage such as photographs, records, manuscripts, medals, cups, trophies, letters (typed and hand written), along with various other objects and documents.</p>
                        <p>If you wish to donate/loan out or give copies of your collections to the Archives Department or make an appointment for our Oral History Interview segment, kindly email at <span style="color:#000099;">archivist@aitchison.edu.pk</span>.</p>
                    </div>
                    <div id="MuseumSlide" class="gallery_area" style="display: none;">
                        <h2>College Museum</h2>
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p>On Monday 13<sup>th</sup> November, 2017, the newly established Archives’ Display Centre was officially inaugurated at the Aitchison College <em>Mandir</em>. The building has been sensitively utilized for showcasing archival material. The inaugural exhibition showcased some of the earliest pieces of the College’s history from 1886 to 1953. The selected pieces provided a glimpse into life at Aitchison College before and after the 1947 Partition. The Archives Centre has been established to preserve and exhibit invaluable historical narratives and artefacts that reflect the rich past of Aitchison College.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 15px;">
                                <img src="https://aitchison.edu.pk/img/archives/archives-display-center-2.png" alt="Archives’ Display Centre" class="img-fluid">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 15px;">
                                <img src="https://aitchison.edu.pk/img/archives/mandir.jpg" alt="Archives’ Display Centre" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6" style="margin-top: 15px;">
                                <img src="https://aitchison.edu.pk/img/archives/archives-1.jpg" alt="Archives’ Display Centre" class="img-fluid">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6" style="margin-top: 15px;">
                                <img src="https://aitchison.edu.pk/img/archives/archives-2.jpg" alt="Archives’ Display Centre" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div id="CollectionsSlide" class="gallery_area" style="display: none;">
                        <h2>Available Collections</h2>
                        <ul style="list-style:disc; margin-left:25px; margin-bottom:15px; line-height:1.8;">
                            <li>Selected Student Records (dating back to 1886)</li>
                            <li>Aitchisonian Magazines (dating back to 1936)</li>
                            <li>Prefect Books (dating back to 1950’s)</li>
                            <li>The&nbsp;Civil&nbsp;and&nbsp;Military Gazette (1940)</li>
                            <li>College Directories</li>
                            <li>Attendance Registers (dating back to 1886)</li>
                            <li>Photographs of faculty and rare photographs of Alumni</li>
                        </ul>
                        <p>(The collection is increasing with time and categories are not limited to above)</p>
                    </div>
                    <div id="StaffGallery" class="gallery_area" style="display: none;">
                        <h2>Staff Gallery</h2>
                        <p>
                            The College recognises teaching staff who have served 15 years or more since 1886. The gallery is open for visits on Saturdays 9am to 12pm or by appointment made with the Alumni office.
                        </p>
                        <p style="padding-top: 20px;"><img src="https://aitchison.edu.pk/img/archives/staff-gallery-20210511.jpg" class="img-fluid" alt="Staff Gallery"></p>
                    </div>
                    <div id="LanglandRoom" class="gallery_area" style="display: none;">
                        <h2>Langlands' Room</h2>
                        <p>
                            A representative room was established to honour one of the College's iconic figures and a Pakistan hero. Major Geoffrey Langlands' memory lives on as part of the Langlands' Fund for supporting tuition fees and the basic needs of remote boarders educated at Aitchison College.
                        </p>
                        <p>
                            Enquiries about donations may be made to the Principal's office. &nbsp;<a href="https://aitchison.edu.pk/d-one.php" style="color: #07095B; display: contents;"><u>Donate Now</u></a>
                        </p>
                        <p style="padding-top: 20px;">
                            <img src="https://aitchison.edu.pk/img/archives/langlands-room-20210511.jpg" class="img-fluid" alt="Langlands' Room">
                        </p>
                    </div>
                    <div id="FaqSlide" class="gallery_area stdpadding" style="display: none;">
                        <h2 class="nopadding">FAQ’s</h2>
                        <ul class="nopadding">
                            <li><strong>How can I donate my collection?</strong></li>
                            <p class="nopadding">We believe that each collection is invaluable and holds great significance. Please schedule a meeting with our College Archivist to review and discuss the process of donating. You can also email at: <span style="color:#000099;">archivist@aitchison.edu.pk</span></p>
                            <li><strong>How can I share my personal time and experience at Aitchison and be a part of the Oral History segment?</strong></li>
                            <p class="nopadding">We believe that each story and experience is precious. These oral histories are your personal narrations of events and experiences which you have lived at Aitchison College. These take you on a trip down the memory lane and help others to learn about the past. Please email us to schedule an appointment for the interview at: <span style="color:#000099;">archivist@aitchison.edu.pk</span> or call between 8:00 am to 1:00 pm (Mon to Thurs) and 8:00 am to 12:00 pm (Fri to Sat) at: [92 42] 111 363 063 / Ext 431</p>
                            <li><strong>Who will use my collection?</strong></li>
                            <p class="nopadding">Your collection or Oral History Interviews will be safe in our archives. These could be exhibited on our social media page or website. The archives center aims to set up exhibitions from time to time and your collections can be chosen for exhibition displays as well. Your name as the donor of the material will always be mentioned in our records. This material will not be used for profit or marketing purposes but will only be used for the purpose of College’s archive display and research. The records of the archival material given to us in any form will be securely kept in our repository. However, if you don’t want your collection or narration to be displayed or shared with the public, you may inform us accordingly.</p>
                            <li><strong>Can I donate copies and keep my originals?</strong></li>
                            <p class="nopadding">We prefer to collect original records and materials rather than copies. It is preferred to use originals both for the purpose of readability of the document and for the proof of authenticity. We will provide to <strong>donors</strong>, free of charge, photocopies of any collection donated. In exceptional cases, the Archives will accept high-quality copies of very significant materials should a donor be unable to donate the originals.</p>
                        </ul>
                    </div>
                    <div id="HelpupSlide" class="gallery_area" style="display: none;">
                        <h2>Can you Help us?</h2>
                        <p>As part of building school records, Archives, at this stage, seeks the names of boys who went from Aitchison to the following universities for <strong>undergraduate studies</strong> prior to 2013.</p>
                        <ol style="list-style: decimal;">
                            <li>University of Oxford</li>
                            <li>University of Cambridge</li>
                            <li>Imperial College London</li>
                            <li>UCL</li>
                            <li>London School of Economics</li>
                            <li>Harvard University</li>
                            <li>Stanford University</li>
                            <li>MIT</li>
                            <li>Columbia University</li>
                            <li>Yale</li>
                        </ol>
                        <p>Please provide your name, year of <strong>graduation</strong> from Aitchison College, and <strong>the name of the University</strong>. In the case of the University of Oxford and University of Cambridge, please provide the name of your college.</p>
                        <p>Kindly send the information at <span style="color:#0000ff;">alumniofficer@aitchison.edu.pk</span></p>
                        <p>OR</p>
                        <p>
                            <a href="https://forms.gle/LiYtwgx2QzmbACtE8" target="_blank" style="width: auto;">
                                <span class="btn btn-primary" style="overflow: visible;">Submit Your Information</span></a>
                        </p>
                    </div>
                    <div id="ContactSlide" class="gallery_area" style="display: none;">
                        <h2>Contact</h2>
                        <p>Tel: [92 42] 111 363 063 / Ext 431</p>
                        <p>Email: <span style="color:#000099;">archivist@aitchison.edu.pk</span></p>
                        <p>College Museum Visiting Hours: Saturday 9:00 am to 12:00 pm</p>
                        <p>For visit appointments, please send an email to the Archives Department.</p>
                    </div>
                </div>
            </div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>	
        
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
<script type="text/javascript">

    	function showDiv(slidearea) {
			document.getElementById("DepartmentSlide").style.display="none";
			document.getElementById("ContributeSlide").style.display="none";
			document.getElementById("MuseumSlide").style.display="none";
			document.getElementById("ArchivesSocietySlide").style.display="none";
			document.getElementById("CollectionsSlide").style.display="none";
			//document.getElementById("AGallerySlide").style.display="none";
			document.getElementById("FaqSlide").style.display="none";
            document.getElementById("HelpupSlide").style.display="none";
			document.getElementById("ContactSlide").style.display="none";
			document.getElementById("LanglandRoom").style.display="none";
			document.getElementById("StaffGallery").style.display="none";
			document.getElementById(slidearea).style.display="table-row";
			//alert(slidearea);

			//$(obj).parent().parent().css("bakground","#8ABDE3");
			//obj.parentNode.style.backgroundColor = "#8ABDE3";

			document.querySelector("li[data-filter='DepartmentSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ContributeSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='MuseumSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ArchivesSocietySlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='CollectionsSlide']").style.backgroundColor = "#fff";
			//document.querySelector("li[data-filter='AGallerySlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='FaqSlide']").style.backgroundColor = "#fff";
            document.querySelector("li[data-filter='HelpupSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ContactSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='LanglandRoom']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='StaffGallery']").style.backgroundColor = "#fff";

			document.querySelector("li[data-filter='" + slidearea + "']").style.backgroundColor = "#8ABDE3";

			//var obj = document.querySelector("li[data-filter='" + slidearea + "']");

			//obj.style.backgroundColor = "#8ABDE3";
			//alert(obj.style.backgroundColor);
		}
		showDiv("DepartmentSlide");
    </script>
</html>
