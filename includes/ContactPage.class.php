<?php
class ContactPage {

  private $mail;
  public function __construct($PHPMailerPath, $PHPMailerError)  {
      date_default_timezone_set('Etc/UTC');
      require ($PHPMailerPath);
      $this->mail   = new PHPMailer($PHPMailerError);
  }

  public function sendBySMTP($SMTPSettings) {
    $this->mail->isSMTP();                                      // Set mailer to use SMTP
    $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
    $this->mail->Username = $SMTPSettings['email'];             // SMTP username
    $this->mail->Password = $SMTPSettings['passw'];             // SMTP password

    if (isset($SMTPSettings['server'])) {

      if ( strcasecmp( $SMTPSettings['server'] , 'google') == 0 ) {
        $this->mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
        $this->mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 587;                                  // TCP port to connect to
      }
    }
    else {
      $this->mail->Host = $SMTPSettings['SMPTServerAdd'];          // Specify main and backup SMTP servers
      $this->mail->SMTPSecure = $SMTPSettings['securityType'];     // Enable TLS encryption, `ssl` also accepted
      $this->mail->Port = $SMTPSettings['port'];                   // TCP port to connect to
    }

  }

  public function emailMessage($emailVars) {

    $this->mail->setFrom($emailVars['fromEmail'], $emailVars['fromName']);
    //Set an alternative reply-to address
    $this->mail->addReplyTo($emailVars['replyEmail'], $emailVars['replyName']);
    //Set who the message is to be sent to
    $this->mail->addAddress($emailVars['sendToAddress']);
    //Set the subject line
    $this->mail->Subject = $emailVars['subject'];
    //Set the Email Body
    $this->mail->Body = $emailVars['body'];
    //Attach an image file
    if (isset($emaiVars['attachmentPath'])) {
        $this->mail->addAttachment($emaiVars['attachmentPath']);
    }

  }

  public function sendMail($successMessage, $errorMessage, $errorInfo) {
    if(!$this->mail->send()) {
      echo $errorMessage;
      if ($errorInfo == ture) {
        echo 'Mailer Error: ' . $this->mail->ErrorInfo;
      }
    } else {
      echo $successMessage;
    }
  }


}
?>
