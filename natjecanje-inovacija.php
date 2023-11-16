<?php include("session.php");?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Priprema učenika za međunarodno startup natjecanje/natjecanje inovacija</title>
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
       <h2>Priprema učenika za međunarodno startup natjecanje/natjecanje inovacija</h2>

       <div class="sadrzaj">
       <a href="natjecanje-inovacija.php"><img class="slika" src="slike/natjecanje-inovacija.png" alt=""></a>

        <p class="odlomak">Želite li sudjelovati u međunarodnim natjecanjima inovacija? Pročitajte kako to možete ostvariti! </p>
        <p class="odlomak odlomak-dva">Prva faza se odnosi na 10 radionica za učenike na sljedeće teme (radionice će provoditi Tera tehnopolis sa iskustvom u radu na sličnim projektima):</p>
        <ul class="ul">
          <li class="li"> Plan izrade prototipa/inovacije</li>
          <li class="li">Mentoriranje pri implementaciji startup ideja/inovacija u suradnji s mentorima poduzetnicima i studentima s iskustvom u inovacijama;</li>
        </ul>
        <p class="odlomak odlomak-tri"><span class="span">Termini provedbe (8 termina):</span> 4.-6. mjesec, četvrtak ili petak po 3 školska sata (smjena prije podne- poslije nastave, smjena poslije podne – prije nastave).</p>
        <ol class="ol">
          <li class="li">Faza se odnosi na 10 radionica za učenike na sljedeće teme (radionice će provoditi Tera tehnopolis sa iskustvom u radu na sličnim projektima):</li>
          <ul class="ul ul-2">
            <li class="li">Razvoj inovativnih ideja, odnosno identifikacija problema i segmenata korisnika, istraživanje tržišta, validacija problema te dizajn rješenja (ideje);</li>
            <li class="li">Razvoj i uloge u timu;</li>
            <li class="li">Definiranje poslovnog modela;</li>
            <li class="li">Marketing plan;</li>
            <li class="li">Pravna struktura (osnivanje, zaštita vlasništva inovacija, …);</li>
            <li class="li">Mogućnosti financiranja i ključne točke pri prezentaciji proizvoda investitorima;</li>
            <li class="li">Završna radionica – Prezentacija inovacija („Pitch ideje“)</li>
          </ul>
        </ol>

        <p class="odlomak odlomak-cetri"><span>Termini provedbe (10 termina):</span> 2.,3. mjesec, četvrtak i/ili petak po 3 školska sata (smjena prije podne- poslije nastave, smjena poslije podne – prije nastave).</p>
        <ol class="ol" start="2">
          <li class="li"> Faza se odnosi na 8 radionica za učenike usmjerenih na realizaciju start up ideja/inovacija te povezivanje s mentorima poduzetnicima i studentima (svaki učenik/tim će imati vlastitog mentora kod poslodavaca, kao i studente s FERIT-a koji će im biti na raspolaganju) :</li>
          <ul class="ul ul-3">
            <li class="li">Plan izrade prototipa/inovacije</li>
            <li class="li">Mentoriranje pri implementaciji startup ideja/inovacija u suradnji s mentorima poduzetnicima i studentima s iskustvom u inovacijama;</li>
          </ul>
         </ol>
         <p class="odlomak odlomak-pet"><span>Termini provedbe (8 termina):</span> 4.-6. mjesec, četvrtak ili petak po 3 školska sata (smjena prije podne- poslije nastave, smjena poslije podne – prije nastave). Motiv za sudjelovanje je prilika ići na sajmove inovacija u sljedećoj školskoj godini (Nurnberg, Zagreb, Rijeka itd.) Očekuje se sudjelovanje trećih i četvrtih razreda i nadarenih učenika nižih razreda. Prijave šaljite na mail: <a href="mailto:mirko.mesic@skole.hr">mirko.mesic@skole.hr</a></p>
       
         <div class="datum">
          13/1/2023
         </div>
        </div>
      

      </section>



   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>