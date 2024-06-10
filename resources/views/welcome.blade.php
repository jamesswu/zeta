<?php

$logged_in = true;

if ($logged_in == false) {
	header('Location: login.php');
	exit;
}

// $cities = [
// 	'London' => '48 Store Street, WC1E 7BS',
// 	'Sydney' => '151 Oxford Street, 2021',
// 	'NYC' => '1242 7th Street, 10492',
// ];

// $city = $_GET['city'] ?? '';
// $valid = array_key_exists($city, $cities);
// if (!$valid) {
// 	http_response_code(404);
// 	header('Location: page-not-found.php');
// 	exit;
// }
// $address = $cities[$city];

 
	// if ($_SERVER['REQUEST_METHID'] == 'POST') {
	// 	$term = $_POST['term'];
	// 	echo 'you searched for ' . htmlspecialchars($term);
	// }

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
		<h2>sanitizing example</h2>
		<a href="xss-1.php?msg=<script src=js/bad.js></script>">LINK TO DEMONSTRATE XSS</a>
		<?php $message1 = $_GET['msg'] ?? 'Click link at top of page'; ?> 
		<?php
			function html_escape(string $string): string {
				return htmlspecialchars($string,ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
			}
			$message = $_GET['msg'] ?? 'click the link above';
		?>
		<p><?= html_escape($message) ?></p>

		<br>
		<h2>form example</h2>
		<form action="index.php" method="POST">
			<p>Email: <input class="border rounded-md" type="email" name="email"></p>
			<p>Age: <input class="border rounded-md" type="number" name="age"></p>
			<p>
				<input type="checkbox" name="terms" value="true">
				I agree to the terms and conditions.
			</p>
			<input type="submit" value="Save">
		</form>
		<pre><?php var_dump($_POST); ?></pre>
	</body>
	<?php 
		// include '/Users/jameswu/repo/zeta/resources/views/includes/footer.php' 
		include '../resources/views/includes/footer.php' 
	?>
</html>
