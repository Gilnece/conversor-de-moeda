<?php
//maneira mais proficional, com formatação de texto melhor.
$cotacao = 5.41;

// Quanto em dinheiro você tem
$real = 1000;

//calculo da cotação
$dolar = $real / $cotacao;

//formatação de moedas com internacionalização, só está funcionando no https://onlinephp.io/ ou em servidor online!
// biblioteca intl (internallization PHP) para habilitar, ativar extension=intl no arquivo ini do XAMPP

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

echo "seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");

?>