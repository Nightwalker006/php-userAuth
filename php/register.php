<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    
    
    $myfile = fopen("..\storage\\users.csv", "w") or die("Unable to open file!");
    $txt = $username ."\n";
    fwrite($myfile,$txt);
    $txt = $email ."\n";
    fwrite($myfile,$txt);
    $txt = $password ."\n";
    fwrite($myfile,$txt);
    fclose($myfile);

    
}
echo "User Successfully registered";


