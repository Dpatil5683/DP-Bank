<?php
  $servername = "localhost";
    $username = "id19284786_dpdata";
    $password = ">8ES-{w=3LI0kJNW";
    $database = "id19284786_bankdata";
    
    // Create a database connection
    $con = mysqli_connect($servername, $username, $password, $database);

    // Check for connection success

    if (!$con) { 
    echo "Connection Error". PHP_EOL; 
    echo "Error Code: ". mysqli_connect_errno().PHP_EOL; 
    echo "Error: Description".mysqli_connect_error().PHP_EOL; }
    else
        echo"comleted";
?>