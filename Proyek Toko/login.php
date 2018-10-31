<?php
    
    ob_start();
    session_start();
    ob_end_clean();

	$iusername = $_POST['iusername'];
    $ipassword = $_POST['ipassword'];
    
    if($iusername=="admin" AND $ipassword=="admin")
    {
        $_SESSION["username"]=$iusername;
        header("location:siap.php");
    }else{
        echo 'Login Error';
    }
?>