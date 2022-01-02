<?php

namespace MVC\core;

class helpers{

    public static function redirect($path){
        header("LOCATION: DOMANE_NAME".$path);
    }
}