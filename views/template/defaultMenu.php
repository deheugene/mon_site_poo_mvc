<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<header class="px-2 bg-dark text-white">
    <div class="container-fluid">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <nav class="col navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand d-none d-md-block" href="index.php">
                    <img src="public/images/brand/logo.png" width="50" height="50" alt="Site logo"> &nbsp;&nbsp; Mon site POO et MVC
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($link) && $link==0) {echo 'active';} ?>" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($link) && $link==1) {echo 'active';} ?>" href="index.php?action=articles">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($link) && $link==2) {echo 'active';} ?>" href="index.php?action=personnages">Personnages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($link) && $link==3) {echo 'active';} ?>" href="index.php?action=monuments">Monument/Places Historiques</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($link) && $link==4) {echo 'active';} ?>" href="index.php?action=vestiges">Vestiges</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?php if (isset($link) && $link==5) {echo 'active';} ?>" href="index.php?action=contact">Contactez-nous</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <ul class="nav">
                <li class="nav-item"><a href="index.php?action=login" class="nav-link text-white px-2">Login</a></li>
                <li class="nav-item"><a href="index.php?action=register" class="nav-link text-white px-2">Sign up</a></li>
            </ul>
        </div>
    </div>
</header>
