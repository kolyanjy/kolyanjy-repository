<?php

class GoodsController extends Controller
{
    public function actionIndex()
    {
        $this->model = new GoodsModel();
        $data = $this->model->getAllCategories();
        $this->view->render('main.php', 'goods/main.php', $data);
    }

    public function actionCategory()
    {
        $this->model = new GoodsModel();
        $data = $this->model->getsGoodsOfCategory();
        $this->view->render('main.php', 'goods/category.php', $data);
    }
    public function actionCharacteristic()
    {
        $this->model = new GoodsModel();
        $data = $this->model->getCharacteristic();
        $this->view->render('main.php', 'goods/characteristic.php', $data);
    }
}