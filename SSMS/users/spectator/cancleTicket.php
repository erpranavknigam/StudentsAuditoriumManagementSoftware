<?php
    include('../../connection.php');
    $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: spectatorLogin.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cancle Ticket</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<div class="jumbotron">
    <div class="title">Cancle Ticket</div>
</div>
<div class="container" width="30%" style="padding:150px;border:3px inherit green">
    <form action="cancleTicketProcess.php" method="post" enctype="multipart/form-data">
       
        <div class="form-group">
            <label for="exampleInputEmail1">Select Show</label>
            <br/>
            <select name="showName">
                <option value="default">Select</option>
                <?php
                $query = "SELECT * FROM `shows`";
                $result = mysqli_query($conn,$query);
                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                ?>
                    <option value="<?php echo $row['showId'];?>"><?php echo $row['name'];?></option>
                <?php
                        }
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Id Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter Id Number" name="idNum" required>

        </div>
        <button type="submit" class="btn btn-primary" name = "cancleTicket">Cancle Ticket</button>
    </form>
</div>
</body>

</html>
