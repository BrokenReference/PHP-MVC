<?php
/*
* @File: init.php
* @Author: Nathan Wright
* @Created 04-05-17
* @Last modified: 04-05-17
*
* Copyright (C) Nathan Wright  - All Rights Reserved - https://nathanwright.me/
* Unauthorized copying of this file, via any medium is strictly prohibited
* without the express permission of Nathan "ArrogantBread" Wright
*/

spl_autoload_register(function ($className) {
    $dir = __DIR__;
    //--- replace namespace separator with directory separator
    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);

    //--- get full name of file containing the required class
    $file = "{$dir}/{$className}.php";

    require_once __DIR__ . '/' . $className . '.php';
});