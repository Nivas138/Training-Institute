<?php include('DataStore.php') ?>
<!DOCTYPE html>
<html>
<title>SIGNUP - STUDENT</title>
<style>
 .back
 {
   background-color:white;
   background-image:url('student1.jpg');
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
 <h1 style="text-align:center;color:red">TRAINING INSITITUTE</h1>
 <h2 style="text-align:center;color:green">STUDENT DETAILS-SIGN UP</h2>
</head>
<body>
 <form class="back" method="post" action="First_Register.php">
    <?php include('Error_log.php'); ?>
    <div align="center" style="color:white">
      <label>Name</label>
      <input type="text" name="username" class="input_box" value="<?php echo $username; ?>"><br><br>
      <label>Email</label>
      <input type="email" name="email" class="input_box" value="<?php echo $email; ?>"><br><br>
      <label>Password</label>
      <input type="password" class="input_box" name="password_1"><br><br>
      <label>Confirm password</label>
      <input type="password" class="input_box" name="password_2"><br><br>
       <label>Mobile :</label>
   <input type="text" name="MOBILE" class="input_box"><br><br>
   <label style="color:red">Qualified :</label>
   <select class="input_box" name="ED_QUALIFICATION">
    <option value="PG">PG</option>
    <option value="UG">UG</option>
    <option value="HSC">HSC</option>
    <option value="SSLC">SSLC</option>
   </select><br><br>
   <label>Address :</label>
   <input type="text" placeholder="FLAT NO:" name="FLAT_NO" class="input_box"><br>
   <label></label> <input type="text" placeholder="STREET:" name="STREET" class="input_box"><br>
   <label></label> <input type="text" placeholder="COLONY/LOCAL-AREA:" name="LOCAL_AREA" class="input_box"><br>
   <label></label> <input type="text" placeholder="CITY:" name="CITY" class="input_box"><br>
   <label></label> <input type="text" placeholder="DISTRICT:" name="DISTRICT" class="input_box"><br>
   <label></label> <input type="text" placeholder="ZIP-CODE:" name="ZIPCODE" class="input_box"><br><br>
      <button type="submit" class="btn" name="reg_user">SUBMIT</button>

   

   </form>
   <p style="text-align:center;color:white">Already a member? <a href="login.php" style="color:yellow">SIGN IN</a>
    </p>
    </div>
</body>
</html>



