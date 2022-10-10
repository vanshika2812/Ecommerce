<?php
include('../includes/connect.php');
include('../functions/common_function.php');




?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="en">
        
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>User Registration</title>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
             integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous"  referrerpolicy="no-referrer" />
</head>
<body>
<div class="container-fluid my-3">
    <h2 class="text-center">New User Registration</h2>
   <body class="bg-light">
    <div class="container mt-3">
        
        <form action="" method="post" enctype="multipart/form-data">
          
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_name" class="form-label">User name</label>
                <input type="text" name="user_name" id="user_name" class="form-control" 
                placeholder="enter user name" autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="email" class="form-label">E-mail address</label>
                <input type="text" name="E-mail" id="E-mail" class="form-control" 
                placeholder="enter e-mail address" autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" id="password" class="form-control" 
                placeholder="enter password" autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="text" name="confirm_password" id="confirm_password" class="form-control" 
                placeholder="confirm password" autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <label for="address" class="form-label">Delivery address</label>
                <input type="text" name="address" id="address" class="form-control" 
                placeholder="enter Delivery address" autocomplete="off" required="required">
                </div>
                <div class="form-outline mb-4 w-50 m-auto">
                <label for="contact" class="form-label">Contact Number</label>
                <input type="text" name="contact" id="contact" class="form-control" 
                placeholder="enter Phone Number " autocomplete="off" required="required">
           
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="Register" class="btn btn-dark text-light mb-3 px-3" value="Login">
                <p>Already have an account? <a href="userlogin.php">Login</a></p>
            </input>
            </div>


</form>
    
            
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['Register'])){
    $user_username=$_POST['user_name'];
    $user_email=$_POST['E-mail'];
    $user_password=$_POST['password'];
    $hash_password=password_hash($user_password,PASSWORD_DEFAULT);
    $user_confirm=$_POST['confirm_password'];
    $user_address=$_POST['address'];
    $user_contact=$_POST['contact'];
    $user_ip=getIPAddress();
    $select_query="Select * from `user_table` where user_name=' $user_username'or user_email='$user_email'" ;
    $result=mysqli_query($con,$select_query);
    $rows_count=mysqli_num_rows($result);
    if($rows_count>0){
        echo"<script>alert('username and email already exist')</script>";
    }else if(  $user_password!=$user_confirm){
            echo"<script>alert('Passwords do not match')</script>";
    }
    else{
    $insert_query="insert into `user_table`(user_name, user_email, user_password,
    user_address, user_contact) values ('$user_username' ,
    '$user_email', '$hash_password','$user_address','$user_contact')";
    $sql_execute=mysqli_query($con,$insert_query);
    }



    

}



?>