<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/attendancepository.php");

$attRepo = new AttendanceRepository($dc);
//echo $_SESSION['portal_SchoolNo'];
$attendance = $attRepo->GetAttendanceBySchoolNo($_SESSION['portal_SchoolNo']);
//$attendance->PrintTable();
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Complaint/Feedback Form for Parents"; include($path."includes.php"); ?>

<style>
    .label-align {
        text-align: right;
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
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>

						  <div class="row">
                              <form id="feedback" novalidate="">

                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align" style="margin-top: 10px;">Complaint/Feedback Type:</label>
                                      <div class="col-md-6 col-sm-6">
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" checked="" value="option1" id="optionsRadios1" name="feedback_type"> Complaint
                                              </label>&nbsp;&nbsp;&nbsp;
                                              <label>
                                                  <input type="radio" value="option2" id="optionsRadios2" name="feedback_type"> Feedback
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3 label-align" style="margin-top: 10px;">Submission Type:</label>
                                      <div class="col-md-6 col-sm-6">
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" checked="" value="option1" id="optionsRadios1" name="submission_type"> Anonymous
                                              </label>&nbsp;&nbsp;&nbsp;
                                              <label>
                                                  <input type="radio" value="option2" id="optionsRadios2" name="submission_type"> Non-Anonymous
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                  <div style="text-align: center; margin-bottom: 10px">Parent/Guardian Information: (If Non-Anonymous)</div>

                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Full Name</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Address</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">City</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Phone Number</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Email Address</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>


                                  <div style="text-align: center; margin-bottom: 10px">Student Information: (If Non-Anonymous)</div>

                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Student's Full Name</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Student's School Number</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Student's Class</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Relationship to Student</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>

                                  <div class="ln_solid"></div>

                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Department Involved</label>
                                      <div class="col-md-6 col-sm-6">
                                          <select class="form-control">
                                              <option>School Office</option>
                                              <option>Teaching Staff</option>
                                              <option>School Stationery </option>
                                              <option>Career Counseling </option>
                                              <option>Labs</option>
                                              <option>Co-Curricular</option>
                                              <option>Admission Office</option>
                                              <option>Accounts/Fee and Billing</option>
                                              <option>IT Services</option>
                                              <option>Sports and Games</option>
                                              <option>Riding</option>
                                              <option>Counseling Services</option>
                                              <option>Health Services</option>
                                              <option>Security and Parking</option>
                                              <option>Services</option>
                                              <option>Library</option>
                                              <option>Boarding</option>
                                              <option>Dining Services (Boarding)</option>
                                              <option>Sanitation</option>
                                              <option>Canteens</option>
                                              <option>Works Department</option>
                                              <option>DSR/Barber/Uniform Shops</option>
                                              <option>Transport</option>
                                              <option>Alumni Relations</option>
                                              <option>Campus Facilities</option>
                                              <option>Others</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div style="text-align: center; margin-bottom: 10px">Complaint/Feedback Details</div>

                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Date of Incident/Feedback</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <label class="col-form-label col-md-3 col-sm-3  label-align">Location of Incident/Feedback</label>
                                      <div class="col-md-6 col-sm-6">
                                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" required="required">
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <div class=" col-md-3 col-sm-3">
                                          <label class="col-form-label label-align">Description of the Complaint/Feedback</label>
                                      </div>

                                      <div class="col-md-6 col-sm-6">
                                          <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" rows="5" required="required"></textarea>
                                      </div>
                                      <div class=" col-md-3 col-sm-3">
                                          <span>(Please provide a detailed account of the incident or feedback, including any relevant facts, dates, and times.)</span>
                                      </div>
                                  </div>
                                  <div class="row field item form-group">
                                      <div class=" col-md-3 col-sm-3">
                                          <label class="col-form-label label-align">Has this complaint been previously reported?</label>
                                      </div>

                                      <div class="col-md-6 col-sm-6">
                                          <div class="radio">
                                              <label>
                                                  <input type="radio" checked="" value="option1" id="optionsRadios1" name="feedback_type"> Yes
                                              </label>&nbsp;&nbsp;&nbsp;
                                              <label>
                                                  <input type="radio" value="option2" id="optionsRadios2" name="feedback_type"> No
                                              </label>
                                          </div>
                                          <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" rows="5" required="required"></textarea>
                                      </div>
                                      <div class=" col-md-3 col-sm-3">
                                          <br/>
                                          <span>(If yes, please provide details of the previous report and any actions taken.)</span>
                                      </div>
                                  </div>

                                  <div class="row field item form-group">
                                      <div class=" col-md-3 col-sm-3">
                                          <label class="col-form-label label-align">Desired Resolution/Feedback</label>
                                      </div>

                                      <div class="col-md-6 col-sm-6">
                                          <textarea class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" rows="5" required="required"></textarea>
                                      </div>
                                      <div class=" col-md-3 col-sm-3">
                                          <span>(Please specify what action or resolution you are seeking or provide your feedback.)</span>
                                      </div>
                                  </div>
                                  <div class="ln_solid"></div>
                                  <button type="submit" class="btn btn-success">Submit</button>
                              </form>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include("today-classes.php"); ?>
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
