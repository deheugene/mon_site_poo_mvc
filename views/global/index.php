<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php ob_start(); ?>

<!-- contenu accueil -->

<?php
/* la variable $title contien le titre de la page */
$title = 'Accueil';
/* la variable $link contien le numéro désignant ce lien de la page comme etant actif */
$link = 0;
?>
<?php $content = ob_get_clean(); ?>
<?php require("views" . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "defaultTemplate.php"); ?>
