
<?php
//$to_email = "noreply@nkspt.in";
//$subject = "Simple Email Test via PHP";
//$body = "Hi,nn This is test email send by PHP Script";
//$headers = "From: sender\'s email";
 
//if (mail($to_email, $subject, $body, $headers)) {
  //  echo "Email successfully sent to $to_email...";
//} else {
  //  echo "Email sending failed...";
//}


if(isset($_POST['submit']))        
{
            $User_name=$_POST['name'];
            $phone=$_POST['phone'];
            $User_email=$_POST['email'];
            $User_message=$_POST['message'];

            $to_email="ripdshop.demo@gmail.com";
            $email_subject="New Enquiry ";            
            $email_body="Name:$User_name.\n".
                        "Phone No:$phone.\n".
                        "Email Id:$User_email.\n".
                        "User Message:$User_message.\n";
                        
                        
            $headers = "From: sender\'s email";
            

            $retval=mail($to_email,$email_subject,$email_body,$headers);

                     
            if (mail($to_email, $email_subject, $email_body, $headers))
             {
               echo "Email successfully sent to $to_email...";
            } else {
              echo "Email sending failed...";
            }  



}
?>