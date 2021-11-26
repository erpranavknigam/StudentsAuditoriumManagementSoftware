<?php
    include('../../../connection.php');
    $_SESSION['uid'] = $_GET['id'];
    $userId = $_GET['id'];
    if(isset($_POST['submit'])){
       
        $showName = $_POST['showName'];
        $showId = $_POST['showId'];
        $showDate = $_POST['showDate'];
        $showTime = $_POST['showTime'];
        $premiumSeats = $_POST['premiumSeats'];
        $normalSeats = $_POST['normalSeats'];
        $pricePremium = $_POST['pricePremium'];
        $priceNormal = $_POST['priceNormal'];
        $totalSeats = $premiumSeats + $normalSeats;
        $amount = 0;
        $seatsBooked = 0;
        $premiumBooked = 0;
        $normalBooked = 0;
        $sql = "INSERT INTO `shows` (`name`,`date`,`time`,`totalSeats`,`premiumSeats`,`normalSeats`,`premiumBooked`,`normalBooked`,`premiumPrice`,`normalPrice`,`showId`,`amount`,`seatsBooked`) VALUES('$showName','$showDate','$showTime','$totalSeats','$premiumSeats','$normalSeats','$premiumBooked','$normalBooked','$pricePremium','$priceNormal','$showId','$amount','$seatsBooked')";
        
        if(mysqli_query($conn, $sql)){
            ?> 
            <script>window.alert("Show Scheduled Successfully");
            window.open("../admindashboard.php?id='<?php echo $userId;?>'",'_self')</script>
            <?php
        } else{
            ?>
            <script>
                window.alert("Show Scheduling Failed");
                window.open("../admindashboard.php?id='<?php echo $userId;?>'",'_self');
            </script>
            <?php

        }
    }
?>