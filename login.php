<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>

<body>
    <h1>Login form</h1>
    <form method="POST" action="login.php">
        <label for="email">Email address:</label></br>
        <input type="email" placeholder="Email address" name="email" required>
        </br></br>
        <label for="password">Password:</label></br>
        <input type="password" placeholder="Password" name="password" required>
        </br></br>
        <input type="submit" value="Login">
    </form>

    <?php
if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
    // Validate form inputs
    $email = trim( $_POST['email'] );
    $password = trim( $_POST['password'] );

    if ( empty( $email ) || empty( $password )) {
        echo "Please fill out all fields";
        exit;
    }

    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        echo "Invalid email format";
        exit;
    }

    if ( $email === $_COOKIE['UserEmail'] && $password === $_COOKIE['UserPass'] ) {
    // Login successful, redirect to welcome page
    session_start();
    $loggedIn = $_SESSION["loggedIn"] = true;
    setcookie( "loggedIn", $loggedIn, time() + 3600 );
    header( 'Location: welcome.php');
    exit();
    }
    else{
        echo "User info didn't matched";
    }
}
?>

</body>

</html>