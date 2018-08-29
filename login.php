<?php include('DataStore.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>LOGIN - STUDENT</title>
  <style>
 .back
 {
   background-color:white;
   background-size: cover;
   padding:30px;
   font-weight: bold;
  }
  .address_box{
   border-style:dotted;
   border-width:2px;
   border-color:red;
   }
  .input_box{
   border-radius: 7px;
   border-color:grey;
   padding: 5px 20px;
   line-height: 28px;
  }
  .input_box{
   border-radius: 7px;
   border-color:grey;
   padding: 8px 25px;
   line-height: 28px;
  }
  select{
   border-radius: 7px;
   border-color: grey;
   padding: 7px 15px;
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
 }
</style>
<head>
</head>
<body><br>
  <div align="center">
  	<h2 style="color:red;">LOGIN - STUDENT</h2>
  </div><br><br><br><br>
	 
  <form method="post" action="login.php" style="background-image:url('b.jpg')" class="back">
  	<?php include('Error_log.php'); ?>
  	<div align="center">
  		<label>Username</label>
  		<input type="text" name="username" class="input_box" ><br><br>
  		<label>Password</label>
  		<input type="password" name="password" class="input_box"><br><br>
  		<button type="submit" class="btn" name="login_user">Login</button>
  	<p style="color:black;">
  		Not yet a member? <a href="First_Register.php">SIGN UP</a>
  	</p>
    </div>
  </form>
</body>
</html>