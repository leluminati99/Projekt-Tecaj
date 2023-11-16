<?php include("session.php");?>
<?php include('footer.php');?>


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
  <link rel="stylesheet" href="zanimanja/tehnicar-cestovnog-prometa.css">
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
<!-- 
      <a class="prijava" href="prijava.php">Prijava</a>
      <a class="registracija" href="registracija.php">Registracija</a> -->
    </nav>

    <div class="content">
  
      <section>
       <h2>
         Tehničar cestovnog prometa
       </h2>

       <div class="tehnicar-cestovnog-prometa-info">

        <p class="odlomak">Tehničar cestovnog prometa zanimanje je kojim su obuhvaćeni svi poslovi premještanja ljudi, dobara i informacija s jednog mjesta na drugo u komercijalnom i tehničkom smislu radi ostvarivanja ekonomskog učinka. U postizanju toga cilja, zanimanje obuhvaća sve poslove pripreme, izvršenja i okončanja prijevoznog procesa, eksploatacije vozila, nadzor nad provedbom prijevoznoga procesa, poznavanje poslova planiranja, projektiranja i eksploatacije prometnica te upravljanja njima, u svrhu postizanja sigurnog i djelotvornog prijevoza osoba i stvari te izvođenja i održavanja elemenata cestovne infrastrukture.</p>
        
        <p class="odlomak">
          U svojem poslu tehničar cestovnog prometa mora znati uljudno komunicirati na hrvatskom i stranom (engleskom/njemačkom) jeziku, biti psihički stabilan, biti sposoban samostalno donositi odluke, imati sklonost timskom radu i moći rješavati izvanredne situacije.
          Radi na otvorenome i u uredu s ne jednolikim radnim vremenom, a prekovremeno radi prema potrebi.
          Nužno je dobro poznavanje zakonodavstva. Nužna je otvorenost za stalno stručno usavršavanje i usvajanje novih tehnologija.
        </p>
        <p class="odlomak">Nastavni plan provjerite<a class="predmet" href="http://ss-elektrotehnicka-prometna-os.skole.hr/upload/ss-elektrotehnicka-prometna-os/newsattach/570/Tehnicar_cestovnog_prometa_-_predmeti.pdf" class="predmet" target="_blank"> Ovdje </a> </p>
       
        <img class="slika" src="slike/ces.jpg" alt="">

       </div>
   
      </section>
   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>