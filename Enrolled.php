<html>
<head>
	<style>
.back
 {
   background-color:white;
   background-image:url('b.jpg');
   background-size: cover;
   padding:30px;
   font-weight: bold;
  }
</style>
<div align="center">

</div></head></html>
<?php
	session_start(); 
	$username = $_SESSION['username'];
	echo '<p align="right" style="color:black;margin-right:200px;">';
	echo 'Welcome '.$username;
	echo '</p>';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$course_name=$_POST["coursename"];
	$course_time=$_POST["CourseTime"];
	$duration=$_POST["CourseDuration"];
}

$server="localhost";
$db="Student";
$pwd="";
$user="root";
$conn=new mysqli($server,$user,$pwd,$db);
if(!$conn)
	echo "Connection failure.... Retry";
else
{
	$q1 = "SELECT Count(Name) from Courses where Name like '$username' ";
	if($conn->query($q1)==True)
	{
		$result=mysqli_query($conn,$q1);
		while($row = mysqli_fetch_array($result))
		{
			if($row['Count(Name)']>=2)
			{
				echo "Already Enrolled 2 courses";
			}
			else
			{
				$sql1="Insert into Courses(Name,Course_Name,Course_Time,Duration) values('$username','$course_name','$course_time','$duration weeks')";
				if($conn->query($sql1)===True)
				{
					echo '<body class="back">';
					echo '<div align="center"><br><br><br>';
					echo '<h1 align="right" style="margin-right:250px;margin-top:50px;color:blue;">'.$course_name.' enrolled for you successfully </h1><br>';
					echo '<br><br><br><br><br><br><br><br><br><br><br>';
					echo '<img align="right" src="images11.jpg">';
					echo '</div>';
					echo '</body>';
				}
				else
				{
					echo"Error in Submitting details. Try Again later...";
				}
			}
		}
	}
	else
	{
		echo 'Error';
	}
}
$conn->close();
?>
<div align="center">
	<br><br>
<a style="color:blue" href="index.php">Return to Home</a>
</div></html>