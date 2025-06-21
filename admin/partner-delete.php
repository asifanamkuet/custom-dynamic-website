<?php
//index.php

include('database_connection.php');
if(!isset($_SESSION["type"])){
  header("location: login.php");
}
$id = $_GET['id'];
$sql = "DELETE FROM `partner` WHERE `id` = '$id'";
$result = $conn->query($sql);
header("location: partner.php");