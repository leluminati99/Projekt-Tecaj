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
  <link rel="stylesheet" href="ostali-css/naslovna-druga-stranica.css">
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
        <a class="zanimanja" href="zanimanja.php">Zanimanja</a>
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
    <h2>
      Školske novosti
    </h2>

    <div class="novosti" >
      <div class="kreativna-riznica">
      <a href="kreativna-riznica.php"><img class="slika-novosti" src="slike/riznica.jpg" alt=""></a>  
        <div class="naziv naziv-riznica">
        <a href="kreativna-riznica.php">Osvojeno 1. mjesto na Kreativnoj riznici</a>  

        </div>

        <div class="kratki-sadrzaj">
          <p>Naša je škola dobitnica još jednog vrijednog priznanja. 27. travnja 2022. naši su učenici Luka Senković i Matej Rumbak iz 2 TM i Antonio Štruklec iz 3TM s mentoricom Sandrom Matijević, prof. dobili su nagradu za osvojeno 1. mjesto među [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/29._travnja" target="_blank">Datum:29/4/2022</a> </div>
          <button class="nastavi"><a href="kreativna-riznica.php">Nastavi</a></button>
        </div>
      </div>
<!-- https://elpros.net/2022/osvojeno-1-mjesto-na-kreativnoj-riznici/ -->
      <div class="druzenje-s-volonterima">
       <a href="volonteri.php"><img class="slika-novosti" src="slike/volonteri.jpg" alt=""></a>
        <div class="naziv naziv-volonteri">
        <a href="volonteri.php">Druženje s volonterima iz Španjolske</a> 
        </div>

        <div class="kratki-sadrzaj">
          <p>U sklopu novog projekta Stronger together mladi imaju priliku upoznati nove španjolske volontere u Osijeku.
            Volonteri su pripremili zanimljivu debatu i organiziraju početno druženje za sve zainteresirane mlade.
            Druženje će se održati u [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/24._ožujka" target="_blank">Datum:24/3/2022</a></div>
          <button class="nastavi"><a href="volonteri.php">Nastavi</a></button>
        </div>
      </div>
<!-- https://elpros.net/2022/druzenje-s-volonterima-iz-spanjolske/ -->
      <div class="erasmus-sastanak">
       <a href="uvodni-sastanak.php"><img class="slika-novosti" src="slike/erasmus-plus.jpg" alt=""></a>
        <div class="naziv naziv-sastanak">
        <a href="uvodni-sastanak.php">Uvodni sastanak sudionika mobilnosti</a> 

        </div>

        <div class="kratki-sadrzaj">
          <p>Sudionici projekata mobilnosti Erasmus+ pripremaju za obavljanje stručne prakse u Portugalu, Finskoj i Estoniji.
            10. 3. 2022. održan je uvodni sastanak gdje su od voditeljice stručnih priprema Bojane Štulić, voditeljice jezičnih priprema [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/16._ožujka" target="_blank">Datum:16/3/2022</a></div>
          <button class="nastavi"><a href="uvodni-sastanak.php">Nastavi</a></button>
        </div>
      </div>
<!-- https://elpros.net/2022/uvodni-sastanak-sudionika-mobilnosti/ -->
      <div class="skola-fizike">
       <a href="skola-fizike.php"><img class="slika-novosti" src="slike/skola-fizike.jpg" alt=""></a>
        <div class="naziv naziv-fizika">
         <a href="skola-fizike.php">13. Zimska škola fizike</a>

        </div>

        <div class="kratki-sadrzaj">
          <p>U četvrtak 3. 3. 2022. na platformi Teams održana je 13. Zimska škola fizike za nastavnike i učenike srednjih škola Osječko – baranjske županije. Zimsku školu fizike organiziraju Hrvatsko fizikalno društvo – podružnica Osijek i Agencija za [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/8._ožujka" target="_blank">Datum:8/3/2022</a></div>
          <button class="nastavi"><a href="skola-fizike.php">Nastavi</a></button>
        </div>
      </div>
<!-- https://elpros.net/2022/13-zimska-skola-fizike/ -->
      <div class="nosenje-maski">
       <a href="nosenje-maski.php"><img class="slika-novosti" src="slike/maske.png" alt=""></a>
        <div class="naziv naziv-maske">
        <a href="nosenje-maski.php">Nošenje maski – obavijest</a> 
        </div>

        <div class="kratki-sadrzaj">
          <p>Prema zadnjoj uputi HZJZ-a tijekom nastave u razredima (učionicama) maske nisu obavezne za učenike i djelatnike, ali ih učenici i djelatnici mogu i dalje nositi ako smatraju da su im potrebne, a preporučuju se svim učenicima i djelatnicima [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/28._veljače" target="_blank">Datum:28/2/2022</a></div>
          <button class="nastavi"><a href="nosenje-maski.php">Nastavi</a></button>
        </div>
      </div>
<!-- https://elpros.net/2022/nosenje-maski-obavijest/ -->
      <div class="povratak">
       <a href="povratak.php"><img class="slika-novosti" src="slike/povratak.jpg" alt=""></a> 
        <div class="naziv naziv-povratak">
        <a href="povratak.php"> POVRATAK U ŠKOLSKE KLUPE</a>

        </div>

        <div class="kratki-sadrzaj">
          <p>Poštovani učenici, nastava će se od ponedjeljka 31. siječnja 2022. održavati u školi. Nastava se idući tjedan održava po redovitom rasporedu za prijepodnevnu smjenu uz poštivanje svih epidemioloških mjera.</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/28._siječnja" target="_blank">Datum:28/1/2022</a></div>
          <button class="nastavi"><a href="povratak.php">Nastavi</a></button>
        </div>
      </div>
      <!-- https://elpros.net/2022/povratak-u-skolske-klupe-3/ -->

      <div class="sljedeca-stranica">
        <a class="prev" href="naslovna.php">⬅Prev</a>
        
       <div class="broj-stranice">
         <a class="jedan" href="naslovna.php">1</a> 
         <p class="dva">2</p> 
       </div>
         <p class="next">Next➡</p>
     </div>
    </div>
  
    


   </section>

</div>
<?php include('footer.php');?>
<script src="script/headScript.js"></script>
<script src="script/contentPageScript.js"></script>
</body>
</html>
