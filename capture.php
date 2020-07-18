<?php
$connection = mysqli_connect("localhost", "id14348677_emailcapture","4p!c(fdOwqSndl[-", "id14348677_capture");

if(isset($_POST['submit'])){
   
    $userEmail = $_POST['email'];
    $userEmail = mysqli_real_escape_string($connection, $userEmail);

    $query = "INSERT INTO useremails (email) VALUES ('$userEmail')";

    $result = mysqli_query($connection, $query);
    
    echo "<script type='text/javascript'>
   window.location.pathname = 'landingPage' </script>";

}

    
