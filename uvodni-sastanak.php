<?php include("session.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uvodni sastanak sudionika mobilnosti</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/zanimanja-footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="novosti/novosti.css">
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
       <h2>Uvodni sastanak sudionika mobilnosti</h2>

       <div class="sadrzaj">
       <a href="uvodni-sastanak.html"><img class="slika" src="slike/erasmus-plus.jpg" alt=""></a>    
        
        <p class="odlomak">Sudionici projekata mobilnosti Erasmus+ pripremaju za obavljanje stručne prakse u <span>Portugalu, Finskoj i Estoniji</span>. </p>

        <p class="odlomak"><span>10. 3. 2022. održan je uvodni sastanak</span> gdje su od voditeljice stručnih priprema Bojane Štulić, voditeljice jezičnih priprema Jasne Turković i voditeljice projekta Anice Leventić dobili sve relevantne informacije vezane za nadolazeće mobilnosti u kojima sudjeluju, dokumentaciji koju moraju pripremiti i popuniti. </p>
         
        <p class="odlomak">Učenici su također upućeni u nadolazeće jezične i kulturološke pripreme i što one obuhvaćaju, te stručne pripreme koje obuhvaćaju upute za popunjavanje dokumentacije na praksi, pisanje dnevnika rada te mjere zaštite na radu, upoznavanje s tvrtkama u kojima će obavljati praksu tijekom mobilnosti.</p>

        <p class="odlomak">Sudionicima je predstavljena struktura Erasmus+ projekat, obveze Škole i partnera u projektima, prava i obveze svih sudionika, aktivnosti koje se provode i ciljevi projekta. Sudionici trotjednih mobilnosti su upoznati s licencama OLS (Online Linguistic Support) i rokovima za rješavanje uvodne procjene. Dogovoren je i termin roditeljskog sastanka za nadolazeće mobilnosti.</p>
        

        <div class="datum">
          16/3/2022
         </div>
        </div>
      

      </section>



   
   </div>

   <?php include('footer.php');?>
    <script src="script/headScript.js"></script>
</body>
</html>