<?php include("session.php");?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tehničar za računalstvo</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="zanimanja/tehnicar-za-racunalstvo.css">
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
         Tehničar za računalstvo
       </h2>

       <div class="tehnicar-za-racunalstvo-info">

        <p class="odlomak">Zanimanje  tehničar  za  računalstvo  obuhvaća  praktična  znanja  i  vještine  potrebne  za obavljanje poslova iz područja ljudskih djelatnosti povezanih s projektiranjem, izradbom i održavanjem  manje  složenih  relacijskih  baza  podataka  i  računalnih  programa, nadziranjem  i  dijagnosticiranjem  te  evidentiranjem  i  otklanjanjem  hardverskih  i softverskih  problema,  educiranjem  i  pomaganjem  korisnicima  u  rješavanju  njihovih problema, konfiguriranjem i održavanjem računala, lokalne računalne mreže, računalnih i informacijskih sustava.</p>
        
        <p class="odlomak odlomak-dva">
          Središnja i integrirajuća kompetencija ovog zanimanja objedinjuje poslove:
        </p>
        <ol>
          <li>rad na računalu (npr. programiranje)</li>
          <li>pripreme i obrade podataka (npr. računalni operater)</li>
          <li>kontrole, pripreme i obrade podataka</li>
          <li>oblikovanje baza podataka</li>
          <li>administracije baza podataka</li>
          <li>projektiranja informacijskih sustava</li>
          <li>operatera na vanjskoj računalnoj opremi (npr. računalne mreže)</li>
          <li>sistemskog inženjerstva nižeg stupnja složenosti, uključujući administraciju operacijskih sustava i računalnih mreža</li>
          <li>osiguranja kvalitete</li>
          <li>edukacije krajnjih korisnika</li>
          <li>marketinga i prodaje u području ICT-ja</li>
          <li>druge srodne poslove.</li>
        </ol>

        <p class="odlomak">
          Od tehničara za računalstvo se očekuje tehnička  polivalentnost,  inovativnost,  spremnost  na  kontinuirano  stjecanje  znanja  i vještina  u  korak  s  tehnološkim  trendovima,  točnost,  dosljednost,  komunikativnost, sklonost timskom radu.
          </p>

          <p class="odlomak">
            Školovanje za ovo zanimanje provodi se prema novom strukovnom kurikulumu koji je u eksperimentalnoj provedbi od 2013./2014. i koji je prilagođen novim trendovima u obrazovanju kao i očekivanjima tržišta rada.
          </p>

          <p class="odlomak">Nastavni plan provjerite<a href="http://ss-elektrotehnicka-prometna-os.skole.hr/upload/ss-elektrotehnicka-prometna-os/newsattach/574/Tehnicar_za_racunalstvo_-_predmeti.pdf" class="predmet" target="_blank"> Ovdje </a> </p>

          <img class="slika" src="slike/racunalstvo.webp" alt="">

  


       </div>
   
      </section>
   
   </div>

   <?php include('footer.php');?>
    <script src="script/headScript.js"></script>
</body>
</html>