<?php
	
 			$userName=$_REQUEST['userName'];
			
			$userEmail=$_REQUEST['userEmail'];
			$userPhone=$_REQUEST['userPhone'];
			$userMsg=$_REQUEST['userMsg'];
			$userProduct=$_REQUEST['userProduct'];
			$subject = "Response from sales lead for nusearch.com"; 
			$message = '<html><head><title>'.$subject.'</title></head><body><table><tr><td>Email id :  </td><td> '.$userEmail.'</td></tr>
<tr><td>Phone No : </td><td> '.$userPhone.'</td></tr><tr><td>Name : </td><td> '.$userName.'</td></tr><tr><td>Product interested in : </td><td> '.$userProduct.'</td></tr><tr><td>Says : </td><td> '.$userMsg.'</td>
</tr></table></body></html>';
			
			//$message = "Email id :  ".$userEmail. "\r\nPhone No : ".$userPhone."\r\nName : ".$userName."\r\nSays : ".$userMsg;
			$to="support@nusearchorganics.com";
			//$to="himanshurox.30@gmail.com";
			$headers = "From: autosender \r\n";
			$headers .= "Reply-To: ". strip_tags($to) . "\r\n";
			//$headers .= "CC: susan@example.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(!mail($to, $subject, $message, $headers)){
             $mail_status='no';
				//header("Location: contact12.html");
				echo "Some Error Occured";
			exit();
          }else{
          	  $mail_status='yes';
          	//header("Location: ../");
			echo "Successful";
			exit();
           
         } ?>