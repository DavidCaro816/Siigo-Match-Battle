<?php


$cartasJug = [];
$cartas = array();
$player = [];

// generamos cartas
for($i = 1; $i <= 32; $i++) {
    $aleatorio = random_int(1, 32);
    // Comprobamos si ya a salido
    if (in_array($aleatorio, $cartas)) {
        $i--;
        continue;
    }
    // si no a salido añadimos al array
    $player[
        $cartas[] =  $aleatorio
    ]

}
foreach($cartas as $carta) {
    echo $carta.'<br>';
}
