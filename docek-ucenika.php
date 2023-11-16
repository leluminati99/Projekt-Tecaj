<?php include("session.php");?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doček učenika prvih razreda
  </title>
  <link class="logo-link" rel="icon" href="slike/logo3.png">
  <link rel="stylesheet" href="header/header-probni.css">
  <link rel="stylesheet" href="footer/zanimanja-footer.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">
  <link rel="stylesheet" href="novosti/novosti.css">
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
       <h2>Doček učenika prvih razreda</h2>

       <div class="sadrzaj">
       <a href="docek-ucenika.php"><img class="slika" src="slike/docek.jpg" alt=""></a>

        <p class="odlomak">Dragi učenici prvih razreda Elektrotehničke i prometne škole Osijek, redovna nastava počinje 5.9.2022. (ponedjeljak)u prije podnevnoj smjeni. 
        </p>
        <p class="odlomak">Škola organizira svečani prijem za učenike prvih razreda te vaše roditelje i skrbnike koji se održava u subotu 3. 9. 2022.  u 11:00 sati u Elektrotehničkoj i prometnoj školi Osijek, Istarska 3.</p>
        <p class="odlomak">Nakon prijema učenici s razrednicima upoznaju prostore škole, a roditelji i skrbnici također će dobiti priliku za to u društvu predmetnih nastavnika škole.</p>
        <p class="odlomak odlomak-cetri">Veselimo se vašem dolasku!</p>
        <p class="odlomak">Sve obavijesti vezane za prijem i život škole će biti dostupne na web stranici škole www.elpros.net ili na facebook stranici školske knjižnice. <a href="https://www.facebook.com/knjiznica.elpros.osijek/?ref=bookmarks">https://www.facebook.com/knjiznica.elpros.osijek/?ref=bookmarks</a> </p>
        <p class="odlomak">Nakon 1.9.2022. bit će više obavijesti na stranici škole.</p>
         <div class="datum">
          29/8/2022
         </div>
        </div>
      

      </section>



   
   </div>

    <?php include('footer.php');?>

    <script src="script/headScript.js"></script>
</body>
</html>