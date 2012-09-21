<?

require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->From     = "gg@groupgala.com";

$mail->FromName = "GroupGala";
$mail->Host     = "localhost";
$mail->Mailer   = "smtp";
/*$mail->SMTPAuth = true;
$mail->Username = "notify@groupgala.com";
$mail->Password = "no234";*/

echo "--";

    // HTML body
	$row["email"]='siddharam@gmail.com';
	$row["full_name"]='sidu';
    $body  = "Hello" . $row["full_name"] . "";
    $body .= "Your personal photograph to this message.";
    $body .= "Sincerely, ";
    $body .= "PHPMailer List managerrrrrrrrrrrr";

echo "-----";
    // Plain text body (for mail clients that cannot read HTML)
    $text_body  = "Hello " . $row["full_name"] . ", \n\n";
    $text_body .= "Your personal photograph to this message.\n\n";
    $text_body .= "Sincerely, \n";
    $text_body .= "PHPMailer List managerrrrrrrrrrrrr";

echo "----------";
    $mail->Body    = $body;
    $mail->AltBody = $text_body;
    $mail->AddAddress($row["email"], $row["full_name"]);
    
    if(!$mail->Send())
        echo "There has been a mail error sending to " . $row["email"] . "<br>";

echo "----------";
    // Clear all addresses and attachments for next loop
    $mail->ClearAddresses();
 //   $mail->ClearAttachments();



?>
<!--<form name="" action="" method="post">
To:<input type="text" name ='to_add'><br>
From <input  type="text" name='from_add'><br>

Messsage:<textarea name='message'></textarea>
<input type='submit'-->