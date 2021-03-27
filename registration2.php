<<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Register as Volunteer</title>
        <link rel="stylesheet" href="style.css" />
    </head>

    <body>
        <?php
        require('db.php');
        // When form submitted, insert values into the database.
        if (isset($_REQUEST['username'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $mobile = $_POST['mobile'];
            $address = $_POST['address'];
            $aadhar = $_POST['aadhar'];
            $dob = $_POST['dob'];
            $query    = "INSERT INTO `volunteer` (`username`, `email`, `password`, `mobile`, `address`, `aadhar`, `dob`) VALUES ('$username', '$email', '$password', '$mobile', '$address', '$aadhar', '$dob')";
            $result   = mysqli_query($con, $query);
            if ($result) {
                echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
            } else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
            }
        } else {
        ?>
            <form class="form" action="" method="post">
                <h1 class="login-title">Register as Volunteer</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" required />
                <input type="text" class="login-input" name="email" placeholder="Email Adress">
                <input type="password" class="login-input" name="password" placeholder="Password">
                <input type="text" class="login-input" name="mobile" placeholder="Mobile">
                <input type="text" class="login-input" name="address" placeholder="Address">
                <input type="text" class="login-input" name="aadhar" placeholder="Aadhar">

                <input type="date" class="login-input" name="dob" placeholder="DOB">
                <input type="submit" name="submit" value="Register" class="login-button">
                <p class="link"><a href="login.php">Click to Login</a></p>
                <p class="link"><a href="registration.php">OR register as senior citizen</a></p>
            </form>
        <?php
        }
        ?>
    </body>

    </html>