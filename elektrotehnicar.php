<?php include("session.php");?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elektrotehničar</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="zanimanja/elektrotehnicar.css">
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
         Elektrotehničar
       </h2>

       <div class="elektrotehnicar-info">

        <p class="odlomak">Ovaj program obrazuje učenike za zanimanje elektrotehničara odnosno, onima koji žele nastaviti obrazovanje, daje znanja potrebna za polaganje državne mature i nastavak školovanja na tehničkim i srodnim fakultetima.</p>
        
        <p class="odlomak">
          Kroz četiri godine učenici se pripremaju za obavljanje poslova tehničkog projektiranja, proizvodnje i kontrole različitih elektrotehničkih proizvoda.
        </p>

        <p class="odlomak">
          Sa zanimanje elektrotehničar osoba može raditi u pripremi razvojne tehnološke i operativne dokumentacije proizvoda u raznim telekomunikacijskim poduzećima, elektroindustriji i elektroprivredi. Uz pomoć drugih stručnjaka izrađuje sheme, sastavlja tehničke proračune i izrađuje crteže dijelova nekog elektrotehničkog uređaja; određuje način, potrebne materijale te odgovarajuće alate i strojeve za izradu određenog proizvoda; konstruira i montira složene uređaje te obavlja ispitivanja i kontrolu elektrotehničkih proizvoda i njihovih dijelova. Također, može raditi na održavanju elektroenergetskih strojeva, uređaja i opreme; planiranju, konstruiranju i praćenju izgradnje električnih mreža te na ispitivanju i održavanju električnih generatora, energetskih transformatora i agregata. Poslovi uključuju i popravak neispravnih uređaja i elektrotehničkih aparata.</p>

          <p class="odlomak">Popis predmeta provjerite <a target="_blank" href="http://ss-elektrotehnicka-prometna-os.skole.hr/upload/ss-elektrotehnicka-prometna-os/newsattach/566/Elektrotehnicar_-_predmeti.pdf">Ovdje</a></p>
      

          <img class="slika" src="slike/elektrotehnicar.jpg" alt="">


       </div>
   
      </section>
   
   </div>



   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>