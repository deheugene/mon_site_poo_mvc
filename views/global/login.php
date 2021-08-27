<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php session_status(); ?>
<?php ob_start(); ?>
<div class="col-12 col-md-3 m-auto m-md-auto p-md-3 pde-form-login">
    <form action="index.php" method="post">
        <h1 class="text-center h3 mb-3 fw-normal">Please sign in</h1>
        <?php
        if (isset($error)) {
            echo "<span class='pde-errors'>$error</span>";
        }
        ?>
        <div class="form-floating">
            <input type="email" name="email_login" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password_login" class="form-control" id="floatingPassword" placeholder="Password" >
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember_me"> Remember me
            </label>
        </div>
        <input type="submit" value="Sign in" class="w-100 btn btn-lg btn-primary">
    </form>
</div>

<?php $title = 'Login'; ?>
<?php $content = ob_get_clean(); ?>
<?php require("views" . DIRECTORY_SEPARATOR . "template" . DIRECTORY_SEPARATOR . "defaultTemplate.php"); ?>