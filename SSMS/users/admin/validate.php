
<?php
  
include('../../connection.php');

if(isset($_GET['login']))
{
      $userId = $_GET["uname"];
     
      $password = $_GET["pwd"];
      
      $sql = "SELECT `uname`, `pwd` FROM `admin` WHERE `uname` = '$userId' AND `pwd` = '$password'";
      
      $result = mysqli_query($conn,$sql);
      
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
        echo $count;
      if($count == 1){
          $session['login_user'] = $userId;
          header("location: admindashboard.php?id='$userId'");
      } else{
          header("location: adminlogin.php");
      }
}
  
?>
