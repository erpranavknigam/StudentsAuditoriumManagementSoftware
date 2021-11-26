<?php
    session_start();
    $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: adminlogin.php");
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create Clerk Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron">
        <div class="title">Create Clerk Login</div>
    </div>
    <div class="container" width="30%" style="padding:200px;border:3px inherit green">
        <form action="loginCreationClerk.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter name" name="name" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Id</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter User Id" name="uid" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter password" name="pwd" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Id Number</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Id Number" name="iNumber" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Email" name="email" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gender</label>
                <br/>
                <input type="radio" name="gender" value="male"/> Male
                <input type="radio" name="gender" value="female"/>Female
            </div>
            
            <button type="submit" class="btn btn-primary" name = "register">Register</button>
        </form>
    </div>
</body>

</html>