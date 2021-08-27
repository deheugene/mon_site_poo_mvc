<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor
-->
<?php ob_start(); ?>

<div class="pde-form-register col-11 col-lg-5 m-auto" >
    <form action="action" method="get">
        <input type="hidden" id="id" name="id" value="value"/>

        <div class="row mb-2">
            <div class="col-lg-4">Nom utilisateur <span class="text-danger">*</span></div>
            <div class="col-12 col-lg-8"><input type="text" name="userName" placeholder="Nom utilisateur" class="form-control"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-4">Email<span class="text-danger">*</span></div> 
            <div class="col-12 col-lg-8"><input type="email" name="email" placeholder="Email" class="form-control"/>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col-lg-4">Mot de passe<span class="text-danger">*</span></div> 
            <div class="col-12 col-lg-8"><input type="password" name="password" placeholder="Votre mot de passe" class="form-control"/>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-4">Confirmer mot de passe<span class="text-danger">*</span></div> 
            <div class="col-12 col-lg-8"><input type="password" name="passwordConfirm" placeholder="Confirmation mot de passe" class="form-control"/>
            </div>
        </div>
        
        <div class="mt-1">
              <input type="submit" value="Submit" class="btn btn-primary"/></div>
        </div> 
    </form> 
</div>

<?php $title = 'Création du compte'; ?>
<?php $content = ob_get_clean(); ?>
<?php require("views" . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "defaultTemplate.php"); ?>