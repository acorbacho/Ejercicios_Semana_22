<?php
$num1 = 1;
$num2 = 2;
$num_total = $num1 + $num2;
$p1 = 3;
$p2 = $p1 * 3;
$multi = array();
$div = array();
$contador = 1;
$array_foreach = array('hello', 69, 'M4', true, 'Japan', 2.95, 'end');

if ($p2 > 5) {
  $p3 = ($p1 + $p2) / 4;
} else if ($p2 === 5) {
  $p3 = $p1 + $p2;
} else {
  $p3 = ($p1 + $p2) / 8;
}

switch ($p2) {
  case $p2 > 5:
    $p3 = ($p1 + $p2) / 4;
    break;
  case $p2 === 5:
    $p3 = $p1 + $p2;
    break;
  default:
    $p3 = ($p1 + $p2) / 8;
    break;
}

for ($i = 0; $i <= 9; $i++) {
  $mult[$i] = $p1 * $i;
}

$mult_string = implode("','", $mult);

while ($contador < 10) {
  $div[$contador] = $p2 / $contador;
  $contador++;
}

$div_string = implode("','", $div);

echo "<html> <head> <title>Ejercicios</title> </head>
<body> <h1>Mi primera página PHP</h1> <br>
<h2>Página de pruebas de PHP</h2> <p> $num_total <br> $p1 $p2 $p3 <br> 
'$mult_string' <br> '$div_string' </p> <p>";

foreach ($array_foreach as $valor) {
  echo $valor;
}

echo "</p> </body> </html>";
?>