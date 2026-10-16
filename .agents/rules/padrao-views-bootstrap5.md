

# Regra de Padrão para Criação de Novas Views (Bootstrap 5)

Ao criar qualquer novo arquivo de View (`.php`) no diretório `Views/`, você DEVE seguir rigorosamente o padrão moderno do projeto, que utiliza **Bootstrap 5** e o **sistema de notificações Toast centralizado**.

## 1. Estrutura Obrigatória de Cabeçalho e Rodapé

Toda nova View DEVE iniciar com o include do `header2.php` e terminar com o include do `footer2.php`. Esses dois arquivos formam o par correto para o stack Bootstrap 5:

```php
<?php
// Sempre inicie com o header moderno (Bootstrap 5 + controle de sessão/permissão)
include_once '../Views/header2.php';
?>

<!-- conteúdo da View aqui -->

<?php
// Sempre finalize com o footer moderno (Bootstrap 5 JS + toast.js centralizado)
include_once '../Views/footer2.php';
?>
```

> **NUNCA** use `footer.php` (legado, Bootstrap 3.3.6) em Views que utilizam `header2.php`.
> Misturar os dois quebra os componentes JS do Bootstrap 5 (Toasts, Modals, etc.).

## 2. Sistema de Notificações: Uso do `showToast()`

Como o `footer2.php` já inclui automaticamente o arquivo `js/meus_scripts/toast.js`, todas as novas Views têm acesso à função global `showToast()` sem nenhum include adicional.

**Nunca use `alert()` para dar feedback ao usuário.** Substitua sempre por `showToast()`.

### Assinatura da função

```javascript
showToast(mensagem, tipo, duracao);
```

| Parâmetro | Tipo | Obrigatório | Valores aceitos | Padrão |
|---|---|---|---|---|
| `mensagem` | `string` | ✅ Sim | Qualquer texto | — |
| `tipo` | `string` | ✅ Sim | `'success'`, `'danger'`, `'warning'`, `'info'` | — |
| `duracao` | `number` | ❌ Não | Milissegundos | `4000` |

### Exemplos de uso

```javascript
// Sucesso após salvar dados
showToast('Registro salvo com sucesso!', 'success');

// Erro retornado pela API
showToast(data.error || 'Ocorreu um erro inesperado.', 'danger');

// Aviso importante com duração maior
showToast('Atenção: esta ação não pode ser desfeita.', 'warning', 6000);

// Informação ao usuário
showToast('Os dados foram carregados.', 'info');
```

## 3. Padrão para Chamadas AJAX (Fetch API) em novas Views

Ao criar formulários assíncronos em novas Views, siga este template como base:

```javascript
document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#meu-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const btn = this.querySelector('[type="submit"]');
        const originalHtml = btn.innerHTML;

        // Desabilita o botão e exibe spinner durante o carregamento
        btn.disabled = true;
        btn.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Salvando...';

        fetch(this.action, { method: 'POST', body: new FormData(this) })
            .then(response => {
                if (!response.ok) throw new Error('Erro HTTP ' + response.status);
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showToast(data.message || 'Operação realizada com sucesso!', 'success');
                } else {
                    showToast(data.error || 'Ocorreu um erro. Tente novamente.', 'danger');
                }
            })
            .catch(error => {
                console.error('[NomeDaView] Erro no fetch:', error);
                showToast(error.message || 'Falha de conexão com o servidor.', 'danger');
            })
            .finally(() => {
                // Sempre restaura o botão, independente do resultado
                btn.disabled = false;
                btn.innerHTML = originalHtml;
            });
    });
});
```
