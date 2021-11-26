<?php
    
    if(isset($_POST['cancleTicket'])){
        include('../../connection.php');
    
    $showId = $_POST['showName'];
    $idNum = $_POST['idNum'];
        $sql = "SELECT `SeatType` FROM `tickets` WHERE `ShowId` = '$showId' AND `IdNumber` = '$idNum'";
        $res = mysqli_query($conn,$sql);
        if(mysqli_num_rows($res) > 0){
            while($row = mysqli_fetch_array($res)){
                $seatType = $row['SeatType'];
            }
        }
        
        $qry2 = "SELECT * FROM `shows` WHERE `showId` = '$showId'";
        $result2 = mysqli_query($conn,$qry2);
        if(mysqli_num_rows($result2) > 0){
            while($row2 = mysqli_fetch_assoc($result2)){
        
                $seatsBooked = $row2['seatsBooked'];
                $premiumBooked = $row2['premiumBooked'];
                $normalBooked = $row2['normalBooked'];
                $premiumPrice = $row2['premiumPrice'];
                $normalPrice = $row2['normalPrice'];
                $amount = $row2['amount'];
                if($seatType === 'premium'){
                    $amount = $amount - $premiumPrice;
                    $premiumBooked = $premiumBooked - 1;
                }
                if($seatType === 'normal'){
                $amount = $amount - $normalPrice;
                $normalBooked = $normalBooked - 1;
                }
                $seatsBooked = $seatsBooked - 1;
            }        
        }
        $qry3 = "UPDATE `shows` SET `premiumBooked`='$premiumBooked',`normalBooked`='$normalBooked',`amount`='$amount',`seatsBooked`='$seatsBooked' WHERE `showId` = '$showId'";
        $result3 = mysqli_query($conn,$qry3);
        
        $seatType = $row['SeatType'];
        $qry = "DELETE FROM `tickets` WHERE `ShowId` = '$showId' AND `IdNumber` = '$idNum'";
        $result = mysqli_query($conn,$qry);
        if($result){
            if($seatesBooked >= 0){
            ?>
            <script type="text/javascript">
                window.alert("Ticket Cancelled");
                window.alert("Refund initiated");
                window.open("../../index.php",'_self');
            </script>
        <?php
            }
        } else{
        ?>
            <script type="text/javascript">
                window.alert("Ticket Cancellation Failed");
                window.open('spectatorLogin.php', '_self');
            </script>
        <?php
            
        }
    }
?>