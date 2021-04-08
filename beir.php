<?php

require './MySqlDB.php';
$mySql = new MySqlDB();
$nev = $_POST["nev"];
$datum = $_POST["datum"];
$allapot=0;


$mySql->ujRekord("teendo", "(todo,datum,allapot)", "('$nev','$datum',$allapot)");
//INSERT INTO `teendo`(`todo`, `datum`, `allapot`) VALUES ("teendo","2020-03-01",0)
//print_r($_POST);
echo json_encode($_POST);
