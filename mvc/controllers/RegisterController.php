<?php

class RegisterController extends Controller
{
    public function actionIndex()
    {
        $this->view->render("main.php", "content/register.php");
    }

    public function actionNew()
    {
        $this->model = new RegisterModel();
        $this->model->register();
        $this->view->render("main.php", "content/successful.php");
    }
}
