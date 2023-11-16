<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['posalji-pitanje'])) {

  
  $to = 'ajhnerfilip1999@gmail.com';
  $from = $_POST['email-drugi'];
  $ime = $_POST['ime'];
  $pitanje = $_POST['pitanje'];

  $poruka_korisnik = "Vaše pitanje je uspješno poslano" ."\r\n Vaš ELPROS TIM";

  $pitanje_korisnik = new PHPMailer(true);

  try {
    
    $pitanje_korisnik->isSMTP();
    $pitanje_korisnik->Host = 'smtp.gmail.com';
    $pitanje_korisnik->SMTPAuth = true;
    $pitanje_korisnik->Username = 'ajhnerfilip1999@gmail.com';
    $pitanje_korisnik->Password = 'nuistjyscohebbpj';
    $pitanje_korisnik->SMTPSecure = 'tls';
    $pitanje_korisnik->Port = 587;

    $pitanje_korisnik->setFrom($to);
    $pitanje_korisnik->addAddress($from);
    $pitanje_korisnik->Subject = 'Pitanje';
    $pitanje_korisnik->Body = $poruka_korisnik;

    $pitanje_korisnik->send();

  }
    catch (Exception $e){
      echo 'Message could not be sent. Error: ', $pitanje_korisnik->ErrorInfo;
    }

    $pitanje_elpros = new PHPMailer(true);

    $elpros_pitanje = "Korisnik s imenom:$ime posalo je pitanje:$pitanje";

    try {
        $pitanje_elpros->isSMTP();
        $pitanje_elpros->Host = 'smtp.gmail.com';
        $pitanje_elpros->SMTPAuth = true;
        $pitanje_elpros->Username = 'ajhnerfilip1999@gmail.com';
        $pitanje_elpros->Password = 'nuistjyscohebbpj';
        $pitanje_elpros->SMTPSecure = 'tls';
        $pitanje_elpros->Port = 587;
    
        $pitanje_elpros->addAddress($to);
        $pitanje_elpros->Subject = 'Pitanje korisnika';
        $pitanje_elpros->Body = $elpros_pitanje;
    
        $pitanje_elpros->send();
    
        header("Location: mail-poslan.php");
    
    } catch (Exception $e) {
        echo 'Message could not be sent. Error: ', $pitanje_elpros->ErrorInfo;
    }
  }


  
  


