<?php
  session_start();
  $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: spectatorLogin.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Spectator Dashboard</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  </head>
 
  <body>
    <div class="jumbotron">
        <div class="title bg-warning">Spectator Dashboard</div>
        <div class="logout" style="float:right; margin-right: 1vw; margin-top:5px;">
          <form action="../../logout.php" method="post">
            <input type="submit" class="btn btn-danger" value="Logout" name="logout" />
          </form>
        </div>
    </div>
    <div class="container-fluid row d-inline" style="align-items: center;">
        <a href="printTicket.php?id='<?php echo $_GET["id"];?>'"><div class="col-sm-12 col-md-12 user bg-info">Print Ticket</div></a>
        <a href="bookTicket.php?id='<?php echo $_GET["id"];?>'"><div class="col-sm-6 col-md-6 user bg-success">Book Ticket</div></a>
        <a href="cancleTicket.php?id='<?php echo $_GET["id"];?>'"><div class="col-sm-6 col-md-6 user bg-primary">Cancle Ticket</div></a>

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