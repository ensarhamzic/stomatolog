<?php
require("db.php");

$mesec = $_GET['mesec'];
$dan = $_GET['dan'];
$godina = $_GET['godina'];

$q = $conn->query("select vreme from termin where mesec = $mesec and dan = $dan and godina = $godina and potvrda = 1");

$arr = array();
while($red=$q->fetch_object()){
    array_push($arr, $red->vreme);
}

header("content-type: application/json");
echo json_encode($arr);