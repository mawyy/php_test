<?php

$amis = ["Sami <3", "Rémy", "Manu"];

// echo "Mes amis sont : <br>";

// $i = 0;
// echo $amis[$i].'<br>';
// $i = 1;
// echo $amis[$i].'<br>';
// $i = 2;
// echo $amis[$i].'<br>';

?>

<?php
$tailleTab = count ($amis);
for ($i = 0; $i<$tailleTab; $i++){
    echo $amis[$i] . " ";
}

?>
