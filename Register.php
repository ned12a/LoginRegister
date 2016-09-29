<?php
    $con=mysqli_connect("localhost","my_user","my_password","my_db");
    
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $ContactNo = $_POST["ContactNo"];
    
    $statement = mysqli_prepare($con, "INSERT INTO User (name, username, email, password, ContactNo) VALUES (?,?, ?, ?, ?)");
    mysqli_stmt_bind_param($statement, "ssssi", $name, $username, $password ,$ContactNo);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_close($statement);
    
    mysqli_close($con);
?>
