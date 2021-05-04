<?php
session_start();
$con=mysqli_connect("localhost","root","","RIPD");
if(isset($_POST['patsub1'])){
  $name=$_POST['Name'];
  $email=$_POST['Email'];
  $pwd=$_POST['Pwd'];
  $cpwd=$_POST['Cpwd'];
  
  if($pwd==$cpwd){
    $query1 = "select * from signup where Name='$name' and Email='$email';";
     $result1 = mysqli_query($con,$query1);
     if(mysqli_num_rows($result1)==0)
     {       //echo "no row in database"; 
      
     
              $query="insert into signup(Name,Email,Pwd,Cpwd) values('$name','$email','$pwd','$cpwd');";
              $result=mysqli_query($con,$query);
              if($result){
                
                $query2="select * from signup where Email='$email' and Pwd='$password';";
              	$result3=mysqli_query($con,$query2);
                if(mysqli_num_rows($result3)==1)
                {
                  while($row=mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                  
                    $_SESSION['name'] = $row['Name'];      
                    $_SESSION['email'] = $row['Email'];
                    $_SESSION['Pwd'] = $row['Pwd'];
                  }
                }
                if(isset($_POST['patsub1']))        
  {
            $User_name= $_POST['Email'];
            $phone=$_POST['Pwd'];
           

            $to_email=$_POST['Email'];;
            $email_subject="Your Login Creditional ";            
            $email_body="Your UserName :$User_name.\n".
                        "Password :$phone.\n";
                        
                        
                        
            $headers = "From: sender\'s email";
            

            $retval=mail($to_email,$email_subject,$email_body,$headers);

                     
            if (mail($to_email, $email_subject, $email_body, $headers))
             {
               echo "Email successfully sent.....";
            } else {
              echo "Email sending failed...";
            }  
}

      echo '<script type="text/javascript">'; 
      echo 'alert("Registration !");'; 
      echo 'window.location.href = "login.htm";';
      echo '</script>';
      header("Location:login.htm");
                // echo"record save";
              } 

            //  $query1 = "select * from patreg;";
            // $result1 = mysqli_query($con,$query1);
              //if($result1){
              //  $_SESSION['pid'] = $row['pid'];
            // }
     }else{
      echo '<script type="text/javascript">'; 
      echo 'alert("THe UserName Already Exist!");'; 
      echo 'window.location.href = "login.htm";';
      echo '</script>';
     // echo "already exist";
     }
  }
  else{
    header("Location:error1.php");
  }
}
if(isset($_POST['update_data']))
{
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	$query="update appointmenttb set payment='$status' where contact='$contact';";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:updated.php");
}




// function display_docs()
// {
// 	global $con;
// 	$query="select * from doctb";
// 	$result=mysqli_query($con,$query);
// 	while($row=mysqli_fetch_array($result))
// 	{
// 		$name=$row['name'];
// 		# echo'<option value="" disabled selected>Select Doctor</option>';
// 		echo '<option value="'.$name.'">'.$name.'</option>';
// 	}
// }

if(isset($_POST['doc_sub']))
{
	$name=$_POST['name'];
	$query="insert into doctb(name)values('$name')";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:adddoc.php");
}

	
?>
