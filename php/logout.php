<?php
function logout(){
    
    
    session_unset();
    session_abort();
    header("Location: ..\\forms\\login.html");
    die();

    
}

echo "HANDLE THIS PAGE";
