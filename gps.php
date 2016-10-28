<?php
$ubicacion = $_GET['ubicacion'];
$sagardotegia = utf8_decode("Agirre Miramon Kalea, 20002 Donostia, Gipuzkoa, España");

if ($ubicacion == $sagardotegia) {
    header("location: kupelak.html");
} else {
    header("location: sagardotegiak.html");
}
?>