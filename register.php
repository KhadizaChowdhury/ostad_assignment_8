<?php
if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {
    // Validate form inputs
    $fname = trim( $_POST['fname'] );
    $lname = trim( $_POST['lname'] );
    $email = trim( $_POST['email'] );
    $password = trim( $_POST['password'] );
    $c_password = trim($_POST['c_password'] );

    if ( empty( $fname ) || empty( $lname ) || empty( $email ) || empty( $password ) || empty( $c_password ) ) {
        echo "Please fill out all fields";
        exit;
    }

    if ( $password != $c_password ) {
    echo "Password didn't matched";
    exit;
}

    if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        echo "Invalid email format";
        exit;
    }

    // Start session and set cookie
    session_start();
    $loggedIn = $_SESSION["loggedIn"] = true;
    $_SESSION["fname"] = $fname;
    $_SESSION["email"] = $email;
    $_SESSION["password"] = $password;
    $UserName = $fname;
    $UserEmail = $email;
    $UserPass = $password;

    if ( $_SESSION["loggedIn"] == 1 ) {
        setcookie( "loggedIn", $loggedIn, time() + 3600 );
        setcookie( "UserName", $UserName, time() + 36000000, "/" );
        setcookie( "UserEmail", $UserEmail, time() + 36000000, "/" );
        setcookie( "UserPass", $UserPass, time() + 36000000, "/" );
        
    } else {
        unset( $_COOKIE["loggedIn"] );
    }

    header( "Location: index.php" );
    exit;
}
?>