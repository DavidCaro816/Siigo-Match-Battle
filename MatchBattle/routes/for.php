<?php


$cartasJug = [];
$cartas = array();


// generamos cartas
for($i = 1; $i <= 32; $i++) {
    $aleatorio = random_int(1, 32);
    // Comprobamos si ya a salido
    if (in_array($aleatorio, $cartas)) {
        $i--;
        continue;
    }
    // si no a salido añadimos al array

    $cartas[] =  $aleatorio;
}
$i=0;
foreach($cartas as $carta) {

    $i++;
    $player = [ $carta];

    print_r($player).'<br>';


}
