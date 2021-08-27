<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of autoload
 *
 * @author PALIGO DEH EUGENE
 */
function autoload($classname) {

    if (file_exists($file = __DIR__ . '/../service/' . $classname . '.php')) {
        require $file;
    }

    if (file_exists($file = __DIR__ . '/../module/global/controller/' . $classname . '.php')) {

        require $file;
    }
}

spl_autoload_register('autoload');
