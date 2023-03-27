<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h1>
        <?php
        if ( isset( $_COOKIE['loggedIn'] ) && ($_COOKIE['UserEmail'] ) && ($_COOKIE['UserPass'] ) && $_COOKIE['loggedIn'] == 1 ) {
            echo "Welcome ";
            echo $_COOKIE['UserName'];
        }
        else{
            echo "User not Found Please try again later";
        }
        ?>
    </h1>
</body>
</html>