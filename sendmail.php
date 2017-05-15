  <?php
require "PHPMailer/PHPMailerAutoload.php"; 
    // sending email confirmation
        $mail = new PHPMailer;
        $email=$_POST["email"];
        $name=$_POST["name"];
        $message=$_POST["message"];
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'enter mail server';                        // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'enter email';                 // SMTP username
    $mail->Password = 'enter password';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = enter port number;                                    // TCP port to connect to

    $mail->setFrom('from@example.com', 'First Last');
  //Set an alternative reply-to address
    $mail->addAddress('whoto@example.com', 'John Doe');     // Add a recipient


    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'enter subject';
    $mail->Body    = "<b><p>Message from: $name</p><p>$email</p><p>$message</p></b>";
    $mail->AltBody = $message;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
    ?>