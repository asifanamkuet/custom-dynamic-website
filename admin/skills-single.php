<?php
//index.ph
include('database_connection.php');
if(!isset($_SESSION["type"])){
  header("location: login.php");
}
$message = "";
if (isset($_POST['submit']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];
  foreach ($_POST as $key => $value) {    
    if ($key!= 'submit' && $key != 'fileToUpload' && $key != "old_file_name") {
      $conn = new mysqli($host, $user,  $pass, $dbname);
      if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
      }
      $sql = "UPDATE `skills` SET `$key` = '$value' WHERE `id` = '1'";
      $result = $conn->query($sql);
    }
    
  }
  if ($_FILES['fileToUpload']['tmp_name'] != NULL) {
  	$img_name = $_POST['old_file_name'];
    unlink("../animation/".$_POST['old_file_name']);
    $result = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../animation/".$_POST['old_file_name']);
  }
    $message = "Update Successfully";
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
  height: 200px;
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
      <div class="panel-heading">Skills Updater</div>
    <div id="user_login_status" class="panel-body">
    <span class="text-danger"><?php echo $message; if (isset($_GET['error'])) {
        echo $_GET['error'];
      } ?></span>  
        <form action="" method="POST" enctype="multipart/form-data">
          <table>
          <?php
              if ((is_numeric($_GET['id']))) {
              $id     = $_GET['id'];
              $conn = new mysqli($host, $user,  $pass, $dbname);
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }
              $sql = "SELECT * FROM `skills`";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              if ($row) {
                echo
                  "<tr>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Animation</th>
                  </tr>
                  <tr>
                  <td><input type='text' name='title$id' value='".$row['title'.$id.'']."'></td>
                  <td><textarea name='description$id'>".$row['description'.$id.'']."</textarea>'</td>
                  <td><img height='80px' src='../animation/".$row['animation'.$id.'']."'><input type='hidden' name='old_file_name' value='".get_item_details('animation'.$id.'',1,'skills')."'><input type='file' name='fileToUpload' id='fileToUpload'></td>
                  </tr>
                  <tr>
                  <td colspan='4'><input type='submit' name='submit' value='Update'></td>
                  </tr>";
                }
            }
          
          ?>
          </table>
        </form>
    </div>
  </div>
</div>
</body>
</html>



