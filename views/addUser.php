<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="../controllers/addUserContoller.php" method="POST" enctype="multipart/form-data">
                    <h2 class="text-center mb-4 text-primary">Add User</h2>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="room" placeholder="Room number" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="phone" placeholder="Phone" required>
                    </div>

                    <div class="mb-3">
                        <input class="form-control form-control-sm" type="file" name="image" id="image">
                    </div>

                    <div class="mb-3">
                        <input class="form-control button" type="submit" name="add_user" value="Add User">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>