<?php

use model\Manager\CategoryManager;
use model\Manager\ArticleManager;

$CategoryManager = new CategoryManager($db);
$ArticleManager = new ArticleManager($db);

// on récupère les catégories pour le menu
$categoryMenu = $CategoryManager->selectAll();

// on récupère tous les articles qui sont visibles avec 250 caractères
$allArticles = $ArticleManager->selectAll();
// vue de la base
include PROJECT_DIRECTORY."/view/public.view/public.homepage.php";