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
  <form class="w3-container" action="trans_verify.php"  method="POST">
    <p class="w3-left">      
    <label class="w3-text-black"><b> Tuma Kiasi cha Tzs <?php echo $_POST['amount']; ?> kwenda HaloPesa Lipa No : 083, <br>Baada ya malipo kukamilika andika namba <br>
    ya utambulisho wa muamala kwenye nafasi hapo chini.</b></label>
    <br>
    <br>
    <p>      
    <label class="w3-text-brown w3-left"><b>Utambulisho Wa muamala</b></label>
    <input class="w3-input w3-border w3-sand" name="trans_ref" type="text"></p>
    <p>
    <button class="w3-btn w3-brown">Pay Now</button></p>
  </form>
</div>

</body>
</html> 
