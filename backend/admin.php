<?php
include_once '..\includes\header.php';
?>
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <img src="../../assets/img/logo.png" alt="Logo" width="40" height="40" class="me-2">
        <span class="fs-4">Cálculo de taxas DSCIP</span>
    </div>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="../index.php" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="../backend/admin.php" class="nav-link">Administração</a></li>
        <!-- <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li> -->
        <li class="nav-item"><a href="../sobre.php" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="../sair.php" class="nav-link">Sair</a></li>
    </ul>
</header>

<body class="text-center">
    <div class="container center col-md-5 p-5">
        <?php
        // Verifica se há mensagem de erro na URL
        if (isset($_GET['erro'])) {
            $erro = $_GET['erro'];
            if ($erro == 1) {
                echo '<div class="alert alert-danger">E-mail ou senha inválidos.</div>';
            } elseif ($erro == 2) {
                echo '<div class="alert alert-danger">Erro ao conectar com o banco de dados.</div>';
            } elseif ($erro == 3) {
                echo '<div class="alert alert-warning">Você precisa estar logado para acessar esta página.</div>';
            } elseif ($erro == 4) {
                echo '<div class="alert alert-warning">Sua sessão expirou. Faça login novamente.</div>';
            }
        }
        ?>

        <form class="form-signin" action="controllers/validar_acesso.php" method="POST">
            <img class="mb-4" src="../assets/img/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Informe suas credenciais</h1>

            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <br>
            <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-muted">©STIC/DAI/CBMMT - 2025</p>
        </form>
    </div>

</body>

</html>