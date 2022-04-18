<?php
require ('functions.php');
if($login){
    header('https://remitademo.net/remita/exapp/api/v1/send/api/echannelsvc/echannel/mandate/setup');
}
else {
    header('location:login.php?msg = You Have not Selected an Applu=ication to Pay For');
    }


?>