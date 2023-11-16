<?php 
include("prijava-kod.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prijava</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png"> 
  <link rel="stylesheet" href="prijava-registracija/prijava.css" type="text/css">
  <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
  <script src="script/validation-prijava.js" defer></script> 
  <style>
 .just-validate-error-label {
   color: white !important;
   font-size:20px;
  }
</style>
  
</head>
<body>
<img class="logo-slika" src="slike/logo3.png" alt="">
<form action="" method="post" id="prijava">
  <div class="prijava-div">
    <h3 class="prijava-naslov">Prijava</h3>
    <p class="poruka">Za mogućnost korištenja naše stranice molimo VAS da se prijavite!</p>
    
    
    <div class="gmail-prijava-div">
      <?php 
      if($is_invalid): ?>
      <strong>Kriva lozinka</strong>
     <?php endif; ?>
    <p>Gmail:</p>
    <input class="gmail-prijava" id="email" name="gmail-prijava" type="email" value="<?= htmlspecialchars($_POST["gmail-prijava"] ?? "") ?>" >
    </div>




    <div class="lozinka-div">
      <p>Lozinka:</p>
      <input type="password" id="password" class="password" name="password" required>
    </div>






    
    <div class="prijava-submit">
    <input class="prijavi-se" type="submit" value="Prijavi se">
    </div>
    </form>
    

    <div class="premjestaj-na-registraciju">
     <p class="poruka">U slučaju da nemate račun, molimo vas slijedite link za registraciju!</p> 
     <a href="registracija.php">Registracija</a>
    </div>

    


  </div>

  
</body>
</html>