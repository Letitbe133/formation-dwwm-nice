<?php

// on vérifie si l'id du post existe et si elle n'est pas vide
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // on stocke l'id
    $id = $_GET['id'];

    // on recherche le post dans la liste des posts
    $currentPost = null;

    foreach ($posts as $post) {
        if ($post['id'] === $id) {
            $currentPost = $post;
        }
    }
    if ($post) { ?>
    <div class="container-fluid">
        <div class="card mb-3">
            <h3 class="card-header"><?php echo $currentPost['postTitle']; ?></h3>
            <div class="card-body">
                <h5 class="card-title"><?php echo $currentPost['id']; ?></h5>
            </div>
            <img src="//unsplash.it/400"/>
            <div class="card-body">
                <p class="card-text"><?php echo $currentPost['postDescription']; ?></p>
                <a href="index.php" class="btn btn-primary">Back to list</a>
            </div>
            <div class="card-footer text-muted">
                Publié le : 2 days ago
            </div>
        </div>
    </div>
    <?php }
}
