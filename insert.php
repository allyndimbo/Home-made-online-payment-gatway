<?php 
include("conn.php");

$sql11 = "INSERT INTO payments (gw_provider, gw_message, gw_timestamp, gw_message_id, gw_sentto, gw_device_id) VALUES ('$from', '$message', '$sent_timestamp', '$message_id', '$sent_to', '$device_id')";

    if (mysqli_query($conn, $sql11)) {
        
        include("verify.php");
        
    } 

    else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }



?>