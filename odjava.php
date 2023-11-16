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
    
    .odjavljen {
       /* display: none; */
      margin-top:120px;

    }
    .nazad{
      /* display: none; */
    }

     a {
      text-decoration: none;
      color: rgb(255, 189, 189);
}
    

  </style>



 
</head>
<body>
  
<div class="odjavljen">ODJAVLJEN <span>SI!!</span></div>


  <div class="ulogiran" style="display: none;"><p>BOK, <span><?php echo htmlspecialchars($user["username"]) ?></span></p>
  <p>PRIJAVLJEN <span>SI!!</span></p>
</div>
  

  <div class="neulogiran">
   MOLIM TE SLIJEDI LINK NA <a href="prijava.php">PRIJAVA </a>ILI
   <a href="registracija.php">REGISTRACIJA</a>
  </div>
 


  






 










</body>
</html>