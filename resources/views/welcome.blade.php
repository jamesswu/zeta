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

$products = [
  'Toffee' => 2.99,
  'Mints' => 1.99,
  'Fudge' => 3.49,
];

function write_logo() {
  echo '<img src= "img/logo.png" alt="Logo"/>';
}

function write_copyright_notice() {
  $year = date('Y');
  echo '&copy; ' . $year;
}

function create_copyright_notice() {
  $year = date('Y');
  $message = '&copy ' . $year;
  return $message;
}

function calculate_cost($price, $quantity) {
  return $price * $quantity;
}

$total = calculate_cost(3,5);

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
		<?php include '../resources/views/includes/header.php' ?>
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
    <h2>Price List</h2>
    <table>
      <tr>
        <th>Item</th>
        <th>Price</th>
      </tr>
      <?php foreach ($products as $item => $price) {?>
        <tr>
          <td><?= $item ?></td>
          <td>$<?= $price ?></td>
        </tr>
       <?php } ?>
    </table>

  </body>
	<?php 
		// include '/Users/jameswu/repo/zeta/resources/views/includes/footer.php' 
		include '../resources/views/includes/footer.php' 
	
	?>
  <footer>
    <?php write_logo(); ?>
    <?php write_copyright_notice(); ?>
    <?= create_copyright_notice(); ?>
  </footer>
</html>
