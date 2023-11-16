<?php include("session.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elektrotehinička i prometna škola Osijek</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="zanimanja/zanimanja-content.css">
  <link rel="stylesheet" href="footer/footer.css">
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

    

  </div>
    
    <nav class="head-menu">
      <a class="naslovna" href="naslovna.php">Naslovna</a>
      <a class="o-nama" href="o nama.php">Pozadina</a>
      
      
      <div class="dropdown-zanimanja">
        <div class="dropdown-meni-div"><a class="zanimanja" href="zanimanja.php">Zanimanja</a>
        <span><img class="bar" src="slike/bar.png" alt=""></span>
        
        
      </div>
          <div class="zanimanja-content">
            <a href="elektrotehnicar.php">Elektrotehničar</a>
            <a href="tehnicar-za-racunalstvo.php">Tehničar za računalstvo</a>
            <a href="tehnicar-za-mehatroniku.php">Tehničar za mehatroniku</a>
            <a href="tehnicar-za-elektroniku.php">Tehničar za elektroniku</a>
            <a href="tehnicar-cestovnog-prometa.php">Tehničar cestovnog prometa</a>
            <a href="vozac-motornih-vozila.php">Vozač motornih vozila</a>
          </div>
      </div>
      <a class="upisi" href="upisi.php">Upisi</a>
      <a class="kontakt" href="kontakt.php">Kontakt</a>
      <a class="knjiznica" href="knjižnica.php">Knjižnica</a>

      <!-- <a class="prijava" href="prijava.php">Prijava</a>
      <a class="registracija" href="registracija.php">Registracija</a> -->
    </nav>

    <!-- ANIMACIJA -->
    <!-- <div class="animation-container">
      <a href="index.html">
    <img class="animated-computer" src="slike/pc-animation.png">
      </a>
    </div> -->

</Header>

<!-- SADRŽAJ STRANICE -->

<div class="content">

  <section>
    <h2>Zanimanja</h2>
    <div class="sva-zanimanja">

      <div class="elektrotehnicar">
     <a href="elektrotehnicar.php"><img class="slika-zanimanja slika-elektrotehnicar" src="slike/elektrotehnicar.jpg" alt=""></a> 
     <div class="naziv-zanimanja">
      <a class="naziv naziv-el" href="elektrotehnicar.php">Elektrotehničar</a> 
    </div>
    </div>

    <div class="tehnicar-za-racunalstvo">
     <a href="tehnicar-za-racunalstvo.php"><img class="slika-zanimanja slika-racunalstvo" src="slike/zehnicar-racunalstva.jpg" alt=""></a>
      <div class="naziv-zanimanja">
        <a class="naziv naziv-rac" href="tehnicar-za-racunalstvo.php">Tehničar za računalstvo</a>
      </div>
    </div>

    <div class="tehnicar-za-mehatroniku ">
      <a href="tehnicar-za-mehatroniku.php">
        <img class="slika-zanimanja slika-mehatronika" src="slike/Tehnicar-za-mehatroniku.jpg" alt="">
      </a>
      <div class="naziv-zanimanja">
        <a class="naziv naziv-meh" href="tehnicar-za-mehatroniku.php">Tehničar za mehatroniku</a>
      </div>
    </div>

    <div class="tehnicar-za-elektroniku ">
      <a href="tehnicar-za-elektroniku.php"><img class="slika-zanimanja slika-elektronika" src="slike/tehnicar-za-elektroniku.jpg" alt=""></a>
      <div class="naziv-zanimanja">
        <a class="naziv naziv-elek" href="tehnicar-za-elektroniku.php">Tehničar za elektroniku</a>
      </div>
    </div>

    <div class="tehnicar-cestovnog-prometa">
      <a href="tehnicar-cestovnog-prometa.php"><img class="slika-zanimanja slika-cestovni-promet" src="slike/ces.jpg" alt="">
       </a>
      <div class="naziv-zanimanja">
        <a class="naziv naziv-ces" href="tehnicar-cestovnog-prometa.php">Tehničar cestovnog prometa</a>
      </div>
    </div>

    <div class="vozac-motornih-vozila">
      <a href="vozac-motornih-vozila.php">
        <img class="slika-zanimanja slika-kamion" src="slike/kamion.jpg" alt="">
      </a>
      <div class="naziv-zanimanja">
        <a class="naziv naziv-vozac" href="vozac-motornih-vozila.php">Vozač motornih vozila</a>

      </div>
    </div>
  
  </div> 
    

  </section>
</div>

<?php include('footer.php');?>

<script src="script/headScript.js"></script>
<script src="script/zanimanja.js"></script>
</body>
</html>
