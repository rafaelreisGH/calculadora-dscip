<!-- index.php -->

<?php include 'includes/header.php'; ?>

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

<div class="row my-5">
    <div class="col-md-6 mx-auto p-4 rounded">

        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Serviço</span>
            <input class="form-control" list="datalistOptions" id="servico" placeholder="Digite ou clique 2x para procurar">
            <button class="btn btn-outline-secondary" type="button" onclick="limparServico()"> &times;</button>
            <datalist id="datalistOptions">
                <option>Vistoria Técnica para Residencial Multifamiliar</option>
                <option>Vistoria Técnica para Educacional, Cultura Física, Serviço de Saúde e Institucional</option>
                <option>Vistoria Técnica para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado</option>
                <option>Vistoria Técnica para Indústria, Depósito, Especial e Agroindústria</option>
                <option>Vistoria Técnica para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V</option>
                <option>Vistoria Técnica para Shows, eventos, instalações provisórias e similares</option>
                <option>Análise de PSCIP para Shows, eventos, instalações provisórias e similares</option>
                <option>Análise de PSCIP para Residencial Multifamiliar</option>
                <option>Análise de PSCIP para edificação Educacional, Cultura Física, Serviço de Saúde e Institucional</option>
                <option>Análise de PSCIP para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado</option>
                <option>Análise de PSCIP para Indústria, Depósito, Especial e Agroindústria de risco médio e alto, e revenda de GLP acima da classe V</option>
                <option>Análise de PSCIP para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V</option>
                <option>Consulta prévia de processo de segurança contra incêndio e pânico</option>
                <option>Alteração de razão social/pessoa física e/ou CNPJ/CPF</option>
                <option>Atualização de Processo de Segurança Contra Incêndio e Pânico</option>
                <option>Substituição de Processo de Segurança Contra Incêndio e Pânico</option>
                <option>Segundas vias de documentos</option>
                <option>Emissão de Termo de Ajustamento de Conduta</option>
                <option>Busca e cautela de projeto de segurança contra incêndio e pânico</option>
                <option>Credenciamento, cadastramento, habilitação de Pessoas Jurídicas</option>
                <option>Credenciamento, cadastramento, habilitação de Pessoa Física</option>
                <option>Parecer Técnico</option>
                <option>Formação de brigadadista, brigadista profissional, brigadista florestal, salva-vidas. Por aluno. Por hora/aula prática.</option>
                <option>Ensino, Instrução, Capacitação e Palestras, por hora/aula.</option>
                <option>Informação Técnica, Manifestação de informação e Declarações.</option>
                <option>Perícia de Incêndio Florestal, por perícia.</option>
                <option>Certificado de Segurança Contra Incêndio e Pânico para Residencial Multifamiliar</option>
                <option>Certificado de Segurança Contra Incêndio e Pânico para Educacional, Cultura Física, Serviço de Saúde e Institucional</option>
                <option>Certificado de Segurança Contra Incêndio e Pânico para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado</option>
                <option>Certificado de Segurança Contra Incêndio e Pânico para Industria, Depósito, Especial e Agroindústria</option>
            </datalist>
        </div>

        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Metragem (m²)</span>
            <input type="number" class="form-control" placeholder="0" id="metragem" min="0">
        </div>

        <!-- Inclusão em 21/11/2025 -->

        <div class="input-group input-group-lg mb-4 campo-brigada" id="campo-carga-horaria" style="display: none;">
            <span class="input-group-text">Carga Horária Prática (h)</span>
            <input type="number" class="form-control" placeholder="0" id="carga_horaria" name="carga_horaria" min="1" step="1">
        </div>

        <div class="input-group input-group-lg mb-4 campo-brigada" id="campo-numero-alunos" style="display: none;">
            <span class="input-group-text">Número de Alunos</span>
            <input type="number" class="form-control" placeholder="0" id="numero_alunos" name="numero_alunos" min="1" step="1">
        </div>

        <!-- fim da alteração -->


        <div class="input-group input-group-lg mb-4">
            <span class="input-group-text">Taxa (R$)</span>
            <input type="text" class="form-control" placeholder="0,00" id="taxa" disabled>
            <input type="hidden" id="upf" name="upf">
        </div>

        <div class="input-group input-group-lg mb-4" id="taxa_com_desconto" style="display: none;">
            <span class="input-group-text">Taxa (R$) c/ desconto¹</span>
            <input type="text" class="form-control" placeholder="0,00" id="taxa_desconto_valor" disabled>
        </div>

        <div class="text-center">
            <button class="btn btn-primary btn-lg" onclick="calcular()">Calcular</button>
        </div>

        <div class="mt-3 alert alert-info" id="formacao_brigada" style="display: none;">
            <strong>Detalhes sobre formação de brigada:</strong>
            <p id="detalhes_formacao_brigada" class="mt-1"></p>
        </div>

        <div class="mt-3 alert alert-info" id="descricao-servico" style="display: none;">
            <strong>Descrição do serviço:</strong>
            <p id="descricao-texto" class="mt-1"></p>
        </div>
        <div class="mt-4" id="resultado"></div>

        <div class="mt-4" id="adicional">
            <p>* Caso deseje conferir as regras de cálculo aplicadas, consulte: <a href="https://www.iomat.mt.gov.br/portal/visualizacoes/pdf/18225/#/p:1/e:18225" target="_blank"> Lei nº 12.774, de 20/12/2024</a> publicado no D.O.E nº 28.895 de mesma data.</p>
            <p>* Em conformidade com o § 2º do Art. 1º da <a href="https://storage.al.mt.gov.br/api/v1/download/default/434380" target="_blank"> Lei Estadual nº 9.916/2013</a>, são acrescidos às taxas o adicional de 10% (dez por cento).</p>
            <p id="eventos" style="display: none;">* Em conformidade com o inciso I do Art. 101 da Lei Estadual nº 9.067/2008, alterada pela <a href="https://www.al.mt.gov.br/norma-juridica/urn:lex:br;mato.grosso:estadual:lei.ordinaria:2015-06-18;10287" target="_blank">Lei Ordinária nº 10287 de 18 de junho de 2015</a>, será aplicado 50% do valor da UPF.</p>
        </div>

        <div class="mt-4" id="info_desconto" style="display: none;">
            <p>¹ Em conformidade com a Lei nº 12.774, de 20/12/2024, "fará jus ao desconto de 10% (dez por cento) os casos em que a solicitação do serviço seja realizada antes do vencimento do documento a ser renovado (alvarás, certificados, similares). O desconto será concedido mediante requisição prévia ao Órgão responsável, comprovadas as condições de concessão.</p>
        </div>

    </div>
    <div id="instrucoesboleto" class="col-md-6 mx-auto p-4 rounded">

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Guia para Emissão do Boleto</h4>
            </div>
            <div class="card-body">
                <p class="lead text-center">Siga os passos abaixo para gerar seu boleto da TASEG.</p>

                <ul class="list-group list-group-flush mt-3">
                    <li class="list-group-item">
                        1. Clique **<a href="https://www.sefaz.mt.gov.br/arrecadacao/darlivre/menudarlivre?outrosOrgaos=true#" target="_blank">AQUI</a>** para acessar o link da **SEFAZ/MT**.
                    </li>
                    <li class="list-group-item">
                        2. Na próxima página, escolha a opção **SECRETARIA DE SEGURANÇA PÚBLICA - FESP**.
                    </li>
                    <li class="list-group-item">
                        3. Em seguida, escolha a opção **Pessoa Jurídica Inscrita** ou **Pessoa Jurídica não inscrita**.
                    </li>
                    <li class="list-group-item">
                        4. Na página seguinte, informe o número da **Inscrição Estadual** e o **CNPJ**, clicando logo após em **Confirmar**.
                    </li>
                    <li class="list-group-item">
                        5. Na próxima página, selecione os seguintes campos:
                        <ul class="list-group list-group-numbered list-group-flush mt-2">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">a) Município</div>
                                    <span class="text-muted">A cidade em que se encontra a edificação.</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">b) Período de referência</div>
                                    <span class="text-muted">Mês e ano de emissão da taxa no formato **MM/AAAA**.</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">c) Especificação da receita</div>
                                    <span class="text-muted">Escolha a de nº **6956 - TASEG - CORPO DE BOMBEIRO**.</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">d) Sub-receita</div>
                                    <span class="text-muted">Preencha conforme o serviço.</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">e) Data de vencimento</div>
                                    <span class="text-muted">Coloque **30 dias** após a data de geração do boleto.</span>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">f) Valor do tributo</div>
                                    <span class="text-muted">É o valor que foi calculado no **Simulador de taxa** (1º Passo).</span>
                                </div>
                            </li>
                        </ul>
                        <p class="mt-3 mb-0 text-muted fst-italic">Os demais campos não necessitam ser preenchidos.</p>
                    </li>
                    <li class="list-group-item">
                        6. Por fim, clique em **Emitir**.
                    </li>
                </ul>

                <div class="alert alert-success mt-4" role="alert">
                    <h5 class="alert-heading">PRONTO!</h5>
                    Seu boleto foi gerado. Imprima, pague e leve a uma unidade do Corpo de Bombeiros com o comprovante de pagamento e com o requerimento do serviço desejado.
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<script>
    // Objeto para armazenar as descrições dos serviços
    const descricoesServicos = {
        "Vistoria Técnica para Residencial Multifamiliar": "Realização de vistoria técnica em edificações residenciais multifamiliares para verificação das medidas de segurança contra incêndio e pânico.",
        "Vistoria Técnica para Educacional, Cultura Física, Serviço de Saúde e Institucional": "Vistoria técnica em edificações dos tipos educacional, cultura física, serviço de saúde e institucional para verificação das medidas de segurança contra incêndio e pânico.",
        "Vistoria Técnica para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado": "Vistoria técnica em edificações dos tipos comercial, serviço de hospedagem, serviço profissional, local de reunião de público, serviço automotivo e assemelhados para verificação das medidas de segurança contra incêndio e pânico.",
        "Vistoria Técnica para Indústria, Depósito, Especial e Agroindústria": "Vistoria técnica em edificações dos tipos indústria, depósito, especial e agroindústria para verificação das medidas de segurança contra incêndio e pânico.",
        "Vistoria Técnica para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V": "Vistoria técnica em edificações dos tipos indústria, depósito, especial e agroindústria de risco baixo, e revendas de GLP até Classe V para verificação das medidas de segurança contra incêndio e pânico.",
        "Vistoria Técnica para Shows, eventos, instalações provisórias e similares": "Vistoria técnica em shows, eventos, instalações provisórias e similares para verificação das medidas de segurança contra incêndio e pânico.",
        "Análise de PSCIP para Shows, eventos, instalações provisórias e similares": "Análise de Processo de Segurança Contra Incêndio e Pânico (PSCIP) para shows, eventos, instalações provisórias e similares.",
        "Análise de PSCIP para Residencial Multifamiliar": "Análise de Processo de Segurança Contra Incêndio e Pânico (PSCIP) para edificações residenciais multifamiliares.",
        "Análise de PSCIP para edificação Educacional, Cultura Física, Serviço de Saúde e Institucional": "Análise de Processo de Segurança Contra Incêndio e Pânico (PSCIP) para edificações dos tipos educacional, cultura física, serviço de saúde e institucional.",
        "Análise de PSCIP para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado": "Análise de Processo de Segurança Contra Incêndio e Pânico (PSCIP) para edificações dos tipos comercial, serviço de hospedagem, serviço profissional, local de reunião de público, serviço automotivo e assemelhados.",
        "Análise de PSCIP para Indústria, Depósito, Especial e Agroindústria de risco médio e alto, e revenda de GLP acima da classe V": "Análise de Processo de Segurança Contra Incêndio e Pânico (PSCIP) para edificações dos tipos indústria, depósito, especial e agroindústria de risco médio e alto, e revenda de GLP acima da classe V.",
        "Análise de PSCIP para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V": "Análise de Processo de Segurança Contra Incêndio e Pânico (PSCIP) para edificações dos tipos indústria, depósito, especial e agroindústria de risco baixo, e revendas de GLP até Classe V.",
        "Consulta prévia de processo de segurança contra incêndio e pânico": "Realização de consulta prévia para processos de segurança contra incêndio e pânico.",
        "Alteração de razão social/pessoa física e/ou CNPJ/CPF": "Processo de alteração de razão social/pessoa física e/ou CNPJ/CPF em documentos relacionados à segurança contra incêndio e pânico.",
        "Atualização de Processo de Segurança Contra Incêndio e Pânico": "Atualização de Processo de Segurança Contra Incêndio e Pânico (PSCIP).",
        "Substituição de Processo de Segurança Contra Incêndio e Pânico": "Substituição de Processo de Segurança Contra Incêndio e Pânico (PSCIP).",
        "Segundas vias de documentos": "Emissão de segundas vias de documentos relacionados à segurança contra incêndio e pânico.",
        "Emissão de Termo de Ajustamento de Conduta": "Emissão de Termo de Ajustamento de Conduta (TAC).",
        "Busca e cautela de projeto de segurança contra incêndio e pânico": "Busca e cautela de projeto de segurança contra incêndio e pânico.",
        "Credenciamento, cadastramento, habilitação de Pessoas Jurídicas": "Processo de credenciamento, cadastramento e habilitação de Pessoas Jurídicas.",
        "Credenciamento, cadastramento, habilitação de Pessoa Física": "Processo de credenciamento, cadastramento e habilitação de Pessoa Física.",
        "Parecer Técnico": "Emissão de parecer técnico.",
        "Ensino, Instrução, Capacitação e Palestras, por hora/aula.": "Serviços de ensino, instrução, capacitação e palestras, com custo por hora/aula.",
        "Informação Técnica, Manifestação de informação e Declarações.": "Fornecimento de informação técnica, manifestação de informação e declarações.",
        "Perícia de Incêndio Florestal, por perícia.": "Realização de perícia em incêndios florestais, com custo por perícia.",
        "Certificado de Segurança Contra Incêndio e Pânico para Residencial Multifamiliar": "Emissão de Certificado de Segurança Contra Incêndio e Pânico (CSCIP) para edificações residenciais multifamiliares.",
        "Certificado de Segurança Contra Incêndio e Pânico para Educacional, Cultura Física, Serviço de Saúde e Institucional": "Emissão de Certificado de Segurança Contra Incêndio e Pânico (CSCIP) para edificações dos tipos educacional, cultura física, serviço de saúde e institucional.",
        "Certificado de Segurança Contra Incêndio e Pânico para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado": "Emissão de Certificado de Segurança Contra Incêndio e Pânico (CSCIP) para edificações dos tipos comercial, serviço de hospedagem, serviço profissional, local de reunião de público, serviço automotivo e assemelhados.",
        "Certificado de Segurança Contra Incêndio e Pânico para Industria, Depósito, Especial e Agroindústria": "Emissão de Certificado de Segurança Contra Incêndio e Pânico (CSCIP) para edificações dos tipos indústria, depósito, especial e agroindústria."
    };

    const detalhesFormacaoBrigada = "O valor para formação de brigada é por aluno. Curso com carga horária máxima de 24 horas/aula.";

    // Lista de serviços que recebem desconto de 10%
    const servicosComDesconto = [
        "Vistoria Técnica para Residencial Multifamiliar",
        "Vistoria Técnica para Educacional, Cultura Física, Serviço de Saúde e Institucional",
        "Vistoria Técnica para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado",
        "Vistoria Técnica para Indústria, Depósito, Especial e Agroindústria",
        "Vistoria Técnica para Industrias, Depósitos, Especial e Agroindústrias de risco baixo, e revendas de GLP até Classe V",
        // "Vistoria Técnica para Shows, eventos, instalações provisórias e similares",
        "Credenciamento, cadastramento, habilitação de Pessoas Jurídicas",
        "Credenciamento, cadastramento, habilitação de Pessoa Física",
        "Certificado de Segurança Contra Incêndio e Pânico para Residencial Multifamiliar",
        "Certificado de Segurança Contra Incêndio e Pânico para Educacional, Cultura Física, Serviço de Saúde e Institucional",
        "Certificado de Segurança Contra Incêndio e Pânico para Comercial, Serviço de Hospedagem, Serviço Profissional, Local de Reunião de Público, Serviço Automotivo e assemelhado",
        "Certificado de Segurança Contra Incêndio e Pânico para Industria, Depósito, Especial e Agroindústria"
    ];

    function limparServico() {
        document.getElementById('servico').value = '';
        document.getElementById('descricao-servico').style.display = 'none';
        document.getElementById('descricao-texto').textContent = '';
        document.getElementById('formacao_brigada').style.display = 'none';
        document.getElementById('detalhes_formacao_brigada').textContent = '';
        document.getElementById('resultado').innerHTML = '';
        document.getElementById('taxa_com_desconto').style.display = 'none';
        document.getElementById('taxa_desconto_valor').value = '';
        document.getElementById('info_desconto').style.display = 'none';
        document.getElementById('taxa').value = '0,00'; // Reseta o campo de taxa principal
    }

    // ... (dentro da tag <script>)

    const servicoFormacaoBrigada = "Formação de brigadadista, brigadista profissional, brigadista florestal, salva-vidas. Por aluno. Por hora/aula prática.";
    
    // Referências aos campos de entrada
    const $campoMetragem = document.querySelector('#metragem').closest('.input-group');
    const $campoCargaHoraria = document.getElementById('campo-carga-horaria');
    const $campoNumeroAlunos = document.getElementById('campo-numero-alunos');


    function exibirDescricaoServico(servico) {
        const descricaoDiv = document.getElementById('descricao-servico');
        const descricaoTexto = document.getElementById('descricao-texto');
        const formacaoBrigadaDiv = document.getElementById('formacao_brigada');
        const detalhesFormacaoBrigadaTexto = document.getElementById('detalhes_formacao_brigada');

        descricaoDiv.style.display = 'none';
        formacaoBrigadaDiv.style.display = 'none';
        descricaoTexto.textContent = '';
        detalhesFormacaoBrigadaTexto.textContent = '';
        
        // --- NOVO: Lógica de Exibição dos Campos de Entrada ---
        if (servico === servicoFormacaoBrigada) {
            detalhesFormacaoBrigadaTexto.textContent = detalhesFormacaoBrigada;
            formacaoBrigadaDiv.style.display = 'block';
            
            // Oculta Metragem e exibe Carga Horária/Alunos
            if ($campoMetragem) $campoMetragem.style.display = 'none';
            if ($campoCargaHoraria) $campoCargaHoraria.style.display = 'flex'; // Use 'flex' para input-group
            if ($campoNumeroAlunos) $campoNumeroAlunos.style.display = 'flex'; // Use 'flex' para input-group
            
        } else {
            // Exibe Metragem e oculta Carga Horária/Alunos
            if ($campoMetragem) $campoMetragem.style.display = 'flex'; // Use 'flex' para input-group
            if ($campoCargaHoraria) $campoCargaHoraria.style.display = 'none';
            if ($campoNumeroAlunos) $campoNumeroAlunos.style.display = 'none';
            
            // Exibe a descrição padrão, se existir
            if (descricoesServicos[servico]) {
                descricaoTexto.textContent = descricoesServicos[servico];
                descricaoDiv.style.display = 'block';
            }
        }
    }
// ...

    function calcular() {
        const servico = document.getElementById("servico").value;
        const metragem = document.getElementById("metragem").value;
        const cargaHoraria = document.getElementById("carga_horaria").value; // NOVO
        const numeroAlunos = document.getElementById("numero_alunos").value; // NOVO
        const upf = document.getElementById("upf").value; 

        const taxaInput = document.getElementById("taxa");
        const taxaComDescontoDiv = document.getElementById('taxa_com_desconto');
        const taxaDescontoValorInput = document.getElementById('taxa_desconto_valor');
        const infoDescontoDiv = document.getElementById('info_desconto');

        taxaComDescontoDiv.style.display = 'none';
        taxaDescontoValorInput.value = '';
        infoDescontoDiv.style.display = 'none';
        
        const servicoFormacaoBrigada = "Formação de brigadadista, brigadista profissional, brigadista florestal, salva-vidas. Por aluno. Por hora/aula prática.";

        // --- NOVO: Lógica de Seleção de Endpoint e Dados ---
        let apiUrl = '';
        let formData = '';

        if (servico === servicoFormacaoBrigada) {
            apiUrl = 'api/calcular_brigada.php'; // NOVO ENDPOINT
            formData = `servico=${encodeURIComponent(servico)}&carga_horaria=${encodeURIComponent(cargaHoraria)}&numero_alunos=${encodeURIComponent(numeroAlunos)}&upf=${encodeURIComponent(upf)}`;
        } else {
            apiUrl = 'api/calcular.php'; // ENDPOINT EXISTENTE
            formData = `servico=${encodeURIComponent(servico)}&metragem=${encodeURIComponent(metragem)}&upf=${encodeURIComponent(upf)}`;
        }
        // --------------------------------------------------

        // Lógica dos eventos (mantida)
        const eventos = document.getElementById("eventos");
        const servicosComEvento = [
            "Análise de PSCIP para Shows, eventos, instalações provisórias e similares",
            "Vistoria Técnica para Shows, eventos, instalações provisórias e similares"
        ];

        if (servicosComEvento.includes(servico)) {
            eventos.style.display = 'block';
        } else {
            eventos.style.display = 'none';
        }

        exibirDescricaoServico(servico);

        // Chamada AJAX usando o endpoint dinâmico
        fetch(apiUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                let taxaCalculada = 0;
                
                // Trata o cálculo se for Formação de Brigada, que NÃO tem desconto.
                if (servico === servicoFormacaoBrigada) {
                     // Formatação BRL (R$ 0,00)
                    taxaCalculada = parseFloat(data.taxa_final.replace('.', '').replace(',', '.'));
                    taxaInput.value = `R$ ${data.taxa_final}`; // Exibe o valor já formatado
                    // Garante que o desconto não seja aplicado para este serviço
                    taxaComDescontoDiv.style.display = 'none';
                    infoDescontoDiv.style.display = 'none';
                } else {
                    // Lógica para todos os outros serviços
                    taxaCalculada = parseFloat(data.taxa_formatada.replace('R$', '').replace('.', '').replace(',', '.'));
                    taxaInput.value = data.taxa_formatada;

                    if (servicosComDesconto.includes(servico) && !isNaN(taxaCalculada) && taxaCalculada > 0) {
                        const taxaComDesconto = taxaCalculada * 0.90;
                        taxaDescontoValorInput.value = `R$ ${taxaComDesconto.toFixed(2).replace('.', ',')}`;
                        taxaComDescontoDiv.style.display = 'flex'; 
                        infoDescontoDiv.style.display = 'block'; 
                    }
                }
                
                // Atualiza a fórmula
                document.getElementById("resultado").innerHTML = `<div class="alert alert-info">Fórmula usada: ${data.formula}</div>`;
            })
            .catch(error => {
                document.getElementById("resultado").innerHTML = "Erro ao calcular.";
                console.error("Erro:", error);
            });
    }

    document.addEventListener("DOMContentLoaded", function() {
        fetch('api/get_upf.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const upfInput = document.getElementById('upf');
                    if (upfInput) {
                        upfInput.value = data.upf;
                    }

                    const upfDisplay = document.getElementById('upf_display');
                    if (upfDisplay) {
                        upfDisplay.textContent = `R$ ${parseFloat(data.upf).toFixed(2)}`;
                    }
                } else {
                    console.error(data.error || "Erro ao obter o valor da UPF.");
                }
            })
            .catch(error => console.error("Erro na requisição:", error));

        const servicoInput = document.getElementById('servico');
        servicoInput.addEventListener('input', function() {
            exibirDescricaoServico(this.value);
            // Ao mudar o serviço, também limpamos e escondemos as áreas de resultado/desconto
            document.getElementById('resultado').innerHTML = '';
            document.getElementById('taxa_com_desconto').style.display = 'none';
            document.getElementById('taxa_desconto_valor').value = '';
            document.getElementById('info_desconto').style.display = 'none';
            document.getElementById('taxa').value = '0,00'; // Reseta o campo de taxa principal
        });
    });
</script>

<?php include 'includes/footer.php'; ?>