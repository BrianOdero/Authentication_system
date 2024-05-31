<?php 
//RESTRICTING USER TO ACCESS HOMER PAGE WITHOUT LOGGING IN FIRST
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
}
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h3>Welcome to the home page, <?php  echo $_SESSION['username']; ?></h3>
    
  </body>
</html>