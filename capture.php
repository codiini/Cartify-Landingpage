<?php
$connection = mysqli_connect('localhost', 'root','', 'email-list');

if(isset($_POST['submit'])){
    $userEmail = $_POST['email'];
    $userEmail = mysqli_real_escape_string($connection, $userEmail);

    $query = "INSERT INTO capture (email) VALUES ('$userEmail')";

    $result = mysqli_query($connection, $query);
  
    echo "<script type='text/javascript'>
   window.location.pathname = 'landingPage' </script>";

    
}