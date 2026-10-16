<?php
// api/calcular_brigada.php
// Trata o cálculo específico para Formação de Brigadistas

$servico = $_POST['servico'] ?? '';
$carga_horaria = floatval($_POST['carga_horaria'] ?? 0);
$numero_alunos = floatval($_POST['numero_alunos'] ?? 0);
$upf = floatval($_POST['upf'] ?? 0);

// Constante para o fator de cálculo
define('FATOR_BRIGADA', 0.15);
// Fator de acréscimo de 10% (Lei Estadual nº 9.916/2013)
define('FATOR_ACRESCIMO', 1.1);

function calcularTaxaBrigada($carga_horaria, $numero_alunos)
{
    // Cálculo: CARGA HORÁRIA PRÁTICA * NÚMERO DE ALUNOS * 0.15
    $valorBase = $carga_horaria * $numero_alunos * FATOR_BRIGADA;
    return $valorBase;
}

function gerarFormulaTexto($carga_horaria, $numero_alunos, $upf) {
    $upfFormatada = number_format($upf, 2, ',', '.');
    // Fórmula detalhada: (Carga Horária x Nº Alunos x 0.15) x UPF x 1.10
    return "($carga_horaria × $numero_alunos × " . FATOR_BRIGADA . ") × UPF (R$ $upfFormatada) × " . FATOR_ACRESCIMO;
}

// 1. Calcular o valor base (em UPF)
$valorBaseUPF = calcularTaxaBrigada($carga_horaria, $numero_alunos);

// 2. Aplicar o UPF e o acréscimo de 10%
$taxaFinal = $valorBaseUPF * $upf * FATOR_ACRESCIMO;

// 3. Gerar o texto da fórmula para o usuário
$formula_texto = gerarFormulaTexto($carga_horaria, $numero_alunos, $upf);

// 4. Preparar e retornar a resposta em JSON
header('Content-Type: application/json');
echo json_encode([
    // Retorna a taxa final formatada, que será exibida no input principal
    'taxa_final' => number_format($taxaFinal, 2, ',', '.'),
    'formula' => $formula_texto
    // Não retorna 'taxa_formatada' pois a lógica de desconto não se aplica
]);

exit;
?>