<?php

$sql = "SELECT gw_message_id FROM payments where gw_message_id = '$message_id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_assoc($result)) {
    echo "Transaction Failed repeated transaction ID";

    $resps = "Failed -> ".$message_id." : Transaction Failed repeated transaction ID";
    $myFile = "test.txt";
    $fh = fopen($myFile, 'a') or die("can't open file");
    @fwrite($fh, $resps);
    @fclose($fh);
}
} else {

   include("insert.php");

}

mysqli_close($conn);
?>