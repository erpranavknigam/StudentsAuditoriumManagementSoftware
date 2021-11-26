<?php
    include('../../connection.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Print Ticket</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
        if(isset($_POST['getTicket'])){
            $showId = $_POST['showName'];
            $idNum = $_POST['idNum'];
    
            $qry = "SELECT * FROM `tickets` WHERE `IdNumber` ='$idNum' AND `ShowId` = '$showId'";
            $result = mysqli_query($conn,$qry);
        }
        $qry2 = "SELECT `name` FROM `shows` WHERE `showId` = '$showId'";
        $result2 = mysqli_query($conn,$qry2);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
        }
        if(mysqli_num_rows($result2) > 0){
            $row2 = mysqli_fetch_assoc($result2);
        }
    ?>
    <div class="container" style = "text-align:center; color:blue;background-color:blanchedalmond; font-size: 2em; padding:20px;font-weight:bolder;">
        <?php echo $row2['name'];?>
    </div>
    <div class="container" style="border: 0px 2px 2px 2px;">
    <div class="row">
            <div class="col-sm-12 col-md-12" style="text-align:center; font-size:1.5em; color:cadetblue;font-weight:bolder;">Ticket Id: <?php echo $row['TicketId'];?></div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6" style="font-weight:bolder; font-size:1.3em;">Show Id: <?php echo $showId;?></div>
            <div class="col-sm-6 col-md-6" style="float:right;font-weight:bolder; font-size:1.3em;">Name: <?php echo $row['Name'];?></div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6" style="font-weight:bolder; font-size:1.3em;">Gender: <?php echo $row['Gender'];?></div>
            <div class="col-sm-6 col-md-6" style="float:right;font-weight:bolder; font-size:1.3em;">Id Number: <?php echo $row['IdNumber'];?></div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6" style="font-weight:bolder; font-size:1.3em;">Seat Type: <?php echo $row['SeatType'];?></div>
            <div class="col-sm-6 col-md-6" style="float:right;font-weight:bolder; font-size:1.3em;">Seat Number: <?php echo $row['SeatNumber'];?></div>
        </div>
        
    </div>
    <div class="justify-content-center" style="text-align: center; margin-top: 2em;">
      <button type="button" class="btn btn-success btn-lg" onclick="window.print(); window.open('spectatordashboard.php?id=<?php echo $_GET['id'];?>','_self');">Print Ticket</button>
      </div>
</body>

</html>