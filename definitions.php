<?php
$list = [1,2,3,4,5,6];

$experienciasFile = "./json/experiencias.json";
$experienciasContent = file_get_contents($experienciasFile);
$experienciasJson = json_decode($experienciasContent, true);


?>
