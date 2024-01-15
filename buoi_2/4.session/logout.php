<?php 
    require('init_session.php');

    unset($_SESSION['id']);
    unset($_SESSION['name']);

    header('Location: index.php');
?>