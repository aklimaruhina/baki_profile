<?php 
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$sendermail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "bakibillah920@gmail.com";

$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";
$header = "From:".$sendermail." \r\n";

$message .= 'Hello there, My Name is '.$name. ' And I have urgent message for you. '.$message;

$retval = mail ($to,$subject,$message,$header);
         
if( $retval == true ) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}

?>