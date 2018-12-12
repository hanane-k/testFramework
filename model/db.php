<?php
function getDataBase() {
  try {
    $db = new PDO('mysql:host=localhost;dbname=environement', "phpmyadmin", "hanane");

  }
  catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}

 ?>
