<?php include '../includes/header.php';
require_once 'controllers/controle_de_sessao.php';

// backend/upf_form.php

$upfPath = '../data/upf.json';
$upfValue = '';

if (file_exists($upfPath)) {
    $json = file_get_contents($upfPath);
    $data = json_decode($json, true);
    if (isset($data['upf'])) {
        $upfValue = $data['upf'];
    }
}
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

<a href="./Views/painel_do_usuario.php"><p><button type="button" class="btn btn-primary">Alterar senha</button></p></a>
<div class="row my-5">
    <div class="col-md-6 mx-auto p-4 rounded">
        <h2>Editar Valor da UPF</h2>

        <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
            <div class="alert alert-success" role="alert">
                Valor da UPF salvo com sucesso!
            </div>
        <?php endif; ?>


        <!-- Formulário para o gestor editar o valor da UPF -->
        <form action="save_upf.php" method="POST">
            <div class="mb-3">
                <label for="upf_value" class="form-label">Novo valor da UPF (R$)</label>
                <input type="number" name="new_upf" id="upf_value" class="form-control" step="0.01" required value="<?= htmlspecialchars($upfValue) ?>">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>

<div class="container center col-md-5 p-5">
</div>

<?php include '../includes/footer.php'; ?>