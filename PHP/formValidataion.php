<?php
    //echo "Hello Php";
    $nameerr = $passerr = "";
    // if(isset($_POST['submit'])){
    //     $username = $_POST['username'];
    //     $pass = $_POST['pass'];

    //     if(strlen($username) <= 8){
    //         echo "Please enter more than 8 characters";
    //     }
    // }
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['username'])){
            $nameerr = "Name is required";
            echo $nameerr;
        }else{
            echo $_POST["username"];
        }

        if(empty($_POST['pass'])){
            $passerr = "Password is required";

        }else{
            echo $_POST["pass"];
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Username* : <input type="text" name="username"><br><br>
        Password*: <input type="password" name="pass" ><br><br>
        <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>