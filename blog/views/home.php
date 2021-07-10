<?php
    if (isset($_GET['status'])) {
        $status = $_GET['status'];

        if ('success' === $status) {
            $output = <<<'OUTPUT'
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Félicitations! L'article a bien été sauvegardé</strong>.
            </div>
OUTPUT;
            echo $output;
        } else {
            $output = <<<'OUTPUT'
            <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Oooops! Problème lors de la sauvegarde...</strong>
            </div>
OUTPUT;
            echo $output;
        }
    }
        ?>


<h2>Home Page</h2>


<div class="container" style="display:flex; flex-direction:column; justify-content:center; align-items:center;">

    <!-- form bootstrap -->
    <form action="process.php" method="post">
        <fieldset>
            <legend>Ajouter un article</legend>
            <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Titre</label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext" name="title">
            </div>
            </div>
            <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Description</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </fieldset>
    </form>

    <div>
        <?php
            // récuperer les posts dans la bdd
            $fileContent = file_get_contents('./db.json');

            // convertir le json en tableau associatif
            $posts = array_reverse(json_decode($fileContent, true));
            // echo '<pre>';
            // print_r($posts);
            // echo '</pre>';

            // on vérifie s'il y a des posts
            if (count($posts) > 0) {
                // boucler sur le tableau
                foreach ($posts as $array) {
                    // echo '<pre>';
                    // print_r($array);
                    // echo '</pre>';
                    $content = <<<POST
                <div class="card mb-3">
                    <h3 class="card-header">{$array['postTitle']}</h3>
                    <div class="card-body">
                        <h5 class="card-title">{$array['id']}</h5>
                    </div>
                    <img src="//unsplash.it/400"/>
                    <div class="card-body">
                        <p class="card-text">{$array['postDescription']}</p>
                        <a href="single.php?id={$array['id']}" class="btn btn-primary">Read</a>
                    </div>
                    <div class="card-footer text-muted">
                        Publié le : 2 days ago
                    </div>
                </div>
POST;
                    echo $content;
                }
            } else {
                // s'il n'y a pas de post
                $content = <<<'POST'
                <div>
                    <p>Aucun article publié pour l'instant. Ecrivez le premier...</p>
                </div>
POST;
                echo $content;
            }

        ?>
    </div>
    
</div>