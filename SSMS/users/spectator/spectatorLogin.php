<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spectator Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="jumbotron">
        <div class="title">SPECTATOR REGISTRATION AND LOGIN</div>
    </div>
    <div class="container">
        <div class="col-md-6 col-lg-6 col-sm-12">

            <div style="text-align:center; font-size: 2em; Font-weight:bolder;text-decoration:underline;">Registration
            </div>
            <div>
                <form action="register.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter name" name="name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Id</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter user id" name="uid">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id Number</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter ID number" name="idNum">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Gender</label>
                        <br />
                        <input type="radio" name="gender" value="male" /> Male
                        <input type="radio" name="gender" value="female" />Female
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="pwd">
                    </div>

                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </form>
            </div>

        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div style="text-align:center; font-size: 2em; Font-weight:bolder;text-decoration:underline">Already
                Registered Login Here</div>
            <div>
                <form action="validate.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputEmail1">User Id</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter user id" name="uid">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="pwd">
                    </div>

                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>