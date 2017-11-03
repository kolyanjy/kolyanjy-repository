<?php
$result ='';
foreach ($data as $good) {
    $result .= "<div class='col-md-4'>
        <div>{$good['name']}</div>
        <div>{$good['price']}</div>
        <img src=/public/images/goods/{$good['image_path']} height='64' width='64'>
    <form action='/goods/characteristic' method='post'>
        <input type='hidden' value={$good['id']} name='char_id'>
        <input type='submit' value='Description' class='btn btn-default'>
    </form>
    </div>";
}
?>
<div class="container text-center">
    <?php echo $result; ?>
</div>
