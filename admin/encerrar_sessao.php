<?php 

    session_start();

    session_destroy();

    header('location: /CRUD_LPWEBI_TRABALHO/publico/index.php');

?>