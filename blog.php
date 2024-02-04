<?php

   

    

    $title = isset($_POST["title"]) ? $_POST["title"] : "";
    $blogtext = isset($_POST["blogtext"]) ? $_POST["blogtext"] : "";

    if (!empty($title) && !empty($blogtext)) {
        $conn = new mysqli('localhost','root','','blogs');

        $sql = "INSERT INTO blogtable(date, time, title, blogtext) VALUES(CURDATE(), CURTIME(), '$title', '$blogtext')";


        if($conn->query($sql) === TRUE){
            header("Location: viewblog.php");
            
        }
        else{
            echo "Error:".sql."<br>".$conn->error;
        }
    }
    else {
        echo "<script src='space.js'></script>";
        
    }



?>