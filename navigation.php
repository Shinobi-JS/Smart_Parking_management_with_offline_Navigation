
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=".\CSS\cssfornav.css">
    <title></title>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="mybtn">

      <a class="navbar-brand" href="#"><img src="https://img.icons8.com/color/48/000000/google-compute-engine.png"/><span class="turbo" >TurBo</span></a>
    </button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="page.php">Home</a>
        </li>
      
        <li class="nav-item">
        <a class="nav-link" href="advpaym.php">Advance Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" id="mynum" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="myslot()">Search</button>
        <script>
          function myslot(){
    var plate = document.getElementById("mynum").value;

    var btt = JSON.parse(localStorage.getItem("Parking"))
    btt = btt.filter((element)=> element.platenum==plate)
    // console.log(bookstore[0]["platenum"]);
    // console.log(bookstore[0]["Ps"]);
    // alert(bookstore[0]["Ps"])
    // alert(btt[0]["Ps"]);
    console.log(btt);
    if(btt.length>0){
      document.getElementById("pn").innerText=`Plate No: ${btt[0]["platenum"]}`;
      document.getElementById("sl").innerText=`Parking slot:${btt[0]["Ps"]}`;
      document.getElementById("tk").innerText=`Token No: ${btt[0]["tk"]}`;

    }
    else{
      document.getElementById("body").innerText="Not a valid Plate number, Please try again."
    }
          }

        </script>
      </form>
    </div>
  </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Parking slot info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="body">
        <p class="plate" id="pn"></p>
        <p class="slot" id="sl"></p>
        <p class="token" id="tk"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- table begin -->
<h1 class="text-center text-primary m-3 pp" >Navigation <button class="btn btn-warning ml-5" id="real" >No. of Available slots:</button></h1>
<!--  -->
<script>
  setInterval(function(){
    let realcount= parseInt(localStorage.getItem('count'))
    document.getElementById("real").innerText= ` No. of Available slots: ${realcount}`;
    
  }, 1000);

</script>


<div class="main pt-3 pb-3">
    <!--  -->
    <div class="start m-2">
    <div class="btn-group ">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Starting point
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><button class="dropdown-item" type="button">entry</button></li>
   
  </ul>
</div>
    </div>

<!--  -->
<!--  -->
<div class="end">
    <div class="btn-group ">
    <button type="button" class="btn btn-secondary dropdown-toggle" id="des" data-bs-toggle="dropdown" aria-expanded="false">
    Destination      
  </button>
  <ul class="dropdown-menu dropdown-menu-end">
    <li><button class="dropdown-item" id="A5" type="button">A1</button></li>
    <li><button class="dropdown-item" id="A6" type="button">A2</button></li>
    <li><button class="dropdown-item" id="A7" type="button">A3</button></li>
    <li><button class="dropdown-item" id="A8" type="button">A4</button></li>
    <li><button class="dropdown-item" id="A9" type="button">A5</button></li>
    <li><button class="dropdown-item" id="A10" type="button">A6</button></li>
    <li><button class="dropdown-item" id="A11" type="button">A7</button></li>
    <li><button class="dropdown-item" id="A12" type="button">A8</button></li>
    <li><button class="dropdown-item" id="A13" type="button">A9</button></li>
    <li><button class="dropdown-item" id="A14" type="button">A10</button></li>
    <li><button class="dropdown-item" id="A15" type="button">A11</button></li>
    
  </ul>
    </div>
</div>



<!--  -->

</div>

<div class="img">
    <div class="imgs">
        <img src="./parking_images/PARKING/A5.jpeg" id="I5" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A6.jpeg" id="I6" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A7.jpeg" id="I7" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A8.jpeg" id="I8" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A9.jpeg" id="I9" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A10.jpeg" id="I10" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A11.jpeg" id="I11" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A12.jpeg" id="I12" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A13.jpeg" id="I13" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A14.jpeg" id="I14" alt="">
    </div>
    <div class="imgs">
        <img src="./parking_images/PARKING/A15.jpeg" id="I15" alt="not found">
    </div>

</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

<div class="body_footer">

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="social-icon__item"><a class="social-icon__link" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="#">About</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Team</a></li>
      <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

    </ul>
    <p>&copy;2021 TurBo | ECE4003 EMBEDDED SYSTEM DESIGN PROJECT</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</div>









    
    <script src="./Js/jsForImg.js"></script>
  </body>
</html>