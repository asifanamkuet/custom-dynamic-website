<?php
//index.php
include('database_connection.php');
if(!isset($_SESSION["type"])){
  header("location: login.php");
}
$message = "";
if (isset($_POST['save'])) {
    $img_name = rand(1, 100000000);
    $img_name = $img_name.'.png';
    $result = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../img/bg/".$img_name);
    if ($result) {
      $message = "$url/img/bg/$img_name";
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
  height: 100px;
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
      <div class="panel-heading">Image Uploader</div>
    <div id="user_login_status" class="panel-body">
    <span class="text-danger"><font size="4px"><?php echo $message; if (isset($_GET['error'])) {
        echo $_GET['error'];
      } ?></font></span>  
        <form action="" method="POST" enctype="multipart/form-data">
          <table>
            <tr>
              <td>Image</td>
            </tr>
            <tr>
              <td>
                <center>
                  <input type='file' name='fileToUpload' id='fileToUpload'>
                </center>
              </td>
              <tr>
                  <td colspan='3'><input type='submit' name='save' value='Save'></td>
                  </tr>
            </td></tr>
          </table>
        </form>
    </div>
  </div>
</div>
</body>
</html>


