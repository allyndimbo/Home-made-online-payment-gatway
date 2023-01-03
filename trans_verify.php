
<!DOCTYPE html>
<html>
<title>Secure Payment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<br>
  <br>
  <center>
  <div style="width:500px;">
<div class="w3-card-4">

  <div class="w3-container w3-brown">
    <h2>Secure Payment Powered By TechTube</h2>
  </div>
  <br>
  <br>
  <form class="w3-container" action="index.php"  method="POST">
    <p class="w3-left">      
    <label class="w3-text-black"><b> 
    <?php
    include("conn.php");
        $trans_ref = mysqli_real_escape_string($conn, $_POST['trans_ref']);
        $sql = "SELECT gw_message_id FROM payments where gw_message like 'Utambulisho wa Muamala: $trans_ref%' ";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <label class='w3-text-black'><b> Imepokelewa : <b class="w3-red"><?php echo $row['gw_message_id']; ?></b>, Malipo yako yamethibitishwa Ahsante kwa kutumia Huduma zetu.!</b>
                
                <?php
            }
        } else {
           ?>
           <label class='w3-text-black'><b> Samahani, Malipo yako hayaja Kamilika,</b>
          
           <?php
        }
        
        mysqli_close($conn);
    ?>

    </b></label>
    <br>
    <br>
    <p>
    <button class="w3-btn w3-brown">Cancel</button></p>
  </form>
</div>

</body>
</html> 







