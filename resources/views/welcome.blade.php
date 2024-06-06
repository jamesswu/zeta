<?php

$name = "ivy";
$day = 'Monday';
$greeting = "hello";

if ($name !== '') {
  $greeting = 'welcome back, ' . $name . '.';
}

$stock = 5;

if ($stock > 0) {
  $message = 'in stock';
} else {
  $message = 'sold out';
}

$offer = [
  'item' => 'Chocolate',
  'qty' => 5,
  'price' => 5,
  'discount' => 4,
];

$usual_price = $offer['qty'] * $offer['price'];
$offer_price = $offer['qty'] * $offer['discount'];
$saving = $usual_price - $offer_price;

switch ($day) {
  case 'Monday':
    $offerstr = '20% off chocolates';
    break;
  case "Tuesday":
    $offerstr = '20% off mints';
    break;
  default:
    $offerstr = 'Buy three packs, get one free';
    break;
}


$counter = 1;
$packs = 5;
$price = 1.99;

?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
  </head>
  <body>
    <p class="text-blue-500">hello <?= $name ?></p>
    <p><?= $greeting ?></p>
    <p>save <?= $saving ?></p>

    <p><?= $offer['item']?> is <?= $message = ($offer['qty'] > 0) ? 'in stock' : 'sold out' ?></p>
    <p><?= $day?></p>
    <p><?= $offerstr ?></p>
    <p>
      <?php
        while ($counter <= $packs) {
          echo $counter;
          echo ' packs cost $';
          echo $price * $counter;
          echo '<br>';
          $counter++;
        }
      ?>
    </p>
    <p>
      <?php
        for ($i = 10; $i <= 100; $i = $i+10) {
          echo $i;
          echo ' packs cost $';
          echo $price*$i;
          echo '<br>';
        }
      ?>
    </p>
  </body>
</html>
