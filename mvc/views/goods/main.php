<?php

$result = '';
foreach ($data as $row) {
    $result .= "
    <form action='/goods/category' method='post'> 
        <input type='hidden' value={$row['id']} name='cat_id'>
        <input type='submit' value={$row['name']} class='btn-default btn'>
    </form>
    ";
}
?>

<div class="container text-center">
    <?php
        echo $result;
    ?>
</div>
