<?php
    session_start();
    include('../../connection.php');
    class spectator{
        public $name;
        public $uid;
        public $idNumber;
        public $email;
        public $gender;
        public $password;
    }

    $name = $_POST['name'];
    $uid = $_POST['uid'];
    $idNumber = $_POST['idNum'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['pwd'];

    $sql = "INSERT INTO `spectator`(`Name`, `UserId`, `IdNumber`, `Email`, `Gender`, `Password`) VALUES ('$name','$uid','$idNumber','$email','$gender','$password')";

    $result = mysqli_query($conn,$sql);

    if($result){
        ?>
        <script>window.alert("You are registered successfully.");
        window.open('spectatordashboard.php?"<?php echo $uid;?>"','_self');
        </script>
        <?php
    }else{
        ?>
        <script>window.alert("Sorry Registration Failed");
        window.open("spectatorLogin.php","_self")
        </script>
        <?php
    }


?>