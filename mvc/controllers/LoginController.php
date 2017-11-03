<?php

class LoginController extends Controller
{
    public function actionIndex()
    {
        $this->view->render("main.php", "content/login_form.php");
    }

    public function actionAuth()
    {
        $this->model = new LoginModel();
        $data = $this->model->auth();
        $this->view->render("main.php", "content/greeting.php", $data);
    }
}