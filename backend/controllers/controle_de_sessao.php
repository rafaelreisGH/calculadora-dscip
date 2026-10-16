<?php
session_start();

$tempo_maximo = 900; // 15 minutos (em segundos)

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: /backend/admin.php?erro=3'); // Não logado
    exit;
}

if (isset($_SESSION['ultimo_acesso']) && (time() - $_SESSION['ultimo_acesso']) > $tempo_maximo) {
    session_unset();
    session_destroy();
    header('Location: /backend/admin.php?erro=4'); // Tempo expirado
    exit;
}

// Atualiza o tempo do último acesso
$_SESSION['ultimo_acesso'] = time();
