<?php
//maneira mais tradicional
$cotacao = 5.41;

// Quanto em dinheiro você tem
$real = 1000;

$dolar = $real / $cotacao;

echo "seus R\$" .  number_format($real, 2 ,",",".") . " equivalem a US\$" . number_format($dolar, 2);
// dentro do number_format pode ser decidido quantas casas decimais irá ser apresentado, e os separadores(virgula,
//para os decimais e ponto para os inteiros).


?>