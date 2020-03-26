<?php
    #Esvaziar array SESSION e redirecionar para página de login
    session_start();
    session_destroy();
    header('Location: index.php');
    
?>