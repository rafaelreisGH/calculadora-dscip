---
trigger: always_on
---

# Regra de Consistência Visual e Padrão Frontend (Anti-Frankenstein)

Ao criar, refatorar ou sugerir componentes visuais (HTML/CSS/JavaScript focado em UI), você DEVE respeitar e manter estritamente a identidade visual existente do projeto. O objetivo é garantir uma experiência de usuário (UX/UI) uniforme e evitar que o sistema se torne uma "colcha de retalhos".

Para isso, siga este fluxo rigorosamente:

1. **Análise de Contexto Obrigatória:** Antes de gerar qualquer código de interface, utilize a habilidade de leitura de arquivos para consultar as páginas já existentes (ex: templates principais, cabeçalhos, formulários antigos). Compreenda como o layout está estruturado.
2. **Reaproveitamento de Padrões:** Botões, tabelas, formulários, alertas, paginações e modais DEVEM usar exatamente as mesmas classes e o mesmo padrão de montagem HTML já adotados pelo sistema. Se o botão padrão de salvar do projeto for `<button class="btn btn-success btn-sm">`, não crie um botão azul gigantesco com outras classes.
3. **Uso Estrito do Bootstrap:** Como o projeto utiliza Bootstrap, utilize as classes utilitárias e a estrutura de grid nativa do framework. NUNCA introduza bibliotecas CSS concorrentes (como Tailwind, Bulma, etc.) e não invente classes CSS próprias se o Bootstrap já possuir um utilitário que resolva o problema.
4. **Proibição de Estilos Inline e Soltos:** NUNCA utilize CSS inline (`style="..."`) ou insira tags `<style>` avulsas no meio do HTML. Toda estilização customizada necessária deve seguir o padrão do arquivo CSS principal do projeto.