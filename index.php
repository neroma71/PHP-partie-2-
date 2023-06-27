<?php
    $age = 15;

    if($age >= 18){
        echo "<p>Vous êtes majeur</p>";
    }else{
        echo "<p>Vous n'êtes pas majeur</p>";
    }

$isEasy = true;
if($isEasy === true){
    echo "<p>c'est facile </p>";
}else{
    echo "<p>pas facile </p>";
}

$age = 33;
$gender = "homme";
echo "<p>vous êtes ". $gender." et vous avez ". $age."</p>";

$magnitude = 7;
switch($magnitude){
    case 0:
        echo "Micro-séisme impossible à ressentir";
        break;
    case 1:
        echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres";
        break;
    case 2:
        echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        break;
    case 3:
        echo "objets mais ne causant généralement pas de dégats.";
        break;
    case 4:
        echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes";
        break;
    case 5: 
        echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        break;
    case 6: 
        echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        break;
    case 7: 
        echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        break;
    case 8:
        echo " Séisme capable de tout détruire sur une très vaste zone.";
}
    echo "<br /><br />";
$gender = "homme";
if($gender != 'homme'){
    echo "c'est une développeuse";
}else{
    echo "c'est un développeur";
}
echo "<br /><br />";
$isOk = true;
if($isOk == false){
    echo "c'est pas bon";
}else{
    echo "c'est ok";
}
echo "<br /><br />";
$isOk;
if($isOk)
    echo "c'est ok";
   

?>