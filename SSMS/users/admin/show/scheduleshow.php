<?php
    session_start();
    $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: ../adminlogin.php");
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
        <div class="title">Schedule Show</div>
    </div>

    <div class="container" width="30%" style="padding:200px;border:3px inherit green;margin-top:-100px">
        <form action="fixSeats.php?id=<?php echo $_GET['id'];?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Show Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Show Name" name="showName">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Show Id</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Show Id" name="showId">
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Show Date</label>
                <input type="date" name="showDate" class="form-control" id="exampleInputEmail"/>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Enter Show Time</label>
                <input type="time" name="showTime" class="form-control" id="exampleInputEmail"/>
            </div>
            
            <button type="submit" class="btn btn-primary" name = "fixSeats">Go To Fix Seats</button>
        </form>
    </div>
</body>

</html>