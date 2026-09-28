<?php
";
echo "IMC: " . number_format($imc, 2) . "


";

// Classificação opcional
if ($imc < 18.5) {
echo "Classificação: Abaixo do peso";
} elseif ($imc < 25) {
echo "Classificação: Peso normal";
} elseif ($imc < 30) {
echo "Classificação: Sobrepeso";
} else {
echo "Classificação: Obesidade";
}
?>