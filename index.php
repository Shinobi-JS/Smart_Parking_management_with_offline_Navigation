

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
    
    <title>PARKING Management System</title>
</head>

<body>
    <div class="banner-area">
    <header>
           <div class="menu">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">User</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

        </header>
        <div class="banner-text">
            <h1>PARKING Management System</h1>
            <p class="des ">Welcome to our platform. We have made Custom Tailored smart parking management system to help big shopping mall firms and their users to reduce if not totally eliminate the troubles of find and managing parking slots </p>
            <!-- <a href="#">Admin</a>
            <a href="#">Watch More</a> -->
            
 
        </div>


    </div>

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="modal-box">
                <!-- Button trigger modal -->
               
                <div class="div_buttn">
                <button type="button" class="btn btn-primary btn_pos btn-lg show-modal" data-toggle="modal" data-target="#myModal">
                  Admin
                </button>
                <button type="button" class="btn btn-primary btn_pos btn-lg show-modal" onclick="myFunction1()" >
                  user
                </button>
                </div>
 
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <h3 class="title">Admin Login</h3>
                                <p class="description">Please Provide The Valid credentials</p>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="email" id="user" class="form-control" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fas fa-key"></i></span>
                                    <input type="password" id="pwd" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox">
                                    <label>Remamber me</label>
                                </div>
                                <a href="" class="forgot-pass">Forgot Password?</a>
                                <button class="btn" onclick="myFunction()" >Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction(){
    var user = document.getElementById("user").value;
    var pwd = document.getElementById("pwd").value;
    console.log(user);
    console.log(pwd);
    if (user=="admin" && pwd==1234) {
        location.replace('./page.php');
    }
    else{
        alert("Invalid Credentials")
    }
}
function myFunction1(){
   
        location.replace('./navigation.php');
    
    
}
</script>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

