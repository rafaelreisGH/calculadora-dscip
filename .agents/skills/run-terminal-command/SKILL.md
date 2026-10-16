---
name: run-terminal-command
description: Executa comandos no terminal do sistema operacional. Use esta ferramenta para gerenciar pacotes PHP via Composer (`composer require`, `composer update`), rodar comandos do Git (`git status`, `git add`, `git commit`), ou gerenciar containers via Docker/Docker-compose.
---

# Instruções de Segurança e Uso
- NUNCA execute comandos interativos que exigem resposta do usuário no terminal (ex: comandos que pedem confirmação [Y/n] ou senhas). Use flags como `-y` ou `--no-interaction` quando aplicável.
- Após executar comandos do Composer, valide se a execução foi bem-sucedida lendo a saída do terminal antes de continuar.