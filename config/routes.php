<?php

//Function qui retourne un tableau contenant les routes de notre application

//Modèle des routes
//"NomDeLaRoute" => [
//  "Controller",
//  "Fonction",
//  Optionnel [
//    "parametre1" => ["typeAttendu", optionnel[valeurAttendu]],
//    "parametre2" => ["typeAttendu", optionnel[valeurAttendu]]
//  ]
// "role" => "role"
//]
function getRoutes() {
  return [
    "" => [
      "user",
      "loginUser"
    ],
    "insertUser" => [
      "user",
      "insertUser"
    ],
    "listeUser" => [
      "user",
      "listeUser"
    ],
    "updateUser" => [
      "user",
      "update",
      ["id" => ["integer"]]
    ],
    "deleteUser" => [
      "user",
      "deleteUser",
      ["id" => ["integer"]]
    ],
    "logout" => [
      "user",
      "deconnectUser"
    ],
    "listeMsg" => [
      "msg",
      "listeMsg"
    ],
    "insertMsg" => [
      "msg",
      "insertMsg"
    ],
    "listeMsg" =>[
    "msg",
    "deleteMsg"
    ]
  ];
}

 ?>
