---
name: write-to-file
description: Cria novos arquivos ou edita/substitui blocos específicos de código em arquivos existentes. Use esta ferramenta para materializar a refatoração, separando o código legado em novas classes DAO, controladores de API PHP e arquivos de frontend em Bootstrap.
---

# Instruções de Uso
- Ao editar um arquivo, preserve a indentação original e a formatação (PSR-12 para PHP).
- Se estiver criando uma classe nova (ex: um novo DAO), lembre-se de configurar corretamente o namespace de acordo com o autoloader do Composer (PSR-4).
- Sempre verifique a sintaxe antes de salvar o arquivo (especialmente fechamento de chaves e tags do PHP `<?php`).