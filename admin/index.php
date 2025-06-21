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
      $sql = "UPDATE `site_info` SET `$key` = '$value' WHERE `id` = 1";
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
  <?php include('header.php'); ?>
    <div class="panel panel-default">
      <div class="panel-heading">Site info updater</div>
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
              <td>Site title</td>
              <td><input type="text" name="title" value="<?php echo get_data_site_info('title', 'site_info'); ?>"></td>
            </tr>
             <tr>
            <td>Address link</td>
              <td><input type="text" name="address" value="<?php echo get_data_site_info('address', 'site_info'); ?>"></td>
            </tr>
            <td>Slogan</td>
              <td><textarea cols="19" name="slogan"><?php echo get_data_site_info('slogan', 'site_info'); ?></textarea>
            </tr>
            <tr>
              <td>Primary phone number</td>
              <td><input type="text" name="phone" value="<?php echo get_data_site_info('phone', 'site_info'); ?>"></td>
            </tr>
            <tr>
              <td>Secondary phone number</td>
              <td><input type="text" name="phone_2" value="<?php echo get_data_site_info('phone_2', 'site_info'); ?>"></td>
            </tr>
            <tr>
              <td>Primary email</td>
              <td><input type="text" name="email" value="<?php echo get_data_site_info('email', 'site_info'); ?>"></td>
            </tr>
            <tr>
            <td>Secondary email</td>
              <td><input type="text" name="email_2" value="<?php echo get_data_site_info('email_2', 'site_info'); ?>"></td>
            </tr>
            <tr>
            <td>Facebook link</td>
              <td><input type="text" name="facebook" value="<?php echo get_data_site_info('facebook', 'site_info'); ?>"></td>
            </tr>
            <tr>
            <td>Youtube link</td>
              <td><input type="text" name="youtube" value="<?php echo get_data_site_info('youtube', 'site_info'); ?>"></td>
            </tr>
            <tr>
            <td>Linkedin link</td>
              <td><input type="text" name="linkedin" value="<?php echo get_data_site_info('linkedin', 'site_info'); ?>"></td>
            </tr>
            <tr>
            <td>Instagram link</td>
              <td><input type="text" name="instagram" value="<?php echo get_data_site_info('instagram', 'site_info'); ?>"></td>
            </tr>
            <tr>
            <td>Short description</td>
              <td><textarea cols="19" name="short_description"><?php echo get_data_site_info('short_description', 'site_info'); ?></textarea></td>
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

