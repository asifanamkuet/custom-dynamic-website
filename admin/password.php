<?php
//index.php

include('database_connection.php');
if(!isset($_SESSION["type"])){
  header("location: login.php");
}
$message = "";
if (isset($_POST['submit'])) {
      $conn = new mysqli($host, $user,  $pass, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $new_password = md5(addslashes($_POST['new_password']));
      $c_password = md5(addslashes($_POST['c_password']));
      $old_password = md5(addslashes($_POST['old_password']));
      $sql = "SELECT * FROM `user` WHERE `password` = '$old_password'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['user'] == $_SESSION['type'] && $new_password == $c_password) {
          $sql = "UPDATE `user` SET `password` = '$new_password' WHERE `id` = 1";
          $result = $conn->query($sql);
          if ($result) {
            $message = "Update Successfully";
          }
        }
        else{
          $message = "Old password is incorrect";
        }
      }
      else{
        $message = "Old password is incorrect";
      }    
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>BlueFin| Admin Dashboard</title>
  <style>
  table {
  border-spacing: 10;
  width: 100%;
  border: 1px solid #ddd;
  text-align: center;
  }

  th, td {
  text-align: center;
  padding: 18px;
  }

  tr:nth-child(even){background-color: #f2f2f2}
  input[type=button], input[type=submit], input[type=reset] {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
  <?php include('header.php'); ?>
    <div class="panel panel-default">
      <div class="panel-heading">Change password</div>
    <div id="user_login_status" class="panel-body">
    <span class="text-danger"><?php echo $message; if (isset($_GET['error'])) {
        echo $_GET['error'];
      } ?></span>  
        <form action="" method="POST">
          <center>
            <p>Old password <input type="password" name="old_password"></p>
            <p>New password <input type="password" name="new_password"></p>
            <p>Confirm password <input type="password" name="c_password"></p>
            <p><input type="submit" name="submit" value="Change Now!!"></p>

        </form>
    </div>
  </div>
</div>
</body>
</html>


