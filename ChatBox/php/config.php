<?php 
    $conn = mysqli_connect("127.0.0.1", "root", "", "chatbox");
    if(!$conn) {
        echo "Database is not connected :(";
    }
?>