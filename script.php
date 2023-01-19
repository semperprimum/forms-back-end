<?php
$country = $_POST['country'] ?? null;
$days = $_POST['days'] ?? null;
$hasDiscount = $_POST['discount'] ?? null;

$baseCost = $days * 400;

switch ($country) {
    case 1:
        $baseCost *= 1.1;
        break;
    case 2:
        $baseCost *= 1.12;
        break;
}

if ($hasDiscount) {
    $baseCost *= 0.95;
}

echo "Цена вашего отдыха $" . $baseCost;