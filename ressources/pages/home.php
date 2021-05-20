
<?php 
    $l_title = "Accueil";
    $l_description = "Page d'accueil";
?>

<h1>MA HOME PAGE</h1>

<a href="<?= $router->generate('contactez')?>"> Nous contacter</a>
<a href="<?= $router->generate('article', ['id'=>60, "slug"=> "maisonalouer"])?>"> Voir l'article</a>

<?php ob_start(); ?>
    <script>console.log("Page home")</script>
<?php $l_script = ob_get_clean();?>