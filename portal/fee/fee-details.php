<?php

if(isset($dRow)) {
	$tFeeBillSummary = $feeRepo->GetFeeBillSummary($_SESSION['portal_SchoolNo'], $dRow->FeeBillNo);

	$fdRow = $tFeeBillSummary->Rows[0];

	$amountFeeSum = $feeRepo->GetTotalBillAmount($_SESSION['portal_SchoolNo'], $dRow->FeeBillNo);

	if(intval($amountFeeSum) > 0) {
		$fdRow->Amount_Bill = $amountFeeSum;
	}
}
if(in_array(trim($_SESSION['portal_SchoolNo']), $feeRepo->GetBlockedNos()) || !isset($fdRow) || strlen($fdRow->FeeBillNo) < 2){
?>
<br />	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<span style="color: #990000; font-weight: bold; text-transform: uppercase; font-style: italic;">Please contact Accounts Department for your fee bill.</span>
		</div>
	</div>
<?php
}
else {

	$tFeeBillDetails = $feeRepo->GetFeeBillDetails($_SESSION['portal_SchoolNo'], $dRow->FeeBillNo);

?>

<div style="display: inline-block;">
<br>
<p> Dear Parents,</p><p>Please find below the details of dues for the term:<br><?php echo $feeRepo->GetTermName($fdRow->Term1); ?>. These also include <?php echo str_replace("Expens","expens",  $fdRow->Term2);?> incurred by the student. The transaction detail of each expense is also given below.</p>
</div>


	  <div class="row">
		  <hr style="background-color: #000066;height:2px;"/>
		<div class="">
			<div class="table-responsive">
				<table class="table table-bordered" width="100%" cellspacing="1" border="0">
					<tbody>
						<tr>
							<td>Student Name</td>
							<td colspan="3">&nbsp;<span style="font-weight: bold; text-align: right"><?php echo $_SESSION['portal_userTitle'];?></span></td>
							<td>Bill #:</td>
							<td><span style="font-weight: bold; text-align: right"><?php echo $purifier->purify($fdRow->FeeBillNo);?></span></td>
						</tr>
						<tr>                                	
							<td>Section:</td>
							<td>&nbsp;<span style="font-weight: bold; text-align: right"><?php echo $purifier->purify($fdRow->SectionCode);?></span></td>
							<td>Bill Date:</td>
							<td>&nbsp;<span style="font-weight: bold; text-align: right"><?php echo $functions->formatDate($fdRow->FeeBillDate, "d-m-Y");?></span></td>
							<td>Due Date:</td>
							<td>&nbsp;<span style="font-weight: bold; text-align: right"><?php echo $functions->formatDate($fdRow->DueDate, "d-m-Y");?></span></td>
						</tr>
						<tr>
							<td>Total Amount:</td>
							<td>&nbsp;<span style="font-weight: bold; text-align: right"><?php echo number_format($fdRow->Amount_Total);?></span></td>
							<td>Bill Amount:</td>
							<td>&nbsp;<span style="font-weight: bold; text-align: right"><?php echo number_format($fdRow->Amount_Bill);?></span></td>
							<td>Tax Amount:</td>
							<td>&nbsp;<span style="font-weight: bold; text-align: right"><?php echo number_format($fdRow->Amount_Tax);?></span></td>
						</tr>
					</tbody>
				</table>
				
			
			
			<hr style="background-color: #000066;height:2px;"/>
			<div>
				<h3 class="titile">Transaction Details</h3>
			</div>
			
				
				<table class="table table-bordered" style="">
					<thead>
						<tr>
						<?php if(true) {?>
							<th style="width: 120px;">Tr. Date</th>
						<?php } ?>
							<th style="width: 60px;">LOC</th>
							<th style="width: 60px;">Ref.</th>
							<th style="width: 220px;">Description of Expense</th>
							<th style="width: 370px;">Narration</th>
							<th style="width: 80px; text-align: right">Amount</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($tFeeBillDetails->Rows as $row) {
								
						?>
						<tr>
							<?php if(true) {?>
							<td><?php echo $functions->formatDate($row->TrDate, "d-m-Y");?></td>
							<?php } ?>
							<td><?php echo $purifier->purify($row->BranchCode);?></td>
							<td><?php echo ($row->TrRef=="NULL")?"":$purifier->purify($row->TrRef);?></td>
							<td><?php echo $purifier->purify($row->DetailCodeDescription);?></td>
							<td><?php echo $purifier->purify($row->Narration);?></td>
							<td style="text-align: right;"><?php echo number_format($row->AmountFee3);?></td>
						</tr>
						
						<?php
							}
						?>
						<tr>
							<td colspan="6" align="right"><strong><?php echo number_format($tFeeBillDetails->Compute( array("sum"=>"AmountFee3"), "" )); ?></strong></td>
						</tr>
						
					</tbody>
				</table>
				
				
			</div>
		</div>
	 </div>

	  
	  
<?php
	}
?>


