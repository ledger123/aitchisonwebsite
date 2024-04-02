<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Classes"; include($path."includes.php"); ?>
	
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	.head_background{

		color: white;
	}	
	
</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
						<div class="x_content">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width: 100%;">
									<div align="center" style="padding-bottom: 20px;">
										<img src="images/ac_logo130x130.png" width="130" height="130" alt="Aitchison College, Lahore.">
									</div>
								</div>
								<div class="page_title">
									<h3 style="text-align: center;">POLICY - VEHICLE STICKERS/E-TAG AND PARKING</h3>
								</div>
								<p>&nbsp;</p>

								<h4 style="font-weight: bold; text-decoration: underline; font-size: 20px !important;">INTRODUCTION</h4>

								<p style="text-align: justify;">1.&nbsp;&nbsp;Security Department has been assigned the responsibility of Traffic Management and Security Management within the premises of Aitchison College. Security Staff is making all efforts for smooth flow of traffic. However, cooperation from drivers/parents is vital. The route/parking areas mentioned below will be strictly ensured by Security Staff otherwise College Authorities have the right to deny access to drivers/parents for not following the College Policy.</p>

								<h4 style="font-weight: bold; text-decoration: underline; font-size: 20px !important;">AT ENTRY POINTS</h4>

								<p style="text-align: justify;">2.&nbsp;&nbsp;Traffic Management on Canal Road and Sunder das Road are not in the jurisdiction/responsibility of Security Department. However, Security Staff is employed as good will gesture to facilitate drivers/parents while entering the College premises.</p>

								<p><strong>Due to prevailing Security environment in the country, pick &amp; drop of children is only allowed inside the College premises.</strong></p>

								<p>Following will be observed.</p>

								<h4 style="font-weight: bold; text-decoration: underline; font-size: 20px !important;">AT CANAL GATE</h4>

								<ul style="list-style:disc; margin-left:5%; line-height:1.9; text-align: justify;">
									<li>Drivers/parents should enter the College by making Four Lanes Only to avoid traffic congestion besides facilitating other vehicles plied on Canal Road.&nbsp;</li>
									<li>Drivers/parents should not change lanes frequently while approaching the entry points/gates.</li>
									<li>Left Two Lanes are for vehicles entering to pick/drop students of Junior School while other Two Lanes are for vehicles entering to pick/drop students of Prep or Senior School. Drivers/parents should follow the prescribed lanes while entering the College.</li>
									<li>There is area marked for vehicles driven by ladies only near Junior School Gate. The area is limited to be available on first come basis.</li>
									<li>All School Stickers bearing vehicles should pick/drop students of Junior School in prescribed parking located near Gwyn House Chowk and then follow the route to pick/drop students of Prep/Senior School near water Tank or Old Building. Drivers/parents should follow the route/parking area as mentioned below.</li>
									<li>At Junior School, all vehicles can drop students while making Two Lanes on the left side of road while leaving Third Lane to facilitate vehicles for exit.</li>
									<li>At Junior School, driver/parents coming earlier should park their vehicles in Junior School Parking near the riding area and after filling up of parking will park in Two Lanes along right side of road while leaving Third Lane for vehicles for exit.</li>
									<li>At Prep School, all vehicles can drop students at Water Tank or Old Building Area.</li>
									<li>At Prep School, parking is available on first come basis. However, vehicles coming earlier can park at Water Tank or Old Building. Later on, vehicles will be parked at Old Tree Parking and the last vehicles will be parked in Two Lanes along the right side of road while leaving the Third Lane for other vehicles.</li>
								</ul>

								<h4 style="font-weight: bold; text-decoration: underline; font-size: 20px !important;">AT PRINCIPAL&rsquo;S LANE GATE</h4>

								<ul style="list-style:disc; margin-left:5%; line-height:1.9">
									<li>Drivers/parents should enter the College by making Two Lanes Only and should follow the prescribed lanes. Moreover, drivers/parents should follow the route/parking areas mentioned below.</li>
									<li>Left Lane is for vehicles entering to pick/drop students of Prep or Senior School from Old Building.</li>
									<li>Other Lane is for vehicles entering to pick/drop students from Gurdwara or Sunder Das Gate Parking.</li>
									<li>Drivers/parents should not pick/drop students from Godley Parking.</li>
								</ul>

								<h3 style="font-weight: bold; text-decoration: underline;font-size: 20px !important;">ENTRY / EXIT AND PARKING</h3>

								<p>3.&nbsp;&nbsp;Car stickers will be for entry/exit through designated Gates and for designated parking areas. Gates will be opened forty five minutes before the School timings.&nbsp; The point of entry/exit and parking area of vehicles will be as follows.</p>

								<div class="table-responsive">
								<table border="1" class="table" style="width:100%">
									<tbody>
										<tr>
											<th style="text-align: center; border: #000000 thin solid;">Sticker</th>
											<th style="text-align: center; border: #000000 thin solid;">Entry</th>
											<th style="text-align: center; border: #000000 thin solid;">Parking Area</th>
											<th style="text-align: center; border: #000000 thin solid;">Pick / drop point</th>
											<th style="text-align: center; border: #000000 thin solid; width:115px;">Exit</th>
										</tr>
										<tr>
											<td class="tdborder">Junior School</td>
											<td class="tdborder">Monnoo Canal Gate</td>
											<td class="tdborder">Junior School Parking</td>
											<td class="tdborder">Junior School Road</td>
											<td class="tdborder">Babar Ali Gate<br />
											On Mall Road</td>
										</tr>
										<tr>
											<td class="tdborder">Prep School&nbsp;</td>
											<td class="tdborder">(1) Monnoo Canal Gate<br />
											(2) Grade 9 will enter from New Sundar Das Gate on Sundar Das Road</td>
											<td class="tdborder">(1) Water Tank/ Old Building<br />
											(2) Cars of Grade 9 Class at Old Building area.&nbsp;</td>
											<td class="tdborder">(1) Water Tank / Old Building<br />
											(2) Cars of Grade 9 class at Old Building area.</td>
											<td class="tdborder">Maratib Ali Gate On Mall Road&nbsp;</td>
										</tr>
										<tr>
											<td class="tdborder">Senior School&nbsp;</td>
											<td class="tdborder">New Sunder Das Gate&nbsp;</td>
											<td class="tdborder">Parking near Monnoo Gate (Sunder Das Gate)&nbsp;</td>
											<td class="tdborder">Parking near Monnoo Gate (Sunder Das Gate).</td>
											<td class="tdborder">Monnoo Gate (Sunder Das Gate)</td>
										</tr>
										<tr>
											<td class="tdborder">All Schools&nbsp;</td>
											<td class="tdborder">Monnoo Canal Gate&nbsp;</td>
											<td class="tdborder">Behind Gwyn House, Old Tree, Water Tank &amp; Old Building</td>
											<td class="tdborder">Behind Gwyn House, Old Tree,Water Tank &amp; Old Building</td>
											<td class="tdborder">Maratib Ali Gate On Mall Road</td>
										</tr>
										<tr>
											<td class="tdborder">All Schools&nbsp;</td>
											<td class="tdborder">Principal&rsquo;s Lane Gate</td>
											<td class="tdborder">(1) Old Building<br />
											(2) Gurdawra or<br />
											Sunderdas Parking</td>
											<td class="tdborder">(1) Old Building<br />
											(2) Gurdwara or<br />
											Sunderdas Parking</td>
											<td class="tdborder">(1) Maratib Ali Gate<br />
											(2) Sunderdas Gate</td>
										</tr>
									</tbody>
								</table>
								</div>

								<p><strong><u>ISSUE AND REPLACEMENT OF STICKERs/E &ndash;TAGs</u></strong></p>

								<p>4.&nbsp;&nbsp;The College is continuing with the policy of restricting vehicles entry to official vehicles with stickers/E-Tag only. The cooperation of parents is vital, which will also go a long way to improve safety for boys, faculty and residents in the driving and parking areas.</p>

								<ul style="list-style:disc; margin-left:5%; line-height:1.9;text-align: justify;">
								<li>Parents should approach College&rsquo;s Security Office by email (<span style="color:#210d87;">so@aitchison.edu.pk</span>) for issuance/replacement of Stickers/E-Tags or lodge application with a copy of CNIC along with old Stickers/E-tags.</li>
									<li>New admissions and those who do not have an email facility may contact the Security office for issuance of vehicle Stickers/E-Tags. However, parents should visit themselves at the time of first issue.</li>
									<li>All students are issued with Vehicles Stickers/E-Tags at the time of admission. However, E-Tag is renewed on annual basis at the time of start of new session but stickers are to be replaced annually at the time of start of new session.</li>
									<li>Old Stickers/E-Tags are to be deposited back with Security Office while applying for replacement and are not to be disposed by the parents / drivers themselves. Then new Stickers/E-Tags will be issued to new vehicle.</li>
									<li>Stickers can be collected thereafter on any working day from the Security Office during office hours and these will be pasted by the Security Office Staff inside the top left hand corner of the front windscreen and rear screen of the vehicle and thus be visible to the Security Staff at the College entrances.</li>
									<li>Stickers/E-Tags issued for a particular vehicle are not to be used for any other vehicle.</li>
									<li>Each student is allowed Stickers/E-Tags for two vehicles only.</li>
									<li>Rented vehicles and Taxis as well, will not be issued with Stickers/E-Tags / Temporary Pass.</li>
									<li>Grade 9 class (M2) will be issued Stickers/E-Tags of Senior School to enter from Principal&rsquo;s Lane Gate and will pick/drop/park their vehicles at the Old Building area as mentioned below.</li>
									<li>All School Stickers/E-Tags are only allowed for two or more real brothers studying in two or more different schools at Aitchison College.</li>
									<li>Boarders will be issued with Boarding House Stickers only which will also be replaced on annual basis at the start of new session.</li>
									<li>Payment for the stickers will be made through the student&rsquo;s bill. It may be noted that Security Staff is not allowed to receive cash payment for stickers/E-Tags.</li>
									<li>New vehicle bearing no Registration Number will not be issued with E-Tag and car stickers till display of Registration Number. Moreover, vehicles already in use bearing Sticker/E-Tag went off road due to accident or not available for pick/drop due to domestic needs. Temporary Card can be obtained for 15 Days upon request from Security Office.</li>
								</ul>

								<h3 style="font-weight: bold; text-decoration: underline; font-size: 20px !important;">MISCELLANEOUS</h3>

								<ul style="list-style:disc; margin-left:5%; line-height:1.9; text-align: justify;">
									<li>Vehicles coming without Stickers/E-Tag must deposit parent/driver&rsquo;s CNIC at the gate. After exiting, the parent/driver will collect his CNIC.</li>
									<li>Parents are advised not to use vehicles with papers on the glass or tinted glasses. However, if a vehicle is being used for security purposes then that vehicle will enter the College by lowering its window panes for observation. Moreover, Vehicles with removable sun shields be removed while entering College premises for observation.</li>
									<li>Parents must ensure that under-aged children or students should not drive vehicles in the College.</li>
									<li>Parents are requested to ensure that their drivers remain with their vehicles during parking time, in the parking area, and are expected to observe appropriate decorum. Vehicles found without their drivers are liable to be towed out of the College at the owners risk and cost.</li>
									<li>For security purposes, parents should ensure that no un-necessary persons should accompany students to college for pick/drop. We request that only parents or drivers should accompany students to College for pick/drop.</li>
									<li>Parents/drivers should refrain to play deck/music in vehicles on high volume in college premises.</li>
									<li>The College premises are strictly &ldquo;NO SMOKING&rdquo;.</li>
									<li>The College premises is out of bound for arms/armed Guards.</li>
									<li>In the interest of security &amp; environmental support, rickshaws are not allowed in the College premises.</li>
									<li>For security reasons, it may be necessary to check vehicles at any time whilst in the premises.</li>
									<li>The College Authorities must be informed immediately about the snatching/stolen incident of vehicle bearing College Sticker/E-Tag.</li>
									<li>In case of violation of rules, vehicle may be removed from the list of authorized vehicles allowed for entry to the College.</li>
									<li>Late arrivals will not be entertained.</li>
									<li>Parents are not allowed to visit Riding School area while students are taking riding classes.</li>
									<li>Parents/drivers should avoid talking on cell phone while driving in College premises.</li>
									<li>Parents/Students should not accompany/bring pets in the college premises.</li>
								</ul>

								<p>&nbsp;</p>

								<p>5.&nbsp;&nbsp;Parents having <strong>appointments</strong> with the Principal will enter through the Monnoo Gate (Sunder Das Road) and park at Gurdwara Parking.</p>

								<p>6.&nbsp;&nbsp;Issuance of Vehicles Stickers/E-Tags for the new academic year will be intimated through Principal&rsquo;s News Letter accompanied with Result Card of student on yearly basis.</p>

								<p>&nbsp;</p>

								<p>Best Regards</p>

								<p>Security Department</p>

								<p>&nbsp;</p>
								<br />

												<img src="images/signature/principal_signature_new.png" width="212" height="72" ><br />
												Michael Thomson M.A., Dip. Ed., M.A.C.E
												<p>Principal</p>
							</div>							
						</div>	
					  
					</div>
				  </div>
				  
				</div>
            </div>
            
          	<!-- footer content -->
        	
        	<?php include($path."footer.php"); ?>
            
        	<!-- /footer content -->
          
        </div>
        <!-- /page content -->
        
      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>

</body>
</html>
