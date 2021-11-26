<?php
    session_start();
    $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: ../adminlogin.php");
  }
    $_SESSION['showName'] = $_POST['showName'];
    $_SESSION['showId'] = $_POST['showId'];
    $_SESSION['showDate']= $_POST['showDate'];
    $_SESSION['showTime'] = $_POST['showTime'];
    class show{
        public $showName;
        public $showId;
        public $showDate;
        public $showTime;
    }
   $showName = $_POST['showName'];
   $showId = $_POST['showId'];
   $showDate = $_POST['showDate'];
   $showTime = $_POST['showTime'];
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
        <div class="title">Fix Seats</div>
    </div>

    <div class="container" width="30%" style="padding:200px;border:3px inherit green;margin-top:-100px">
        <form action="fixPrice.php?id='<?php echo $_GET["id"];?>'" method="post" enctype="multipart/form-data">
        
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
            
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Number of Premium Seats</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="No of Premium Seats" name="premiumSeats">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Number of Normal Seats</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="No of Normal Seats" name="normalSeats">
                
            </div>
            <button type="submit" class="btn btn-primary" name = "fixSeats">Go To Fix Price</button>
        </form>
    </div>
</body>

</html>