<?php
		//$from="From: akhtar.rafique@gmail.com\r\nReturn-path: akhtar.rafique@gmail.com"; 
		$from = 'From: akhtar.rafique@gmail.com< Akhtar Rafiq >' . "\r\n" . 'Reply-To: akhtar.rafique@gmail.com' ;
		//. "\r\n" . 'X-Mailer: PHP/' . phpversion();
        $subject="Email Check For Aitchison"; 
		$to = "web@aitchison.edu.pk";
        if(mail($to, $subject, "Email Server working find.", $from)){
			echo "Email Message has been sent.";	
		}else{
			echo "Email Message did not sent.";	
		}

?>