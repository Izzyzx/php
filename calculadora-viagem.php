<?php 

echo "===== Calculadora de Viagem =====\n";

echo "Seja bem-vindo(a) à sua calculadora pessoal. Para começarmos, digite o seu nome: ";
$nomeDoUsuario = trim(readline());

echo "\nOlá, $nomeDoUsuario! Agora, selecione a velocidade do veículo:\n";
echo "1 - Min (5 - 30 Km/h)\n";
echo "2 - Méd (40 - 130 Km/h)\n";
echo "3 - Máx (140 - 170 Km/h)\n";
echo "Escolha a opção desejada: ";

$velocidadeEscolhida = (int) readline();

// Definindo eficiência do combustível com base na velocidade escolhida
$eficienciaCombustivel = 0; 

switch ($velocidadeEscolhida) {
    case 1:
        $eficienciaCombustivel = 17.5;
        break;
    case 2:
        $eficienciaCombustivel = 12.0;
        break;
    case 3:
        $eficienciaCombustivel = 8.0;
        break;
    default:
        echo "Número inválido! Reinicie o programa.\n";
        exit();
}

echo "\nAgora vamos calcular os parâmetros!\n";

echo "Digite a distância percorrida em Km: ";
$distancia = (float) readline();

echo "Digite o preço do combustível por litro: ";
$preco = (float) readline();

echo "\n== Escolha uma opção ==\n";
echo "1 - Calcular litros necessários\n";
echo "2 - Calcular custo total\n";
echo "3 - Calcular ambos\n";
$escolha = (int) readline();

// Cálculo do consumo
$litrosNecessarios = $distancia / $eficienciaCombustivel;
$custoTotal = $litrosNecessarios * $preco;

switch ($escolha) {
    case 1:
        echo "A quantidade de litros necessária é: " . number_format($litrosNecessarios, 2) . "L\n";
        break;
    case 2:
        echo "O custo total da viagem será: R$" . number_format($custoTotal, 2) . "\n";
        break;
    case 3:
        echo "A quantidade de litros necessária é: " . number_format($litrosNecessarios, 2) . "L\n";
        echo "O custo total da viagem será: R$" . number_format($custoTotal, 2) . "\n";
        break;
    default:
        echo "Número inválido! Reinicie o programa.\n";
}

?>
