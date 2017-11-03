<?php

class Price
{
    public function getPrice()
    {
        $connect = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASS, DB_NAME);
        $query = "SELECT * 
        FROM `DocPriceBody` INNER JOIN `DocPrice` ON DocPriceBody.doc_id = DocPrice.id
        INNER JOIN `Product` ON DocPriceBody.product_id = Product.id";
        $data = mysqli_query($connect, $query);
        $result = [];
        while($row = mysqli_fetch_assoc($data)){
            array_push($result, $row);
        };
        return $result;
    }
}