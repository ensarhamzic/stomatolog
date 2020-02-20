<?php
require("../db.php");



$q = $conn->query("select * from termin where potvrda = 0 order by godina, mesec , dan");

$arr = array();
while($red=$q->fetch_object()){
    array_push($arr, $red->ime);
    array_push($arr, $red->prezime);
    array_push($arr, $red->telefon);
    array_push($arr, $red->email);
    array_push($arr, $red->mesec);
    array_push($arr, $red->dan);
    array_push($arr, $red->vreme);
    array_push($arr, $red->id);
}

header("content-type: application/json");
echo json_encode($arr);