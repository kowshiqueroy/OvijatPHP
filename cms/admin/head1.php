<?php  

include_once "../dbconnect.php";

if ($_SESSION['email']=="" OR $_SESSION['role']!="admin"){

    //redirect
    echo "  <script>location.replace('../".$_SESSION['role']."/index.php')</script>";
   die();

}


?>
