<?php
session_start();
if (isset($_POST['submit'])) {
$email=$_POST['email'];
$passwd=$_POST['passwd'];
if(!empty($email) || !empty($passwd))
{
	$host="localhost";
	$dbuser_name="id6945263_forum";
	$dbpassword="Meer@8008";
	$dbname="id6945263_forum";

	$conn=new mysqli($host,$dbuser_name,$dbpassword,$dbname);

	//if(mysqli_connect_error())
    if(1==2)
	{
		die('Connect Error('.mysqli.maxdb_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$SELECT="SELECT passwd from user where email=? limit 1";
		
		//prepare statements
		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($passwdquery);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		$stmt->fetch();
		if($rnum>1){
			echo "**********Duplicate User Detected**********";
			}
		elseif ($rnum==0) {
			echo "***********No User Found with this Email**************";
		}
		else{
				if($passwd==$passwdquery)
				{
					
					$_SESSION['login_user']=$email;
					header("location: dashboard.php");
				}
				else{
					echo("***********Invalid Password and Email Combination************");		
				}
			}
	}
}
else
{
	echo "All inputs are required";
	die();
}
}
?>