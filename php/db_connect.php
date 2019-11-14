<?php

    $db_host = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "web_design_iv";

    try{

        $connect = new PDO("mysql:host=$db_host;dbname=$db_name", $db_username, $db_password);
        // echo "
        //     <script>console.log('Connected to the database $db_name');</script>
        // ";


    }catch(PDOException $e){
        $message = $e -> getMessage();
        echo "
            <script>console.log('Cannot connect to the database $message');</script>
        ";
    }

    
?>