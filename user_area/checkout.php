<?php
include('../includes/connect.php');
session_start();


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="en">
        
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>EcommerceWebsite-checkout page</title>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
             integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous"  referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid p-0">
                   
                   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                  <div class="container-fluid">
                 <!-- <img src="./img/logo.jpg"alt="" class="logo">-->
        <a class="navbar-brand" href="#">shopyy</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="display_all.php">Products</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="">Register</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Contact</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#"> </a>
           </li>
   </ul>
           
         <form class="d-flex" action="search_product.php" method="get" >
           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
           <!--<button class="btn btn-outline-light" type="submit">Search</button>-->
           <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
         </form>
       </div>
     </div>
   </nav>
   <nav class="navbar" style="background-color: #e3f2fd;">
       <ul class="navbar-nav me-auto">
           <li class="nav-item">
               <a class="nav-link" href="#">Welcome Guest</a>
   </li>
   <?php
   if(!isset($_SESSION['user_name'])){
    echo"<li class='nav-item'>
    <a class='nav-link' href='./userlogin.php'>Login</a>
</li>";
   }else{
    echo"<li class='nav-item'>
    <a class='nav-link' href='logout.php'>Logout</a>
</li>";
   }


?>
  
   
   </nav>
  
   <div class="bg-light">
       <h3 class="text-center">SHOPYY</h3>
       <p class="text-center">Communication is at the heart of 
           e-commerce and community</p>
   
   </div>
   
   <div class="row px-1">
    <div class="col-md-12">
        <div class="row">
            <?php
if(!isset($_Session['username'])){
    include('userlogin.php');

}else{
    include('payment.php');
}



?>
</div>
</div>
</div>

   
   
                  
                   <div class="bg-dark text-light p-3 text-center">
                       <p>All rights reserved</p>
   </div>
               <!-- JavaScript Bundle with Popper -->
               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
               integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
               crossorigin="anonymous"></script>
                </body>
                </html>
   
</body>

   </html>
