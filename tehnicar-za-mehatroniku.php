<?php include("session.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tehničar za mehatroniku</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/zanimanja-footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="zanimanja/tehnicar-za-mehatroniku.css">
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
         Tehničar za mehatroniku
       </h2>

       <div class="tehnicar-za-mehatroniku-info">

        <p class="odlomak">Mehatronika je disciplina koja integrira strojarstvo, elektroniku, elektrotehniku, računalne tehnologije i upravljanja u projektiranju i izradi industrijskih proizvoda i procesa.</p>
        
        <p class="odlomak">
          U sklopu novog strukovnog kurikuluma (041504) za tehničara za mehatroniku učenici se kroz četiri godine obrazuju za projektiranje, nadogradnju i održavanje mehatroničkih sustava – strojeva, alata i uređaja koji se sastoje od elektroničkih, strojarskih, optičkih, automatiziranih i kompjuteriziranih sklopova.
        </p>
       
        <p class="odlomak">
          U novije vrijeme sve je više mehatroničkih proizvoda: primjerice razni roboti, digitalno upravljani strojevi, automatski vođena vozila, elektronske kamere, telefaks uređaji, fotokopirni strojevi, avio-uređaji i dr. Mehatroničar se bavi projektiranjem automatskih strojeva, naprava i alata te prema potrebi nadograđuje navedene uređaje. Izrađuje tehnološku dokumentaciju za neki uređaj uz pomoć specijaliziranih računalnih programa (CAD/CAM, SOLID, EDGE, CATIA). Također nadzire vođenje složenih procesa u pogonima izrade mehatroničkih uređaja.
          </p>

          <p class="odlomak">
            Osim stručnih znanja iz strojarstva, računalske tehnike i elektrotehnike, za obavljanje poslova tehničara za mehatroniku potrebna je preciznost i staloženost u radu, razvijena pokretljivost i usklđenost ruku i prstiju, sposobnost razlikovanja boja.
            Zapreke za obavljanje navedenih poslova su smetnje vida i sluha, kronične bolesti ruku, nogu i kralježnice.
          </p>

          <p class="odlomak">Provjera standarda:<a href="https://www.asoo.hr/UserDocsImages/Kurikulumi/SZ_Tehnicar%20za%20mehatroniku_za%20odobrenje_2013_02.pdf" class="predmet" target="_blank"> Standard zanimanja</a>,
            <a href="https://www.asoo.hr/UserDocsImages/Kurikulumi/SK_Tehnicar%20za%20mehatroniku_za%20odobrenje_2013_02.pdf" class="predmet" target="_blank">Standard kvalifikacije </a>i
              <a href="https://www.asoo.hr/UserDocsImages/Kurikulumi/K_Tehnicar%20za%20mehatroniku_za%20odobrenje.pdf" class="predmet" target="_blank">Strukovni kurikulum
          </a> </p>

          <img class="slika" src="slike/Tehnicar-za-mehatroniku.jpg" alt="">

  


       </div>
   
      </section>
   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>