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

if(isset($_POST['createAccount'])){
   $surname =$_POST['surname'];
    $firstname = $_POST['firstname'];
    $othername = $_POST ['othername'];
    $contactPhone = $_POST['contactPhone'];
    $email = $_POST ['email'];
    $username = $_POST ['username'];
    
    if(isset($_POST['password'])  && isset($_POST['confirmPassword'])){
        
 // if($_REQUEST['password'] ==  $_REQUEST['confirmPassword']){
      $password = $_POST['password'];
     $confPassword = $_POST['confirmPassword'];
  //}
         if($password == $confPassword){
             if($checkUser = "SELECT username from students Where username= '$username'"){
                 $usnmsg ='Username Already Taken';
             }
             else {
            
             $query = "INSERT INTO students (surname, firstname, othername, contactPhone, email,username, password) VALUES ('$surname', '$firstname', '$othername', '$contactPhone', '$email', '$username', '$password')";
    if(!$query=mysqli_query($con,$query)){
        
        $err_msg ='Server Busy, Check Your Connection/contact Our Admin'.mysqli_error($con);
    }
    else {
        header ('location:login.php?msg=Account Created Successfully, Please logIn to Your DashBaord to Complete your Application');
    }
    }
         
        
    
    
    
    
}
        else {
           // header('location:register.php?msg=Password Does not Match');
          $msg = 'Password Does not Match';
        }
    }
}
?>

<!DOCTYPE html>
<html data-brackets-id='1'>
    
    <head data-brackets-id='2'>
        <meta data-brackets-id='3' charset="utf-8">
        <meta data-brackets-id='4' http-equiv="X-UA-Compatible" content="IE=edge">
        <title data-brackets-id='5'>COLLEGE OF HEALTH SCIENCE, AND TECHNOLOGY, Ile-Abiye, Ado-Ekiti</title>
        <meta data-brackets-id='6' name="description" content="An Online aApplication for Ile-Abiye College of Health Science and Technology">
        <link data-brackets-id='7' rel="stylesheet" href="main.css">
    </head>
    <body data-brackets-id='8'>
       
        <h1 data-brackets-id='9' style="text-align:center; font-size:39px;">
                <img  class="logo" src="img/logo.jpg"   width="120px" height="100px"  style="margin-top: -20px; padding:5px;" alt="College of Health Science Technology, Ile-Abiye, Ado -Ekiti" align="left"> 
        
             &nbsp; &nbsp;COLLEGE OF HEALTH SCIENCE, AND TECHNOLOGY, Ile-Abiye, Ado-Ekiti</h1>
        <br />
        <h2 data-brackets-id='10'>Online APPlication for 2020/2021 Admission</h2>
        
        <!--
            COLLEGE OF HEALTH SCIENCE, AND TECHNOLOGY, Ile-Abiye, Ado-Ekiti
        -->
        
        <p data-brackets-id='11'>
           The College of Health Science and technology, Ile-Abiye, Ado-Ekiti, is Inviting suitable and qualified Candidate for Admission into Full-Time and Part-Time program into the College of Health Science and Technology, Ile-Abiye, Ado-Ekiti. Ekiti State, Nigeria.
            Addmission are also available into various departments as follows:
        </p>
        
        <!--
            Online APPlication for 2020/2021 Admission
        -->
        <p data-brackets-id='12'>
            <em data-brackets-id='13'>Medical laboratory Technology.</em>
            <table width="80%" align="center">
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    
                       <tr><td colspan="2">
                        <p style="color:red;">
                            <?php 
                            if(isset($err_msg)){
                                 echo $err_msg;
                            }
                                   
                                
                            ?></p></td></tr>
                        
                            <tr><td><label>Surname: </label></td><td><input type="text" name="surname" value="<?php if(isset($_POST['surname'])){ echo ($_POST['surname']); }?>" required> </input></td></tr>
                             <tr><td><label>FirstName: </label></td><td><input type="text" name="firstname" value="<?php if(isset($_POST['firstname'])){ echo ($_POST['firstname']); }?>" required> </input></td></tr>
                            <tr><td><label>OtherName: </label></td><td><input type="text" name="othername" value="<?php if(isset($_POST['othername'])){ echo ($_POST['othername']); } ?>" required> </input></td></tr>
                            <tr><td><label>Contact Phone: </label></td><td><input type="text" name="contactPhone" value="<?php if(isset($_POST['contactPhone'])){ echo ($_POST['contactPhone']); } ?>" required> </input></td></tr>
                            <tr><td><label>Email: </label></td><td><input type="text" name="email" value="<?php if(isset($_POST['email'])){ echo ($_POST['email']); } ?>" required> </input></td></tr>
                            <tr><td><label>Username: </label></td><td><input type="text" name="username" value="<?php if(isset($_POST['surname'])){ echo ($_POST['username']); } ?>" required> <span style="color:red; font-size:12px;"><?php if(isset($usnmsg)){
                                    echo $usnmsg;
                                } ?> </input></td></tr>
                            <tr><td><label>Password: </label></td><td><input type="text" name="password" value="<?php if(isset($_POST['surname'])){ echo ($_POST['password']); } ?>" required> </input></td></tr>
                            <tr><td><label>Confirm Password: </label></td><td><input type="text" name="confirmPassword" value="" required> <span style="color:red; font-size:12px;"><?php if(isset($msg)){
                                    echo $msg;
                                } ?></span> </input></td></tr>
                            <tr><td colspan="2" align="center"><button type="submit" name="createAccount" value="CreateAccount"> Create Account</button></td></tr>
                            <tr><td colspan="2" align="center">Already Have an Account,  <a href= "login.php" target="_blank">Login </a> to Your DashBoard</button></td></tr>

                                            </form>
        </table>
        </p>
        
        <!--
            GET STARTED WITH YOUR OWN FILES
        -->
       <footer>
        <h3 data-brackets-id='14'>COLLEGE OF HEALTH SCIENCE, AND TECHNOLOGY, Ile-Abiye, Ado-Ekiti</h3>
        <p data-brackets-id='15'>
           
        </p>
        
        <samp data-brackets-id='16'>
           Copyright 2020, COHST, ILE-ABIYE &copy;, ADO-EKITI, Allright reserved
        </samp>
        
        <!--
            THE RELATIONSHIP BETWEEN HTML, CSS AND JAVASCRIPT
        -->
        <h3 data-brackets-id='17'><a href="login.html" target="_top">Home</a> || <a href="index.html" target="_blank">Visit main Site</a> || <a href="index.html" target="_blank">About Us</a </h3>
        <p data-brackets-id='18'>
           
        </p>
        
       
      </footer>
       
      
    </body>
</html>