<?php include("session.php");?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Life LYNX projekt - spašavanje risa od izumiranja</title>
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
       <h2>Life LYNX projekt - spašavanje risa od izumiranja</h2>

       <div class="sadrzaj">
       <a href="life-lynx-projekt.php"><img class="slika" src="slike/zastita-risa.jpg" alt=""></a>

        <p class="odlomak">Dana, 16. studenoga 2022. u 1. TR1 razredu održana je <span>međupredmetna nastava</span> biologije (S. Škrabić) i geografije (V. Glasnović) s nazivom Life LYNX projekt. 
        </p>
        <p class="odlomak">Radi se o međunarodnom projektu kojemu su namjena i cilj spašavanje ranjive i iznimno malene dinarske i jugoistočne alpske populacije risa. Sve životinje prisutne na području Dinarida su u bliskom srodstvu, a sustavnim dovođenjem i ispuštanjem risova uhvaćenih u Slovačkoj i Rumunjskoj nastojao se revitalizirati genetski fond te time direktno povećati vjerojatnost opstanka ove populacije. </p>
        <p class="odlomak">Projekt se provodi u periodu od 2017.-2024. godine, a uključuje nekoliko zemalja Europske unije,
          različite obrazovne institucije, politička tijela, vladine i nevladine organizacije koje uspješno surađuju i
          koordiniraju projektom. Interdisciplinarnim pristupom i primjenom novih suvremenih oblika digitalne
          tehnologije praćenja i predviđanja, razvili su i implementirali različite strateške modele u svrhu razvijanja
          i stabilizacije populacije risova.</p>
        
        <p class="odlomak">Učenicima se htjela prezentirati važnost očuvanja populacije risova u kontekstu bioraznolikosti
          hrvatskoga prostornog identiteta, ali i dinarskoga kraja kroz prizmu promatranja s aspekta geografije i
          biologije.</p>
         <div class="datum">
          29/11/2022
         </div>
        </div>
      

      </section>



   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>