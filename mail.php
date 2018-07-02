
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];
$formcontent="From: $name \n E-Mail: $email \n Subject: $subject \n Message: $message";
$recipient = "megan-bailey@outlook.com";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Your message has been sent. Click <a href='https://mezeradesign.github.io/site/'>here</a> to go back to the website.";
?>
