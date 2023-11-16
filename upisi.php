<?php include("session.php");?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doček učenika prvih razreda
  </title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="ostali-css/upisi.css">
  
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
       <h2>Upisi</h2>
       <div class="upisi-content">
       <h3 class="odlomak odlomak-prvi"><span>Objavljen je natječaj za upis učenika u 1. razred naše škole  u školskoj godini 2022./2023.</span></h3> 
      <p class="odlomak odlomak-a"> <a href="https://elpros.net/wp-content/uploads/2022/06/Natjecaj-za-upise-ELPOS_2021_2022_obavijest.pdf" target="_blank">Natječaj za upise ELPOS_2021_2022</a></p> 
      <p class="odlomak odlomak-a"><a href="https://elpros.net/wp-content/uploads/2022/06/Natjecaj-za-upise-ELPROS_2022_2023.pdf" target="_blank">Natječaj za upise ELPROS_2022_2023</a></p>
      
      <p class="odlomak odlomak-poveznice">Više o zanimanjima pogledajte na poveznicama:</p>
      <p class="odlomak">1.<a href="elektrotehnicar.php">Elektrotehničar</a></p>
       <p class="odlomak">2.<a href="tehnicar-za-racunalstvo.php">Tehničar za računalstvo</a></p>
       <p class="odlomak">3.<a href="tehnicar-za-mehatroniku.php">Tehničar za mehatroniku</a></p>
       <p class="odlomak">4.<a href="tehnicar-za-elektroniku.php">Tehničar za elektroniku</a></p>
       <p class="odlomak">5.<a href="tehnicar-cestovnog-prometa.php">Tehničar cestovnog prometa</a></p>
       <p class="odlomak">6.<a href="vozac-motornih-vozila.php">Vozač motornih vozila</a></p>
    
       <p class="odlomak odlomak-dodatne-informacije">Dodatne informacije možete naći i na <a href="https://elpros.net/wp-content/uploads/2015/05/Letak-ELPROS.pdf">letku</a> škole.</p>
       <p class="odlomak odlomak-ostali-linkovi">Ostali korisni linkovi:</p>
       <ul>
        <li><a target="_blank" href="https://srednje.e-upisi.hr/#/" >Nacionalni informacijski sustav prijava i upisa u srednje škole</a></li>
        <li><a target="_blank" href="https://srednjeadmin.e-upisi.hr/files/Publikacija_redoviti.pdf">Brošura Idemo u srednju! – redovni učenici</a></li>
        <li><a target="_blank" href="https://srednjeadmin.e-upisi.hr/files/Publikacija_kandidati%20s%20te%C5%A1ko%C4%87ama%20u%20razvoju.pdf">Brošura Idemo u srednju! – učenici s teškoćama</a></li>
        <li><a target="_blank" href="https://srednjeadmin.e-upisi.hr/files/Publikacija_izvan%20redovitog%20sustava%20obrazovanja.pdf">Brošura Idemo u srednju! – kandidati koji osnovno obrazovanje završavaju izvan obrazovnoga sustava Republike Hrvatske, te kandidati koji su osnovno obrazovanje završili u ustanovama za obrazovanje odraslih </a></li>
        <li><a target="_blank" href="https://mzo.gov.hr/">Pravilnik o elementima i kriterijima za izbor kandidata za upis u 1. razred srednje škole</a></li>
        <li><a target="_blank" href="https://narodne-novine.nn.hr/clanci/sluzbeni/2017_05_47_1109.html">Pravilnik o izmjenama i dopunama pravilnika o elementima i kriterijima za izbor kandidata za upis u 1. razred srednje škole</a></li>
        <li><a target="_blank" href="https://www.upisi.hr/docs/Primjeri_bodovanja.pdf">Primjeri bodovanja</a></li>
       </ul>
       <p class="odlomak odlomak-poziv">Pozivamo vas da nas upoznate i kroz Youtube kanal <a target="_blank" href="https://www.youtube.com/channel/UCjfN6w-DNjB7fShkNK7Hryg">Knjižnica Elpros</a>.</p>
       <p></p>
       <p></p>
    </div>

    <div class="slike-skole">
      <img name ="slide"  class="slike-slide"  alt="Slike škole">
    </div>
    
  

      </section>

      <!-- <img class="slike-slide" src="slike/skola.jpg" alt="">
      <img class="slike-slide" src="slike/izvana.jpg" alt="">
      <img class="slike-slide" src="slike/Elektrotehnička_i_prometna_škola_Osijek.jpg" alt="">
      <img class="slike-slide" src="slike/iznutra.jpg" alt="">
      <div class="str-div">
        <span class="str"></span>
        <span class="str"></span>
        <span class="str"></span>
        <span class="str"></span> -->


   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
    <script src="script/slide-show.js"></script>
  

</body>
</html>