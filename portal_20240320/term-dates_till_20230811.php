<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Terms, Holidays and Assessments"; include($path."includes.php"); ?>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <!-- Contact School Office for updated information. -->

        
        <div class="right_col" role="main">
          <div class="container">
              <div class="row" id="newsletter">
                  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                      <div class="x_panel">
                          <div class="x_content">
                              <div class="page-title" align="center">
                                  <h3>Important Events</h3>
                                  <h4>Term Dates - August 2022 to June 2023</h4>
                              </div>
                              <br />
                              <div class="row table-responsive">
                                  <table align="center" class="table table-bordered jambo_table">
                                      <thead>
                                          <tr class="headings">
                                              <th style="width: 25%;" class="column-title">Terms </th>
                                              <th class="column-title" style="text-align: center;">Dates </th>
                                              <th class="column-title">Weeks </th>
                                              <th class="column-title">Days </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Term 1 (Winter Term) </td>
                                              <td align="center">Monday, 22<sup>nd</sup> August, 2022 to Thursday, 22<sup>nd</sup> December 2022</td>
                                              <td align="center">18</td>
                                              <td align="center">89</td>
                                          </tr>
                                          <tr>
                                              <td>Term 2 (Spring Term) </td>
                                              <td align="center">Monday, 9<sup>th</sup> January 2023 to Sunday, 12<sup>th</sup> March, 2023</td>
                                              <td align="center">09</td>
                                              <td align="center">47</td>
                                          </tr>
                                          <tr>
                                              <td>Term 3 (Summer Term) </td>
                                              <td align="center">Monday, 20<sup>th</sup> March 2023 to Friday, 2<sup>nd</sup> June 2023</td>
                                              <td align="center">11</td>
                                              <td align="center">55</td>
                                          </tr>
                                          <tr>
                                              <td><strong>Total</strong> </td>
                                              <td> </td>
                                              <td align="center"><strong>38</strong></td>
                                              <td align="center"><strong>191</strong></td>
                                          </tr>
                                          <!--active-->
                                      </tbody>
                                  </table>
                              </div>
                              <br />
                              <div class="page-title" align="center">
                                  <h4>Designated Holidays 2022-23</h4>
                              </div>
                              <br />
                              <div class="row table-responsive">
                                  <table align="center" class="table table-bordered jambo_table">
                                      <thead>
                                          <tr class="headings">
                                              <th class="column-title" style="text-align: center;">Sr </th>
                                              <th colspan="2" class="column-title" style="text-align: center;">Dates </th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>1 </td>
                                              <td align="center">Friday,23<sup>rd</sup> December, 2022 to Sunday, 8<sup>th</sup> January, 2023</td>
                                              <td align="center">Winter Break, 2022-23</td>
                                          </tr>
                                          <tr>
                                              <td>2 </td>
                                              <td align="center">Monday, 13<sup>th</sup> March, 2023 to Sunday, 19<sup>th</sup> March, 2023</td>
                                              <td align="center">Spring Break, 2022-23</td>
                                          </tr>
                                          <tr>
                                              <td>3 </td>
                                              <td align="center">Saturday, 3<sup>rd</sup> June 2023 to onwards</td>
                                              <td align="center">Summer Holidays</td>
                                          </tr>
                                          <!--active-->
                                      </tbody>
                                  </table>
                              </div>
                              <?php if($_SESSION['portal_School'] == 'SSD') { ?>
                              <div class="page-title" align="center">
                                  <h4>Major Assessments 2022-23</h4>
                              </div>
                              <br />
                              <div class="row table-responsive">
                                  <table align="center" class="table table-bordered jambo_table">
                                      <thead>
                                          <tr class="headings">
                                              <th class="column-title" style="text-align: center;">Exam</th>
                                              <th class="column-title" style="text-align: center;">Dates</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Prep Leave Half Yearly Examinations (2022)</td>
                                              <td style="text-align: center;">Friday, 2<sup>nd</sup> December, 2022</td>
                                          </tr>
                                          <tr>
                                              <td>Half Yearly Examinations 2022</td>
                                              <td style="text-align: center;">Monday, 5<sup>th</sup> December to Monday, 19<sup>th</sup> December 2022</td>
                                          </tr>
                                          <tr>
                                              <td>Mock Examinations 2023</td>
                                              <td style="text-align: center;">Monday, 20<sup>th</sup> March to Saturday, 1<sup>st</sup> April 2023</td>
                                          </tr>
                                          <tr>
                                              <td>Prep Leave -  Annual Examinations</td>
                                              <td style="text-align: center;">Thursday, 18<sup>th</sup> May 2023</td>
                                          </tr>
                                          <tr>
                                              <td>Annual Examinations -  all subjects</td>
                                              <td style="text-align: center;">Friday, 19<sup>th</sup> May to Friday, 2<sup>nd</sup> June 2023</td>
                                          </tr>
                                          <!--active-->
                                      </tbody>
                                  </table>
                              </div>
                              <?php } elseif($_SESSION['portal_School'] == 'PSD') { ?>
                              <div class="page-title" align="center">
                                  <h4>Major Assessments 2022-23</h4>
                              </div>
                              <br />
                              <div class="row table-responsive">
                                  <table align="center" class="table table-bordered jambo_table">
                                      <thead>
                                          <tr class="headings">
                                              <th class="column-title" style="text-align: center;">Exam</th>
                                              <th class="column-title" style="text-align: center;">Dates</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Prep Leave Half Yearly Examinations (2022)</td>
                                              <td style="text-align: center;">Friday, 2<sup>nd</sup> December, 2022</td>
                                          </tr>
                                          <tr>
                                              <td>Half Yearly Examinations (2022)</td>
                                              <td style="text-align: center;">Monday, 5<sup>th</sup> to Monday, 19<sup>th</sup> December 2022</td>
                                          </tr>
                                          <tr>
                                              <td>Send-up Exams for M2</td>
                                              <td style="text-align: center;">Tuesday, 21<sup>st</sup> March, to Monday, 3<sup>rd</sup> April, 2023</td>
                                          </tr>
                                          <tr>
                                              <td>Prep Leave -  Annual Examinations</td>
                                              <td style="text-align: center;">Thursday, 18<sup>th</sup> May, 2023</td>
                                          </tr>
                                          <tr>
                                              <td>Annual Examinations (For E2 and M1)-  all subjects</td>
                                              <td style="text-align: center;">Friday, 19<sup>th</sup> May, 2023- to- Friday, 2<sup>nd</sup> June, 2023</td>
                                          </tr>
                                          <!--active-->
                                      </tbody>
                                  </table>
                              </div>
                              <?php } elseif($_SESSION['portal_School'] == 'JSD') { ?>
                              <div class="page-title" align="center">
                                  <h4>Major Assessments 2022-23</h4>
                              </div>
                              <br />
                              <div class="row table-responsive">
                                  <table align="center" class="table table-bordered jambo_table">
                                      <thead>
                                          <tr class="headings">
                                              <th class="column-title" style="text-align: center;">Exam</th>
                                              <th class="column-title" style="text-align: center;">Dates</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          <tr>
                                              <td>Prep Leave Half Yearly Examinations (Upper Primary) 2022</td>
                                              <td style="text-align: center;">Friday, 9<sup>th</sup> December 2022</td>
                                          </tr>
                                          <tr>
                                              <td>Half Yearly Examinations (Upper Primary) 2022</td>
                                              <td style="text-align: center;">Saturday, 10<sup>th</sup> to Saturday, 17<sup>th</sup> December 2022</td>
                                          </tr>
                                          <tr>
                                              <td>Prep Leave - Annual Examinations (Upper Primary)</td>
                                              <td style="text-align: center;">Friday, 19<sup>th</sup> May 2023</td>
                                          </tr>
                                          <tr>
                                              <td>Junior School Annual Examinations (Upper Primary)</td>
                                              <td style="text-align: center;">Saturday, 20<sup>th</sup> May, 2023- to- Tuesday, 30<sup>th</sup> May, 2023</td>
                                          </tr>
                                          <!--active-->
                                      </tbody>
                                  </table>
                              </div>
                              <?php } ?>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                      <?php //include("today-classes.php")?>
                  </div>
              </div>
          </div>
        </div>
        


        	<!-- /footer content -->
        
  
        </div>
        <!-- /page content -->
        
      </div>
    </div>



	<?php include($path."footerincludes.php"); ?>

</body>
</html>
