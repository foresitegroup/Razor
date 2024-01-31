<?php
session_start();

$salt = "RazorContactForm";

if (
    $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
    $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
    $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
   )
{
  if ($_POST['username'] == "") {
    // Send email
    $Subject = "Contact From Razor Website";
    $SendTo = "frank.butterfield@kommerlingusa.com";
    $Headers = "From: Razor Contact Form <contactform@razortrimproducts.com>\r\n";
    $Headers .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";
    $Headers .= "Bcc: foresitegroupllc@gmail.com\r\n";

    $Message = $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";
    $Message .= $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message .= "\n";

    if (isset($_POST['interested'])) {
      $interested = implode(", ", $_POST['interested']);
      $Message .= "I am interested in: " . $interested . "\n\n";
    }

    $Message .= "Message:\n" . $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\n";

    $Message = stripslashes($Message);
  
    mail($SendTo, $Subject, $Message, $Headers);
    
    $feedback = "Thank you for your interest in Razor Trim Products. You will be contacted soon.";
  } // Honeypot
} else {
  $feedback = "Some required information is missing! Please go back and make sure all required fields are filled.";
}

echo $feedback;
?>