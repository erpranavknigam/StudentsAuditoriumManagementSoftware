<?php
    include('../../connection.php');
    class clerk{
        public $name;
        public $email;
        public $userId;
        public $password;
        public $idNumber;
        public $gender;
    }
    $name  = $_POST['name'];
    $userId = $_POST['uid'];
    $password = $_POST['pwd'];
    $idNumber = $_POST['iNumber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $to = $email;
    $subject = "Login Info";
    $message = "User Id: ".$userId."<br/> Password: ".$password;
    $header = "From: pnigam2167@gmail.com\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: text/html\r\n";
    $qry = "INSERT INTO `clerk` VALUES('$name', '$email', '$userId', '$password', '$idNumber', '$gender')";
    if(isset($_POST['register'])){
        
        if(mysqli_query($conn,$qry)){
            $retval = mail($to,$subject,$message,$header);
            if($retval){
                ?>
                <script>window.alert('Mail Send Successfully');
            </script>
                <?php
            } else{
                ?>
                <script>window.alert('Mail not send');</script>
                <?php
            }
            ?>
            <script>window.alert('Account Created Successfully');
                window.open("admindashboard.php?id='<?php echo $userId?>'",'_self');
            </script>
            <?php
        } else{
            echo "error: " . $conn->error;
        }
        
    }    
?>