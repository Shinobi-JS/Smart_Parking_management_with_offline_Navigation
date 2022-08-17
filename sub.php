
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".\CSS\cssforsub.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="para"> 
        
  <div class="prob">
  <h1 class="head">Parking 
  </div>

</div class="contain">

   <div class="wrapper">
       <div class="basic">
            <h1>Basic</h1>
            <div class="price">
                <h2>₹ 99/-</h2>
            </div>
            <div class="deals">
            <h4>Duration:20 min</h4>
                <h4>Charges after 20 min: Rs 40</h4>
                        
            </div>
            <a href="http://localhost/krib/paytm/TxnTest.php?product=basic">BUY Now</a>
       </div>
       <div class="basic">
            <h1>Standard</h1>
            <div class="price">
                <h2>₹ 199/-</h2>
            </div>
            <div class="deals">
            <h4>Duration:40 min</h4>
                <h4>Charges after 20 min: Rs 50</h4>
                        
            </div>
            <a href="http://localhost/krib/paytm/TxnTest.php?product=standard">Buy Now</a>
       </div>
       <div class="basic">
            <h1>Premium</h1>
            <div class="price">
                <h2>₹ 399/-</h2>
            </div>
            <div class="deals">
            <h4>Duration:60 min</h4>
                <h4>Charges after 20 min: Rs 60</h4>
                         
            </div>
            <a href="http://localhost/krib/paytm/TxnTest.php?product=premium">Buy Now</a>
       </div>
   </div>
   <p id="return"> <a href="page.php">Cancel</a></p>


</body>
</html>