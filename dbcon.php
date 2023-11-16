<?php 
$con = mysqli_connect("localhost", "root", "", "registracija");
if(!$con) {
  echo "NEma konekcija";
}