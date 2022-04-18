<?php
$hostname = 'lovalhost';
$hostUser = 'root';
$hostPassword = "";
$dbName = 'chstapps'; 

// Establishing Connection To The DataBase Server


function getData($inp){
    if(isset($_POST['$inp'])){
        return $inp;
    }
}

if(isset($_GET['msg'])){
    $login = $_GET['msg'];
}
?>