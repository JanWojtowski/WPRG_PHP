<?php
session_start();
$tab[0] = ['login'=>'Jan','password'=>'xxx'];
if(!isset($_POST['login'])){
   header("location: Form.php");
}
if($_POST['login'] == $tab[0]['login']){
    if($_POST['password'] == $tab[0]['password']){
        $_SESSION['login'] = $_POST['login'];
        header("location: Site.php");
    }
    else{
        header("location: Form.php?problem=1");
    }
}
else{
    header("location: Form.php?problem=1");
}