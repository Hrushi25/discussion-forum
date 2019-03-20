<?php
include('session.php');
$answer=$_POST['answer'];
$ans_by=$username;
if(!empty($answer))
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
		$INSERT="INSERT into answers (answer,qid,ans_by) values (?,?,?)";
		
		//prepare statements
		$stmt=$conn->prepare($INSERT);
		$stmt->bind_param("sss",$answer,$_SESSION['qid'],$ans_by);
		$stmt->execute();
        header("Location: question.php?qid=".$_SESSION['qid']);
        //echo "Answer was submitted successfully";
			/*if(!mysqli_connect_error())
            {
				echo "<script type='text/javascript'>if (window.confirm('Question asked Successfully! Head to the Dashboard page.'))
				{
    				window.location = 'dashboard.php';
				};</script>";
			}*/

		}

 }
else
{
	echo "Answer cannot be empty...";
	die();
}
?>