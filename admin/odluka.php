<?php
require("../db.php");
if(isset($_GET['potvrda'])){
    $id = $_GET['id'];
    $conn->query("update termin set potvrda = 1 where id = $id");
}

if(isset($_GET['otkaz'])){
    $id = $_GET['id'];
    $conn->query("delete from termin where id = $id");
}