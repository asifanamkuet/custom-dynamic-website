<?php
//index.php

include('database_connection.php');
if(!isset($_SESSION["type"])){
  header("location: login.php");
}
$id = $_GET['id'];
$sql = "DELETE FROM `our_work` WHERE `id` = '$id'";
$result = $conn->query($sql);
header("location: our_work.php");