<?php 
$is_invalid = false;

if($_SERVER["REQUEST_METHOD"] === "POST") {
  $mysqli = require __DIR__ . "/database.php";
  
  $sql = sprintf("SELECT * FROM user 
          WHERE email = '%s'", $mysqli->real_escape_string($_POST["gmail-prijava"]));

  $result = $mysqli->query($sql);

  $user = $result->fetch_assoc();


   
      
    
  if ($user) {
    if(password_verify($_POST["password"], $user["password_hash"])) {
      session_start();

      session_regenerate_id();

      $_SESSION["user_id"] = $user["id"];
      header("Location: index.php");

    }
  }
  $is_invalid = true;
}


?>