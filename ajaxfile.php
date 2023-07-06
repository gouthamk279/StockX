<?php
include "dbconnect.php";
if(isset($_POST['user_email'])){
 $emailId=$_POST['user_email'];
 $checkdata=" SELECT email FROM users WHERE email='$emailId' ";
 $result = $conn->query($checkdata);
 if($result->num_rows > 0){
  echo "Email Already Exist";
 }
 else{
  echo "OK";
 }
 exit();
}
?>