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
      $sql = "UPDATE `about_us` SET `$key` = '$value' WHERE `id` = 1";
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
  height: 600px;
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
      <div class="panel-heading">About us updater</div>
    <div id="user_login_status" class="panel-body">
    <span class="text-danger"><?php echo $message; if (isset($_GET['error'])) {
        echo $_GET['error'];
      } ?></span>  
        <form action="" method="POST">
          <table>
            <tr>
              <th><center>Item name</center></th>
              <th><center>Value</center></th>
            </tr>
            <tr>
              <td>About us title</td>
              <td><input type="text" name="title" value="<?php echo get_data_site_info('title', 'about_us'); ?>"></td>
            </tr>
             <tr>
            <td>Youtube link</td>
              <td><input type="text" name="video" value="<?php echo get_data_site_info('video', 'about_us'); ?>"></td>
            </tr>
            <tr>
              <td colspan="2">Description<textarea name="description"><?php echo get_data_site_info('description', 'about_us'); ?></textarea>
                <script>
                        CKEDITOR.replace('description');
                </script>
              </td>
            </tr>
            <tr>
              <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
            </tr>
          </table>
        </form>
    </div>
  </div>
</div>
</body>
</html>