<?php
//login.php
include('database_connection.php');
if(isset($_SESSION["type"])){
    header("location: index.php");
}
$message = '';
if(isset($_POST["login"])){
     if(empty($_POST["user_email"]) || empty($_POST["user_password"])){
        $message = "<label>Both Fields are required</label>";
     }
     else{
        $sub_user = addslashes($_POST['user_email']);
        $sub_password = md5(addslashes($_POST['user_password']));
        $query = "SELECT * FROM `user` WHERE `status` = 1";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $username = $row['user'];
            $password = $row['password'];
            if ($username == $sub_user && $password == $sub_password) {
                $_SESSION["type"] = 'admin';
                header("location: index.php");
            }
            else{
                $message = "Password Incorrect!!";
            }
        }
        $conn->close();
    }
}
        
  


?>

<!DOCTYPE html>
<html>
 <head>
  <title>BlueFin
                              workflows | Admin panel</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Favicon -->
		<link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
		<link rel="manifest" href="../favicon/site.webmanifest">
		<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
 </head>
 <body>
  <br />
  <div class="container">
   <<h2 align="center"><a href="<?php echo $url; ?>"><img src="../img/logo.png" alt="#" style="height: 60px; margin-top: -8px;"></a>BlueFin
                              workflows Admin Panel</h2>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">Login</div>
    <div class="panel-body">
     <form method="post">
      <span class="text-danger"><?php echo $message; ?></span>
      <div class="form-group">
       <label>Username</label>
       <input type="text" name="user_email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Password</label>
       <input type="password" name="user_password" class="form-control" />
      </div>
      <div class="form-group">
       <input type="submit" name="login" value="Login" class="btn btn-info" />
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>