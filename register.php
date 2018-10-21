
<?php include('processlogin.php') ?>
<!DOCTYPE html lang="en">
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration system PHP and MySQL</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/custom.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
</head>
<body class="bg">
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">

        <img src="http://www.download82.com/images/produse/iconuri/limewire.png" alt="">
        <a class="navbar-brand" href="#"><h3>Taste Bud</h3></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"> </a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">

                    <form class="form-signin" method="post" action="register.php">
                        <?php include('errors.php'); ?>
                        <div class="form-label-group">
                            <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" placeholder="JohnDoe@somewhere.com" required autofocus>
                            <label for="email">Email address</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password_1" class="form-control" placeholder="*****" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" id="password" name="password_2" class="form-control" placeholder="*****" required>
                            <label for="password"> Confirm Password</label>
                        </div>


                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="reg_user">Sign up</button>
                        <hr class="my-4">
                    </form>

                    <p>
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<br/>
<br/>




</body>
</html>