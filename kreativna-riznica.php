<?php include("session.php");?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Osvojeno 1. mjesto na Kreativnoj riznici</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/zanimanja-footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="novosti/kreativna-riznica.css">
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
       <h2>Osvojeno 1. mjesto na Kreativnoj riznici</h2>

       <div class="sadrzaj">
       <a href="kreativna-riznica.php"><img class="slika" src="slike/riznica.jpg" alt=""></a>

        <p class="odlomak">Naša je škola dobitnica još jednog vrijednog priznanja.  27. travnja 2022. naši su učenici <span>Luka Senković </span> i <span> Matej Rumbak</span> iz 2 TM i <span>Antonio Štruklec</span> iz 3TM  s mentoricom <span>Sandrom Matijević</span>, prof. dobili su nagradu za osvojeno <span>1. mjesto</span> među sedamdeset jednom srednjom školom iz Hrvatske na <span>Milenijskom natjecanju Kreativne riznice</span> Ekonomskog fakulteta u Osijeku. <span>Čestitamo!!!</span> 
        </p>
        <p class="odlomak">Tim <span>ELPROS</span> predstavio je <span>idejno rješenje pečata za kekse u obliku slova glagoljice izrađen 3D pisačem</span>. Učenici su dojmljivim predstavljanjem osvojili stručni žiri i osvojili prvo mjesto u kategoriji <span>Kreativni kalendar</span> s temom <span>Glagoljica i mitologija</span>. </p>
        
        <p class="odlomak odlomak-tri">3. Milenijsko natjecanje iz kreativne industrije održalo se 2. i 3. prosinca 2021. na  Ekonomskom fakulteta u Osijeku. „Cilj Milenijskoga natjecanja potaknuti je na sudjelovanje u izvannastavnim aktivnostima korisnima za razvitak vještina, kritičkog razmišljanja, kreativnosti i unaprjeđivanje stečenih znanja. Natjecateljski timovi iz Republike Hrvatske i inozemstva sudjelovanjem u trećem međunarodnom Milenijskom natjecanju iz kreativne industrije upisali su se u kreativnu budućnost izlaganjem idejnih rješenja u tri natjecateljske kategorije. Natjecatelji su inspiraciju pronalazili u temama natjecanja glagoljici, mitologiji i Putu svile. Glagoljica i mitologija tradicijske su vrijednosti kojima inovativna rješenja daju novi život, a obnavljanje Puta svile gospodarska prilika koju je nemoguće razvijati bez upoznavanja njezina povijesnoga naslijeđa. U tri natjecateljske kategorije Kreativni sat (osnovne škole), Kreativni kalendar (srednje škole) te Kreativni Planet (visokoobrazovne ustanove) uključila su se 133 natjecateljska tima. Nakon predstavljanja i analiziranja idejnih rješenja Prosudbeno povjerenstvo predstavilo je laureate svake od kategorija.</p>

        <a class="pobjednici" href="http://www.efos.unios.hr/proglaseni-pobjednici-svih-kategorija-na-medunarodnom-3-milenijskom-natjecanju-iz-kreativne-industrije/" target="_blank">http://www.efos.unios.hr/proglaseni-pobjednici-svih-kategorija-na-medunarodnom-3-milenijskom-natjecanju-iz-kreativne-industrije/</a>
        
        <p class="odlomak">Učenici su prolazili kroz sve faze izrade idejnog rješenja. Razrađivali su ideju i moguće načine realizacije, izrađivali modele u programu Solid Edge,  sastavili su i vježbali javni govor i izlaganje pod vodstvom mentorice Sandre Matijević koja je vodila tim od ideje, razrade plana i  izrade modela  do završnog predstavljanja idejnog rješenja na Ekonomskom fakultetu pod nazivom <span>Zagrizi u baštinu:  Upečatljiva glagoljica</span>.</p>
         
        <p class="odlomak">U realizaciji ove ideje pomogli su znanjem, iskustvom i vještinama brojni nastavnici:<span>Gordana Ostrunić, Darko Ratkajec, Bojana Štulić</span>.</p>

        <p class="odlomak">Antonio Štruklec je pod vodstvom Gordane Ostrunić prvo u programu Solid Edge izradio 3D modele pečata, a potom ih izradio na 3D pisaču PLA plastikom uz pomoć nastavnika Darka Ratkajca. Nastavnica Gordana Ostrunić poklonila je i svoj obiteljski recept za kekse i ispekla ih kako bi učenici mogli predstaviti i taj element na svom izlaganju.</p>
        
        <p class="odlomak">Knjižničarka <span>Daliborka Pavošević</span> pomogla je u medijskom predstavljanju.</p>
        <div class="datum">
          29/4/2022
         </div>
        </div>
      

      </section>



   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>