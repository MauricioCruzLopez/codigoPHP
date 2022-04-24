<?php
$datosDeEncuesta = [
    "nombres" => [
        "primerNombre" => "Pepe",
        "segundoNombre" => "Jose"
    ],
    "Apellidos" => [
        "primerApellido" => "Robert",
        "segundoApellido" => "Toti"
    ],
];
foreach ($datosDeEncuesta as $datos => $valor) {
    echo "$datos <br>";
    foreach ($valor as $clave => $pi) {
        echo "$clave => $pi <br>";
    }
}
$listaDeNombre = [
    ["jose", "1jose", "2jose"],
    ["roberto", "1roberto", "2roberto"]
];
foreach ($listaDeNombre as $lista) {
    echo "<br>lista de nombre <br>";
    foreach ($lista as $nombre) {
        echo "nombre: $nombre <br>";
    }
}
echo "<br>";
$listaDeNombre2 = ["nombre1" => "jose", "nombre2" => "pepe", "nombre3" => "roberto"];
foreach ($listaDeNombre2 as $nombres => $nombre) {
    echo "$nombre <br>";
}
