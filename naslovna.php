<?php include("session.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elektrotehinička i prometna škola Osijek</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css" type="text/css">    
  <link rel="stylesheet" href="header/header-meni-probni.css" type="text/css">   
  <link rel="stylesheet" href="footer/footer.css" type="text/css">   
  <link rel="stylesheet" href="ostali-css/naslovna-content.css" type="text/css">  
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
            <a href="elektrotehnicar.php">-Elektrotehničar-</a>
            <a href="tehnicar-za-racunalstvo.php">-Tehničar za računalstvo-</a>
            <a href="tehnicar-za-mehatroniku.php">-Tehničar za mehatroniku-</a>
            <a href="tehnicar-za-elektroniku.php">-Tehničar za elektroniku-</a>
            <a href="tehnicar-cestovnog-prometa.php">-Tehničar cestovnog prometa-</a>
            <a href="vozac-motornih-vozila.php">-Vozač motornih vozila-</a>
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
      

      <div class="priprema-za-natjecanje">
       <a href="natjecanje-inovacija.php"><img class="slika-novosti" src="slike/natjecanje-inovacija.png" alt=""></a> 
        <div class="naziv naziv-natjecanje">
          <a href="natjecanje-inovacija.php">Priprema učenika za međunarodno startup natjecanje/natjecanje inovacija</a>  
        </div>
        <div class="kratki-sadrzaj">
          <p>Želite li sudjelovati u međunarodnim natjecanjima inovacija? Pročitajte kako to možete ostvariti!
          Prva faza se odnosi na 10 radionica za učenike na sljedeće teme (radionice će provoditi Tera tehnopolis sa iskustvom u radu na sličnim projektima): [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"> <a class="datum-a" href="https://hr.wikipedia.org/wiki/13._siječnja " target="_blank">Datum: 13/1/2023</a></div>

          <button class="nastavi"><a href="natjecanje-inovacija.php">Nastavi</a></button>
          </div>
      </div>
      
      <div class="spasavanje-risa">
       <a href="life-lynx-projekt.php"><img class="slika-novosti" src="slike/zastita-risa.jpg" alt=""></a> 
        <div class="naziv naziv-ris">
          <a href="life-lynx-projekt.php"> Life LYNX projekt - spašavanje risa od izumiranja</a> 
        </div>

        <div class="kratki-sadrzaj">
          <p>Dana, 16. studenoga 2022. u 1. TR1 razredu održana je međupredmetna nastava biologije (S. Škrabić) i geografije (V. Glasnović) s nazivom Life LYNX projekt. Radi se o međunarodnom projektu kojemu su namjena i cilj spašavanje ranjive i [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"> <a class="datum-a" href="https://hr.wikipedia.org/wiki/29._studenoga" target="_blank">Datum:29/11/2022</a></div>
          <button class="nastavi"><a href="life-lynx-projekt.php">Nastavi</a></button>
        </div>
      </div>



      <div class="docek-ucenika"><a href="docek-ucenika.php"><img class="slika-novosti" src="slike/docek.jpg" alt=""></a>
      <div class="naziv naziv-docek">
       <a href="docek-ucenika.php">Doček učenika prvih razreda</a> 
      </div>

      <div class="kratki-sadrzaj">
        <p>Dragi učenici prvih razreda Elektrotehničke i prometne škole Osijek, redovna nastava počinje 5.9.2022. (ponedjeljak)u prije podnevnoj smjeni. Škola organizira svečani prijem za učenike prvih razreda te vaše roditelje i skrbnike koji se održava u [...]</p>
      </div>

      <div class="datum-i-nastavi">
        <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/29._kolovoza" target="_blank">Datum:29/8/2022</a></div>
        <button class="nastavi"><a href="docek-ucenika.php">Nastavi</a></button>
      </div>
      </div>
      
       <div class="erasmus">
       <a href="erasmus-projekt-mobilnosti.php"><img class="slika-novosti" src="slike/erasmus-plus.jpg" alt=""></a> 
        <div class="naziv naziv-erasmus">
        <a href="erasmus-projekt-mobilnosti.php">Erasmus + projekti mobilnosti</a>  
        </div>

        <div class="kratki-sadrzaj">
          <p>Nakon dvije godine nadanja, planiranja, odgađanja i otkazivanja, napokon možemo biti zadovoljni jer naši učenici ponovo mogu putovati na stručnu praksu, a nastavnici na pripremne posjete i praćenje rada u inozemstvo. U sklopu Erasmus + projekata [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/27._lipnja" target="_blank">Datum:27/6/2022</a></div>
          <button class="nastavi"><a href="erasmus-projekt-mobilnosti.php">Nastavi</a></button>
        </div>
      </div>

    
<!-- https://elpros.net/2022/life-lynx-projekt/ -->
      <div class="obrana-zavrsnog">
       <a href="obrana-zavrsnog.php"><img class="slika-novosti" src="slike/obrana-zavrsnog.jpg" alt=""></a> 
        <div class="naziv naziv-obrana">
          <a href="obrana-zavrsnog.php">Obrana završnog rada</a>
        </div>

        <div class="kratki-sadrzaj">
          <p>Obrana završnog rada za učenike završnih razreda i polaznike obrazovanja odraslih održat će se 13. i 15. lipnja 2022. od 11:00 sati prema rasporedu koji je objavljen u Microsoft Teamsu. Polaznici obrazovanja odraslih neka se jave [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/7._lipnja" target="_blank">Datum:7/6/2022</a></div>
          <button class="nastavi"><a href="obrana-zavrsnog.php">Nastavi</a></button>
        </div>
      </div>
<!-- https://elpros.net/2022/obrana-zavrsnog-rada-5/ -->
      <div class="mentalno-zdravlje">
       <a href="mentalno-zdravlje.php"><img class="slika-novosti" src="slike/mentalno-zdravlje.png" alt=""></a>
        <div class="naziv naziv-zdravlje">
        <a href="mentalno-zdravlje.php">Europski tjedan mentalnog zdravlja.</a>
        </div>

        <div class="kratki-sadrzaj">
          <p>Europski tjedan mentalnog zdravlja ove se godine obilježava od 9. do 13. svibnja na temu „Progovori o mentalnom zdravlju“.
            Razgovarajmo o tome kako se osjećamo i kako si pomažemo. Tražimo psihološku podršku od naših [...]</p>
        </div>

        <div class="datum-i-nastavi">
          <div class="datum"><a class="datum-a" href="https://hr.wikipedia.org/wiki/13._svibnja" target="_blank">Datum:13/5/2023</a></div>
          <button class="nastavi"><a href="mentalno-zdravlje.php">Nastavi</a></button>
        </div>
      </div>
      <!-- https://elpros.net/2022/europski-tjedan-mentalnog-zdravlja/ -->


      <div class="sljedeca-stranica">
         <p class="prev">⬅Prev</p> 
        <div class="broj-stranice">
          <p class="jedan">1</p> 
          <a class="dva" href="naslovna-druga-stranica.php">2</a> 
        </div>
          <a class="next" href="naslovna-druga-stranica.php">Next➡</a>
      </div>
    </div>
  
     <!-- <div class="datum-i-nastavi">
        <div class="datum">Datum:13/1/2023</div>
        <button class="nastavi"><a href="#">Nastavi</a></button>
      </div> -->
    


   </section>

</div>

<?php include('footer.php');?>

<script src="script/headScript.js"></script>
<script src="script/contentPageScript.js"></script>

</body>
</html>
