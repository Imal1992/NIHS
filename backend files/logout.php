<?php   
session_start();  /* Starts a session */

    $_SESSION=array(); 
    /* Creates an array to store sessions */
    if(isset($_COOKIE[session_name()])){ /* Check the cookies */
        setcookie(session_name(),'',time()-42000,'/');   /* Set time=-42000 to destroy the session */
    }

    unset($_SESSION['isLoggedIn']);
    unset($_SESSION['adminLoggedIn']);
    session_destroy();
header("location: ../pages/signin.php"); /* If the session destroyed redirect to newlog.php */
exit();
?>