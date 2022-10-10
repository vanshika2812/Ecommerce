<?php
include('../includes/connect.php');
include('../functions/common_function.php');
@session_start();



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="en">
        
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title>User Login</title>
            <!-- CSS only -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
             integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
            crossorigin="anonymous"  referrerpolicy="no-referrer" />
            <style>
                body{
                    overflow-x:hidden
                }
                </style>
                
</head>
<body>
<div class="container-fluid my-3">
    <h2 class="text-center">User Login</h2>
   <body class="bg-light">
    <div class="container mt-3">
        
        <form action="" method="post" enctype="multipart/form-data">
          
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="user_name" class="form-label">User name</label>
                <input type="text" name="user_name" id="user_name" class="form-control" 
                placeholder="enter user name" autocomplete="off" required="required">
            </div>

          
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" id="password" class="form-control" 
                placeholder="enter password" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="login" class="btn btn-dark text-light mb-3 px-3" value="Login">
                <p>Do not have an account? <a href="user_registration.php">Register</a></p>
            </input>
            </div>
</form>
<?php
if(isset($_POST['login'])){
    $user_username=$_POST['user_name'];
    $user_password=$_POST['password'];
    $select_query="Select * from `user_table` where 
    user_name='$user_username'";
    $result=mysqli_query($con,$select_query);
    $row_count=mysqli_num_rows($result);
    $row_data=mysqli_fetch_assoc($result);
   

    if($row_count>0){
        if( password_verify($user_password ,$row_data['user_password'])){
            echo "<script>alert('You have loggen in successfully')</script>";
            echo "<script>window.open('payment.php','_self')</script>";
        }else{
            echo "<script>alert('Invalid Credentials')</script>";
        }

    }else{
        echo "<script>alert('Invalid Credentials')</script>";
    }

    

}
?>