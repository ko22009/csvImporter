<?php

namespace csvImporter\App;
use Exception;

try {
    $csv = File::read();
}
catch(Exception $e)
{
    echo 'Ошибка: ',  $e->getMessage(), "\n";
    exit();
}

try {
    $user_id = (int) $_SESSION['user_id'];
} catch (Exception $e)
{
    echo 'Ошибка: Неверный идентификатор пользователя', "\n";
    exit();
}

$product = new ProductModel();
$output = ['update' => 0, 'create' => 0, 'error' => 0];
foreach ($csv as $elem)
{
    $id = $elem[0];
    $name = $elem[1];
    $name_trans = $elem[2];
    $price = $elem[3];
    $small_text = $elem[4];
    $big_text = $elem[5];
    $_product = ['id' => $id, 'name' => $name, 'name_trans' => $name_trans, 'price' => $price, 'small_text' => $small_text, 'big_text' => $big_text];
    if($product->is_exist($id)) {
        if ($product->is_own($id, $user_id))
        {
            if($product->update($_product)) $output['update']++;
            else $output['error']++;
        } else $output['error']++;
    } else {
        if($product->create($_product, $user_id)) $output['create']++;
        else $output['error']++;
    }
}

echo 'Создано: ' . $output['create'] . ', обновлено: ' . $output['update'] . ', с ошибкой: ' . $output['error'];