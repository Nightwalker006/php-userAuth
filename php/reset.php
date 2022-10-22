<?php
if(isset($_POST['submit'])){
    $email = //complete this;
    $newpassword = //complete this;

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    
    
    if (($open = fopen("..\\storage\\users.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data;
    }
  
    fclose($open);
  }

  if ($email !== $array[1][0]){
    echo "User does not exist";
  }
  $myfile = fopen("..\storage\\users.csv", "w") or die("Unable to open file!");
    $txt = $array[0][0] ."\n";
    fwrite($myfile,$txt);
    $txt = $array[1][0] ."\n";
    fwrite($myfile,$txt);
    $txt = $password ."\n";
    fwrite($myfile,$txt);
    fclose($myfile);

    
}
echo "HANDLE THIS PAGE";


