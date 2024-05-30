<?php 
$success=0;
$user=0;



//C ONFIRMING IF MY SERVER REQUEST IS POST
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    //PASSING THE FORM DATA
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql="select * from `registration` where username='$username'";
    $result = mysqli_query($con,$sql);
    if($result){
        //WILL COUNT THE NUMBER OF ROWS IN OUR DATABASE AND CONFIRMS IF ONLY ONE INSTANCE OF A USERNAME IS PRESENT
        $num=mysqli_num_rows($result);
        if($num==1){
            //echo "User Already Exists";
            $user=1;
            header('location:login.php');
        }else{
            $sql="INSERT INTO `registration`(username,password) values('$username','$password ')"; 
            $result=mysqli_query($con,$sql);
            if($result){
                //echo "Sign Up Successful";
                $success=1;
            }else{
                die(mysqli_error($con));
            }
        }
     }
}
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  </body>

<?php
//CODE WILL EXECUTE IF USER EXISTS
if($user){
     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
     <strong>Uhh Ooh!</strong> This user already exists
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
}
?>

<?php
//CODE WILL EXECUTE IF USER HAS SIGNED UP SUCCESSFULLY
if($success){
     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>Hurray!! </strong> You have successfully siged up
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>';
}
?>

    
  
  
  
  <h1 class="text-center" >Sign Up Page</h1>

  <div class="container mt-5">
  <form action="sign.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your username" name="username">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-2">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password">
  </div>
  <div class="mb-3 form-check">
    
  </div>
  <button type="submit" class="btn btn-primary w-100">Sign Up</button>
</form>
  </div>
</html>