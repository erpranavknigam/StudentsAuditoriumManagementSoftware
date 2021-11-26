<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
  
include_once('../../connection.php');

   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      $userId = $_POST["uid"];
      $password = $_POST["pwd"];
      $sql = "SELECT `UserId`, `Password` FROM `spectator` WHERE `UserId` = '$userId' AND `Password` = '$password'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      if($count == 1){
          $session['login_user'] = $userId;
          header("location: spectatordashboard.php?id='$userId'");
      }else{
          ?>
          <script type="text/javascript">window.alert('Login Error');</script>
          <?php
          header("Location: spectatorLogin.php");
      }
}
  
?>
</body>
</html>