<?php
  session_start();
  $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: clerkLogin.php");
    exit();
  }
  include('../../connection.php');

  $showId = $_POST['showId'];
  $totalExp = $_POST['totalExp'];
  $adsIncome = $_POST['adsIncome'];
  $othIncome = $_POST['othIncome'];

  $qry = "SELECT * FROM `shows` WHERE `showId` = '$showId'";
  $result = mysqli_query($conn,$qry);
  if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        $showName = $row['name'];
        $date = $row['date'];
        $ticIncome = $row['amount'];
      }
  }
  $totalIncome = $adsIncome + $othIncome + $ticIncome;
  if($result){
    $qry2 = "INSERT INTO `expenditure`(`ShowId`, `ShowName`, `TotalExpenses`, `TotalIncome`, `AdsIncome`, `OtherIncome`, `TicketIncome`, `Year`) VALUES ('$showId','$showName','$totalExp','$totalIncome','$adsIncome','$othIncome','$ticIncome',Year('$date'))";
    $result2 = mysqli_query($conn,$qry2);
    if($result2){
        ?>
        <script>
            window.alert("Details Submitted Successfully");
            window.open("clerkDashboard.php?id='<?php echo $_GET["id"];?>'",'_self');
        </script>
        <?php
    }else{
        ?>
        <script>
            window.alert("Some Error Occurred");
            window.open("clerkDashboard.php?id='<?php echo $_GET["id"];?>'",'_self');
        </script>
        <?php
    }
  }
?>