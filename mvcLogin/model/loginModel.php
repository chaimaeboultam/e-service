<?php
function connect_database(){
    $hostname = 'localhost'; 
    $username = 'shaimae';
    $password = 'login123'; 
    $database = 'service';

    $connect = mysqli_connect($hostname, $username, $password, $database);

    // Check connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
    
    return $connect;
}
function givingData($email){
    $connection = connect_database();
    
    // Sanitize user input
    $email = mysqli_real_escape_string($connection, $email);
    
    // Query to fetch user data for the provided email
    $sql = "SELECT email, motDePasse, role FROM `authetification` WHERE email = '$email'";
    $result = mysqli_query($connection, $sql);
    
    if (!$result) {
        die("Query failed: " . mysqli_error($connection));
    }
    
    $user = mysqli_fetch_assoc($result);
    
    return $user;
}




?>
