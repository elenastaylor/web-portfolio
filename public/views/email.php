//<?php
              /* send the submitted data */
/*    {
/    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		mail('elena.staylor@gmail.com', $_POST['name'], $_POST['mail'], $_POST['message']);
		echo "Email sent!";
	    }
    }
?>
*/

/*<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('elena.staylor@gmail.com', 'Your Name');
$mail->addAddress('emack0817@hotmail.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}*/