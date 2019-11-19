<?php
extract($_POST);
$to = "support@wintelecom.com.au";
$subject = "winTel - Contact";

$message = "
<html>
<head>
<title>Win Telecom</title>
</head>
<body>
Hello Admin,<br>

<p>You have got a mail from Win Telecom Contact form, Details are underneath</p>
<table>
<tr>
<th>Full Name</th>
<th>Email</th>
<th>Mobile Number</th>
<th>Address</th>
<th>Message</th>
</tr>
<tr>
<td>'.$fullname.'</td>
<td>'.$email_text.'</td>
<td>'.$mbno.'</td>
<td>'.$address.'</td>
<td>'.$message_box.'</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: <no-reply@wintelecom.com.au>' . "\r\n";

mail($to,$subject,$message,$headers);
?>