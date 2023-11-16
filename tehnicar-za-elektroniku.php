<?php include("session.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tehničar za elektroniku</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/zanimanja-footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="zanimanja/tehnicar-za-elektroniku.css">
  <link rel="stylesheet" href="ostali-css/status.css">

</head>
<body>
<div class="user-log">
  <p>Prijavljen:</p>
      <?php echo htmlspecialchars($user["username"]) ?>
      <div class="odjava-div"><a class="odjavi-se" href="odjava-kod.php">ODJAVA</a></div>
      

      </div>
  <Header>
    
    
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

    <div class="content">
  
      <section>
       <h2>
         Tehničar za elektroniku
       </h2>

       <div class="tehnicar-za-elektroniku-info">

        <p class="odlomak">Tehničar za elektroniku radi na pripremanju razvojne, tehnološke i operativne dokumentacije proizvodnje, ispitivanju elektroničkih komponenti i sklopova, montiranju i ispitivanju elektroničkih uređaja i opreme, njihovu posluživanju i održavanju, tehničko-administrativnim poslovima, izradbi elektroničkih sklopova i/ili uređaja te prodaji i promidžbi elektrotehničkih i elektroničkih proizvoda. Bitan dio posla ovog zanimanja je preventivno održavanje.</p>
        
        <p class="odlomak">
          Središnja i ntegrirajuća kompetencija ovog zanimanja je objedinjavanje poslova projektiranja, montaže i održavanja elektroničke opreme, pri čemu se primjenjuju kompetencije i korelacije iz područja elektrotehnike i računalstva.
        </p>
        <p class="odlomak">Nastavni plan provjerite<a href="http://ss-elektrotehnicka-prometna-os.skole.hr/upload/ss-elektrotehnicka-prometna-os/newsattach/571/Tehnicar_za_mehatroniku_-_predmeti.pdf" class="predmet" target="_blank"> Ovdje </a> </p>
        
        <img class="slika" src="slike/tehnicar-za-elektroniku.jpg" alt="">
      
      </div>

       
   
      </section>
   
   </div>


   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>