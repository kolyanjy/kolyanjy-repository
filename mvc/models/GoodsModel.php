<?php

class GoodsModel extends Model
{
    public function __construct()
    {
        if (empty($this->connect))
        {
            $this->connect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
        }
    }

    public function getAllCategories()
    {
        $query = "SELECT * FROM categories WHERE is_active = 1";
        $get_categories = mysqli_query($this->connect, $query);
        $result_arr = [];
        while ($row = mysqli_fetch_assoc($get_categories))
        {
            array_push($result_arr, $row);
        }
        return $result_arr;
    }

    public function getsGoodsOfCategory()
    {
        $id = $_POST['cat_id'];
        $query = "SELECT * FROM goods WHERE category_id = {$id}";
        $get_categories = mysqli_query($this->connect, $query);
        $result_arr = [];
        while ($row = mysqli_fetch_assoc($get_categories))
        {
            array_push($result_arr, $row);
        }
        return $result_arr;
    }
    public function getCharacteristic()
    {
        $id = $_POST['char_id'];
        $connect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
        $query = "SELECT * FROM `characteristic` WHERE goods_id = {$id}";
        $get_categories = mysqli_query($connect, $query);
        $result_arr = [];
        while ($row = mysqli_fetch_assoc($get_categories))
        {
            array_push($result_arr, $row);
        }
        return $result_arr;
    }
}