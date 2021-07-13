<?php

$accountBook = [
    "food" => 0,
    "book" => 0,
    "hobby" => 0,
    "moving" => 0,
];

$spendingList = [
    "food 500",
    "book 1000",
    "hobby 3000",
    "food 400",
    "moving 1000",
    "food 400",
    "book 800",
    "hobby 1500",
    "moving 2000", 

];

foreach ($spendingList as $spending) {
    [$accountName, $price] = explode(" ",$spending);
    
    $accountBook[$accountName] += $price;
    // var_dump($accountBook);
}

echo "8月の家計簿(支出)"."<br>";

foreach ($accountBook as $accountName => $price) {
    echo $accountName .":".number_format($price)."円です。"."<br>";
}

?>