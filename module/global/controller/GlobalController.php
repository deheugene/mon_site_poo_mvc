<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of globalController
 *
 * @author PALIGO DEH EUGENE
 */
class GlobalController {
    public function showView($view) {
        require("views" . DIRECTORY_SEPARATOR ."global". DIRECTORY_SEPARATOR .$view.".php");
    }
}
