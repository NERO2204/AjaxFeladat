<?php

require './MySqlDB.php';

$mySql = new MySqlDB();

$teendoim=array();
$result = $mySql->lekerdez("teendo");


if ($result->num_rows > 0)
    {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $teendoim[] = $row;
    }
    echo json_encode($teendoim);
} else {
    echo "0 results";
}


