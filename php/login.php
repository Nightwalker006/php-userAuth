<?php
if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $password = $_POST["password"];

loginUser($email, $password);

}

function loginUser($email, $password){
    
    
    if (($open = fopen("..\\storage\\users.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data;
    }
  
    fclose($open);
  }

  if($email != $array[1][0] or $password != $array[2][0]){
    header("Location: ..\\forms\\login.html");
    die();
  };
  session_start();
  $_SESSION["username"] = $array[0][0];
  header("Location: ..\\dashboard.php");
  die();


}



