<?php
include ('functions.php');
include ('conections.php');


// Initializing All Vars
$surname ='';
$firstname ='';
$othername ='';
$contactPhone = '';
$email ='';
$username = '';
$password = '';

if(isset($_REQUEST['createAccount'])){
   $surname =$_REQUEST['surname'];
    $firstname = $_REQUEST['firstname'];
    $othername = $_REQUEST ['othername'];
    $contactPhone = $_REQUEST['contactPhone'];
    $email = $_REQUEST ['email'];
    $username = $_REQUEST ['username'];
    
    if(isset($_REQUEST['password'])  && isset($_REQUEST['confirmPassword'])){
        
 // if($_REQUEST['password'] ==  $_REQUEST['confirmPassword']){
      $password = $_REQUEST['password'];
     $confPassword = $_REQUEST['confirmPassword'];
  //}
         if($password == $confPassword){
            
             $query = "INSERT INTO students (surname, firstname, othername, contactPhone, email,username, password) VALUES ('$surname', '$firstname', '$othername', '$contactPhone', '$email', '$username', '$password')";
    if(!$query=mysqli_query($con,$query)){
        echo 'Error In the Query:  '.mysqli_error($con);
    }
    else {
        header ('location:login.php?msg=Account Created Successfully, Please logIn to Your DashBaord to Complete your Application');
    }
    }
         
        else {
            header('location:register.php?msg=Password Does not Match');
          //echo   '<h4>Password Does not Match</h4>';
        }
    
    
    
    
}
}
?>