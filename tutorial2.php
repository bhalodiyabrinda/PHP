<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="tutorial2.php" method="post">
    <h2>Registration Form</h2>
        First Name:
        <input type="text" name="firstname" id="firstname">
        <br>
        Last Name:
        <input type="text" name="lastname" id="lastname">
        <br>
        Email:
        <input type="email" name="email" id="email">
        <br>
        Password:
        <input type="password" name="password" id="password">
        <br>
        <button type="submit" name="btn">Submit</button>
    </form>
</body>
</html>
<?php
    if (isset($_POST["btn"])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];  

        echo 'firstname is: '.$firstname."<br>";
        echo 'lastname is: '.$lastname."<br>";
        echo 'email is: '.$email."<br>";
        echo 'password is: '.$password;

    }
?>
