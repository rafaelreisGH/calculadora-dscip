<?php
// backend/save_upf.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se o campo foi enviado
    if (isset($_POST['new_upf'])) {
        $rawValue = $_POST['new_upf'];

        // Validação básica: verifica se é numérico e maior que zero
        if (is_numeric($rawValue) && $rawValue > 0) {
            // (Próximo passo: salvar no arquivo JSON)
            $formattedValue = number_format((float)$rawValue, 2, '.', '');

            // Caminho até o arquivo JSON
            $upfPath = '../data/upf.json';

            // Novo conteúdo que será salvo
            $newData = [
                'upf' => (float)$formattedValue
            ];

            // Tenta salvar no arquivo
            if (file_put_contents($upfPath, json_encode($newData, JSON_PRETTY_PRINT))) {
                header('Location: upf_form.php?success=1');
                exit;
            } else {
                echo "Erro ao salvar o valor no arquivo.";
                exit;
            }
        } else {
            // Valor inválido – você pode redirecionar com erro ou exibir mensagem
            echo "Valor inválido. O valor da UPF deve ser numérico e maior que zero.";
            exit;
        }
    } else {
        echo "Nenhum valor de UPF recebido.";
        exit;
    }
} else {
    echo "Requisição inválida.";
    exit;
}
