<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
        table, td, th {
            border: solid 1px #000;
            padding: 4px;
        }
    </style>
</head>
<body>
<?php
$products = "<table align='center'>
    <thead>
        <tr>
            <th>Наименование</th>
            <th>Описание</th>
            <th>Номер документа</th>
            <th>Дата документа</th>
            <th>Цена</th>
        </tr>
    </thead>
    <tbody>
";
foreach ($data as $product) {
    if (!$product['status']){
        $product['price'] = 'price is not define';
    }

    $products .= "<tr>
                <td>{$product['title']}</td>
                <td>{$product['description']}</td>
                <td>{$product['doc_id']}</td>
                <td>{$product['datetime']}</td>
                <td>{$product['price']}</td>
            </tr>";
}
$products .= "</tbody></table>";
echo $products;
?>
</body>
</html>