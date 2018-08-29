<html>
<head>
   <title>VIEW COURSES</title>
	<style>
	body
{
background-image:url("p6.jpg");
background-size:cover;
background-repeat: no-repeat;
background-position: fixed;
}
</style>
<div align="center" style="background-image:url('b.jpg')">
<h2 style="color:blue;">YOUR COURSES</h2>
</head>
<body>
</body>
<?php
session_start(); 
$username= $_SESSION['username'];
echo '<p align="right" style="margin-right:200px;">';
echo 'Welcome '.$username;
echo '</p>';
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Student";

$conn=new mysqli($dbhost, $dbuser,$dbpass, $dbname);
if(!($conn))
{
	echo" Connection failure";
}
$regno="";

echo "<br><br>";	
$query = "SELECT * FROM Courses where Name like'$username' ";
echo "<div align='center'>";
if($conn->query($query)==True)
{
   $res=mysqli_query($conn,$query);
//Build Result String
$display_string = '<table style="border:1px solid black;">';
$display_string .= '<tr style="border:1px solid black;">';
$display_string .= "<th>Name</th>";
$display_string .= "<th>CourseName</th>";
$display_string .= "<th>CourseTime</th>";
$display_string .= "<th>CourseDuration</th>";
$display_string .= "</tr>";
echo "<br><br>";  

// Insert a new row in the table for each person returned
while($row = mysqli_fetch_array($res)) {
   $display_string .= '<tr style="border:1px solid black;">';
   $display_string .= "<td>$row[Name]</td>";
   $display_string .= "<td>$row[Course_Name]</td>";
   $display_string .= "<td>$row[Course_Time]</td>";
   $display_string .= "<td>$row[Duration]</td>";
   $display_string .= "</tr>";
}

echo "<br><br><br>"; 
$display_string .= "</table>";

echo $display_string;
echo "</div>";
}
?>
<div align="center">
	<br><br>
<a style="color:green" href="index.php">Return to HOME</a>
</div>