<?php
      if(isset( $_POST['email'])){
        $email = $_POST['email'];
        $pass =  $_POST['password'];
          require_once "./module/Account.php";
        $acccout = new Account();
        $access = $acccout->login($email,$pass);
        if($access === 0)  echo '<script>alert("Sign in failed, account and password is  wrong.....")</script>';
        else{
            $_SESSION['email'] = $access;
            echo '<script>window.location="./";</script>';
        }
      }
    ?>