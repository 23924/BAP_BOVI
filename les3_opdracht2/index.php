<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="input">
    <input type="submit" name="submit" value="GO!">


</form>
<?php
$input = $_POST['input'];
$str_length = strlen($input);
$str_ucfirst = ucfirst($input);
$str_toupper = strtoupper($input);
$str_subcount  = substr_count($input, " ");
$str_pos = stripos($input, " ");
echo '<p>'. "De String heeft zoveel lengte".'</p>';
echo '<p>' . $str_length. '</p>';
echo '<p>'. "We veranderen het eerste letter naar een hoofdletter".'</p>';
echo '<p>' . $str_ucfirst. '</p>';
echo '<p>'. "We veranderen alles naar hoofdletters".'</p>';
echo '<p>' . $str_toupper. '</p>';
echo '<p>'. "Aantal spaties".'</p>';
echo '<p>' . $str_subcount. '</p>';
echo '<p>'. "Er zit een spatie op positie".'</p>';
echo '<p>' . $str_pos. '</p>';
?>
</body>
</html>