<html>
<head>
<style>
.back
 {
   background-color:white;
   background-image:url('student1.jpg');
   background-size: cover;
   padding:30px;
   font-weight: bold;
  }
  .input_box{
   border-radius: 7px;
   border-color:grey;
   padding: 5px 20px;
   line-height: 28px;
  }
  select{
   border-radius: 7px;
   border-color: grey;
   padding: 7px 20px;
   line-height: 28px;
  }
  label{
  display:inline-block;
  width:300px;
  margin-bottom:10px;
  text-align:left;
  font-size:20px;
  width: 150px;
}
button{
  margin:auto;display:block;background-color:green;height:50px;width:100px;border-radius:15px;color:white;
}</style>
</head>
<body>
<form action="Enrolled.php" class="back" method="POST">
	<?php
session_start(); 
$username= $_SESSION['username'];
echo '<p align="right" style="color:white;margin-right:200px;">';
echo 'Welcome '.$username;
echo '</p>';
?>
<div align="center" style="color:white;">
	<h2 style="color:darkolivegreen; font-family:'Lucida Calligraphy';">COURSES FOR YOU <img src="download.png" height=25px width=25px padding=10px></h2><br><br><br>
	<label>Course Name: </label><select>
  <option value="DataScience">Data Science</option>
  <option value="MechineLearning">Mechine Learning</option>
  <option value="OperationalResearch">Operational Research</option>
  <option value="ArtificialInteligence">Artificial Inteligence</option>
</select><br><br>
	<label>Part Time/Full Time:</label><select class="input_box" name="CourseTime">
		<option value="PT">Part Time</option>
		<option value="FT">Full Time</option>
	</select><br><br>
	<label>Course Duration: </label><select name="CourseDuration">
		<option value="6">6 Months</option>
		<option value="12">12 Months</option>
	</select><br><br>
	<button type="Submit" name="Enrolled">Enroll My Course</button>
</div></form>
</html>
