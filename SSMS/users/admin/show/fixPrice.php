<?php
    session_start();
    $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: ../adminlogin.php");
  }
    include('../../../connection.php');
    $_SESSION['showName'] = $_POST['showName'];
    $_SESSION['showId'] = $_POST['showId'];
    $_SESSION['showDate']= $_POST['showDate'];
    $_SESSION['showTime'] = $_POST['showTime'];
    $_SESSION['premiumSeats'] = $_POST['premiumSeats'];
    $_SESSION['normalSeats'] = $_POST['normalSeats'];
    class show{
        public $showName;
        public $showId;
        public $showDate;
        public $showTime;
        public $premiumSeats;
        public $normalSeats;
        public $premiumPrice;
        public $normalPrice;
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAMS | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron">
        <div class="title">Fix Price</div>
    </div>

    <div class="container" width="30%" style="padding:200px;border:3px inherit green;margin-top:-100px">
        <form action="process.php?id='<?php echo $_GET["id"];?>'" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Price of Premium Seats (INR)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Price of Premium Seats" name="pricePremium">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Price of Normal Seats (INR)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Price of Normal Seats" name="priceNormal">
                
            </div>
            <div class="form-group" style="visibility:hidden; display:none"> 
                
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="showName" value="<?php echo $_SESSION['showName'];?>"  >
                
            </div>
            <div class="form-group" style="visibility:hidden; display:none">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="showId" value="<?php echo $_SESSION['showId'];?>"  >
                
            </div>
            <div class="form-group" style="visibility:hidden; display:none">
                <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="showDate" value="<?php echo $_SESSION['showDate'];?>"  >
                
            </div>
            <div class="form-group" style="visibility:hidden; display:none">
                <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="showTime" value="<?php echo $_SESSION['showTime'];?>"  >
                
            </div>
            
            <div class="form-group" style="visibility:hidden; display:none">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="premiumSeats" value="<?php echo $_SESSION['premiumSeats'];?>">
                
            </div>
            <div class="form-group" style="visibility:hidden; display:none">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="normalSeats" value="<?php echo $_SESSION['normalSeats'];?>">
                
            </div>
            <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
        </form>
    </div>
</body>
</html>
