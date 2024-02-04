<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "logindb";

    $conn = new mysqli($servername, $username, $password, $db_name);

    //if($conn->connect_error){
    //    die("Connection failed".$conn->connect_error);
    //}
    //echo "";

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $sql = "select * from login where username = '$username' and password = '$password'";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    if($username == "" && $password == ""){
        header("Location: login.html");

    }
    if($row['username'] == $username && $row['password'] == $password){
        session_start();
        $_SESSION['Passwordd'] = $password;
        header("Location: addpost.php");
    }
    else{
        
                echo "<script src='warning.js'></script>";
                echo "<script src='log2.js'></script>";
            }
       
    

?>