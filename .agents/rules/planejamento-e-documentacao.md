---
trigger: always_on
---

## 5. Regra de Planejamento e Documentação (SRS e Banco de Dados)

Sempre que o usuário pedir para implementar uma nova funcionalidade, planejar os próximos passos ou entender o contexto do projeto, você DEVE seguir estas diretrizes:

1. **Fonte da Verdade dos Requisitos:** Utilize a skill de leitura de arquivos para ler o documento de requisitos (SRS) localizado na pasta `.Documentacao`. Use-o como base para entender as regras de negócio e o que deve ser feito.
2. **Fonte da Verdade do Banco de Dados:** NUNCA baseie suas decisões ou queries em scripts SQL antigos ou estáticos que possam estar na pasta `.Documentacao`. Eles são apenas registros históricos. 
3. **Consulta em Tempo Real:** Para saber quais tabelas e colunas existem, utilize EXCLUSIVAMENTE a skill de consulta ao banco de dados ao vivo. Isso garante que você não usará nomes de campos desatualizados.