<?php
// api/calcular.php
$servico = $_POST['servico'] ?? '';
$metragem = floatval($_POST['metragem'] ?? 0);
$upf = floatval($_POST['upf'] ?? 0);

function calcular($servico, $metragem)
{
    switch ($servico) {
        case 'Vistoria Técnica para Residencial Multifamiliar':
            return $metragem <= 300 ? 1 : 1 + 0.0015 * ($metragem - 300);

        case 'Vistoria Técnica para Educacional, Cultura Física, Serviço de Saúde e Institucional':
            return $metragem <= 300 ? 1 : 1 + 0.0025 * ($metragem - 300);

        case 'Vistoria Técnica para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado':
            return $metragem <= 300 ? 1 : 1 + 0.0035 * ($metragem - 300);

        case 'Vistoria Técnica para Indústria, Depósito, Especial e Agroindústria':
            return $metragem <= 300 ? 2 : 2 + 0.004 * ($metragem - 300);

        case 'Vistoria Técnica para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V':
            return $metragem <= 300 ? 1 : 1 + 0.0015 * ($metragem - 300);

        case 'Análise de PSCIP para Shows, eventos, instalações provisórias e similares':
            return $metragem <= 750 ? 2 * 0.5 : (2 + 0.002 * ($metragem - 750)) * 0.5;

        case 'Vistoria Técnica para Shows, eventos, instalações provisórias e similares':
            return $metragem <= 750 ? 2 * 0.5 : (2 + 0.002 * ($metragem - 750)) * 0.5;

        case 'Análise de PSCIP para Residencial Multifamiliar':
            return $metragem <= 750 ? 2 : 2 + 0.001 * ($metragem - 750);

        case 'Análise de PSCIP para edificação Educacional, Cultura Física, Serviço de Saúde e Institucional':
            return $metragem <= 750 ? 2.5 : 2.5 + 0.002 * ($metragem - 750);

        case 'Análise de PSCIP para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado':
            return $metragem <= 750 ? 3 : 3 + 0.003 * ($metragem - 750);

        case 'Análise de PSCIP para Indústria, Depósito, Especial e Agroindústria de risco médio e alto, e revenda de GLP acima da classe V':
            return $metragem <= 750 ? 4 : 4 + 0.005 * ($metragem - 750);

        case 'Análise de PSCIP para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V':
            return $metragem <= 750 ? 2 : 2 + 0.001 * ($metragem - 750);

        case 'Consulta prévia de processo de segurança contra incêndio e pânico':
            return $metragem <= 750 ? 2 : 3.5;

        case 'Alteração de razão social/pessoa física e/ou CNPJ/CPF':
            return $metragem = 0.5; // Valor fixo para alteração de razão social/pessoa física e/ou CNPJ/CPF

        case 'Atualização de Processo de Segurança Contra Incêndio e Pânico':
            return $metragem === 0 ? 1 : 1 + 0.0015 * ($metragem);

        case 'Substituição de Processo de Segurança Contra Incêndio e Pânico':
            return $metragem === 0 ? 2 : 2 + 0.002 * ($metragem);

        case 'Segundas vias de documentos':
            return $metragem = 0.25; // Valor fixo para segundas vias de documentos

        case 'Emissão de Termo de Ajustamento de Conduta':
            return $metragem = 0.5; // Valor fixo para emissão de Termo de Ajustamento de Conduta

        case 'Busca e cautela de projeto de segurança contra incêndio e pânico':
            return $metragem = 1; // Valor fixo para emissão de Busca e cautela de projeto de segurança contra incêndio e pânico

        case 'Credenciamento, cadastramento, habilitação de Pessoas Jurídicas':
            return $metragem = 2; // Valor fixo para emissão de Credenciamento, cadastramento, habilitação de Pessoas Jurídicas

        case 'Credenciamento, cadastramento, habilitação de Pessoa Física':
            return $metragem = 1; // Valor fixo para emissão de Credenciamento, cadastramento, habilitação de Pessoa Física

        case 'Parecer Técnico':
            return $metragem = 2; // Valor fixo para emissão de Parecer Técnico

        // case 'Formação de brigadadista, brigadista profissional, brigadista florestal, salva-vidas. Por aluno. Por hora/aula prática.':
        //     return $metragem * 0.15;

        case 'Ensino, Instrução, Capacitação e Palestras, por hora/aula.':
            return $metragem * 1.5;

        case 'Informação Técnica, Manifestação de informação e Declarações.':
            return $metragem = 0.5; // Valor fixo para emissão de Informação Técnica, Manifestação de informação e Declarações

        case 'Perícia de Incêndio Florestal, por perícia.':
            return $metragem = 45; // Valor fixo para emissão de Perícia de Incêndio Florestal, por perícia.

        case 'Certificado de Segurança Contra Incêndio e Pânico para Residencial Multifamiliar':
            return $metragem <= 100 ? 0.5 : 0.5 + 0.0005 * ($metragem - 100);
            //até aqui ok    
        case 'Certificado de Segurança Contra Incêndio e Pânico para Educacional, Cultura Física, Serviço de Saúde e Institucional':
            return $metragem <= 100 ? 0.6 : 0.6 + 0.0006 * ($metragem - 100);

        case 'Certificado de Segurança Contra Incêndio e Pânico para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado':
            return $metragem <= 100 ? 0.7 : 0.7 + 0.0007 * ($metragem - 100);

        case 'Certificado de Segurança Contra Incêndio e Pânico para Industria, Depósito, Especial e Agroindústria':
            return $metragem <= 100 ? 0.8 : 0.8 + 0.0008 * ($metragem - 100);

        default:
            return 0;
    }
}

$taxaFinal = calcular($servico, $metragem) * $upf * 1.1;

// Retorna apenas o número formatado
$response = [
    'taxa_formatada' => number_format($taxaFinal, 2, ',', '.'),
    'formula' => gerarFormulaTexto($servico, $metragem, $upf)
];

header('Content-Type: application/json');
echo json_encode($response);
exit;

// Função auxiliar
function gerarFormulaTexto($servico, $metragem, $upf) {
    $upfFormatada = number_format($upf, 2, ',', '.');

    switch ($servico) {
        case 'Vistoria Técnica para Residencial Multifamiliar':
            return $metragem <= 300
                ? "1 × UPF (R$ $upfFormatada) × 1,1"
                : "(1 + 0,0015 × ($metragem - 300)) × UPF (R$ $upfFormatada) × 1,1";

        case 'Vistoria Técnica para Educacional, Cultura Física, Serviço de Saúde e Institucional':
            return $metragem <= 300
                ? "1 × UPF × 1,1"
                : "(1 + 0,0025 × ($metragem - 300)) × UPF × 1,1";

        case 'Vistoria Técnica para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado':
            return $metragem <= 300
                ? "1 × UPF × 1,1"
                : "(1 + 0,0035 × ($metragem - 300)) × UPF × 1,1";

        case 'Vistoria Técnica para Indústria, Depósito, Especial e Agroindústria':
            return $metragem <= 300
                ? "2 × UPF × 1,1"
                : "(2 + 0,004 × ($metragem - 300)) × UPF × 1,1";

        case 'Vistoria Técnica para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V':
            return $metragem <= 300
                ? "1 × UPF × 1,1"
                : "(1 + 0,0015 × ($metragem - 300)) × UPF × 1,1";

        case 'Análise de PSCIP para Shows, eventos, instalações provisórias e similares':
        case 'Vistoria Técnica para Shows, eventos, instalações provisórias e similares':
            return $metragem <= 750
                ? "(2 × 0,5) × UPF × 1,1"
                : "((2 + 0,002 × ($metragem - 750)) × 0,5) × UPF × 1,1";

        case 'Análise de PSCIP para Residencial Multifamiliar':
            return $metragem <= 750
                ? "2 × UPF × 1,1"
                : "(2 + 0,001 × ($metragem - 750)) × UPF × 1,1";

        case 'Análise de PSCIP para edificação Educacional, Cultura Física, Serviço de Saúde e Institucional':
            return $metragem <= 750
                ? "2,5 × UPF × 1,1"
                : "(2,5 + 0,002 × ($metragem - 750)) × UPF × 1,1";

        case 'Análise de PSCIP para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado':
            return $metragem <= 750
                ? "3 × UPF × 1,1"
                : "(3 + 0,003 × ($metragem - 750)) × UPF × 1,1";

        case 'Análise de PSCIP para Indústria, Depósito, Especial e Agroindústria de risco médio e alto, e revenda de GLP acima da classe V':
            return $metragem <= 750
                ? "4 × UPF × 1,1"
                : "(4 + 0,005 × ($metragem - 750)) × UPF × 1,1";

        case 'Análise de PSCIP para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V':
            return $metragem <= 750
                ? "2 × UPF × 1,1"
                : "(2 + 0,001 × ($metragem - 750)) × UPF × 1,1";

        case 'Consulta prévia de processo de segurança contra incêndio e pânico':
            return $metragem <= 750
                ? "2 × UPF × 1,1"
                : "3,5 × UPF × 1,1";

        case 'Alteração de razão social/pessoa física e/ou CNPJ/CPF':
            return "0,5 × UPF × 1,1";

        case 'Atualização de Processo de Segurança Contra Incêndio e Pânico':
            return $metragem === 0
                ? "1 × UPF × 1,1"
                : "(1 + 0,0015 × $metragem) × UPF × 1,1";

        case 'Substituição de Processo de Segurança Contra Incêndio e Pânico':
            return $metragem === 0
                ? "2 × UPF × 1,1"
                : "(2 + 0,002 × $metragem) × UPF × 1,1";

        case 'Segundas vias de documentos':
            return "0,25 × UPF × 1,1";

        case 'Emissão de Termo de Ajustamento de Conduta':
            return "0,5 × UPF × 1,1";

        case 'Busca e cautela de projeto de segurança contra incêndio e pânico':
            return "1 × UPF × 1,1";

        case 'Credenciamento, cadastramento, habilitação de Pessoas Jurídicas':
            return "2 × UPF × 1,1";

        case 'Credenciamento, cadastramento, habilitação de Pessoa Física':
            return "1 × UPF × 1,1";

        case 'Parecer Técnico':
            return "2 × UPF × 1,1";

        // case 'Formação de brigadadista, brigadista profissional, brigadista florestal, salva-vidas. Por aluno. Por hora/aula prática.':
        //     return "$metragem × 0,15 × UPF × 1,1";

        case 'Ensino, Instrução, Capacitação e Palestras, por hora/aula.':
            return "$metragem × 1,5 × UPF × 1,1";

        case 'Informação Técnica, Manifestação de informação e Declarações.':
            return "0,5 × UPF × 1,1";

        case 'Perícia de Incêndio Florestal, por perícia.':
            return "45 × UPF × 1,1";

        case 'Certificado de Segurança Contra Incêndio e Pânico para Residencial Multifamiliar':
            return $metragem <= 100
                ? "0,5 × UPF × 1,1"
                : "(0,5 + 0,0005 × ($metragem - 100)) × UPF × 1,1";

        case 'Certificado de Segurança Contra Incêndio e Pânico para Educacional, Cultura Física, Serviço de Saúde e Institucional':
            return $metragem <= 100
                ? "0,6 × UPF × 1,1"
                : "(0,6 + 0,0006 × ($metragem - 100)) × UPF × 1,1";

        case 'Certificado de Segurança Contra Incêndio e Pânico para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado':
            return $metragem <= 100
                ? "0,7 × UPF × 1,1"
                : "(0,7 + 0,0007 × ($metragem - 100)) × UPF × 1,1";

        case 'Certificado de Segurança Contra Incêndio e Pânico para Industria, Depósito, Especial e Agroindústria':
            return $metragem <= 100
                ? "0,8 × UPF × 1,1"
                : "(0,8 + 0,0008 × ($metragem - 100)) × UPF × 1,1";

        default:
            return "Fórmula não definida para este serviço.";
    }
}


