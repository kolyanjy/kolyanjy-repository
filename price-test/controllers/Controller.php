<?php

class Controller
{
    public static function init(){
        $model = new Price();
        $data = $model->getPrice();
        self::render('view.php', $data);
    }

    public static function render($layout, $data = null)
    {
        if (file_exists("views/{$layout}")) {
            require_once("views/{$layout}");
            return;
        }
        echo "404 NOT FOUND";
    }
}