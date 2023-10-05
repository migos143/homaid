<?php 

    session_start();
    include "../Backend/users.php";

    $method = $_POST['method'];
    if(function_exists($method)){
        call_user_func($method);
    }
    else{
        echo 'Function not exists';
    }

    function register(){
        $user = new users();
        echo $user->register($_POST['Firstname'],$_POST['Lastname'],$_POST['Username'],$_POST['Password'],$_POST['picture'], $_POST['validId'], $_POST['role']);
    }

    function login(){
        $user = new users();
        echo $user->login($_POST['username'],$_POST['password']);
    }

?>