---
trigger: always_on
---

# Regra de Commits Atômicos e Prevenção de Perda de Código (Git)

Para evitar commits monolíticos (que misturam muitas alterações) e facilitar futuros "fallbacks" (reversões de código), você DEVE atuar como um monitor do controle de versão durante o nosso fluxo de trabalho.

Sempre que estivermos desenvolvendo e você identificar que uma "unidade lógica de trabalho" foi concluída, siga este fluxo:

1. **Identificação do Momento Ideal:** Considere como momento ideal para um commit as seguintes situações:
   - A criação ou refatoração completa de um arquivo importante (ex: finalizar um novo DAO ou um Controlador de API).
   - A separação bem-sucedida de um arquivo legado em frontend/backend.
   - A correção isolada de um bug.
   - Antes de iniciar uma alteração muito destrutiva ou complexa.
2. **Pausa Estratégica:** Ao atingir um desses marcos, PARE. Não inicie a próxima tarefa ou refatoração imediatamente.
3. **Sugestão Pró-ativa:** Alerte o usuário de que este é um excelente momento para "salvar o progresso" no Git.
4. **Proposta de Mensagem:** Sugira uma ou duas mensagens de commit claras e curtas, utilizando o padrão Conventional Commits (ex: `feat:`, `fix:`, `refactor:`, `chore:`).
   - *Exemplo:* "Sugiro fazermos um commit agora para isolar essa mudança. Mensagem sugerida: `refactor: extrai logica de acesso a dados para UsuarioDAO`."
5. **Ação:** Pergunte se o usuário deseja que você execute o commit (utilizando a skill de terminal) ou se ele fará isso manualmente antes de prosseguirmos.