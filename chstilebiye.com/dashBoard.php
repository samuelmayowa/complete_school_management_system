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
$userAppl ='';
$applfees ='';
$appType = '';
$accademicSession  ='';

$applMsg='';

if(isset($_GET['msg'])){
         $userAppl = $_GET['msg'];
    $appl = "SELECT surname, firstname, othername, contactPhone, email,accademicSession from students Where username= '$userAppl'";
    
    if($query=mysqli_query($con,$appl)){
                 while ($std=mysqli_fetch_array($query)){
                     
                     $surname = $std['surname'];
                     
                     $firstname = $std['firstname'];
                     $othername = $std['othername'];
                     $contactPhone = $std['contactPhone'];
                     $email = $std['email'];
                     $accademicSession = $std['accademicSession'];
                 }
        
             }
    else {
        $applMsg = 'eror in qeuery'. mysqli_error($con);
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
            <em data-brackets-id='13'>Application Payment.</em>
            <table width="80%" align="center">
                    <form method="post" action="payments.php" >
                        <tr>
                        <td colspan="2" style="color:aqua;"><?php if(isset($applMsg)){
                                    echo $applMsg;
                                } ?></td></tr>
                            <tr><td><label>Surname: </label></td><td><input type="text" name="surname" value="<?php if(isset($surname)){ echo ($surname); }?>"  contenteditable="false" disabled> </input></td></tr>
                             <tr><td><label>FirstName: </label></td><td><input type="text" name="firstname" value="<?php if(isset($firstname)){ echo ($firstname); }?>"  contenteditable="disable" disabled> </input></td></tr>
                            <tr><td><label>OtherName: </label></td><td><input type="text" name="othername" value="<?php if(isset($othername)){ echo ($othername); }?>" contenteditable="false" disabled> </input></td></tr>
                            <tr><td><label>Contact Phone: </label></td><td><input type="text" name="contactPhone" value="<?php if(isset($contactPhone)){ echo ($contactPhone); }?>"  contenteditable="false" disabled> </input></td></tr>
                            <tr><td><label>Email: </label></td><td><input type="text" name="email" value="<?php if(isset($email)){ echo ($email); }?>"  contenteditable="false" disabled> </input></td></tr>
                           
                            <tr><td><label>Accademic Session </label></td><td><input type="text" name="AccademicSession" value="<?php if(isset($accademicSession)){ echo ($accademicSession); }?>" required disabled> </input></td></tr>
                            <tr><td colspan="2" align="center"><button type="submit" name="makePayment" value="CreateAccount"> Procced To Payment</button></td></tr>
                            

                                            </form>
        </table>
        </p>
<p id="19">
Phone: +2348032412480  Email: inquiries@chstileabiye.edu.ng</p>
        
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