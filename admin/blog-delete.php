<?php
//index.php

include('database_connection.php');
if(!isset($_SESSION["type"])){
  header("location: login.php");
}
$id = $_GET['id'];
$sql = "DELETE FROM `blog` WHERE `id` = '$id'";
$result = $conn->query($sql);
header("location: blog.php");