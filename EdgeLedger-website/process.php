<?php
if(isset($_POST['email'])) {

  // Email information
  $admin_email = "esu@nakfa-edgeledger.net";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  // send email
  mail(sadmin_email, "new form submission", $message . ' - ' . phone,
   "form:" . $email);

   header('location: http://nakfa-edgeledger.net/success.html');

}