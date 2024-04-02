<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow" />
<title>Actual URL List</title>
</head>

<body>
	
	<table width="100%" border="1" cellpadding="5">
		<tbody>			
			<?php
			if(is_file("admission/check.php")){  				
			  include_once("admission/check.php");	  
			?>
			<tr>
			  <th colspan="3">Admission Pages</th>
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($page_arr as $key=>$value){
			?>
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo "admission/".$key;?></td>
			  <td><?php echo "admission/".$value;?></td>
			</tr>
			<?php
				$srno=$srno+1;
				}
			}
			$srno=1;
			?>
			
			<?php
			if(is_file("academics/check.php")){  				
			  include_once("academics/check.php");	  
			?>
			<tr>
			  <th colspan="3">Academics Pages</th>      
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($page_arr as $key=>$value){  
			?>  
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo "academics/".$key;?></td>
			  <td><?php echo "academics/".$value;?></td>
			</tr>
			<?php
				$srno=$srno+1;	
				}
			}  
			$srno=1;
			?>
			<?php
			if(is_file("boarding/check.php")){  				
			  include_once("boarding/check.php");	  
			?>
			<tr>
			  <th colspan="3">Boarding Pages</th>      
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($page_arr as $key=>$value){  
			?>  
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo "boarding/".$key;?></td>
			  <td><?php echo "boarding/".$value;?></td>
			</tr>
			<?php
				$srno=$srno+1;	
				}
			}  
			$srno=1;
			?>
			<?php
			if(is_file("schools/check.php")){  				
			  include_once("schools/check.php");	  
			?>
			<tr>
			  <th colspan="3">Our Schools Pages</th>      
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($page_arr as $key=>$value){  
			?>  
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo "schools/".$key;?></td>
			  <td><?php echo "schools/".$value;?></td>
			</tr>
			<?php
				$srno=$srno+1;	
				}
			}  
			$srno=1;
			?>
			<?php
			if(is_file("school/check.php")){  				
			  include_once("school/check.php");	  
			?>
			<tr>
			  <th colspan="3">School Pages</th>      
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($page_arr as $key=>$value){  
			?>  
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo "school/".$key;?></td>
			  <td><?php echo "school/".$value;?></td>
			</tr>
			<?php
				$srno=$srno+1;	
				}
			}  
			$srno=1;
			?>
			<?php
			if(is_file("gallery/check.php")){  				
			  include_once("gallery/check.php");	  
			?>
			<tr>
			  <th colspan="3">Gallery Pages</th>      
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($page_arr as $key=>$value){  
			?>  
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo "gallery/".$key;?></td>
			  <td><?php echo "gallery/".$value;?></td>
			</tr>
			<?php
				$srno=$srno+1;	
				}
			}  
			$srno=1;
			?>
			<?php
			if(is_file("support/check.php")){  				
			  include_once("support/check.php");	  
			?>
			<tr>
			  <th colspan="3" style="border-left: none; border-right: none;">Support College Pages</th>      
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($page_arr as $key=>$value){  
			?>  
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo "support/".$key;?></td>
			  <td><?php echo "support/".$value;?></td>
			</tr>
			<?php
				$srno=$srno+1;	
				}
			}  
			$srno=1;
			?>
			<?php
			$other_pages=array();
			$other_pages['contact-info']="contacts.php";
			$other_pages['careers']="career.php";
			//$other_pages['']="";
			?>
			<tr>
			  <th colspan="3" style="border-left: none; border-right: none;">Other Pages</th>      
			</tr>
			<tr>
			  <th scope="col">Sr. #</th>
			  <th scope="col">Visited URL</th>
			  <th scope="col">Actual URL</th>
			</tr>
			<?php
				foreach($other_pages as $key=>$value){  
			?>  
			<tr>
			  <td><?php echo $srno;?></td>
			  <td><?php echo $key;?></td>
			  <td><?php echo $value;?></td>
			</tr>
			<?php
				$srno=$srno+1;	
				}
			  
			$srno=1;
			?>
			
		</tbody>	
	</table>
</body>
</html>
