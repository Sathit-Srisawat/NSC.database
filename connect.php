<?php
    
    error_reporting(0);
    $conn = new mysqli('127.0.0.1', 'root', '', 'ChangeIt');
    if($conn->connect_errno){
        die("Error [".$conn->connect_errno."]" . $conn->connect_error);
    }
?>
