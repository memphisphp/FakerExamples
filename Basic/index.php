<?php
/**
 * Basic Faker Example
 */
date_default_timezone_set('America/Chicago');

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();
?>
<html>
<head>
    <title>Basic Faker Example</title>
</head>
<body>
<h2>Basic Personal Info</h2>
<strong>
    Name:
</strong>
<?php echo $faker->name; ?> <br />
<strong>
    Address:
</strong>
<?php echo $faker->address; ?> <br />
<strong>
    Profile:
</strong>
<?php echo $faker->text; ?> <br />

<h2>Payment Info</h2>
<strong>
    Name:
</strong>
<?php echo $faker->name; ?> <br />
<strong>
    Address:
</strong>
<?php echo $faker->address; ?> <br />
<strong>
    Credit Cart Number:
</strong>
<?php echo $faker->creditCardNumber; ?> Exp: <?php echo $faker->creditCardExpirationDateString; ?> <br />
<strong>
    Credit Cart Type:
</strong>
<?php echo $faker->creditCardType; ?> <br />

<h2>Internet Info</h2>
<strong>
    Email:
</strong>
<?php echo $faker->email; ?> <br />
<strong>
    UserName:
</strong>
<?php echo $faker->userName; ?> <br />
<strong>
    IPv4:
</strong>
<?php echo $faker->ipv4; ?> <br />
<strong>
    IPv6:
</strong>
<?php echo $faker->ipv6; ?> <br />

<h2>Images</h2>
<?php
$dir = 'images';
$width = '100';
$height = '100';
$category = 'cats';
?>
<img src="<?php echo $faker->image($dir, $width, $height, $category); ?>"> <br />
<?php
$width = '200';
$height = '200';
$category = 'technics';
?>
<img src="<?php echo $faker->image($dir, $width, $height, $category); ?>">
</body>
</html>