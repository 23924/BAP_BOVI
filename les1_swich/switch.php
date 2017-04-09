<link rel="stylesheet" type="text/css" href="style.css" />

<div id="wrapper">
<form method="post">
    <input type="text" name="fruit"><br>
    <input type="submit" name="submit" value="Go!">
</form>

<p>You can enter the following fruits;</p>
<ul>
    <li>-Apple</li>
    <li>-Orange</li>
    <li>-Pear</li>
</ul>


<?php

/*$beverage = $_POST['beverage'];

switch($beverage){
    case 'cola': <!--case if (Als dit, dan dit-->
        echo'drink is cola';
        break;
    case 'beer':
        echo ' Drink not allowed!';
        break;
    case 'water':
        echo ' Drink is water';
        break;
    default: <!-- Als niks is gevonden, dan doet ie default-->
        echo 'I dont know what drink that is';
}*/
    $fruit = $_POST['fruit'];

    switch($fruit){
        case 'apple':
            echo"fruit is apple.";
            echo '<img src="img1.jpg" alt="apple_img">';
            break;
        case 'pear':
            echo"fruit is pear.";
            echo '<img src="img3.jpg" alt="pear">';
            break;
        case 'orange':
            echo"fruit is orange.";
            echo '<img src="img2.jpg" alt="orange">';
            break;
        default:
            echo 'I do not know what fruit this is.';
    }
?>
 </div>