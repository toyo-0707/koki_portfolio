<?php
  require_once '../class/User.php';
  $user = new User();
  session_start();

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $user->createUser($first_name, $last_name, $username, $password);

  }elseif(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $login = $user->login($username, $password);
  
    if($login){
      $_SESSION['login_id'] = $login['user_id'];
      $_SESSION['status'] = $login['status'];
      
      if($login['status'] == "A"){
        header("Location: ../view/adminhome.php");
      }elseif($login['status'] == "U"){
        // header("Location: ../view/home.php");
        echo "<script>window.location='../view/home.php';</script>";
      }
     
    }else{
      echo "Incorrect Username or Password";
        
    }
  }

  

    
    
  
?>