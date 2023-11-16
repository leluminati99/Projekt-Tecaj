<?php  
error_log("password_hash: " . $_GET["password_hash"]);

 $mysqli = require __DIR__ . "/database.php";

 $password_hash = password_hash($_POST["lozinka-registracija"], PASSWORD_DEFAULT);
 
 $sql = sprintf("SELECT * FROM user WHERE password_hash = '%s'", $mysqli->real_escape_string($password_hash));
 
 $result = $mysqli->query($sql);
 
 $is_available = $result->num_rows === 0;
 
 if (!$is_available) {
     $errors[] = "Lozinka koju ste unijeli već postoji u bazi podataka. Molimo vas odaberite drugu lozinku.";
 }
 
 if (!empty($errors)) {
     $_SESSION['errors'] = $errors;
     $_SESSION['old'] = $_POST;
     header("Location: registracija.php");
     exit;
 }