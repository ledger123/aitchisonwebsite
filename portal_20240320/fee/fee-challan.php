<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("feerepository.php");

$feeRepo = new FeeRepository($dc);

$bill_id = $_GET['bill_id'];

$tFeeChallan = $feeRepo->GetFeeChallan($_SESSION['portal_SchoolNo'], $bill_id);

$feeChallan = $tFeeChallan->Rows[0];


if($tFeeChallan->rowsCount() <= 0) {
	header("location: fee-bills.php?msg=1");	
}
if(time() > (strtotime($feeChallan->DueDate)+24*3600)){
	header("Location: fee-bills.php?duedate=expire");
	exit();
}

if(in_array(trim($_SESSION['portal_SchoolNo']), $feeRepo->GetBlockedNos())){
	header("location: fee-bills.php");	
	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

	#fee_challan{
		margin: auto;
		padding: 5px;
		width: 940px;
		font-family: "Times New Roman";	
	}
	#fee_challan .maintable{
		height: 135px;

	}
	#fee_challan .td_logo{
		height: 125px;
	}
	#fee_challan .td_ntn{
		width: 160px !important;
		font-family: "Times New Roman";	
		font-size: 14px;
		vertical-align: baseline;
		text-align: center;
	}
	#fee_challan .td_ac{
		font-family: "Times New Roman";	
		font-size: 24px;
		font-weight: bold;
		text-align: center;	
	}
	#fee_challan .td_lhr{
		font-family: "Times New Roman";	
		font-size: 20px;
		font-weight: bold;
		text-align: center;	

	}
	#fee_challan .td_term{
		font-family: "Times New Roman";	
		font-size: 16px;
		font-weight: bold;
		text-align: center;
	}
	#fee_challan .td_authorized_bb{
		font-family: "Times New Roman";	
		font-size: 12px;
		font-weight: bold;
		padding-left: 5px;
		text-align: left;
	}
	#fee_challan .td_authorized_bb1{
		font-family: "Times New Roman";	
		text-align: left;
		padding-left: 5px;
		font-size: 14px;
		font-weight: bold;
		vertical-align: top;
	}
	#fee_challan .table_info td{
		font-family: "Times New Roman";	
		font-size: 16px;
		text-align: center;	
	}
	#fee_challan .content_seperator{
		border: none;
		font-size: 7px;
		max-height: 12px !important;	
		line-height: 0.1em
	}
	#fee_challan .hr { 
		display: block;
		width: 50%;
		margin-top: 0.1em;
		margin-bottom: 0.1em;
		margin-left: auto;
		margin-right: auto;
		border-style: solid;
		border-width: 1px;
	}
	#fee_challan .hr_main { 
		display: block;
		width: 100%;
		/*margin-top: 0.8em;
		margin-bottom: 0.8em;*/
		margin-left: auto;
		margin-right: auto;
		border-style: dashed;
		border-width: 1px;
	} 
	
	#printBar {
		text-align: right;
		width: 245mm;
		cursor: pointer;
	}
	
@media print {
  html, body {
	  background: white;
    width: 210mm; /*297mm;*/ 
	-webkit-print-color-adjust: exact;
	-moz-print-color-adjust: exact;
	/*thead { display: table-header-group;}*/
  }
  /* ... the rest of the rules ... */
}

page[size="A4"] {
  background: white;
  width: 21cm; /*29.7cm;*/
  
  /*height: 29.7cm;*/
  display: block;
  margin: 0 auto;
  /*margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);*/
}

@top-center {
   content: element(heading); 
}

</style>
</head>
	<body>
		<div id="fee_challan">
		<table width="100%" border="0" cellspacing="0" cellpadding="4" class="main">
		  <?php
		  for($chn=1; $chn < 4; $chn++){
		  ?>
				<?php
					if($chn ==2){
						$ctype_id="College Copy";	
						echo '<tr><td class="content_seperator"><hr  class="hr_main"  /></td></tr>';
					}else if($chn ==3){
						$ctype_id="Bank Copy";	
						echo '<tr><td class="content_seperator"><hr  class="hr_main"  /></td></tr>';
					}else if($chn ==1){
						$ctype_id="Parent Copy";	
					}
			  ?>		

		  <tr>
			<td style="border: thin solid #000000; height: 380px; vertical-align: top;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tr>
					<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td class="td_logo" width="160" align="center"><img src="<?php echo $path; ?>images/ac_logo130x130.png" width="120" height="117" /></td>
						<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tr>
							<td class="td_ac">Aitchison College</td>
							<td width="160">&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_lhr">Lahore</td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_term"><?php echo $purifier->purify($feeChallan->Term1);?><br /><small style="font-weight: normal;">(<?php echo $ctype_id; ?>)</small></td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td>&nbsp;</td>
							<td class="td_ntn">NTN: 4199854-5</td>
						  </tr>
						</table>
						</td>                
					  </tr>
					</table>
					</td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tr>
						<td width="14%">Bill No</td>
						<td width="14%">Bill Date</td>
						<td width="14%">Due Date</td>
						<td width="14%">School No</td>
						<td width="30%">Student Name</td>
						<td width="14%">Class</td>
					  </tr>
					  <tr>
						<td><strong><?php echo $purifier->purify($feeChallan->FeeBillNo);?></strong></td>
						<td><strong><?php echo $functions->formatDate($feeChallan->FeeBillDate, "d-m-Y"); ?></strong></td>
						<td><strong><?php echo $functions->formatDate($feeChallan->DueDate, "d-m-Y"); ?></strong></td>
						<td><strong><?php echo $purifier->purify($feeChallan->SubCode_Student);?></strong></td>
						<td style="text-align: left; padding-left: 5px;"><strong><?php echo $purifier->purify($feeChallan->StudentName);?></strong></td>
						<td><strong><?php echo $purifier->purify($feeChallan->SectionCode);?></strong></td>
					  </tr>
					</table></td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tr>
						<td width="14%">Bill Amount</td>
						<td colspan="5">Amount in Words</td>
					  </tr>
					  <tr>
						<td><strong><?php echo number_format($feeChallan->Amount_Total);?></strong></td>
						<td colspan="5" style="text-align: left; padding-left: 5px;"><strong>Rupees <?php echo $functions->convert_number_to_words($purifier->purify($feeChallan->Amount_Total));?> only</strong></td>
					  </tr>
					</table></td>
				  </tr>
				  <tr>
					<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tr>
						<td width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
						  <tr>
							<td height="72" style="text-align: center;"><hr class="hr" />Depositor Name & Signature</td>
						  </tr>
						  <tr>
							<td height="72" style="text-align: center;"><hr class="hr" />Bank Stamp and Signature</td>
						  </tr>
						</table></td>
						<td><table width="100%" border="0" cellspacing="0" cellpadding="1">
						  <tr>
							<td colspan="2" class="td_authorized_bb1" style="text-align: left; padding-left: 5px;">Authorized Bank Branches for payment:-</td>
							</tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">Bank Al Habib Limited -(All Branches plus Internet Banking) Collection A/C 0080-900133-01</td>
						  </tr>
						  <tr>
							<td class="td_authorized_bb1">&gt;</td>
							<td class="td_authorized_bb">Bank Alfalah Limited - (All Conventional Branches in Pakistan) Collection A/C 0006-01132127</td>
						  </tr>
						  <tr>
							<td class="td_authorized_bb1">&gt;</td>
							<td class="td_authorized_bb">NBP -Cash Management Collection</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">MCB Bank Limited (All Branches Through TM0096) Collection A/C 0756353711008389</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">Askari Bank Limited (Collection A/C 2890420000163)</td>
						  </tr>
						</table></td>
					  </tr>
					</table></td>
				  </tr>
				  <tr>
					<td class="td_ntn" style="text-align: right; padding-left: 5px;"><small>(Note: Rs. <?php echo number_format($feeChallan->Amount_Tax);?> included in bill amount as Advance Tax @ 5% u/s 2361 pf Income Tax Ordinance 2001.)</small></td>
				  </tr>
				</table>
			 </td>
		  </tr>
		  <!--<tr>
			<td class="content_seperator"><hr  class="hr_main"  /></td>
		  </tr>-->
		  <?php
		  }
		  ?>
		</table>
		</div>

		</body>
		</html>
	
<script>
	function printPage(divName) {
		var printContents = document.getElementById(divName).innerHTML;
		var originalContents = document.body.innerHTML;

		/*

		//alert( printContents );
		var table = $( "#"+divName );

		$( table ).find( "#dataGrid tr" ).find("th.hide").remove();
		$( table ).find( "#dataGrid tr" ).find("td.hide").remove();


		document.body.innerHTML = $( table ).html();

		*/

		document.body.innerHTML = printContents;

		window.print();

		document.body.innerHTML = originalContents;
	}
</script>
</html>