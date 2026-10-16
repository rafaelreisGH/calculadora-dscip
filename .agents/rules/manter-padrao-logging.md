---
trigger: always_on
---

PADRÃO DE AUDITORIA E LOGGING (CBMMT)

É OBRIGATÓRIO registrar logs de auditoria em todas as operações que alterem o estado do sistema (operações CRUD: INSERT, UPDATE, DELETE) ou em eventos sensíveis (como Login).

Ao gerar, sugerir ou refatorar códigos, o assistente deve seguir ESTRITAMENTE o padrão de logging do projeto, utilizando a fábrica de logs existente:

1. Instanciação:
Não instancie o Monolog diretamente. Utilize sempre a classe LoggerFactory:

PHP
require_once __DIR__ . '/../Logger/LoggerFactory.php'; // Ajuste o nível do diretório conforme a localização do script
$logger = LoggerFactory::createLogger();
2. Estrutura do Log:
Utilize o método $logger->info().
O primeiro parâmetro deve ser uma string clara e em terceira pessoa (ex: 'Usuário atualizou relatório', 'Usuário inseriu vaga').
O segundo parâmetro DEVE ser um array de contexto padronizado, capturando os dados de quem realizou a ação a partir da sessão ($_SESSION), contendo obrigatoriamente as seguintes chaves:

id => ID do usuário logado (ex: $_SESSION['id'])

usuario => Nome do usuário (ex: $_SESSION['nome'])

email => E-mail do usuário (ex: $_SESSION['email'])

perfil => Nível de acesso (ex: $_SESSION['nivel_de_acesso'])

sujeito => (Obrigatório em CRUD) O ID do registro, entidade ou militar que sofreu a alteração.

Exemplo de aplicação (após um UPDATE no banco):

PHP
$logger->info('Usuário excluiu relatório da corregedoria', [
    'id' => $_SESSION['id'],
    'usuario' => $_SESSION['nome'],
    'email' => $_SESSION['email'],
    'perfil' => $_SESSION['nivel_de_acesso'],
    'sujeito' => $id_relatorio
]);