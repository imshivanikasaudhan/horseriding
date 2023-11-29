<?php
include_once 'dbConnection.php';
ob_start();
$name = $_POST['name'];
$name= ucwords(strtolower($name));
$mobile_no = $_POST['mobile'];
$email_id = $_POST['email'];
$state = $_POST['state'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$name = stripslashes($name);
$name = addslashes($name);
$name = ucwords(strtolower($name));
$mobile_no = stripslashes($mobile_no);
$mobile_no = addslashes($mobile_no);
$email_id = stripslashes($email_id);
$email_id = addslashes($email_id);
$state = stripslashes($state);
$state = addslashes($state);
$city = stripslashes($city);
$city = addslashes($city);
$pincode = stripslashes($pincode);
$pincode = addslashes($pincode);
$password = stripslashes($password);
$password = addslashes($password);
$cpassword = stripslashes($cpassword);
$cpassword = addslashes($cpassword);

// $password = stripslashes($password);
// $password = addslashes($password);
$password = md5($password);

$q3 = mysqli_query($con, "INSERT INTO user (name, mobile_no, email_id, state, city, pincode, password, cpassword) VALUES ('$name', '$mobile_no', '$email_id', '$state', '$city', '$pincode', '$password', '$cpassword')");

if($q3)
{
session_start();
$_SESSION["email"] = $email;
$_SESSION["name"] = $name;

header("location:account.php?q=1");
}
else
{
header("location:index.php?q7=Email Already Registered!!!");
}
ob_end_flush();
?>


