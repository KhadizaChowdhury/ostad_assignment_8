<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>

<body>
    <?php
    if ( isset( $_COOKIE['loggedIn'] ) && $_COOKIE['loggedIn'] == 1 ) {
        echo "Welcome ";
        echo $_COOKIE['UserName'];
    } else {
        ?>

        <h1>Registration form</h1>
        <form method="POST" action="register.php">
            <label for="fname">First Name:</label></br>
            <input type="text" placeholder="First name" name="fname" required>
            </br></br>
            <label for="lname">Last Name:</label></br>
            <input type="text" placeholder="First name" name="lname" required>
            </br></br>
            <label for="email">Email address:</label></br>
            <input type="email" placeholder="Email address" name="email" required>
            </br></br>
            <label for="password">Password:</label></br>
            <input type="password" placeholder="Password" name="password" required>
            </br></br>
            <label for="c_password">Confirm password:</label></br>
            <input type="password" placeholder="Confirm password" name="c_password" required>
            </br></br>
            <input type="submit" value="Register">
        </form>
    <?php
    }
    ?>
</body>

</html>