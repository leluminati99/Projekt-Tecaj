<?php include("session.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Druženje s volonterima iz Španjolske</title>
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
       <h2>Druženje s volonterima iz Španjolske</h2>

       <div class="sadrzaj">
       <a href="volonteri.html"><img class="slika" src="slike/volonteri.jpg" alt=""></a>

        <p class="odlomak">U sklopu novog projekta <span>Stronger together</span> mladi imaju priliku upoznati nove španjolske volontere u Osijeku.
        </p>
        <p class="odlomak">Volonteri su pripremili zanimljivu debatu  i organiziraju početno druženje za sve zainteresirane mlade.
          </p>
        
        <p class="odlomak"> Želja im je upoznati mlade pobliže s projektom koji će provoditi godinu dana u <span>PRONI Centru</span> u Osijeku.</p>

        <p class="odlomak">Druženje će se održati <span>u utorak 29. ožujka od 18 do 20 sati u Info-centru za mlade Osijek</span>(Kralja Zvonimira 15). </p>
         
        <p class="odlomak">Također ćeš imati priliku kao mlada osoba predložiti neke aktivnosti na kojima bi želio/ljela sudjelovati. Ova aktivnost namijenjena je mladima od 15 do 30 godina.</p>

        <p class="odlomak">Ovo je samo početak, najavljuju volonteri, s obzirom da će jednom mjesečno organizirati zanimljive aktivnosti za mlade na različite teme iz područja održivog razvoja. No, malo pomalo 😉</p>
        
        <p class="odlomak">Za sve dodatne informacije slobodno nam se obrati na mail:<a href="mailto:icm@proni.hr"> icm@proni.hr</a> ili na <a href="https://www.instagram.com/info_centar_za_mlade_osijek/?hl=hr">Instagramu</a> i <a href="https://www.facebook.com/icmosijek">Facebooku</a>.</p>

        <p class="odlomak">Ova aktivnost provodi PRONI Centar u sklopu projekta Stronger together koji je sufinanciran sredstvima Europskih snaga solidarnosti.</p>

        <div class="datum">
          24/3/2022
         </div>
        </div>
      

      </section>



   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>