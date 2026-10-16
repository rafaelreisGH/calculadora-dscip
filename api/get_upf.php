<?php
// api/get_upf.php

header('Content-Type: application/json');

$upfPath = '../data/upf.json';

if (file_exists($upfPath)) {
    $json = file_get_contents($upfPath);
    $data = json_decode($json, true);

    if (isset($data['upf'])) {
        echo json_encode(['success' => true, 'upf' => $data['upf']]);
        exit;
    }
}

echo json_encode(['success' => false, 'error' => 'Valor da UPF não encontrado.']);
exit;
