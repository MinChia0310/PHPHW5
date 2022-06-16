<?php
session_start();
if(isset($_SESSION['login'])){
    if($_SESSION['login']=="admin"){
        header('Location:admin.php');
    }
    else if ($_SESSION['login']=="user"){
        header('Location:register.php');

    }//else{
        //header('Location:false.php');
        //exit();
    //}
}else{
    echo"登入失敗";
    exit();

}