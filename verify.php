<?php 
$sql2 = "INSERT INTO verifications (gw_provider, gw_message_id) VALUES ('$from', '$message_id')";
     if (mysqli_query($conn, $sql2)) {
          echo "Success";    
          
          $resps = "Success -> ".$message_id." : ".$message;
          $myFile = "test.txt";
          $fh = fopen($myFile, 'a') or die("can't open file");
          @fwrite($fh, $resps);
          @fclose($fh);
     } 
?>