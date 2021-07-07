<?php

// on va vérifier qu'on reçoit les données du formulaire
// print_r($_POST);

if (isset($_POST['submit'])) {
    if (!empty($_POST['title']) && !empty($_POST['description'])) {
        // je crée un tableau à partir des données que je reçois

        $post = [
            'id' => uniqid(),
            'postTitle' => $_POST['title'],
            'postDecsription' => $_POST['description'],
        ];

    // il reste à sauver le post dans la bdd
    } else {
        header('Location:index.php');
    }
} else {
    header('Location:index.php');
}
