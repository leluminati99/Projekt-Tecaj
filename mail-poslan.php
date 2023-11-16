<?php include("session.php");?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elektrotehnička i prometna škola Osijek</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="ostali-css/mail-poslan.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="ostali-css/status.css">

</head>
<body>
<div class="user-log">
  <p>Prijavljen:</p>
      <?php echo htmlspecialchars($user["username"]) ?>
      <div class="odjava-div"><a class="odjavi-se" href="odjava-kod.php">ODJAVA</a></div>
      

      </div>
  
 
  <Header>
    <!-- NAZIV ŠKOLE I LOGO -->
    
    <div class="logo-headline"><a href="naslovna.php"> <img class="logo-picture" src="slike/logo3.png" alt="Logo stranice"> </a> <a class="headline" href="naslovna.php"> Elektrotehnička i prometna škola Osijek</a>
      <a href="naslovna.php"><img class="logo-picture-2" src="slike/logo3.png" alt="Logo stranice"></a> 

    

  


</header>
<!-- SADRŽAJ STRANICE -->
<div class="content">

<h1 class="h1">VAŠ UPIT JE USPJEŠNO <span>POSLAN</span></h1>
<h2 class="h2">Natrag na <a href="naslovna.php">naslovnu</a></h2>
 






</div>



<script src="script/headScript.js"></script>
</body>
</html>