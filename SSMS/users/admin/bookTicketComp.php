<?php
    session_start();
    include("../../connection.php");
    
    $customer = $_POST['name'];
    $cusId = $_POST['idNum'];
    $gender = $_POST['gender'];
    $showName = $_POST['showName'];
    $seatType = $_POST['seatType'];
    $seatNum = $_POST['seatNum'];
    $ticketId = $customer."".$cusId;
    
    $qry = "INSERT INTO `tickets`(`ShowId`, `SeatType`, `Name`, `IdNumber`, `Gender`, `TicketId`, `SeatNumber`) VALUES ('$showName','$seatType','$customer','$cusId','$gender','$ticketId','$seatNum')";
    $qry2 = "SELECT * FROM `shows` WHERE `ShowId` = '$showName'";
    $result = mysqli_query($conn,$qry);
    if($result){
        $result2 = mysqli_query($conn,$qry2);
        if(mysqli_num_rows($result2) > 0){
            while($row = mysqli_fetch_assoc($result2)){
                $booked = $row['seatsBooked'];
                $booked = $booked + 1;
                
                
                if($seatType === 'premium'){
                    $bookedPremium = $row['premiumBooked'];
                    $premiumSeats = $row['premiumSeats'];
                    if($bookedPremium < $premiumSeats){
                    $bookedPremium = $bookedPremium + 1;
                    $qry3 = "UPDATE `shows` SET `premiumBooked`='$bookedPremium',`seatsBooked`='$booked' WHERE `showId` = '$showName'";
                    
                    $result3 = mysqli_query($conn,$qry3);
                    
                    if($result3){
                        ?>
                            <script>window.alert("Ticket Booked Successfully");
                            window.open("admindashboard.php?id='<?php echo $userId?>'",'_self');
                            </script>
                        <?php
                    } else{
                        mysqli_error($conn);
                    }
                } else{
                    ?>
                            <script>window.alert("Sorry, Seats Full");
                            window.open("complement.php?id='<?php echo $userId?>'","_self");
                            </script>

                    <?php
                }

                }
                if($seatType === 'normal'){
                    $bookedNormal = $row['normalBooked'];
                    $normalSeats = $row['normalSeats'];
                    if($bookedNormal < $normalSeats){
                    $bookedNormal = $bookedNormal + 1;
                    $qry3 = "UPDATE `shows` SET `normalBooked`='$bookedNormal',`seatsBooked`='$booked' WHERE `showId` = '$showName'";
                    $result3 = mysqli_query($conn,$qry3);
                    if($result3){
                        ?>
                        <script>window.alert("Ticket Booked Successfully");
                        window.open("admindashboard.php?id='<?php echo $userId?>'","_self");
                        </script>
                        <?php
                    } else{
                        mysqli_error($conn);
                    }
                    
                }else{
                    ?>
                    <script>window.alert("Sorry, Seats Full");
                    window.open("complement.php?id='<?php echo $userId?>'",'_self');
                    </script>
                    <?php
                }
                }
            }
            
        }

    }
?>