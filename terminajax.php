<?php
require("db.php");
$poruka = "";
$broj = 1;
$ime = $_GET['ime'];
$prezime = $_GET['prezime'];
$tel = $_GET['tel'];
$email = $_GET['email'];
$godina = $_GET['godina'];
$mesec = $_GET['mesec'];
$dan = $_GET['dan'];
$vreme = $_GET['vreme'];

$conn->query("insert into termin values (null, '$ime','$prezime','$tel','$email',$godina,$mesec,$dan,$vreme,0)");

header("content-type: application/json");
echo json_encode($broj);