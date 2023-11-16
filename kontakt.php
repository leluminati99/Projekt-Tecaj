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
  <link rel="stylesheet" href="footer/footer.css">
  <link rel="stylesheet" href="ostali-css/kontakt-content.css">
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
    <h2>Kontakti</h2>

    <div class="kontakt-content">
      <div class="svi-kontakti">
        <div class="kontakt-headline kontakt-headline1">
        <div class="elpros-headline"><h3>Elektrotehnička i prometna škola osijek</h3></div></div>
        <div class="kontakti-info">
          <p>Istarska 3</p>
          <p>31000 Osijek</p>
          <p>tel. 031 208 400</p>
          <p> fax. '31 207 068</p>
          <p>OIB: 20815293209</p>
          <a href="mailto:ured@ss-elektrotehnicka-prometna-os.skole.hr" target="_blank">ured@ss-elektrotehnicka-prometna-os.skole.hr</a>
        </div>
      </div>

      <div class="ravnatelj">
        <div class="kontakt-headline kontakt-headline2">
          <h3>Ravnatelj</h3>
        </div>
        <div class="ravnatelj-info">
          <p>Antun Kovačić, dipl.ing.</p>
          <p>mob: 099/812 5229</p>
          <p> tel: 031/494 140</p>
          <p>fax: 031/214 746</p>
          <a href="mailto:antun.kovacic@gmail.skole.hr" target="_blank">antun.kovacic@gmail.skole.hr</a>
        </div>
      </div>

      <div class="tajnica">
        <div class="kontakt-headline kontakt-headline3">
          <h3>Tajnica</h3>
        </div>
        <div class="tajnica-info">
          <p>Snježana Čagalj, dipl. iur.</p>
          <p>tel: 031/ 494 142</p>
          <p>fax: 031/ 207 068</p>
          <a href="mailto:tajnica@elpros.t-com.hr" target="_blank">tajnica@elpros.t-com.hr</a>
        </div>
      </div>

      <div class="vod-teorijske-nastave">
        <div class="kontakt-headline kontakt-headline4">
          <h3>Voditelj teorijske nastave</h3>
        </div>
        <div class="vod-teorijske-info">
          <p>Mario Jukić, dipl.ing.</p>
          <p>tel: 031/ 494 146</p>
          <a href="mailto:mario.jukic8@skole.hr" target="_blank">mario.jukic8@skole.hr</a>
        </div>
      </div>

      <div class="vod-prakticne-nastave">
        <div class="kontakt-headline kontakt-headline5">
          <h3>Voditelji praktične nastave</h3>
        </div>
        <div class="vod-prakticne-info">
          <p>Bojana Štulić, dipl.ing.</p>
          <p>Jerko Merćep, dipl.ing.</p>
          <p>tel: 031/ 494 146</p>
          <a href="mailto:bojana.stulic@skole.hr" target="_blank">bojana.stulic@skole.hr</a>
          <a href="mailto:jerko.mercep@skole.hr" target="_blank">jerko.mercep@skole.hr</a>
        </div>
      </div>

      <div class="pedagoginja">
        <div class="kontakt-headline kontakt-headline6">
          <h3>Pedagoginja</h3>
        </div>
        <div class="pedagoginja-info">
          <p>Blaženka Pul, prof.</p>
          <p>	tel: 031/ 494 145</p>
          <a href="mailto:blazenka.pul@skole.hr" target="_blank">blazenka.pul@skole.hr</a>
        </div>
      </div>

      <div class="psihologinja">
        <div class="kontakt-headline kontakt-headline7">
          <h3>Psihologinja</h3>
        </div>
        <div class="psihologinja-info">
          <p>Darija Novoselović, prof.</p>
          <p>tel: 031/ 494 143</p>
          <a href="darija.novoselovic@skole.hr" target="_blank">darija.novoselovic@skole.hr</a>
        </div>
      </div>

      <div class="obrazovanje-odraslih">
        <div class="kontakt-headline kontakt-headline8">
          <h3>Obrazovanje odraslih</h3>
          <div class="obrazovanje-odraslih-info">
            <p>Blaženka Pul, prof.</p>
            <p>tel: 031/ 494 145</p>
            <a href="blazenka.pul@skole.hr" target="_blank">blazenka.pul@skole.hr</a>
          </div>
        </div>
      </div>







    </div>
  </section>







</div>
<?php include('footer.php');?>

<script src="script/headScript.js"></script>
<script src="script/kontakt.js"></script>
</body>
</html>
