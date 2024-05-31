<?php 
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'authentication';

//VARIABLS TO CONNECT TO THE DATABASE
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

//VERIFYING IF CONNECTION HAS BEEN MADE
if($con){
    
}else{
    die(mysqli_error($con)); 
}
