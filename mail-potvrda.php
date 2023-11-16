<?php 
session_start();
include("dbcon.php");

// use PHPMailer\PHPMailer\PHPMailer;
//    use PHPMailer\PHPMailer\Exception;
//    require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// function provjeraMailTokena($korisnickoIme, $korisnickiMail, $potvrdiToken) {
  


// $mail = new PHPMailer(true);



// $mail->isSMTP();
// $mail->SMTPAuth = true;

// $mail->Username = 'ajhnerfilip1999@gmail.com';
// $mail->Password = 'nuistjyscohebbpj';

// $mail->SMTPSecure = 'tls';
// $mail->Port = 587;

// $mail->setFrom('ajhnerfilip1999@gmail.com', $korisnickoIme);
// $mail->addAddress($korisnickiMail);

// $mail->isHTML(true);
// $mail->Subject = "Email potvrda od ELPROS";

// $mail_poruka = "
// <h2>Čestitam na uspješnoj registraciji:$korisnickoIme </h2>
// <h3>Potvrdi svoj mail da bi se mogao prijaviti:</h3>
// <br>
// <a href='http://localhost/ELPROS%20projekt/potvrda/email-token.php?token$potvrdiToken'>Klikni me </a>
// ";

// $mail->Body = $mail_poruka;
// $mail->send();



//  }

// use PHPMailer\PHPMailer\PHPMailer;
//    use PHPMailer\PHPMailer\Exception;
//    require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if(isset($_POST["registriraj-se"])) {
//   $korisnickoIme = $_POST["korisnicko-ime"];
//   $korisnickiMail = $_POST["gmail-input-registracija"];
//   $korisnickaLozinka = $_POST["lozinka-registracija"];
//   $potvrdiToken = md5(rand());

  

// function provjeraMailTokena($korisnickoIme, $korisnickiMail, $potvrdiToken) {
  


// $mail = new PHPMailer(true);



// $mail->isSMTP();
// $mail->SMTPAuth = true;

// $mail->Username = 'ajhnerfilip1999@gmail.com';
// $mail->Password = 'nuistjyscohebbpj';

// $mail->SMTPSecure = 'tls';
// $mail->Port = 587;

// $mail->setFrom('ajhnerfilip1999@gmail.com', $korisnickoIme);
// $mail->addAddress($korisnickiMail);

// $mail->isHTML(true);
// $mail->Subject = "Email potvrda od ELPROS";

// $mail_poruka = "
// <h2>Čestitam na uspješnoj registraciji:$korisnickoIme </h2>
// <h3>Potvrdi svoj mail da bi se mogao prijaviti:</h3>
// <br>
// <a href='http://localhost/ELPROS%20projekt/potvrda/email-token.php?token$potvrdiToken'>Klikni me </a>
// ";

// $mail->Body = $mail_poruka;
// $mail->send();

  
// }

// provjeraMailTokena($korisnickoIme, $korisnickiMail, $potvrdiToken);
// }

// $provjeriMail = "SELECT email FROM user WHERE email='$korisnickiMail' LIMIT 1";
//   $provjeriMail_run = mysqli_query($con, $provjeriMail);

//   if(mysqli_num_rows($provjeriMail_run) < 0) {
//     $_SESSION['user_id'] = "Email već postoji";
//     header("Location: registracija.php");
//   }
//   else {
//     // Insert User / Registered User Data
//     $query = "INSERT INTO user ( username, email, password_hash, token) VALUES ('$korisnickoIme', '$korisnickiMail', '$korisnickaLozinka', '$potvrdiToken')";
//     $query_run = mysqli_query($con, $query);

//     if($query_run)  {
//       provjeraMailTokena("$korisnickoIme", "$korisnickiMail", "$potvrdiToken");
//       $_SESSION['user_id'] = "Registracija uspješna! Molim vas potvrdite vašu mail adresu!";
//       header("Location: registracija.php");

//     }
//     else {
//       $_SESSION['user_id'] = "Registracija neuspješna";
//       header("Location: registracija.php");
//     }
//   }

?>