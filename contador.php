<?php
// Ruta al archivo donde se almacenará el contador
$archivo_contador = 'contador.txt';

// Leer el contador actual desde el archivo
$contador = (file_exists($archivo_contador)) ? (int)file_get_contents($archivo_contador) : 0;

// Incrementar el contador en 1 para cada visita
$contador++;

// Guardar el nuevo valor del contador en el archivo
file_put_contents($archivo_contador, $contador);

// Mostrar el contador
echo "Número de visitas: $contador";
?>
