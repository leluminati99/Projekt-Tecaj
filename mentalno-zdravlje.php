<?php include("session.php");?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Europski tjedan mentalnog zdravlja</title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/zanimanja-footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="novosti/mentalno-zdravlje.css">
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
       <h2>Europski tjedan mentalnog zdravlja

      </h2>

       <div class="sadrzaj">
       <a href="mentalno-zdravlje.php"><img class="slika" src="slike/mentalno-zdravlje.png" alt=""></a>

        <p class="odlomak">Europski tjedan mentalnog zdravlja ove se godine obilježava od 9. do 13. svibnja na temu „Progovori o mentalnom zdravlju“.</p>
        <p class="odlomak">Razgovarajmo o tome kako se osjećamo i kako si pomažemo. Tražimo psihološku podršku od naših bliskih (prijatelja, roditelja, nastavnika)  i stručnjaka kada za njom osjećamo potrebu. U školi se uvijek možeš obratiti školskoj psihologinji i odmah dogovoriti termin razgovora putem Teamsa.</p>
        <p class="odlomak odlomak-tri"> Hrvatski zavod za javno zdravstvo nam donosi popis JEDNOSTAVNIH AKTIVNOSTI koje mogu svakodnevno poboljšati naše osobno zadovoljstvo i sreću, smanjiti stres i anksioznost te potaknuti pozitivno mentalno zdravlje.</p>
        <p class="odlomak"><a class="link" href="https://zivjetizdravo.eu/wp-content/uploads/2020/01/Mentalno-LETAK.pdf">https://zivjetizdravo.eu/wp-content/uploads/2020/01/Mentalno-LETAK.pdf</a></p>
        <p class="odlomak"><span>Udruga Kako si nam donosi</span> neke sadržaje koji nam mogu pomoći u nošenju s neugodnim doživljajima su:</p>
        <ul>
          <li>feel good playlista: <a class="link" href="https://www.youtube.com/playlist?list=PLhBesav-oJUtQJGRC3IpR8d5IG0Q_S8IO">https://www.youtube.com/playlist?list=PLhBesav-oJUtQJGRC3IpR8d5IG0Q_S8IO</a></li>
          <li>tekstovi s materijalima za rad na sebi: <a class="link" href="https://www.kakosi.hr/tag/materijali">https://www.kakosi.hr/tag/materijali</a></li>
          <li>besplatno e-savjetovalište: <a class="link" href="mailto: savjet@kakosi.hr"> savjet@kakosi.hr</a></li>
          <li>sigurno mjesto za dijeljenje svojih doživljaja u komentarima ispod</li>
        </ul>
        <p class="odlomak odlomak-sest">Mentalno zdravlje je sastavni dio zdravlja. Nema zdravlja bez mentalnog zdravlja. I zato,  govorimo o mentalnom zdravlju!!!</p>
        <p class="odlomak">Više o europskom tjednu psihičkog zdravlja: <a class="link" href="https://mhe-sme.org/emhw/">https://mhe-sme.org/emhw/</a></p>
        <p class="odlomak odlomak-osam">Darija Novoselović, školska psihologinja</p>
      
         <div class="datum">
          13/5/2022
         </div>
        </div>
      

      </section>



   
   </div>

   <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>