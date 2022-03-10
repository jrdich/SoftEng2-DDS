<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="d-block w-25 mb-1" style=" margin-top:10%; margin-left:10%">
        <img src="img/DDS.png" class="d-block w-100">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">

                <form action="signup-user.php" method="POST" autocomplete="">
                    <p class="text-center" style="font-size:100%"><b>Signup Form</b></p>

                    <?php
                    if (count($errors) == 1) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    } elseif (count($errors) > 1) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach ($errors as $showerror) {
                            ?>
                                <li><?php echo $showerror; ?></li>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <label style="font-size:80%">Fullname</label>
                        <input class="form-control" type="text" name="name" required value="<?php echo $name ?>">
                    </div>
                    <div class="form-group">
                        <label style="font-size:80%">Email Address</label>
                        <input class="form-control" type="email" name="email" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <label style="font-size:80%">Password</label>
                        <input class="form-control" type="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:80%">Confirm Password</label>
                        <input class="form-control" type="password" name="cpassword" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:80%">Contact Number</label>
                        <input class="form-control" type="number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label style="font-size:80%">Birthdate</label>
                        <input class="form-control" type="date" name="age" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>