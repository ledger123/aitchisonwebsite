<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
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
	<div align='center'>
		<div id="printBar">
			<a id='print' align='left' onclick="javascript:printPage('printableArea')">
				<img  src='images/print.png' alt='Print' title='Print' />
			</a>
		</div>
		
		<page class='".$this->pageCssClass."' id='printableArea'>
		<div id='reportToolbar' align='left'>
		
		
					
		<div id="fee_challan">
		<table width="100%" border="0" cellspacing="0" cellpadding="10" class="main">

		  <tbody>
			  <tr>
			<td style="border: thin solid #000000; height: 380px; vertical-align: top; padding: 5px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tbody>
					  <tr>
					<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td class="td_logo" width="160" align="center"><img src="images/logo97x95.png" width="120" height="117"></td>
						<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tbody><tr>
							<td class="td_ac">Aitchison College</td>
							<td width="160">&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_lhr">Lahore</td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_term">2<sup>nd</sup> Term Bill (January 2019 - April 2019)<br><small style="font-weight: normal;">(Parent Copy)</small></td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td>&nbsp;</td>
							<td class="td_ntn">NTN: 4199854-5</td>
						  </tr>
						</tbody></table>
						</td>                
					  </tr>
					</tbody></table>
					</td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tbody><tr>
						<td width="14%">Bill No</td>
						<td width="14%">Bill Date</td>
						<td width="14%">Due Date</td>
						<td width="14%">School No</td>
						<td width="30%">Student Name</td>
						<td width="14%">Class</td>
					  </tr>
					  <tr>
						<td><strong>19024521</strong></td>
						<td><strong>06-12-2018</strong></td>
						<td><strong>07-01-2019</strong></td>
						<td><strong>18555</strong></td>
						<td style="text-align: left; padding-left: 5px;"><strong>Shahmeer Khalid</strong></td>
						<td><strong>H1B</strong></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tbody><tr>
						<td width="14%">Bill Amount</td>
						<td colspan="5">Amount in Words</td>
					  </tr>
					  <tr>
						<td><strong>214,183</strong></td>
						<td colspan="5" style="text-align: left; padding-left: 5px;"><strong>Rupees two hundred fourteen thousand one hundred eighty-three only</strong></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
						  <tbody><tr>
							<td height="72" style="text-align: center;"><hr class="hr">Depositor Name &amp; Signature</td>
						  </tr>
						  <tr>
							<td height="72" style="text-align: center;"><hr class="hr">Bank Stamp and Signature</td>
						  </tr>
						</tbody></table></td>
						<td><table width="100%" border="0" cellspacing="0" cellpadding="1">
						  <tbody><tr>
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
							<td class="td_authorized_bb">NBP Davis Road Branch, Lahore</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">MCB Bank Limited (All Branches Plus Internet Banking) Collection A/C 0756353711008389</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">Askari Bank Limited (Collection A/C 2890420000163)</td>
						  </tr>
						</tbody></table></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td class="td_ntn" style="text-align: right; padding-left: 5px;"><small>(Note: Rs. 10,199 included in bill amount as Advance Tax @ 5% u/s 2361 pf Income Tax Ordinance 2001.)</small></td>
				  </tr>
				</tbody></table>
			 </td>
		  </tr>
		  <!--<tr>
			<td class="content_seperator"><hr  class="hr_main"  /></td>
		  </tr>-->
				<tr><td class="content_seperator"><hr class="hr_main"></td></tr>		

		  <tr>
			<td style="border: thin solid #000000; height: 380px; vertical-align: top; padding: 5px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tbody><tr>
					<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td class="td_logo" width="160" align="center"><img src="images/logo97x95.png" width="120" height="117"></td>
						<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tbody><tr>
							<td class="td_ac">Aitchison College</td>
							<td width="160">&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_lhr">Lahore</td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_term">2<sup>nd</sup> Term Bill (January 2019 - April 2019)<br><small style="font-weight: normal;">(College Copy)</small></td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td>&nbsp;</td>
							<td class="td_ntn">NTN: 4199854-5</td>
						  </tr>
						</tbody></table>
						</td>                
					  </tr>
					</tbody></table>
					</td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tbody><tr>
						<td width="14%">Bill No</td>
						<td width="14%">Bill Date</td>
						<td width="14%">Due Date</td>
						<td width="14%">School No</td>
						<td width="30%">Student Name</td>
						<td width="14%">Class</td>
					  </tr>
					  <tr>
						<td><strong>19024521</strong></td>
						<td><strong>06-12-2018</strong></td>
						<td><strong>07-01-2019</strong></td>
						<td><strong>18555</strong></td>
						<td style="text-align: left; padding-left: 5px;"><strong>Shahmeer Khalid</strong></td>
						<td><strong>H1B</strong></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tbody><tr>
						<td width="14%">Bill Amount</td>
						<td colspan="5">Amount in Words</td>
					  </tr>
					  <tr>
						<td><strong>214,183</strong></td>
						<td colspan="5" style="text-align: left; padding-left: 5px;"><strong>Rupees two hundred fourteen thousand one hundred eighty-three only</strong></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
						  <tbody><tr>
							<td height="72" style="text-align: center;"><hr class="hr">Depositor Name &amp; Signature</td>
						  </tr>
						  <tr>
							<td height="72" style="text-align: center;"><hr class="hr">Bank Stamp and Signature</td>
						  </tr>
						</tbody></table></td>
						<td><table width="100%" border="0" cellspacing="0" cellpadding="1">
						  <tbody><tr>
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
							<td class="td_authorized_bb">NBP Davis Road Branch, Lahore</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">MCB Bank Limited (All Branches Plus Internet Banking) Collection A/C 0756353711008389</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">Askari Bank Limited (Collection A/C 2890420000163)</td>
						  </tr>
						</tbody></table></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td class="td_ntn" style="text-align: right; padding-left: 5px;"><small>(Note: Rs. 10,199 included in bill amount as Advance Tax @ 5% u/s 2361 pf Income Tax Ordinance 2001.)</small></td>
				  </tr>
				</tbody></table>
			 </td>
		  </tr>
		  <!--<tr>
			<td class="content_seperator"><hr  class="hr_main"  /></td>
		  </tr>-->
				<tr><td class="content_seperator"><hr class="hr_main"></td></tr>		

		  <tr>
			<td style="border: thin solid #000000; height: 380px; vertical-align: top; padding: 5px;">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
				  <tbody><tr>
					<td>
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td class="td_logo" width="160" align="center"><img src="images/logo97x95.png" width="120" height="117"></td>
						<td>
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						  <tbody><tr>
							<td class="td_ac">Aitchison College</td>
							<td width="160">&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_lhr">Lahore</td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td class="td_term">2<sup>nd</sup> Term Bill (January 2019 - April 2019)<br><small style="font-weight: normal;">(Bank Copy)</small></td>
							<td>&nbsp;</td>
						  </tr>
						  <tr>
							<td>&nbsp;</td>
							<td class="td_ntn">NTN: 4199854-5</td>
						  </tr>
						</tbody></table>
						</td>                
					  </tr>
					</tbody></table>
					</td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tbody><tr>
						<td width="14%">Bill No</td>
						<td width="14%">Bill Date</td>
						<td width="14%">Due Date</td>
						<td width="14%">School No</td>
						<td width="30%">Student Name</td>
						<td width="14%">Class</td>
					  </tr>
					  <tr>
						<td><strong>19024521</strong></td>
						<td><strong>06-12-2018</strong></td>
						<td><strong>07-01-2019</strong></td>
						<td><strong>18555</strong></td>
						<td style="text-align: left; padding-left: 5px;"><strong>Shahmeer Khalid</strong></td>
						<td><strong>H1B</strong></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td class="content_seperator">&nbsp;</td>
				  </tr>
				  <tr>
					<td><table width="100%" border="1" cellspacing="0" cellpadding="0" class="table_info">
					  <tbody><tr>
						<td width="14%">Bill Amount</td>
						<td colspan="5">Amount in Words</td>
					  </tr>
					  <tr>
						<td><strong>214,183</strong></td>
						<td colspan="5" style="text-align: left; padding-left: 5px;"><strong>Rupees two hundred fourteen thousand one hundred eighty-three only</strong></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td><table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td width="50%"><table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
						  <tbody><tr>
							<td height="72" style="text-align: center;"><hr class="hr">Depositor Name &amp; Signature</td>
						  </tr>
						  <tr>
							<td height="72" style="text-align: center;"><hr class="hr">Bank Stamp and Signature</td>
						  </tr>
						</tbody></table></td>
						<td><table width="100%" border="0" cellspacing="0" cellpadding="1">
						  <tbody><tr>
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
							<td class="td_authorized_bb">NBP Davis Road Branch, Lahore</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">MCB Bank Limited (All Branches Plus Internet Banking) Collection A/C 0756353711008389</td>
						  </tr>
						  <tr>
							<td width="5%" class="td_authorized_bb1">&gt;</td>
							<td width="95%" class="td_authorized_bb">Askari Bank Limited (Collection A/C 2890420000163)</td>
						  </tr>
						</tbody></table></td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td class="td_ntn" style="text-align: right; padding-left: 5px;"><small>(Note: Rs. 10,199 included in bill amount as Advance Tax @ 5% u/s 2361 pf Income Tax Ordinance 2001.)</small></td>
				  </tr>
				</tbody></table>
			 </td>
		  </tr>
		  <!--<tr>
			<td class="content_seperator"><hr  class="hr_main"  /></td>
		  </tr>-->
		  </tbody></table>
		</div>
	</div>
		</page>
	</div>
	</body>
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