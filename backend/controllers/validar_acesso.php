<?php
session_start(); // Inicia a sessão

require_once '../ConexaoDB/conexao.php';

try {
    $conn = Conexao::getConexao();

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha_digitada = filter_input(INPUT_POST, 'senha', FILTER_UNSAFE_RAW);

    if (empty($email) || empty($senha_digitada)) {
        header('Location: /backend/admin.php?erro=1');
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha_digitada, $usuario['senha'])) {
        // Inicia a sessão e armazena hora do login
        $_SESSION['logado'] = true;
        $_SESSION['ultimo_acesso'] = time();
        $_SESSION['usuario_id'] = $usuario['id']; // se quiser identificar

        header('Location: /backend/upf_form.php');
        exit;
    }

    header('Location: /backend/admin.php?erro=1');
    exit;

} catch (PDOException $e) {
    header('Location: /backend/admin.php?erro=2');
    exit;
}
