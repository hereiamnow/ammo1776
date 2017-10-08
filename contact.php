<?php
$field_name = $_POST['txtName'];
$field_email = $_POST['txtEmail'];
$field_mobile = $_POST['txtMobile'];
$field_subject = $_POST['txtSubject'];
$field_message = $_POST['txtMessage'];
$field_ipaddress = $_SERVER['REMOTE_ADDR'];

$mail_to = 'Membership@ammo1776.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Mobile: '.$field_mobile."\n";
$body_message .= 'User IP: '.$field_ipaddress."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to Membership@ammo1776.com');
		window.location = 'index.html';
	</script>
<?php
}
?>
