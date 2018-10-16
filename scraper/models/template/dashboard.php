<?php
    session_start();
    if(session_id() == "" || !isset($_SESSION['login'])){
        header("Location: ../../index.php");
        exit;
    } else{
    
    include "../../views/header.php";
    include "../../views/content/dashboard.php";
    include "../../views/footer.php";


    }
?>