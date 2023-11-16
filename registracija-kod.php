<?php 






// if(empty($_POST["korisnicko-ime"])) {
  

// }

// if( ! filter_var($_POST["gmail-input-registracija"], FILTER_VALIDATE_EMAIL)) {

// }

// if(strlen($_POST["lozinka-registracija"]) < 8) {

// }



// if(!preg_match("/[a-z]/i", $_POST["lozinka-registracija"])) {

// }

// if(!preg_match("/[0-9]/", $_POST["lozinka-registracija"])) {
 
// }




$password_hash = password_hash($_POST["lozinka-registracija"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user (username, email, password_hash)
VALUES (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if(!$stmt->prepare($sql)) {
  die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
$_POST["korisnicko-ime"],
$_POST["gmail-input-registracija"],
$password_hash);

if($stmt->execute()) {
  header("Location: registracija-uspjesna.php");
  exit;
}
else {
  if($mysqli->errno === 1062) {
    die("email already taken");
  }
  die($mysqli->error . " " . $mysqli->errno);
}






?>