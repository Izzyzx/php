<?php
function calcularIdadeEmMeses($dataNascimento) {
    $dataNasc = DateTime::createFromFormat('d/m/a', $dataNascimento);
    $dataAtual = new DateTime();
    $diferenca = $dataAtual->diff($dataNasc);
    return ($diferenca->y * 12) + $diferenca->m;
}

echo "Digite sua data de nascimento (dd/mm/aaaa): ";
$dataNascimento = trim(fgets(STDIN)); // Lê a entrada do usuário
$idadeMeses = calcularIdadeEmMeses($dataNascimento);
echo "Você tem aproximadamente $idadeMeses meses de idade.\n";
?>
