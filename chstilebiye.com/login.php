<?php
require_once('conections.php');
$username = '';
$password = '';
$err_msg = '';

if(isset($_REQUEST['createAccount'])){
  
    $username = $_REQUEST ['username'];
        
      $password = $_REQUEST['password']; 
  
    
    $query = "Select username From  students  WHERE username= '$username' AND password = '$password'";
    if(!$query=mysqli_query($con,$query)){
        $err_msg='User Not Found:  '.mysqli_error($con);
       
        }
   
    else {
         if($results = mysqli_num_rows($query) ==1){
            
           // header('location:login.php?err_msg=$err_msg');
             
           // echo $err_msg=  'User Found in The DataBase';
            while ($results=mysqli_fetch_array($results,$con)){
                 $username = $resulsts['surname'];
                 
             }
       header ('location:dashBoard.php?msg=' . $username);
    }
        else {
            $err_msg = "No reccord Found for The User account, Check Your Username and Password is correct" . mysql_error();
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
                <img  class="logo" src="img/logo.jpg"   width="120px" height="100px"  style="margin-top: -15px; padding:5px;" alt="College of Health Science Technology, Ile-Abiye, Ado -Ekiti" align="left"> 
        
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
                    <form method="post" action="login.php">
                            <tr>
                        <td colspan="2">
                            <p style="color:red;">
                            <?php 
                                    echo $err_msg;
                                if(isset($_GET['msg'])){
                                    echo $_GET['msg'];
                                }
                            ?>
                            </p></td></tr>
                            <tr><td><label>Username: </label></td><td><input type="text" name="username" value="" required> </input></td></tr>
                            <tr><td><label>Password: </label></td><td><input type="text" name="password" value="" required> </input></td></tr>
                            
                            <tr><td colspan="2" align="center"><button type="submit" name="createAccount" value="CreateAccount"> Login Now </button></td></tr>
                            <tr><td colspan="2" align="center">Don't Have an Account Yet?,  <a href= "register.php" target="_blank">Create Account </a> to login to your DashBoard</button></td></tr>

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