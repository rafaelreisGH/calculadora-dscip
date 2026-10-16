---
trigger: always_on
---

# Regra de Segurança e Variáveis de Ambiente (.env)

Sempre que você ler, analisar ou refatorar arquivos e identificar dados sensíveis "hardcoded" (escritos diretamente no código) — como senhas de banco de dados, tokens de API, chaves secretas, URLs de conexão ou credenciais —, você DEVE atuar como um guardião de segurança:

1. **Alerta Imediato:** Informe ao usuário sobre o risco de segurança de manter aqueles dados expostos no código-fonte.
2. **Proposta de Migração (.env):** Como o projeto ainda não possui um sistema de variáveis de ambiente, sugira a criação de um arquivo `.env` na raiz do projeto para armazenar essas informações.
3. **Plano de Implementação Segura:** Ao sugerir essa mudança, instrua o usuário a:
   - Criar o arquivo `.env` (contendo os dados reais) e um arquivo `.env.example` (contendo apenas os nomes das variáveis, vazio, para documentação).
   - Adicionar IMEDIATAMENTE o arquivo `.env` ao `.gitignore` para não vazar as credenciais no repositório.
   - Refatorar o código PHP para ler esses dados dinamicamente (sugerindo o uso da função `getenv()` ou a instalação do pacote `vlucas/phpdotenv` via Composer).
4. **Prevenção:** A partir de agora, NUNCA gere novos blocos de código contendo senhas ou credenciais escritas diretamente. Sempre estruture o código para consumir do ambiente.