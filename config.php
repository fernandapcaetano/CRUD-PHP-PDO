<?php

    $db_name = 'crudphp';
    $db_host = 'localhost:3306';
    $db_user = 'root';
    $db_pass = '';


    $pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_pass);
