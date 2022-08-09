<?php
  $connection =  mysqli_connect("localhost", "root","");
  $db = mysqli_select_db($connection, "unifydb");

  if(!$connection)
  {
    die("Connection Failed: " . mysqli_connect_error());
  }

  if(isset($_POST['Submit']))
  {
    $name = $_POST['name'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $password = $_POST['password'];


    $query="INSERT INTO users (name,uname,email,password,uid) VALUES ('$name','$uname','$email','$password','$uid')";
    $query_run = mysqli_query($connection, $query);


    if($query_run)
    {
      echo '<script> alert("Account Created"); </script>';
      header('Location: index.php');
    }
    else
    {
      echo '<script> alert("Account Not Created"); </script>';
    }
  }
  ?>
