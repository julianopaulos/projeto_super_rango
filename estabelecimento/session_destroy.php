<?php

    if(!isset($_SESSION))
    {
        session_start();
    }

    unset($_SESSION['logado_f']);
    header('location:index.php');
?>
