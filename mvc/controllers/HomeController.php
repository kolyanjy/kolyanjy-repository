<?php

class HomeController extends Controller
{
    public function actionIndex() {
        $this->view->render("main.php", "content/home.php");
    }
}