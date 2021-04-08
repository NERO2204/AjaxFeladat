<?php

require './MySqlDB.php';


  $mySql=new MySqlDB();



$tablaNeve="teendo";

$ujErtekek="allapot='1'";


$mySql->frissit($tablaNeve, $ujErtekek,"id=".$_GET["id"]);



