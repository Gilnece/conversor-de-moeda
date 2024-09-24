<?php
//API selecionada ExchangeRate-API 
// Defina sua chave de API
$apiKey = 'cfb98f2caa717832cffe0456';

// Função para converter moeda
function converterMoeda($valor, $moedaDe, $moedaPara) {
    global $apiKey;

    // URL da API
    $url = "https://v6.exchangerate-api.com/v6/cfb98f2caa717832cffe0456/pair/$moedaDe/$moedaPara/$valor";

    // Chama a API
    $response = file_get_contents($url);
    $data = json_decode($response, true);

    // Verifica se a resposta é válida
    if (isset($data['conversion_rate'])) {
        return $data['conversion_rate'] * $valor;
    } else {
        return "Erro na conversão: " . $data['error-type'];
    }
}
// Exemplo de uso
$valor = 100; // Valor a ser convertido
$moedaDe = 'BRL'; // Moeda de origem
$moedaPara = 'USD'; // Moeda de destino


$resultado = converterMoeda($valor, $moedaDe, $moedaPara);
echo "seus R\$" . $valor . " convertido valem: US$ " . number_format($resultado, 2, ',', '.');
?>