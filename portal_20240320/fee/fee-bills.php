<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

#we want the page refresh first time
session_start();
if(!isset($_SESSION['fee_bills_refresh'])) {
	$_SESSION['fee_bills_refresh'] = "1";
	header("location: fee-bills.php");

}



$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."fee/feerepository.php");

$feeRepo = new FeeRepository($dc);

$dTable = $feeRepo->GetFeeBill($_SESSION['portal_SchoolNo']);

$tFeeBill = $dTable[0];

$withdrawn = $dTable[1];

$amount_arrear = 0;
if ( $tFeeBill->rowsCount() > 0 ) {
	$dRow = $tFeeBill->Rows[0];

	$amount_arrear=intval($dRow->Amount_Total)-(intval($dRow->Amount_Bill)+intval($dRow->Amount_Tax));

}

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Fee Bills"; include($path."includes.php"); ?>
	
<style>
	
	#feebill > div > div > span {
		font-weight: bold; text-align: right;
	}
	
</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="fee-bills">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row">
							  <div class="" role="tabpanel" data-example-id="togglable-tabs">
								  <ul id="tabs" class="nav nav-tabs bar_tabs" role="tablist">
									<li role="presentation" class="active"><a href="#feebill" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Fee Bill</a>
									</li>
									<li role="presentation" class=""><a href="#billdetails" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Bill Details</a>
									</li>
									<?php 
									  //if(strlen($dRow->FeeBillNo) > 3){
									  if(!(in_array(trim($_SESSION['portal_SchoolNo']), $feeRepo->GetBlockedNos()) || ( !isset($dRow) || strlen($dRow->FeeBillNo) < 2))) {
									?>  
									<li role="presentation" class=""><a href="fee-challan.php?bill_id=<?php echo $purifier->purify($dRow->FeeBillNo); ?>" target="_blank" role="tab" id="profile-tab" ><i class="fa fa-print"></i> Challan Form</a>
									</li>
									<?php } ?>    
								  </ul>
								  
								  <div id="myTabContent" class="tab-content">
									  
									  
									  <div class="tab-pane fade in active" id="feebill">
										<br>
										  
										  <?php 
										  if(!empty($_GET['duedate'])) {
											  ?>
											  <div class="col-lg-12 col-md-12 col-sm-12">
												<span style="color: #990000; font-weight: bold; font-size: large; text-transform: uppercase; font-style: italic; padding-top: 15px; padding-bottom: 25px; ">Challan Forms are not available after due date.<br>&nbsp;<br></span>
											</div>
										  <?php 
										  }
										  if(in_array(trim($_SESSION['portal_SchoolNo']), $feeRepo->GetBlockedNos()) || ( isset($dRow) == false || strlen($dRow->FeeBillNo) < 2)) {
											  ?>
											  <div class="">
												<div class="col-lg-12 col-md-12 col-sm-12">
													<span style="color: #990000; font-weight: bold; text-transform: uppercase; font-style: italic;">Please contact Accounts Department for your fee bill.</span>
												</div>
											</div>	
										  <?php 
										  } else {
										  ?>
										  <div class="row form-horizontal form-label-left">
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Bill Term: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo $purifier->purify($dRow->Term1); ?></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Bill No: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo $purifier->purify($dRow->FeeBillNo); ?></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Bill Date: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo $functions->formatDate($purifier->purify($dRow->FeeBillDate), "d M Y"); ?></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Due Date: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo $functions->formatDate($purifier->purify($dRow->DueDate), "d M Y"); ?></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Arrears: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo $purifier->purify($amount_arrear); ?></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Bill Amount: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo number_format($dRow->Amount_Bill); ?></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Tax Amount: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo number_format($dRow->Amount_Tax); ?></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Total Amount: </label>
												<div class="col-md-9 col-sm-9 col-xs-12" style="padding-top: 8px;">
													<span><?php echo number_format($dRow->Amount_Total); ?></span>
												</div>
											</div> 
											 
										  </div>
										  <?php 
										  }
										  ?>
									  </div>
									  
									  <div class="tab-pane fade in" id="billdetails">
										  <?php include("fee-details.php"); ?>
									  </div>
									  
									  <div class="tab-pane fade in" id="printchallan">
										
										  <div class="row">
											
										  </div>
										  
									  </div>
								  </div>
								</div>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php include($path."rightpanel.php"); ?>
					  	
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
