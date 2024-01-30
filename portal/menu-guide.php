<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Menu Guide"; include($path."includes.php"); ?>
	
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	
</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="examinations">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="" role="tabpanel" data-example-id="togglable-tabs">
							  <?php $mycday=date("w"); ?>
							  <ul id="tabs" class="nav nav-tabs bar_tabs" role="tablist">
							  <li role="presentation" <?php echo ($mycday==0)?" class=\"active\"":"";?>><a href="#sun"  role="tab" data-toggle="tab" aria-expanded="true">Sun</a></li>	
							  <li role="presentation" <?php echo ($mycday==1)?" class=\"active\"":"";?>><a href="#mon"  role="tab" data-toggle="tab" aria-expanded="true">Mon</a></li>	
							  <li role="presentation" <?php echo ($mycday==2)?" class=\"active\"":"";?>><a href="#tue"  role="tab" data-toggle="tab" aria-expanded="true">Tue</a></li>	
							  <li role="presentation" <?php echo ($mycday==3)?" class=\"active\"":"";?>><a href="#wed"  role="tab" data-toggle="tab" aria-expanded="true">Wed</a></li>
							  <li role="presentation" <?php echo ($mycday==4)?" class=\"active\"":"";?>><a href="#thu"  role="tab" data-toggle="tab" aria-expanded="true">Thu</a></li>	
							  <li role="presentation" <?php echo ($mycday==5)?" class=\"active\"":"";?>><a href="#fri"  role="tab" data-toggle="tab" aria-expanded="true">Fri</a></li>	
							  <li role="presentation" <?php echo ($mycday==6)?" class=\"active\"":"";?>><a href="#sat"  role="tab" data-toggle="tab" aria-expanded="true">Sat</a></li>
							  </ul>
							  
							  <div id="myTabContent" class="tab-content">
								  
								  <div class="tab-pane fade in <?php echo ($mycday==0)?" active":"";?>" id="sun">
									  
									  <div class="table-responsive" style="margin-top: 30px;">
										<?php      	
											if($_SESSION['portal_School'] == "SSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>SUNDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%" rowspan="2"><br>Brunch: Chaney, Egg, Halva, Pratha, Raita, Tea/Milk. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Samosa, Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Seekh Boti, Chicken Seekh Kabab, Chatni,   Roghni Nan, Fruit Custard.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk, Tea, Biscuits</td>
												  </tr>                 
												</tbody>
											  </table> 
										<?php
											}elseif($_SESSION['portal_School'] == "PSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>SUNDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Pratha, Bread, Halva, Chaney, Egg (Fried, Boiled, Scrambled), Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>-</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>White Rice, Sabat Masoor, Salad, Curd, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Pizza Slice, Squash.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Manchurian, Egg Fried Rice, Cold Drink, Kheer.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
											</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "JSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>SUNDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Pratha, Halva, Chaney, Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Biscuits, Banana, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Minced Veal with Potato, Dal, Roti, Curd, Salad, Fruit. <strong>Or</strong> Kofta (Meatballs),<strong>Or</strong> Seekh Kabab. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>2 Small Samosas, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Haleem,  Naan, Gajar Ka Halva.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
										  </table>
										<?php      	
											}
										?>                                                      

										</div>
									  
								  </div>
								  
								  <div class="tab-pane fade in <?php echo ($mycday==1)?" active":"";?>" id="mon">
									  <div class="table-responsive" style="margin-top: 30px;">
										<?php      	
											if($_SESSION['portal_School'] == "SSD"){
										?>
						  					<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>MONDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Chocolate Spread, Butter, Egg (Fried, Boiled, Scrambled), Corn Flakes, Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Chicken Haleem, Khameri Roti, Fruit. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Chicken Patty, Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Mongolian Chicken with Garlic Rice, Ice Cream. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk, Tea, Biscuits</td>
												  </tr>                 
												</tbody>
											</table>                                
										<?php      	
											}elseif($_SESSION['portal_School'] == "PSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>MONDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Jam, Egg (Fried, Boiled, Scrambled), Butter, Milk/Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Pakoray, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Potato with Peas, Roti, Curd, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Chicken Patty, Squash.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Mutton, Roti, Curd, Jelly.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
											</table>
						  <?php      	
											}elseif($_SESSION['portal_School'] == "JSD"){										
										?>
							<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
								<tbody>
								  <tr>
									<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>MONDAY MENU</strong></div></th>
								  </tr>
								  <tr>
									<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
									<td width="75%">Bread, Jam, Egg (Fried, Boiled, Scrambled), Butter, Corn Flakes, Milk/Tea. </td>
								  </tr>
								  <tr>
										<th style="padding-left: 20px;">Morning Break</th>
										<td>Brownie, Banana, Milk. </td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Lunch</th>
									<td>Potato with Mutton, Roti, Curd, Salad, Fruit.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Tea Break</th>
									<td>Chicken Patty, Milk.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Dinner</th>
									<td>Brown Rice, Chicken Curry, Fruit Custard.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Milk<br>
									  Bed Time</th>
									<td>Milk</td>
								  </tr>                 
								</tbody>
						  </table>
						  <?php      	
											}
										?>
						  </div>
								  </div>
								  <div class="tab-pane fade in <?php echo ($mycday==2)?" active":"";?>" id="tue">
									  <div class="table-responsive" style="margin-top: 30px;">
										<?php      	
											if($_SESSION['portal_School'] == "SSD"){										
										?>
										  <table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>TUESDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Pratha, Bread, Alo Bhugia, Egg (Fried, Boiled, Scrambled), Corn Flakes, Jam, Milk/Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Burger, French Fries, Cold Drink, Tomato Ketchup, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Samosa, Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Qorma, Roti, Kheer.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk, Tea, Biscuits</td>
												  </tr>                 
												</tbody>
											</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "PSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>TUESDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Chocolate Spread, Egg (Fried, Boiled,  Scrambled), Corn Flakes, Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Pizza Slice, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Karhi Pakoray, White Rice, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Samosa, Squash.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Chowmein, Tomato Ketchup, Gulab Jaman.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
											</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "JSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>TUESDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Chicken Spread, Egg (Fried, Boiled, Scrambled), Corn Flakes, Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Drum Stick, Banana, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Red Beans <strong>or</strong> White Rice, Sabat Masoor, Potato Cutlets, Curd, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Chips Packet, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Boneless Curry <strong>or</strong> Handi, Roti, Curd, Barfi.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
										  </table>
										<?php      	
											}
										?>
										</div>
								  </div>
								  <div class="tab-pane fade in <?php echo ($mycday==3)?" active":"";?>" id="wed">
									  <div class="table-responsive" style="margin-top: 30px;">
										<?php      	
											if($_SESSION['portal_School'] == "SSD"){										
										?>
						  					<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>WEDNESDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">French Toast, Bread, Egg (Fried, Boiled, Scrambled) Corn Flakes, Milk/Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Chicken Chowmein, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Plain Cake, Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Pulao, Raita, Sawayyan.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk, Tea, Biscuits</td>
												  </tr>                 
												</tbody>
							</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "PSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>WEDNESDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Pratha, Bread, Potato Bhugia, Egg (Fried, Boiled, Scrambled), Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Milk Shake.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Chicken with Seasonal Vegetables, Roti, Salad, Curd, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Pastry, Sherbat.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Mongolian Chicken, Garlic Rice, Fruit Custard.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
											</table>
						  <?php      	
											}elseif($_SESSION['portal_School'] == "JSD"){										
										?>
							<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
								<tbody>
								  <tr>
									<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>WEDNESDAY MENU</strong></div></th>
								  </tr>
								  <tr>
									<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
									<td width="75%">Pratha, Alo Bhugia,  Milk/Tea. </td>
								  </tr>
								  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Plain Cake, Banana, Milk.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Lunch</th>
									<td>Chicken with Seasonal Vegetables, Roti, Salad, Curd, Fruit.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Tea Break</th>
									<td>Cream Puff, <strong>or</strong> Bakery Biscuits, Juice/Milk.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Dinner</th>
									<td>Fish &amp; French Fries, Jelly. </td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Milk<br>
									  Bed Time</th>
									<td>Milk</td>
								  </tr>                 
								</tbody>
						  </table>
						  <?php      	
											}
										?>
						  </div>
								  </div>
								  <div class="tab-pane fade in <?php echo ($mycday==4)?" active":"";?>" id="thu">
									  <div class="table-responsive" style="margin-top: 30px;">
										<?php      	
											if($_SESSION['portal_School'] == "SSD"){										
										?>
						  					<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>THURSDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Peanut Butter, Egg (Fried, Boiled, Scrambled), Corn Flakes, Milk/Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Chicken Shawarma, Cold Drink, Tomato Ketchup, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Pizza Slice, Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Curry with Brown Rice, Kheer.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk, Tea, Biscuits</td>
												  </tr>                 
												</tbody>
							</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "PSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>THURSDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Chicken Spread,  Egg (Fried, Boiled, Scrambled), Corn Flakes, Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Chicken Patty, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Chicken Haleem, Plain Nan, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Drum Stick, Squash.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Tikka, Roghni Nan, Cold Drink, Chatni.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
											</table>
						  <?php      	
											}elseif($_SESSION['portal_School'] == "JSD"){										
										?>
							<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
								<tbody>
								  <tr>
									<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>THURSDAY MENU</strong></div></th>
								  </tr>
								  <tr>
									<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
									<td width="75%">Bread, Chicken Spread, Egg (Fried, Boiled, Scrambled), Corn Flakes, Milk/Tea. </td>
								  </tr>
								  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Pizza Slice, Banana, Milk.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Lunch</th>
									<td>Chicken Karahi, Roti, Curd, Salad, Fruit.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Tea Break</th>
									<td>Noodles.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Dinner</th>
									<td>Chicken Biryani, Raita, Jalebi.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Milk<br>
									  Bed Time</th>
									<td>Milk</td>
								  </tr>                 
								</tbody>
						  </table>
						  <?php      	
											}
										?>
						  </div>
								  </div>
								  <div class="tab-pane fade in <?php echo ($mycday==5)?" active":"";?>" id="fri">
									  <div class="table-responsive" style="margin-top: 30px;">
										<?php      	
											if($_SESSION['portal_School'] == "SSD"){										
										?>
						  					<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>FRIDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Pratha, Alo Chaney, Bread, Egg (Fried, Boiled, Scrambled), Corn Flakes, Milk/Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Chicken Biryani, Raita, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Tea, Samosa.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Fish, French Fries, Ice Cream.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk, Tea, Biscuits</td>
												  </tr>                 
												</tbody>
							</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "PSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>FRIDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Pratha, Potato Egg Bhugia, Milk/Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Vegetables Patty, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Mixed Dal, Roti, Chatni, Fruit. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Veg. Sandwich, Squash.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Chicken Malai Boti, Nan, Chatni, Cold Drink.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
											</table>
						  <?php      	
											}elseif($_SESSION['portal_School'] == "JSD"){										
										?>
							<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
								<tbody>
								  <tr>
									<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>FRIDAY MENU</strong></div></th>
								  </tr>
								  <tr>
									<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
									<td width="75%">Pratha, Egg Bhugia, Milk/Tea.</td>
								  </tr>
								  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Chicken Sandwich, Banana, Milk.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Lunch</th>
									<td><p>Minced Meat with Rice, Dal, Raita,  Fruit.</p></td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Tea Break</th>
									<td><p>Nuggets, Milk.</p></td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Dinner</th>
									<td>Mini Burger, French Fries, Gulab Jaman.</td>
								  </tr>
								  <tr>
									<th style="padding-left: 20px;">Milk<br>
									  Bed Time</th>
									<td>Milk</td>
								  </tr>                 
								</tbody>
						  </table>
						  <?php      	
											}
										?>
						  </div>
								  </div>
								  <div class="tab-pane fade in <?php echo ($mycday==6)?" active":"";?>" id="sat">
									  <div class="table-responsive" style="margin-top: 30px;">
										<?php      	
											if($_SESSION['portal_School'] == "SSD"){										
										?>
										  <table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>SATURDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Chocolate Spread, Butter, Egg (Fried, Boiled, Scrambled), Corn Flakes, Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Pratha Roll, Tomato Ketchup, Cold Drink, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Hot Dog, Tea.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Veal Minced Meat with Potato (Alo Qeema), Roti, Sawayyan.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk, Tea, Biscuits</td>
												  </tr>                 
												</tbody>
											</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "PSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>SATURDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">Bread, Jam, Egg (Fried, Boiled, Scrambled), Butter, Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Biscuits (Khatai), Milk. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Chicken Ginger, Khameri  Roti, Curd, Fruit.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Veg Roll (Deans), Squash.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Large Cheese Shawarma, French Fries, Cold Drink.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
											</table>
										<?php      	
											}elseif($_SESSION['portal_School'] == "JSD"){										
										?>
											<table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
												<tbody>
												  <tr>
													<th align="center" class="ptm_mtitle" colspan="2"><div align="center"><strong>SATURDAY MENU</strong></div></th>
												  </tr>
												  <tr>
													<th width="25%" style="padding-left: 20px;"><strong>Breakfast</strong></th>
													<td width="75%">French Toast, Bread, Egg (Fried, Boiled, Scrambled) Corn Flakes, Milk/Tea. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Morning Break</th>
													<td>Chips, Banana, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Lunch</th>
													<td>Alo Pratha, <strong>Or</strong> Alo Bhugia, Pickle Mixed, Raita, Fruit. </td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Tea Break</th>
													<td>Cake Rusk, Milk.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Dinner</th>
													<td>Brown Rice, Chicken Roast Piece, Raita, Kheer.</td>
												  </tr>
												  <tr>
													<th style="padding-left: 20px;">Milk<br>
													  Bed Time</th>
													<td>Milk</td>
												  </tr>                 
												</tbody>
										  </table>
										<?php      	
											}
										?>
										</div>
								  </div>

							  </div>
							</div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="harkness-table.php"><img class="img-responsive" src="images/harkness-table.jpg" style="" alt="Harkness Table"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="student-recognition.php"><img class="img-responsive" src="images/student-recognition.jpg" style="" alt="Student Recognition"></a>
						 </div>								  
						 <br/>
						 
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
