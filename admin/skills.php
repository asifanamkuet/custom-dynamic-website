<?php
//index.php

include('database_connection.php');
if(!isset($_SESSION["type"])){
  header("location: login.php");
}
$message = "";
if (isset($_POST['submit'])) {
  foreach ($_POST as $key => $value) {
    if ($key!= 'submit') {
      $conn = new mysqli($host, $user,  $pass, $dbname);
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      $sql = "UPDATE `services` SET `$key` = '$value' WHERE `id` = 1";
      $result = $conn->query($sql);
    }
    
  }
  if ($result) {
    $message = "Update Successfully";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>BlueFin | Admin Dashboard</title>
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
      <div class="panel-heading">Skills updater</div>
    <div id="user_login_status" class="panel-body">
    <span class="text-danger"><?php echo $message; if (isset($_GET['error'])) {
        echo $_GET['error'];
      } ?></span>  
        <form action="" method="POST">
          <table>
            <tr>
              <th><center>List of active services</center></th>
              <th><center>Access link</center></th>
            </tr>
            <?php
              $conn = new mysqli($host, $user,  $pass, $dbname);
              if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
              }
              $sql = "SELECT * FROM `skills`";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
                echo 
                "<tr>
                <td>".$row['title1']."</td>
                <td><a href='skills-single.php?id=1'> Click Here</a></td>
                </tr>
                <tr>
                <td>".$row['title2']."</td>
                <td><a href='skills-single.php?id=2'> Click Here</a></td>
                </tr>
                <tr>
                <td>".$row['title3']."</td>
                <td><a href='skills-single.php?id=3'> Click Here</a></td>
                </tr>
                <tr>
                <td>".$row['title4']."</td>
                <td><a href='skills-single.php?id=4'> Click Here</a></td>
                </tr>";
    
            ?>
          </table>
        </form>
    </div>
  </div>
</div>
</body>
</html>


