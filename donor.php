<?php
include('config.php');
if (isset($_POST['submit'])) {
  $fullname = $_POST['fullname'];
  $gender = $_POST['gender'];
  $bloodgroup = $_POST['bloodgroup'];
  $dob = date('Y-m-d', strtotime($_POST['dob']));
  $age = $_POST['age'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];
  $password = $_POST['password'];

  $insertquery = "insert into donor(FullName,Gender,BloodGroup,dob,age,MobileNumber,EmailId,city,pincode,password) values
  ('$fullname','$gender','$bloodgroup','$dob ','$age','$mobile','$email','$city','$pincode','$password')";

  $result =  mysqli_query($conn, $insertquery);
  if ($result) {
    echo "<script>alert('You have signup  Scuccessfully');</script>";
  } else {
    echo "<script>alert('Something went wrong.Please try again');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="stylesdr.css" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="faviconblood.png" type="image/x-icon" />
</head>

<body>
  <?php include('header.php'); ?>
  <br />
  <br />
  <div class="blood-bank-form">
    <!-- <img src="carelogo.png" alt="Blood Bank Logo" class="logo" /> -->
    <h1 style="color: #c20e0e">Blood Donor Registration</h1>
    <form id="registration-form" action="#" method="POST">
      <label for="full-name"><b>Full Name: </b></label>
      <input type="text" id="full-name" name="fullname" placeholder="Full Name" required />

      <label for="gender"><b>Gender:</b></label>
      <select id="gender" name="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
      </select>

      <label for="blood-group"><b>Blood Group:</b></label>
      <select id="blood-group" name="bloodgroup">
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select>
      <div class="form-group">
        <label for="dob"><b>Date of Birth:</b></label>
        <input type="date" class="form-control" id="dob" name="dob" required />
      </div>
      <label for="age"><b>Age:</b></label>
      <input type="number" id="age" name="age" min="18" placeholder="Age" required />

      <label for="mobile"><b>Mobile Number:</b></label>
      <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="Mobile Number" required />

      <label for="email"><b>Email</b></label>
      <input type="email" id="email" name="email" placeholder="Email" required />

      <label for="city"><b>City:</b></label>
      <select id="city" name="city">
        <option value="Ahmedabad">Ahmedabad</option>
        <option value="Amreli">Amreli</option>
        <option value="Anand">Anand</option>
        <option value="Deesa">Deesa</option>
        <option value="Bharuch">Bharuch</option>
        <option value="Bhavnagar">Bhavnagar</option>
        <option value="Dahod">Dahod</option>
        <option value="Dahegam">Dahegam-Gandhinagar</option>
        <option value="Jamnagar">Jamnagar</option>
        <option value="Junagadh">Junagadh</option>
        <option value="Bhuj">Bhuj-Kutch</option>
        <option value="Kheda">Kheda</option>
        <option value="Mehsana">Mehsana</option>
        <option value="Kevadia">Kevadia -Narmada</option>
        <option value="Navsari">Navsari</option>
        <option value="Godhra">Godhra -Panchmahal </option>
        <option value="Patan">Patan</option>
        <option value="Porbandar">Porbandar</option>
        <option value="Rajkot">RajKot</option>
        <option value="Modasa">Modasa -Aravalli</option>
        <option value="Surat">Surat</option>
        <option value="Surendranagar">Surendranagar</option>
        <option value="Dang">Dang</option>
        <option value="Vadodara">Vadodara</option>
        <option value="Valsad">Valsad</option>
      </select>
      <label for="pincode"><b>Pincode:</b></label>
      <input type="text" id="pincode" name="pincode" pattern="\d{6}" title="Please enter a 6-digit PIN code" placeholder="Pincode" required />

      <label for="password"><b>Password:</b></label>
      <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$" required placeholder="Password" />

      <label for="terms"><b>I agree to the terms and conditions</b></label>
      <input type="checkbox" id="terms" name="terms" required />
      <br />
      <input style="text-align: center" type="submit" name="submit" value="Register" />
      <p class="account-w3ls text-center pb-4" style="color:#000">
        Already Registered?
        <a href="donorlogin.php">Signin now</a>
    </form>
  </div>
  <?php include('footer.php'); ?>

</body>

</html>