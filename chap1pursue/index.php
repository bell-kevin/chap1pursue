<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/ TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Kevin Bell</title>
</head>
<body>
		<!-- Script 1.1 - template.html 
		<h1>Welcome to SDEV 2520!</h1>
		<p>This paragraph was generated using HTML.</p>
		<?php
		echo '<p> This paragraph was generated using PHP!<p>';
		?>
		-->
		<!-- define the values of some string variables -->
		<?php
		$first_name = 'Kevin';
		$last_name = 'Bell';
		$address = '123 Main Street';
		$city = 'Anytown';
		$state = 'UT';
		$zip = '12345';
		?>
		<!-- print the values of the string variables Use double quotation marks in the echo or print statement that outputs the values -->
		<?php
		echo "<p>$first_name $last_name<br />
		$address<br />
		$city, $state $zip</p>";
		?>
		<!-- include a link to my website bellKevin.me that will open a new tab -->
		<?php
		echo "<p>Visit my website at <a href=\"http://bellkevin.me\" target=\"_blank\">bellKevin.me</a></p>";
		?>
		<!-- print the values of the string variables Use single quotation marks and concatenation instead of double quotation marks -->
		<p><?php echo $first_name . ' ' . $last_name; ?></p>
		<p><?php echo $address; ?></p>
		<p><?php echo $city . ', ' . $state . ' ' . $zip; ?></p>
		<!-- include a link to my github at  www.github.com/bell-kevin that will open a new tab -->
		<p>Visit my github at <a href="https://www.github.com/bell-kevin" target="_blank">github.com/bell-kevin</a></p>
		<!-- defines, manipulates, and displays the values of some numeric variables -->
		<?php
		$quantity = 30;
		$price = 119.95;
		$taxrate = .05;
		$total = $quantity * $price;
		$total = $total + ($total * $taxrate);
		?>
		<!-- print the values of the numeric variables -->
		<?php
		echo "<p>You are purchasing <strong>$quantity</strong> widget(s) at a cost of <strong>\$$price</strong> each. With tax, the total comes to <strong>\$$total</strong>.</p>";
		?>
		

</body>
</html>