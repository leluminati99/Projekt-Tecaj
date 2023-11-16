
<!-- ?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Check if the form has been submitted
if (isset($_POST['posalji-provjeru'])) {

  
  $to = 'ajhnerfilip1999@gmail.com';
  $from = $_POST['email'];
  $nazivKnjige = $_POST['naziv_knjige'];
  $nazivAutora = $_POST['naziv_autora'];
  $tipOdabira = $_POST['odaberi'];
  $poruka = "";

  if($tipOdabira === "rezervacija") {
    $poruka = "Vaš zahtjeva za rezervaciju je zaprimljen, rezervirali ste knjigu $nazivKnjige autora $nazivAutora." . "\r\n Vaš ELPROS TIM";
  }

  else if($tipOdabira === 'provjera') {
    $poruka = "Hvala Vam na upitu za knjigu $nazivKnjige autora $nazivAutora. \r\ U roku 2 dana ćemo vam javiti dostupnost knjige" . "\r\n Vaš ELPROS TIM";
  }

  $message_korisnik = "Korisnik s mailom $from poslao je upit za $tipOdabira, knjiga:$nazivKnjige, autor:$nazivAutora";
  // $message_elpros = $poruka;

  
  $mail = new PHPMailer(true);

  try {
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ajhnerfilip1999@gmail.com';
    $mail->Password = 'nuistjyscohebbpj';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Send email to customer
    $mail->setFrom($to);
    $mail->addAddress($from);
    $mail->Subject = 'Upit za knjigu';
    $mail->Body = $poruka;

    $mail->send();

    // Send email to ELPROS TIM
    $mail->setFrom($to);
    $mail->addAddress($to);
    $mail->Subject = 'Upit za knjigu';
    $mail->Body = $message_korisnik;
    
    $mail->addCustomHeader('Reply-to', $from); 

    if($mail->send()) {
      echo "<script type='text/javascript'>window.location.href = 'mail-poslan.php';</script>";
    }

    else {
      
      echo 'Sorry, unable to send mail: ' . $mail->ErrorInfo;
    
    }
  }
    catch (Exception $e){
      echo 'Message could not be sent. Error: ', $mail->ErrorInfo;
    }
  }
  ?> -->

  <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


if (isset($_POST['posalji-provjeru'])) {

  
  $to = 'ajhnerfilip1999@gmail.com';
  $from = $_POST['email'];
  $nazivKnjige = $_POST['naziv_knjige'];
  $nazivAutora = $_POST['naziv_autora'];
  $tipOdabira = $_POST['odaberi'];
  $poruka_korisnik = "";
  $poruka_elpros = "";

  if($tipOdabira === "rezervacija") {
    $poruka_korisnik = "Vaš zahtjeva za rezervaciju je zaprimljen, rezervirali ste knjigu $nazivKnjige autora $nazivAutora." . "\r\n Vaš ELPROS TIM";
    $poruka_elpros = "Korisnik s mailom $from poslao je upit za $tipOdabira, knjiga:$nazivKnjige, autor:$nazivAutora";
  }

  else if($tipOdabira === 'provjera') {
    $poruka_korisnik = "Hvala Vam na upitu za knjigu $nazivKnjige autora $nazivAutora. \r\ U roku 2 dana ćemo vam javiti dostupnost knjige" . "\r\n Vaš ELPROS TIM";
    $poruka_elpros = "Korisnik s mailom $from poslao je upit za $tipOdabira, knjiga:$nazivKnjige, autor:$nazivAutora";
  }
 
  
  $mail_korisnik = new PHPMailer(true);

  try {
    
    $mail_korisnik->isSMTP();
    $mail_korisnik->Host = 'smtp.gmail.com';
    $mail_korisnik->SMTPAuth = true;

    $mail_korisnik->Username = 'ajhnerfilip1999@gmail.com';
    $mail_korisnik->Password = 'nuistjyscohebbpj';
    
    $mail_korisnik->SMTPSecure = 'tls';
    $mail_korisnik->Port = 587;

    $mail_korisnik->setFrom($to);
    $mail_korisnik->addAddress($from);
    $mail_korisnik->Subject = 'Upit za knjigu';
    $mail_korisnik->Body = $poruka_korisnik;

    $mail_korisnik->send();

  }
    catch (Exception $e){
      echo 'Message could not be sent. Error: ', $mail_korisnik->ErrorInfo;
    }

  
    $mail_elpros = new PHPMailer(true);

    try {
        $mail_elpros->isSMTP();
        $mail_elpros->Host = 'smtp.gmail.com';
        $mail_elpros->SMTPAuth = true;
        $mail_elpros->Username = 'ajhnerfilip1999@gmail.com';
        $mail_elpros->Password = 'nuistjyscohebbpj';
        $mail_elpros->SMTPSecure = 'tls';
        $mail_elpros->Port = 587;
    
        $mail_elpros->addAddress($to);
        $mail_elpros->Subject = 'Upit za knjigu';
        $mail_elpros->Body = $poruka_elpros;
    
        $mail_elpros->send();
    
       header("Location: mail-poslan.php");
    
    } catch (Exception $e) {
        echo 'Message could not be sent. Error: ', $mail_elpros->ErrorInfo;
    }
  }