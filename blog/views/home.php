<h2>Home Page</h2>

<h3>Créer un article</h3>

<div class="container" style="display:flex; justify-content:center;">

    <form action="process.php" method="post" style="display: flex; flex-direction:column; align-items:center; gap:1rem;">
        <input type="text" name="title" placeholder="Entrez le titre" required>
        <textarea name="description" cols="30" rows="10" placeholder="Entrez une description" required></textarea>
        <input type="submit" name="submit" value="Sauvegarder">

    </form>
</div>