<?php
/*
    // on vérifie si on a un paramètre status dans l'url
    // if (isset($_GET['status'])) {
    //     $status = $_GET['status'];

    //     // je vérifie quel le status
    //     if ('success' === $status) {?>
            <!-- <div>
                <p>Votre post a été sauvegardé</p>
            </div> -->
       <?php// } else {?>
            <!-- <div>
                <p>Erreur de sauvegarde</p>
            </div> -->
        <?php
    // }
    // }
    */
    if (isset($_GET['status'])) {
        $status = $_GET['status'];

        if ('success' === $status) {
            $output = <<<'OUTPUT'
            <div>
                <p>Votre post a été sauvegardé</p>
            </div>
OUTPUT;
            echo $output;
        } else {
            $output = <<<'OUTPUT'
            <div>
                <p>Erreur de savuvegarde</p>
            </div>
OUTPUT;
            echo $output;
        }
    }
        ?>


<h2>Home Page</h2>

<h3>Créer un article</h3>

<div class="container" style="display:flex; justify-content:center;">

    <form action="process.php" method="post" style="display: flex; flex-direction:column; align-items:center; gap:1rem;">
        <input type="text" name="title" placeholder="Entrez le titre" required>
        <textarea name="description" cols="30" rows="10" placeholder="Entrez une description" required></textarea>
        <input type="submit" name="submit" value="Sauvegarder">

    </form>
    
</div>