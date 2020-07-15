<?php
$connection = mysqli_connect('localhost', 'root','', 'email-list');

if(isset($_POST['submit'])){
    // $userName = $_POST['name'];
    // $userName = mysqli_real_escape_string($connection, $userName);
    $userEmail = $_POST['email'];
    $userEmail = mysqli_real_escape_string($connection, $userEmail);

    $query = "INSERT INTO capture (email) VALUES ('$userEmail')";

    $result = mysqli_query($connection, $query);
}