<?php
session_start(); 

if (!isset($_SESSION['user_id'])) {
  header("Location: prijava.php"); 
  exit;
}

if(isset($_SESSION["user_id"])) {
  $mysqli = require __DIR__ .  "/database.php";

  $sql = "SELECT * FROM user 
    WHERE id = {$_SESSION["user_id"]}";
  
  $result = $mysqli->query($sql);
  
  $user = $result->fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elektrotehnička i prometna škola Osijek</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/footer.css">
  <link rel="stylesheet" href="ostali-css/knjiznica.css">
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


</Header>

<!-- SADRŽAJ STRANICE -->
<div class="content">

  <section>
    <h2>Knjižnica</h2>
    <div class="knjiznica-content">
      <div class="katalog">
        <p>Provjerite VELIKI izbor knjiga <a href="https://library.foi.hr/lib/booksearch.php?B=1216&upit&V&E&U&ScrollAction&fbclid=IwAR3YUh5oIPtztrILkzISuEDX13L_fUIyAvC01hD-f8x6BvxdTWqOCzAn548" target="_blank">OVDJE</a></p>
      </div>

      <form action="rezervacija.php" method="post">
      <div class="upit-rezervacija">
        <h3 class="provjera">Provjera dostupnosti i rezervacija knjiga</h3>
        <div class="provjera-i-rezervacija">
          <label class="izaberi" for="prov-rez">Izaberi:</label>
        <select name="odaberi" id="prov-rez">
          <option value="rezervacija">Rezervacija</option>
          <option value="provjera">Provjera dostupnosti</option>
        </select>
        </div>

        <div class="naziv-knjige">
          <label class="izbor-knjige" for="knjiga">Naziv knjige:</label>
          <input id="knjiga" type="text" name="naziv_knjige">
        </div>
        
        <div class="naziv-autora">
          <label class="autor-knjige" for="autor">Naziv autora:</label>
          <input id="autor" type="text" name="naziv_autora">
        </div>
        <div class="mail">
          <label class="vas-mail" for="email">Vaš mail:</label>
          <input id="email" type="email" name="email">
        </div>
        <div class="posalji-upit">
        <input type="submit" name="posalji-provjeru" id="posalji-provjeru" value="Pošalji">
        
        </div>
      </div>
    </form>
      
    
    <div class="drugi">
      <p class="drugi-upit-headline">U slučaju da imate još neka pitanja</p>
    </div>

    <form action="pitanje.php" method="post">
    <div class="drugi-upit">
      <div class="ime-prezime">
        <label class="ime-i-prezime" for="ime">Ime i prezime:
        </label>
        <input id="ime" name="ime" type="text" >
      </div>
        <div class="drugi-upit-mail">
          <label class="vas-mail-drugi" for="email-drugi">Vaš mail:</label>
          <input id="email-drugi" name="email-drugi" type="email">
        </div>
        <div class="pitanje">
          <label class="vase-pitanje" for="pitanje">Vaše pitanje:</label>
          <textarea name="pitanje" id="pitanje" cols="30" rows="10"></textarea>
        </div>
        <div class="pitaj">
          <input type="submit" name="posalji-pitanje" id="posalji-pitanje" value="Pošalji">  
          
          
        </div>
    </div>
    </div>
  </form>
    
    

  </section>






</div>

<!-- FOOTER -->
<footer>
  <div class="footer-flex">

    <div class="skola-info">
      <h3 class="h3-skola-info">INFORMACIJE</h3>
      <div class="skola-info-p">
      <p>Adresa: <span>Istarska 3, 31000 Osijek</span> </p>
      <p>Telefon: <span> 031 208 400</span></p>
      <p>OIB: <span>28015293209</span></p>
      <p>E-mail: <a href="mailto:ured@ss-elektrotehnicka-prometna-os.skole.hr" target="_blank">ured@ss-elektrotehnicka-prometna-os.skole.hr</a></p>
      <p>Broj razrednih odjeljenja: <span>26</span> </p>
      <p>Broj učenika: <span>592</span></p></div>
    </div>
    
    <div class="strucne-sluzbe">
      <h3 class="h3-strucne-sluzbe">STRUČNE SLUŽBE</h3>
      <div class="strucne-sluzbe-p">
        <p>Ravnatelj škole: <span>Antun Kovačić, dipl. ing.</span></p>
        <p>Tajnica škole: <span>Snježana Čagalj, dipl. iur.</span> </p>
        <p>Pedagoginja: <span>Blaženka Pul, prof.</span> </p>
        <p>Psihologinja: <span>Darija Novoselović, prof.</span> </p>
        <p>Ispitni koordinator: <span>Mato Filaković, dipl. ing</span></p>
        <p>Knjižničarka: <span>Daliborka Pavošević, prof.</span> </p>
        <p>Voditelj nastave: <span>Mario Jukić, dipl. ing.</span></p>
        <p>Voditelji praktične nastave: </p>
        <p><span>Bojana Štulić, dipl. ing.</span> </p>
        <p><span>Jerko Merćep, dipl. ing.</span></p>
      </div>
    </div>
    <div class="korisni-linkovi">
      <h3 class="h3-korisni-linkovi">KORISNI LINKOVI</h3>
      <div class="korisni-linkovi-a">
        <a href="https://www.carnet.hr/" target="_blank">Carnet</a>
        <a href="http://www.mzos.hr/" target="_blank">Ministarstvo znanosti, obrazovanja i sporta</a>
        <a href="https://www.azoo.hr/" target="_blank">Agencija za odgoj i obrazovanje</a>
        <a href="https://www.asoo.hr/" target="_blank">Agencija za strukovno obrazovanje</a>
        <a href="https://www.ncvvo.hr/" target="_blank">Nacionalni centar za vanjsko vrednovanje</a>
        <a href="http://www.mojamatura.net/" target="_blank">Moja matura</a>
        <a href="https://www.postani-student.hr/Ucilista/Default.aspx" target="_blank">Postani student</a>
      </div>
    </div>    



  </div>
  


</footer>

<script src="script/headScript.js"></script>
</body>
</html>
