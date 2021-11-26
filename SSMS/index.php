<?php 

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SAMS | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron">
        <div class="title">STUDENTS' AUDITORIUM MANAGEMENT SOFTWARE</div>
    </div>
    <div class="container-fluid row d-inline">
        <a href="users/admin/adminlogin.php"><div class="col-sm-6 col-md-6 user bg-primary">Admin Login</div></a>
        <a href="users/spectator/spectatorLogin.php"><div class="col-sm-6 col-md-6 user bg-success">Spectator Login</div></a>
        <a href="users/clerk/clerkLogin.php"><div class="col-sm-6 col-md-6 user bg-success">Clerk Login</div></a>
        <a href="users/salesPerson/salesPersonLogin.php"><div class="col-sm-6 col-md-6 user bg-primary">Sales Person Login</div></a>
    </div>
    <br/><br/>
    <footer class="page-footer font-large blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-6">© <?php date_default_timezone_get(); echo (date("Y"));?> Copyright:
            <a href="index.php"> Students' Auditorium Management Software</a>
        </div>
        <!-- Copyright -->

    </footer>
</body>

</html>