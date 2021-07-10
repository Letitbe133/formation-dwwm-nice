<?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // récuperer les posts dans la bdd
    $fileContent = file_get_contents('./db.json');

    // convertir le json en tableau associatif
    $posts = json_decode($fileContent, true);
    // echo '<pre>';
    // print_r($posts);
    // echo '</pre>';

    require_once 'parts/header.php';

    require_once 'views/singlePost.php';

    require_once 'parts/footer.php';
