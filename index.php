<?php

$amis = ["Sami <3", "Rémy", "Manu", "MA", 12];

// echo "Mes amis sont : <br>";

// $i = 0;
// echo $amis[$i].'<br>';
// $i = 1;
// echo $amis[$i].'<br>';
// $i = 2;
// echo $amis[$i].'<br>';

?>

<?php
// $tailleTab = count ($amis);
// for ($i = 0; $i<$tailleTab; $i++){
//     echo $amis[$i] . " ";
// }


class Ami {
    public $nom;
    public $prenom;
    public $age;

    function __construct($nomchoisi,$prenomChoisi,$ageChoisi){
        $this->nom = $nomchoisi;
        $this->prenom = $prenomChoisi;
        $this->age = $ageChoisi;
    }

    function affiche(){
        echo "Nom : " . $this->nom . ", prénom : " . $this->prenom . ", age : " . $this->age . "<br>";
    }
}



$sami = new Ami("Balouki", "Sami", 8);
$manu = new Ami("Patrois", "Manu", 10);
$remy = new Ami("Barbe", "Rémy", 10);

$amis = [$manu,$sami,$remy];

$tailleTab = count ($amis);
for ($i = 0; $i<$tailleTab; $i++){
    $amiTmp = $amis[$i];
    $amiTmp->affiche();
}

foreach ($amis as $ami) {
    $ami->affiche();
}

?>
