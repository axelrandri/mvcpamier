 <form action="" method="post">
    <h1>Ajouter un Article</h1>
    <label for="title">Ajouter le titre de l'article</label>
    <input type="text" name="title">
    <label for="content">Ajouter le contenu de l'article</label>
    <textarea name="content" cols="30" rows="10"></textarea>
    <label for="creation_date">Ajouter la date de l'article</label>
    <input type="date" name="creation_date">
    <input type="submit" value="Ajouter" name="submit">
    <p id="error"><?=$error?></p>
</form>
