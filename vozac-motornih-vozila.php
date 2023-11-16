<?php include("session.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tehničar cestovnog prometa</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/zanimanja-footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="zanimanja/vozac-motornih-vozila.css">
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
         Vozač motornih vozila
       </h2>

       <div class="vozac-motornih-vozila-info">

        <p class="odlomak">Upravlja vozilom unutar gradskog područja te u međumjesnom i međunarodnom prometu. Obavlja poslove pripreme vozila za prijevoz, vodi prijevoznu dokumentaciju, otklanja manje kvarove na vozilu, preuzima teret u prijevozu, nadzire utovar i istovar te vodi brigu o njegovoj zaštiti.</p>
        
        <p class="odlomak">
          Nakon završetka obrazovanja i određenog radnog iskustva polaznik se kroz stručno usavršavanje može osposobiti za vozača autobusa, taksi vozača i autodizaličara. Vozač mora imati vrlo dobre senzorne, mentalne i psihomotorne sposobnosti što se utvrđuje posebnim liječničkim pregledima.
        </p>
        <p class="odlomak">Zapreke za obavljanje navedenih poslova su teže bolesti unutrašnjih organa, oštećenja udova i kralježnice, poremećaji vida i teška oštećenja sluha, epilepsija, teži oblici šećerne bolesti, alergijske i kronične bolesti dišnog sustava, psihoze. Potrebna je dobra emocionalna stabilnost.</a> </p>
        <p class="odlomak">Provjerite<a class="predmet" target="_blank" href="https://elpros.net/wp-content/uploads/2015/03/NPP-vozac-motornog-vozila.pdf"> Nastavni plan</a> i <a class="predmet" target="_blank" href="https://elpros.net/wp-content/uploads/2015/03/Vozac_motornog_vozila_-_predmeti1.pdf">predmete</a></p>

       
        <img class="slika" src="slike/kamion.jpg" alt="">

       </div>
   
      </section>
   
   </div>


   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>