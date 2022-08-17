

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href=".\Css\style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <button class="mybtn">

<a class="navbar-brand" href="index.php"><img src="https://img.icons8.com/color/48/000000/google-compute-engine.png"/><span class="turbo" >TurBo</span></a>
</button>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="navigation.php">Navigation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="advpaym.php">Advance Booking</a>
        </li>
        
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- table begin -->
<h1 class="text-primary text-center mt-5 mb-2" > SMART PARKING MANAGEMENT</h1>
<div class="container">

<table class="table caption-top">
  <!-- <caption>List of users</caption> -->
  <thead>
    <tr>
      <th scope="col">SNo.</th>
      <th scope="col">Number Plate</th>
      <th scope="col">Token No.</th>
      <th scope="col">Parking Slot</th>
      <th scope="col"> Delete</th>
    </tr>
  </thead>
  <tbody id="container">
 
  </tbody>
</table>

</div>
<!-- table ends -->



<div class="contain">
<div class="uploadform">
<form method="POST" id="theForm" enctype="multipart/form-data">
 
      
        
        <p class="mt-3 h4 " >Choose Image file:</p>
        <input type="file" onclick class="mt-1" name="uploadImg" id="uploadImg" required >
        <br>
        <input type="submit" class="mt-2 btn btn-primary" value="SCAN"  name="submit">


    </form>
</div>
</div>

<!-- form ends -->

  
    <?php
    // $item='./images/one.jpg';
    
    // $tmp = shell_exec("python pyweb.py $item ");
   
if(isset($_POST['submit']))
{
// $file_name=$_FILES['upload']['tmp_name'];
// $file=$_FILES['upload']['name'];
$file_img=$_FILES['uploadImg']['tmp_name'];
$fileImg=$_FILES['uploadImg']['name'];
// $path ="../uploads/".$file;
$pathImg ="../uploads/".$fileImg;



?>
<script>
  

  // let arr4=["A1","A2","A3","A4","A5","A6","A7","A8","A9","A10","A11"]
  // localStorage.setItem('Pslot',JSON.stringify(arr4))
  // let cc =[];
  // localStorage.setItem('Pslot_avail',JSON.stringify(cc));

  let counter= parseInt(localStorage.getItem('count'))
  if(counter<2){
    console.log("Warning: SLots Almost full");
  }
  let arr3 = JSON.parse(localStorage.getItem('Pslot'))
  let file = "<?php echo $fileImg ?> ";
  
  let str = '';
  
  var i=4
  while (file[i]!='f') {
    str+= file[i]
    i++;
  }
let p=0;

  console.log(str);
  let obj = {
    platenum: str,
    tk:  (parseInt(localStorage.getItem('token'))+1),
    Ps: arr3[counter-1]
    
  }




function populate(){
let  notes = localStorage.getItem('Parking')

if(notes==null){
  arr2 = []
}
else{
  arr2 = JSON.parse(notes)
}
for (let index = 0; index < arr2.length; index++) {
  if(arr2[index]["platenum"]==str){
    p=1;
  }
  
}
if(p==0){
  arr2.push(obj)

localStorage.setItem('Parking',JSON.stringify(arr2))
localStorage.setItem('token',JSON.stringify(parseInt(localStorage.getItem('token'))+1))
localStorage.setItem('count',JSON.stringify(parseInt(localStorage.getItem('count'))-1))
}
else{
  bookStore = JSON.parse(localStorage.getItem("Parking"))
    bookStore = bookStore.filter((element)=> element.platenum!=str)
localStorage.setItem('Parking',JSON.stringify(bookStore))


// localStorage.setItem('token',JSON.stringify(parseInt(localStorage.getItem('token'))+1))
localStorage.setItem('count',JSON.stringify(parseInt(localStorage.getItem('count'))+1))
}
}
populate()

// function check(){
//     bookStore = JSON.parse(localStorage.getItem("Parking"))
//     bookStore = bookStore.filter((element)=> element.platenum!=str)
// localStorage.setItem('Parking',JSON.stringify(bookStore))



//   }
//   check()

</script>
<?php 


}

    

    ?>






<script>

  
function show(){

  notes = localStorage.getItem('Parking')

if(notes==null){
  arr2 = []
}
else{
  arr2 = JSON.parse(notes)
}

  let sno =1
  str1=""
  for (let index = 0; index < arr2.length; index++) {
  
  str1+=  `
  
  <tr id="${index}" >
      <th scope="row">${sno}</th>
      <td>${arr2[index].platenum}</td>
      <td>${arr2[index].tk}</td>
      <td>${arr2[index].Ps}</td>
      <td><button class="btn-warning"  onclick="deleteMyBook(this.id)" >remove</button></td>
    </tr>
  
  `
  sno++;
  
}
document.getElementById("container").innerHTML=str1

}
show()
function deleteMyBook(id){
  console.log("sdnmz");
    bookStore = JSON.parse(localStorage.getItem("Parking"))
    bookStore.splice(id,1);
    localStorage.setItem('Parking',JSON.stringify(bookStore));
localStorage.setItem('count',JSON.stringify(parseInt(localStorage.getItem('count'))+1))

   show()
    

}

  
</script>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->











    <script src="./Js/jsForPage.js"></script>
  </body>
</html>