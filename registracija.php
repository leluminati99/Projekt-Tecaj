<?php 
// include("dbcon.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registracija</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png"> 
  <link rel="stylesheet" href="prijava-registracija/registracija.css" type="text/css">  
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="script/validation.js" defer></script> 
  
<style>
 .just-validate-error-label {
   color: white !important;
   font-size:20px;
  }
</style>
  
</head>
<body>
<img class="logo-slika" src="slike/logo3.png" alt="">
<form action="registracija-kod.php" a id="registracija" method="post" novalidate>
  <div class="registracija-div">
    <h3 class="registracija-naslov">Registracija</h3>
    <p class="poruka">Za mogućnost korištenja naše stranice molimo VAS da se registrirate!</p>
    <div class="korisnicko-ime-div">
      <p>Korisničko ime:</p>
      <input class="korisnicko-ime" id="korisnicko-ime" required name="korisnicko-ime" type="text">
    </div>
    <div class="gmail-registracija">
    <p>Gmail:</p>
    <input class="gmail-input-registracija" required name="gmail-input-registracija" type="text" id="email" >
    </div>
    <div class="lozinka-div">
      <p>Lozinka:</p>
      <input class="lozinka-registracija" required name="lozinka-registracija" id="lozinka-registracija" type="password">
    </div>
    <div class="registracija-submit">
        <input class="registriraj-se" name="registriraj-se" required type="submit" value="Registriraj se">
      </div>
      </form>

      

      

    <div class="premjestaj-na-prijavu">
     <p class="poruka">U slučaju da već imate račun, molimo vas slijedite link za prijavu!</p> 
     <a href="prijava.php">Prijava</a>
    </div>
      

    


  </div>

  
</body>
</html>