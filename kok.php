<?php
// Определяем ассоциативный массив с информацией о товарах (название => количество)
$products = array(
    "Молоко" => 15,
    "Хлеб" => 8,
    "Яйца" => 20,
    "Масло" => 5,
    "Сахар" => 12
);

// Инициализируем массив для хранения информации о товарах с количеством меньше 10
$lowStockProducts = array();

// Проходим по массиву и находим товары с количеством меньше 10
foreach ($products as $product => $quantity) {
    if ($quantity < 10) {
        $lowStockProducts[$product] = $quantity;
    }
}

// Выводим информацию о товарах с количеством меньше 10
echo "Товары с количеством меньше 10 штук:\n";
foreach ($lowStockProducts as $product => $quantity) {
    echo "$product: $quantity штук\n";
}
?>