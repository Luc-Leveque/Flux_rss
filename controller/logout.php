<?php
    setcookie("user","", time() - 3600);
    session_start();
    session_destroy();
    header("location:index?page=login");   
?>