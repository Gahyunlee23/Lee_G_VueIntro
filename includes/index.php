<?php 
ini_set('display_errors',1);
    require('functions.php');

    if (isset($_GET['user'])) {
        $user = getUser();
    }

    echo json_encode($user);