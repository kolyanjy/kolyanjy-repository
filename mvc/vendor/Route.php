<?php

class Route
{
    public static function init()
    {
        //получение элементов УРЛ
        $base_url = $_SERVER['REQUEST_URI'];
        $base_url_arr = explode('/', $base_url);

        // дефолтные значения контроллера модели и метода
        $controller_name = 'home';
        $model_name = 'home';
        $action_name = 'index';

        if (!empty($base_url_arr[1])) {
            $controller_name = $base_url_arr[1];
            $model_name = $base_url_arr[1];
        }

        if (!empty($base_url_arr[2])) {
            $action_name = $base_url_arr[2];
        }

        $controller_full_name = ucfirst(strtolower($controller_name)) . 'Controller';
        $model_full_name = ucfirst(strtolower($model_name)) . 'Model';
        $action_full_name = 'action' . ucfirst(strtolower($action_name));

        $controller_path = "controllers/$controller_full_name.php";
        $model_path = "models/$model_full_name.php";

        if (file_exists($model_path)) {
            include $model_path;
        }

        if (file_exists($controller_path)) {
            include $controller_path;
        }
        $controller = new $controller_full_name;

        if (method_exists($controller, $action_full_name)) {
            $controller->$action_full_name();
        }
    }
}