<?php
//index.php
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
      $sql = "UPDATE `our_work` SET `$key` = '$value' WHERE `id` = '$id'";
      $result = $conn->query($sql);
    }
    
  }
  if ($_FILES['fileToUpload']['tmp_name'] != NULL) {
    $img_name = rand(1, 100000000);
    $img_name = $img_name.'.png';
    unlink("../img/bg/".$_POST['old_file_name']);
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../img/bg/".$img_name);
    $sql = "UPDATE `our_work` SET `bg` = '$img_name' WHERE `id` = '$id'";
      $result = $conn->query($sql);
  }
  if ($result) {
    $message = "Update Successfully";
  }
}

if (isset($_POST['save']) && is_numeric($_GET['id'])) {
  $id = $_GET['id'];
  $title = $_POST['title'];
  $category = $_POST['category'];
  $class = $_POST['class'];
  $link = $_POST['link'];
  $date  = date("jS F Y");
  if ($_FILES['fileToUpload']['tmp_name'] != NULL) {
    $img_name = rand(1, 100000000);
    $img_name = $img_name.'.png';
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../img/bg/".$img_name);
  }
  else{
    $img_name = NULL;
  }
  $conn = new mysqli($host, $user,  $pass, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "INSERT INTO `our_work` (`class`, `bg`, `link`, `title`, `category`) VALUES ('$class', '$img_name', '$link', '$title', '$category')";
  $result = $conn->query($sql);
  if ($result) {
    $message = "Save Successfully";
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
      <div class="panel-heading">Our work updater</div>
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
              $sql = "SELECT * FROM `our_work` WHERE `id` = '$id'";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
              if ($row) {
                echo
                  "<tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Class</th>
                  <th>Image</th>
                  <th>URL</th>
                  </tr>
                  <tr>
                  <td><input type='text' name='title' value='".$row['title']."'></td>
                  <td><input type='text' name='category' value='".$row['category']."'></td>
                  <td><input type='text' name='class' value='".$row['class']."'></td>
                  <td><img height='80px' src='../img/bg/".$row['bg']."'><input type='hidden' name='old_file_name' value='".get_item_details('bg',$id,'our_work')."'><input type='file' name='fileToUpload' id='fileToUpload'></td> 
                  <td><input type='text' name='link' value='".$row['link']."'></td>
                  </tr>
                  <tr>
                  <td colspan='5'><input type='submit' name='submit' value='Update'></td>
                  </tr>";
                }
             else{
                echo 
                "<tr>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Class</th>
                  <th>Image</th>
                  <th>URL</th>
                  </tr>
                  <tr>
                  <td><input type='text' name='title'></td>
                  <td><input type='text' name='category'></td>
                  <td><input type='text' name='class'></td>
                  <td><input type='file' name='fileToUpload' id='fileToUpload'></td>
                  <td><input type='text' name='link'></td>
                  </tr>
                  <tr>
                  <td colspan='5'><input type='submit' name='save' value='Save'></td>
                  </tr>" ;
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


