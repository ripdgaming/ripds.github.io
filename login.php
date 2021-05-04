<?php
session_start();
$con=mysqli_connect("localhost","root","","RIPD");
if(isset($_POST['login'])){
	$email=$_POST['Email'];
	$password=$_POST['Pwd'];
	$query="select * from signup where Email='$email' and Pwd='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
     
      $_SESSION['name'] = $row['Name'];      
      $_SESSION['email'] = $row['Email'];
    }
		header("Location:index-dash.php");
	}
  else {
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index1.php';</script>");
    //header("Location:error.php");
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
//     $cost=$row['docFees'];
// 		echo '<option value="'.$name.'" data-price="' .$cost. '" >'.$name.'</option>';
// 	}
// }

if(isset($_POST['doc_sub']))
{
	$doctor=$_POST['doctor'];
  $dpassword=$_POST['dpassword'];
  $demail=$_POST['demail'];
  $docFees=$_POST['docFees'];
	$query="insert into doctb(username,password,email,docFees)values('$doctor','$dpassword','$demail','$docFees')";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:adddoc.php");
}
?>