<?php
    header('Content-Type: application/json');

    if(empty($_SESSION['csrf_token'])){
        $_SESSION['csrf_token']=bin2hex(random_bytes(32));
    }

    $header = apache_request_headers();
    if(isset($header['Csrf-Token'])){
        if($header['Csrf-Token'] !== $_SESSION['csrf_token']){
            exit(json_encode(['error' => 'Wrong CSRF token.']));
        }
    } else {
        exit (json_encode(['error' => 'No CSRF token.']));
    }
?>