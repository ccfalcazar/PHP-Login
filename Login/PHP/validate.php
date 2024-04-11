<?php
session_start();
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$servername = "localhost:3310";
$dbUserName = "root";
$dbPassword = "password";
$dbname = "databaseName";

Try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbUserName, $dbPassword);

    $sqlCommand = "SELECT * FROM agatesql.usercredentials where Username = '$UserName' AND Password like binary '$Password'";
    $result = $conn->query($sqlCommand);
    if($result->rowCount() === 1)
    {
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['user'] = $UserName;
        echo('<h6 class="lead text-center text-success">Connected Successfully!</h6>');
    }
    else
        echo('<h6 class="text-center font-weight-bold text-white bg-danger pb-1 lead">Wrong Username or Password!</h6>');
}
catch (PDOException $e)
    {
        echo("Connection Failed!<br>" .$e->getMessage());
    }
?>