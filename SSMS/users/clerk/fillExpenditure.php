<?php
  session_start();
  $_SESSION['uid'] = $_GET['id'];
  if(!($_SESSION['uid'])){
    header("location: clerkLogin.php");
  }
  include('../../connection.php');
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Fill Expenditure</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="jumbotron">
        <div class="title bg-warning">Fill Expenditure</div>
        <div class="logout" style="float:right; margin-right: 1vw; margin-top:5px;">
            <form action="../../logout.php" method="post">
                <input type="submit" class="btn btn-danger" value="Logout" name="logout" />
            </form>
        </div>
    </div>
    <div class="container-fluid table-responsive">
        <form action="processExpenditure.php?id='<?php echo $_GET['id'];?>'" method="post">
            
            <table class="table table-striped table-hover table-sm">
                <thead class="bg-primary">
                    <tr>
                        <th>Select Show</th>
                        <th>Total Expenses</th>
                        <th>Ads Income</th>
                        <th>Other Income</th>
                        <th>Final Submit</th>
                    </tr>
                </thead>
                <tbody class="table-striped table-hover table-sm">
                    <tr>
                        <td>
                            <select name="showId" required="true">
                                <option value="NULL">Select</option>
                                <?php
                                    $sql = "SELECT `name`, Year(`date`), `showId`, `amount` FROM `shows`";
                                    $result = mysqli_query($conn,$sql);
                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                ?>
                                            <option value="<?php echo $row['showId'];?>"><?php echo $row['name'];?></option>
                                <?php
                                        }
                                     }
                                ?>
                            </select>
                        </td>
                        <td><input type="text" name="totalExp"  required/></td>
                        <td><input type="text" name="adsIncome" required/></td>
                        <td><input type="text" name="othIncome" required/></td>
                        <td><button type="submit" class="btn btn-success" name = "submit">Submit</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <footer class="page-footer font-large blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-6">© <?php date_default_timezone_get(); echo (date("Y"));?>
            Copyright:
            <a href="index.php"> Students' Auditorium Management Software</a>
        </div>
        <!-- Copyright -->

    </footer>
</body>