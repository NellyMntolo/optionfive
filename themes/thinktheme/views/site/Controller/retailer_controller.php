<?php  
include '../model/dbconfig.php';
mysql_set_charset("utf8");
include_once "../Mail/class.phpmailer.php";
include_once "../Mail/class.phpmaileroauth.php";
include_once "../Mail/class.phpmaileroauthgoogle.php";
include_once "../Mail/class.pop3.php";
include_once "../Mail/class.smtp.php";
include_once "../Mail/PHPMailerAutoload.php";
$todo='';
$mail = new PHPMailer(true);

if(isset($_POST['contact'])){
    $first_name = mysql_real_escape_string($_POST['first_name'],$conn);
    $last_name = mysql_real_escape_string($_POST['last_name'],$conn);
    $phone_number = mysql_real_escape_string($_POST['phone_number'],$conn);
    $subject = mysql_real_escape_string($_POST['subject'],$conn);
    $email = mysql_real_escape_string($_POST['email'],$conn);   
    $message = mysql_real_escape_string($_POST['message'],$conn);

$mail->IsSMTP();
try {
      //$mail->SMTPDebug = 2;
    $mail->SMTPSecure = 'tls'; 
    $mail->SMTPAuth = true; 
    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = 587; //465 587
    $mail->Username = "";
    $mail->Password = "";
    $mail->AddAddress('optionfive@gmail.com', 'OptionFive');
    $mail->SetFrom($email, 'optionfive.co');
    $mail->Subject = $subject;
    $mail->AltBody = ''; 
    $mail->CharSet = 'UTF-8';
    $body = "<div style=\"font-size:17px;font-family:Georgia;color:#14695e;\" accept-charset=\"utf-8\" charset=\"UTF-8\">
    Dear Option Five,<br><br>User Contact Information Below.</div><br><hr style=\"border:0;height:2px;background-image:linear-gradient(to right,rgba(0, 0, 0, 0),rgba(237,30,121,0.75),rgba(0, 0, 0, 0));\">
    <div style=\"font-size:17px;font-family:Georgia;color:#14695e;\" accept-charset=\"utf-8\" charset=\"UTF-8\">
    <br>Email: $email
    <br><br>First Name聯絡人: $first_name
    <br><br>Last Name: $last_name
    <br><br>Phone聯繫電話: $phone_number
    <br><br>Subject: $subject
    <br><br>Message廣告需求:<br> $message
    </div><hr style=\"border:0;height:2px;background-image:linear-gradient(to right,rgba(0, 0, 0, 0),rgba(237,30,121,0.75),rgba(0, 0, 0, 0));\">"; // automatically
    $mail->MsgHTML($body);
    $mail->Send();
    //echo "Message Sent OK</p>\n";
} catch ( phpmailerException $e ) {
    //echo $e->errorMessage(); 
} catch ( Exception $e ) {
    //echo $e->getMessage(); 
}

header("Refresh:0; url=/Retailers");
                         
}


?>