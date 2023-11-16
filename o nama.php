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
  <link rel="stylesheet" href="footer/onama-footer.css">
  <link rel="stylesheet" href="ostali-css/onama-content.css">
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
  <h2>O nama</h2>
</section>

<div class="onama-content">
  
  <div class="misija-vizija">
    <div class="onama-headline">
      <h3 class="misija-headline">Misija i vizija </h3>
    </div>
    <p class="misija-vizija-odlomak">Želja nam je da kroz školski kurikulum naša škola pokaže svoju prepoznatljivost u kvaliteti, čime na tržišnoj sceni potvrđuje svoju vrijednost u svim oblicima rada. Rezultati naših učenika na natjecanjima, rezultati ispita državne mature, potvrda su našeg rada ne samo u redovitom programu, već i u odabiru i rezultatima izvannastavnih aktivnosti, rada s naprednim učenicima i uspješnosti dopunske nastave kroz godinu. U nastojanju da kontinuirano napredujemo u ovome smjeru, osmislili smo misiju i viziju razvoja naše škole.</p>
    <p class="misija-vizija-odlomak">Svojim odgojno-obrazovnim radom želimo:</p>
    <ol>
      <li>osposobiti naše učenike za konkurentno i kompetitivno sudjelovanje na tržištu rada, sukladno njegovim potrebama;</li>
      <li>ponuditi moderne i inovativne obrazovne programe i sadržaje;</li>
      <li>omogućiti stalno usavršavanje i napredovanje naših nastavnika;</li>
      <li>poticati osobni razvoj svakoga učenika, promicati kretivnost i usvajanje humanih vrednota.</li>
    </ol>

    <p class="misija-vizija-odlomak">Vjerujemo da našu školu možemo profilirati kao centar izvrsnosti za sve naše učenike i djelatnike. Vidimo ju kako sigurnu školu, kroz čiji se rad njeguju suradnički odnosi između učenika, nastavnika i roditelja. Ponudom inovativnih i kvalitetnih odgojno-obrazovnih sadržaja radimo na stvaranju sigurne budućnosti za nadolazeće generacije.</p>
  </div>
  

  <div class="povijest">
    <div class="onama-headline">
      <h3 class="povijest-headline">Kratka povijest </h3>
    </div>
    <p class="povijest-odlomak">U našem gradu započinje obrazovanje stručnih kadrova za elektrotehničku struku 11. lipnja 1929. godine, kada je Ministarstvo trgovine Kraljevine SHS donijelo Rješenje o osnivanju Državne stručno-zanatske škole u Osijeku.
      Ovaj nadnevak, 11. lipnja, određen je je kao naš Dan škole.</p>
    <p class="povijest-odlomak">Predmeti koje je obuhvaćao tadašnji program rada škole bili su stolarija, tokarija - željezna i drvena, lijevanje željeza i metala te elektrotehnika</p>
    <p class="povijest-odlomak">Škola je pod istim ili sličnim imenom radila do školske 1940./41. godine, a sljedećih godina škola nosi naziv Državna muška obrtna škola pri Olt-u.Početkom 1947/48. školske godine škola mijenja naziv u Industrijska škola pri OLT-u. Početkom 1959. godine škola ponovno mijenja ime i naziva se Metaloprerađivačka škola s praktičnom obukom.</p>
    <p class="povijest-odlomak">U drugoj polovici 1991. godine škola osjeća sve teškoće koje donosi rat. Danonoćni topnički i minobacački udari onemogućuju početak nove nastavne godine. Strahote rata odvode učenike i nastavnike škole u izgnanstvo, jednim dijelom u školu Hrvatski kralj Zvonimir i hotel Dražicu u mjestu Krk, a drugim dijelom u mjesto Nagyatad – Repulika Mađarska.</p>
    <p class="povijest-odlomak">Škola je pretrpjela velika oštećenja koja su se odmah počela otklanjati, tako da smo školsku 1992./93. započeli u gotovo popravljenoj školi.</p>
    <p class="povijest-odlomak">Početak školske 1992./93. godine donosi novo ustrojstvo školskih centara. Elektrometalski školski centar se dijeli na Prvu tehničku školu(elektro i prometni program) i Drugu tehničku školu (strojarski program).</p>
    <p class="povijest-odlomak">Budući da nazivi Prva i Druga tehnička škola nisu određivali područje obrazovanja, na zahtjev škola ti su nazivi promijenjeni i sad se ove škole nazivaju: <strong>ELEKTROTEHNIČKA  I  PROMETNA  ŠKOLA  OSIJEK</strong> i <strong>STROJARSKA  TEHNIČKA  ŠKOLA  OSIJEK</strong>.</p>
    
    
  </div>

  
  <div class="lokacija">
    <div class="onama-headline">
      <h3 class="lokacija-headline">Lokacija</h3>
    </div>
    <div id="mapaSkole"></div>
  </div>

  





</div>

<?php include('footer.php');?>

<script src="script/headScript.js"></script>
<script src="script/lokacija.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLDECqxUOjjZx1aF8TTJEQBej7QSTzz1g&callback=initMap" ></script>
</body> 
</html>
