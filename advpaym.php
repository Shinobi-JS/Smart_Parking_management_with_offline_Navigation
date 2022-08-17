<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/cssForadvpay.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
    
<div class="container">
   <div class="c1">
      
      <div class="c11">
         <h1 class="mainhead">Book YOUR SPOT</h1>
         <p class="mainp">Reserve your Parking slot at the ease of your finger tips</p>
      </div>
      <div id="left"><h1 class="s1class"><span>Book </span><span class="su">Now!</span>
      </h1></div>
      <div id="right"><h1 class="s2class"><span>Book</span><span class="su">Now!</span></h1></div>
   </div>
   <div class="c2">
      <form class="signup" method="POST" >
         <h1 class="signup1">Book Your Slot</h1>
         <br><br><br><br>
         <input  name="username" type="text" placeholder="UserName*" class="username"/>

			<input name="password" type="text" placeholder="Mobile No.*" class="username"/>
			
			<input name="email" type="text" placeholder="Plate No.*" class="username"/>
			
         
         <button class="btn" type="submit" name="submit" >Confirm</button>
      </form>
    
      
   </div>
</div>

<script src="./Js/jsForAdvpay.js"></script>
</body>
</html>

<?php 
    include 'connection.php';
    
    if(isset($_POST["submit"])&& !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']))
    {
        
       
        $name=$_POST['username'];
        $pw=$_POST['password'];
        $mob = $_POST['email'];
        $user_search = "select * from advance where PlateNo='$mob' ";
        $query= mysqli_query($con,$user_search);
        $user_count = mysqli_num_rows($query);
        if($user_count==0){
        $insert= "insert into  advance(username,MobileNo,PlateNo) values ('$name','$pw','$mob')";
       
        // mysqli_query($con,$insert);

            if(mysqli_query($con,$insert)){
               
            ?>
            <script>
                 let tempName = "<?php echo $mob?> ";
                 localStorage.setItem('temp',JSON.stringify(tempName))

            location.replace('sub.php');
            </script>
    
            <?php 

                }
            }
        else{
            // echo "username taken";
            ?>
            <script>
            alert("Number Plate exist Taken")
            </script>
            <?php
        }
    }
    ?>