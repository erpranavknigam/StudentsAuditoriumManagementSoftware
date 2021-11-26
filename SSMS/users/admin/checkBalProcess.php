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
        <div class="title">Balance Sheet</div>
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
                    <th>Year</th>
                    <th>Ads Income</th>
                    <th>Ticket Income</th>
                    <th>Other Income</th>
                    <th>Total Income</th>
                    <th>Total Expenses</th>
                </tr>
            </thead>
            <tbody>



                <?php
      if(isset($_POST['check'])){
        $showId = $_POST['showName'];
        $year = $_POST['year'];
        
        $sql = "SELECT * FROM `expenditure` WHERE `ShowId` = '$showId' OR `Year` = '$year'";
        $result = mysqli_query($conn, $sql);
      
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['ShowId']."</td>";
            echo "<td>".$row['ShowName']."</td>";
            echo "<td>".$row['Year']."</td>";
            echo "<td>".$row['AdsIncome']."</td>";
            echo "<td>".$row['TicketIncome']."</td>";
            echo "<td>".$row['OtherIncome']."</td>";
            echo "<td>".$row['TotalIncome']."</td>";
            echo "<td>".$row['TotalExpenses']."</td>";
            echo "</tr>";
        }
        } else {
          echo "<tr><td colspan = '8'>No Record Found</td></tr>";
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