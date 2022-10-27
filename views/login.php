<?php


session_start();

// if user login and go to login page redirect him to index page
if (isset($_SESSION["id"])) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <?php if (isset($_SESSION["errors"])) { ?>
                    <div class="alert alert-danger">
                        <?php foreach ($_SESSION["errors"] as $error) { ?>
                            <p class="text-center mb-0"> <?php echo $error; ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php unset($_SESSION["errors"]) ?>
                <form action="../handlers/handleLogin.php" method="POST" autocomplete="">
                    <h2 class="text-center  text-primary">Login Form</h2>
                    <p class="text-center mb-4 text-muted">Login with your email and password.</p>

                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" placeholder="Email Address">
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="mb-3">
                        <input class="form-control button" type="submit" name="submit" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="addUser.php">Add New User</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>