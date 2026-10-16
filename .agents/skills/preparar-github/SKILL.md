---
name: preparar-github
description: Realiza uma auditoria completa de segurança e documentação no projeto para prepará-lo para publicação pública no GitHub como portfólio. Verifica vazamentos de credenciais no código e no histórico do Git, e garante a existência de .env, .env.example, .gitignore e um README.md bilíngue (EN/PT-BR).
---

# Fluxo de Execução da Auditoria de Portfólio (GitHub Ready)

Sempre que o usuário invocar esta skill, você DEVE executar os seguintes passos em ordem, utilizando as skills de leitura de arquivos e comandos de terminal:

## 1. Varredura de Segurança (Arquivos Locais)
- Analise os arquivos de configuração (ex: `conexao.php`, arquivos de banco, etc.) em busca de credenciais "hardcoded" (senhas, chaves de API, IPs de banco de dados).
- Se encontrar, anote para avisar o usuário e sugira a imediata substituição por variáveis de ambiente (`getenv()` ou `$_ENV`).

## 2. Varredura de Segurança (Histórico do Git)
- Utilize a skill de terminal para verificar se há arquivos sensíveis rastreados pelo Git (ex: `git ls-files`). 
- Verifique se arquivos de log, `.env` ou pastas `vendor/` foram commitados por engano.
- Se houver credenciais no histórico do Git, instrua o usuário sobre como remover do cache (`git rm --cached <arquivo>`) ou sugira o uso de ferramentas como BFG Repo-Cleaner/git-filter-repo (apenas liste os passos de correção, NÃO execute comandos destrutivos no histórico automaticamente).

## 3. Validação de Estrutura Base
Verifique a existência e o conteúdo dos seguintes arquivos. Se não existirem ou estiverem incompletos, você DEVE propor a criação deles:
- **`.env`**: Deve conter as variáveis reais do projeto. 
- **`.env.example`**: Deve conter as mesmas chaves do `.env`, mas com valores vazios ou fictícios (ex: `DB_PASS=sua_senha_aqui`).
- **`.gitignore`**: DEVE obrigatoriamente ignorar o `.env`, a pasta `vendor/`, `node_modules/`, e logs de erro do PHP/Apache.

## 4. Geração de Documentação (README.md)
- O projeto DEVE ter um arquivo `README.md`. Se não existir ou for muito básico, crie um documento focado em demonstrar a **proficiência do programador** para recrutadores e outros desenvolvedores.
- **Obrigatoriedade Bilíngue:** O README deve ter o conteúdo escrito em Inglês (topo) e em Português do Brasil (abaixo).
- O README deve conter: Nome do Projeto, Descrição do problema que resolve (baseado no SRS da pasta `.Documentacao`), Stack Tecnológica (PHP, MySQL, Bootstrap, Docker, etc.), e Instruções de como rodar o projeto localmente (usando o `.env.example`).

## 5. Relatório e Aprovação
Ao final da análise, NÃO crie ou modifique arquivos de imediato. Apresente um relatório com:
1. Vulnerabilidades encontradas (arquivos rastreados incorretamente ou senhas hardcoded).
2. O que falta ser criado (`.env`, `.gitignore`, etc.).
3. Um rascunho do novo `README.md` bilíngue.
Aguarde a aprovação do usuário para criar os arquivos e aplicar as correções.