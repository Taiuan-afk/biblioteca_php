# README do Grupo – Atividade: Auditoria e Refatoração (Sistema da Biblioteca)

> Entregável do aluno – Preencha este arquivo e entregue junto com o código e o checklist.
> Mantenha o texto objetivo e cite evidências (arquivo/linha/commit).

1) Identificação
Turma/UC: G91254
Professor: Aislan da Silva Souza
Integrantes: Taiuan da Silva Costa / Tiago Meyer Almeida

2) Linguagem e Ambiente
Linguagem escolhida: PHP
Versão: PHP 8.x
Dependências: Nenhuma.  

3) Como Executar  

1. Certifique-se de ter o PHP instalado (versão 8.x ou superior).
   php -v
2. No terminal, navegue até a pasta do projeto e execute:
   
bash
   php php/app.php

4) Estrutura do Projeto (após refatoração)

/projeto/
  ├── php/
  │   ├── app/                  # Interface CLI
  │   │   └── app.php           # Menu interativo
  │   ├── src/                  # Regra de negócio
  │       └── Biblioteca.php    # Lógica principal
  ├── checklist.xlsx            # Checklist de auditoria
  └── README.md                 # Este arquivo

> Ajuste os nomes/conteúdo para refletir sua organização real.

5) Principais Melhorias Realizadas (resumo)
Nomenclatura: Funções renomeadas para adicionarLivro, emprestarLivro.
Documentação: Comentários adicionados em métodos (Biblioteca.php).
Validações: Bloqueio de quantidade <= 0 e tratamento de erros.
Separação de camadas: Lógica em src/ e interface em app/.
Novas funcionalidades: listarDisponiveis() e mensagens claras.

6) Checklist – Evidências por item

       Item       |           Correção                 |               Evidência
1. Documentação   |   Adicionados comentários          |    Biblioteca.php (linhas 8, 19, 34)
2. Nomenclatura   |   Classes/variáveis descritivas    |    Biblioteca.php (nome da classe, $titulo)
4. Loop infinito  |   Condição de saída (case '4')     |    app.php (linha 33)
5. NullPointer    |   Validações com trim() e exceções |    Biblioteca.php (linhas 10, 23-30)
8. Exceções       |   Mensagens específicas            |    Biblioteca.php (linhas 25, 29)

7) Antes x Depois (trechos representativos)

Exemplo 1 – Validação de Quantidade
        // Antes (bugada.php): Permitia quantidade negativa
        $GLOBALS["livros"][$i]["quantidade"] = $l["quantidade"] - 1;

        // Depois (Biblioteca.php, linha 10):
        if ($quantidade <= 0) throw new Exception("Quantidade deve ser > 0");

Exemplo 2 – Tratamento de Erros
        // Antes: "Erro" genérico
        echo "Erro\n";

        // Depois: Exceção específica
        throw new Exception("Não há exemplares disponíveis");

8) Testes Manuais (e/ou automatizados)

1.Cadastro inválido:
Entrada: 1 → "Livro", "Autor", -5
Saída: ERRO: Quantidade deve ser maior que zero

2.Empréstimo sem estoque:
Entrada: 2 → "Livro X" (sem estoque)
Saída: ERRO: Não há exemplares disponíveis

3.Listagem:
Saída: Exibe apenas livros com quantidade > 0.

9) Limitações conhecidas e Próximos Passos

Limitações:
Dados não persistem após fechar o programa.
Sem interface gráfica.

Melhorias:
Adicionar função devolverLivro().
Salvar dados em arquivo JSON.

 10) Créditos
Todos integrantes da equipe realizaram tal atividade em conjunto.
