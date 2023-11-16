<?php 
session_start();

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
  <link rel="stylesheet" href="ostali-css/mail-poslan.css">
  <link rel="stylesheet" href="header/header-meni-probni.css">

  <style>
    
    div {
      text-align: center;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 35px;
      color: rgb(19, 16, 16);
    }

    span {
      color: white;
      
    }
    
    .ulogiran {
       /* display: none; */
      margin-top:120px;

    }
    .neulogiran{
      /* display: none; */
    }

     a {
      text-decoration: none;
      color: rgb(255, 189, 189);
}
    .naslovna-div {
      margin-top: 500px;
    }

  </style>



 
</head>
<body>
  
 

    <!-- NAZIV ŠKOLE I LOGO -->
    
   

     <!-- <script>
          const display = document.querySelector('ulogiran').style.display = 'block';
          window.onload = function() {
            display;
          };
        </script> -->

  



<!-- SADRŽAJ STRANICE -->
<?php if(isset($user)): ?>
  <div class="ulogiran" style="display: none;"><p>BOK, <span><?php echo htmlspecialchars($user["username"]) ?></span></p>
  <p>PRIJAVLJEN <span>SI!!</span></p>
</div>
  <script>
    window.onload = function() {
      document.querySelector('.ulogiran').style.display = 'block';
    };
  </script>
<?php else: ?>
  <div class="neulogiran" style="display: none;">
    <p>LOGIRANJE <span>NEUSPJEŠNO!!</span></p>
    <p><a href="prijava.php">Prijava</a><span> ili</span>  <a href="registracija.php"> Registracija</a></p> 
  </div>
  <script>
    window.onload = function() {
      document.querySelector('.neulogiran').style.display = 'block';
    };
  </script>
<?php endif; ?>


  </div>

  <div class="naslovna-div">ODI NA <a class="odi-na-naslovnu" href="naslovna.php">NASLOVNU</a></div>


 










</body>
</html>