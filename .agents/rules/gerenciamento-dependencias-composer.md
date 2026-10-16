---
trigger: always_on
---

# Regra de Gerenciamento de Dependências (PHP)

Ao adicionar, atualizar, remover ou sugerir bibliotecas externas para o projeto PHP, você DEVE utilizar exclusivamente o **Composer**.

1. **Sem Downloads Manuais:** NUNCA sugira baixar bibliotecas manualmente (arquivos `.zip`), importar via CDN (para dependências de backend) ou jogar arquivos soltos dentro de pastas como `/libs`. 
2. **Instalação de Pacotes:** Sempre recomende ou utilize comandos oficiais do Composer (ex: `composer require nome-do-pacote`) para adicionar dependências.
3. **Autoload e PSR-4:** Ao criar novas classes (especialmente os DAOs, Controladores e rotas da API), utilize o Autoload do Composer (`require 'vendor/autoload.php';`). Certifique-se de configurar e respeitar o padrão **PSR-4** no arquivo `composer.json` para o carregamento automático das classes, eliminando a necessidade de dezenas de `require_once` espalhados pelo código.
4. **Boas Práticas de Repositório:** Sempre considere que a pasta `vendor/` está no `.gitignore`. Quando analisar o projeto, concentre-se nos arquivos `composer.json` e `composer.lock` para entender as dependências instaladas.