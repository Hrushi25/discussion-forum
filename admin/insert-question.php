<?php
    include('session.php');
$question=$_POST['question'];
$details=$_POST['details'];
if(!empty($question) || !empty($details))
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
		$INSERT="INSERT into questions (question,details,asked_by) values (?,?,?)";
		
		//prepare statements
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("sss",$question,$details,$username);
		$stmt->execute();

			if(!mysqli_connect_error())
            {
				echo "<script type='text/javascript'>if (window.confirm('Question asked Successfully! Head to the Dashboard page.'))
				{
    				window.location = 'dashboard.php';
				};</script>";
			}

		}

 }
else
{
	echo "All inputs are required";
	die();
}
?>