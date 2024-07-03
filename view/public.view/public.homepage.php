<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bloog 1 | Homepage</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Bloog 1 | Homepage</h1>
    <nav>
        <ul>
        <li><a href="./">Accueil</a></li>
            <?php
            foreach ($categoryMenu as $category):
            ?>
            <li><a href="?section=<?=$category->getCategorySlug()?>"><?=$category->getCategoryName()?></a> </li>
            <?php
            endforeach;
            ?>
            <li>Connexion</li>
            <li>Inscription</li>
        </ul>
    </nav>
    <?php
    var_dump($CategoryManager,$categoryMenu,$allArticles);
    ?>
</body>
</html>
