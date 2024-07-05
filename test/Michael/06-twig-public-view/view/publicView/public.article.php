<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Bloog 1 | <?=$article->getArticleTitle()?></title>
</head>
<body>
    <h1>Bloog 1 | Homepage</h1>
    <?php
    require 'public.menu.php';
    ?>
    <h2>Les derniers articles</h2>

            <article>
                <h3><?= $article->getArticleTitle() ?></h3>
                <p><?= $article->getArticleText() ?></p>
                <p>Publié le <?= $article->getArticleDatePublish() ?> par <?= $article->getUser()->getUserFullName() ?></p>
                <p>Categories:
                    <?php
                        if(is_null($article->getCategories())):
                        ?>
                    Aucune catégorie !
                    <?php
                        else:
                            foreach ($article->getCategories() as $categorie):
                     ?>

                        <a href=".?route=categorie&slug=<?= $categorie->getCategorySlug()?>"><?= $categorie->getCategoryName() ?></a>
                        <?php
                             endforeach;
                        endif;
                    ?>
                </p>
                <p>Nombre de commentaires: <?= $article->getCommentCount() ?></p>
                <hr>
            </article>

</body>
</html>
