<?php
    include('../../connection.php');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
     
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron">
        <div class="title">Seats Availability and Amount Collected</div>
        <div class="logout" style="float:right; margin-right: 1vw; margin-top:5px;">
          <form action="../../logout.php" method="post">
            <input type="submit" class="btn btn-danger" value="Logout" name="logout" />
          </form>
        </div>
    </div>
    <div class="container-fluid table-responsive">
        <table class="table table-striped table-hover table-sm">
            <thead class="bg-primary">
                <tr>
                    
                    <th>Show Id</th>
                    <th>Show Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Total Seats</th>
                    <th>Premium Seats</th>
                    <th>Normal Seats</th>
                    <th>Premium Booked</th>
                    <th>Normal Booked</th>
                    <th>Premium Price</th>
                    <th>Normal Price</th>
                    <th>Total Seats Booked</th>
                    <th>Total Amount Collected</th>
                </tr>
            </thead>
            <tbody>



                <?php
      if(isset($_POST['check'])){
        $showId = $_POST['showName'];
        $year = $_POST['year'];
        
        $sql = "SELECT * FROM `shows` WHERE `showId` = '$showId' OR YEAR(`date`) = '$year'";
        $result = mysqli_query($conn, $sql);
      
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['showId']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "<td>".$row['totalSeats']."</td>";
            echo "<td>".$row['premiumSeats']."</td>";
            echo "<td>".$row['normalSeats']."</td>";
            echo "<td>".$row['premiumBooked']."</td>";
            echo "<td>".$row['normalBooked']."</td>";
            echo "<td>".$row['premiumPrice']."</td>";
            echo "<td>".$row['normalPrice']."</td>";
            echo "<td>".$row['seatsBooked']."</td>";
            echo "<td>".$row['amount']."</td>";

            echo "</tr>";
        }
        } else {
          echo "<tr><td colspan = '13'>No Record Found</td></tr>";
        }
      }
      ?>
            </tbody>
        </table>
    </div>
      <div class="justify-content-center" style="text-align: center; margin-top: 2em;">
      <button type="button" class="btn btn-success btn-lg" onclick="window.print();">Print Details</button>
      </div>
</body>

</html>