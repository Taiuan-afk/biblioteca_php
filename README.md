# README do Grupo – Atividade: Auditoria e Refatoração (Sistema da Biblioteca)

> Entregável do aluno – Preencha este arquivo e entregue junto com o código e o checklist.
> Mantenha o texto objetivo e cite evidências (arquivo/linha/commit).

1) Identificação
- Turma/UC: 
- Professor: Aislan Souza  
- Integrantes: Taiuan da Silva COsta e Tiago Meyer

2) Linguagem e Ambiente
- Linguagem escolhida: (X) PHP  ( ) JavaScript (Node.js)
- Versão: PHP `8.4.8` 
- Como instalar dependências: *(se houver)*  
  ```bash
  # Ex.: npm install
  ```

3) Como Executar
PHP

php php/app.php

Servidor embutido (se tiver interface web)
php -S localhost:8000

JavaScript (Node)

node js/app.js


> Se o seu grupo criou outros arquivos de entrada, documente aqui:

# Exemplo
php app.php emprestar "PHP Básico"
node app.js listar


4) Estrutura do Projeto (após refatoração)

/seu-grupo/
  ├── src/                 # regra de negócio (domínio) – sem I/O
  ├── app/                 # interface/CLI – captura entrada e imprime saída
  ├── tests/               # testes (se houver)
  ├── checklist.xlsx       # checklist preenchido
  └── README.md            # este arquivo

> Ajuste os nomes/conteúdo para refletir sua organização real.

5) Principais Melhorias Realizadas (resumo)
- [ ] Nomenclatura de arquivos/classes/funções corrigida
- [ ] Documentação adicionada (PHPDoc/JSDoc)
- [ ] Validações de entrada (vazios, tipos, negativos)
- [ ] Tratamento de erros com exceções/mensagens claras
- [ ] Separação de **regra de negócio** e **I/O**
- [ ] Funções novas: **devolver** e **listarDisponiveis**
- [ ] (Opcional) Persistência em JSON / Modo CLI / Relatórios

 6) Checklist – Evidências por item



 7) Antes x Depois (trechos representativos)
   > Inclua 2 a 4 exemplos curtos com o que estava errado e como ficou depois.  
   > Use blocos de código com a sua linguagem.

   Exemplo 1 – Tratamento de erro

    - if (l.quantidade < 0) { console.log("Erro"); }
    + if (l.quantidade <= 0) { throw new Error("Sem exemplares disponíveis."); }
  

   Exemplo 2 – Documentação (PHPDoc/JSDoc)
 
/**
 * Empresta um exemplar do título informado.
 * @param string $titulo
 * @throws RuntimeException se não houver exemplares
 */
public function emprestar(string $titulo): void { ... }


   8) Testes Manuais (e/ou automatizados)
-  Casos cobertos: emprestar quando há estoque, emprestar sem estoque, devolver, listar disponíveis, entradas inválidas.
-  Como rodar testes automáticos: (se houver)
  
  # Ex.: phpunit / jest / vitest
  
- Prints/saídas relevantes:(adicione imagens ou código com saída)

  9) Limitações conhecidas e Próximos Passos

- (ex.: melhorar mensagens de erro; adicionar logs; criar camadas de repositório)

 10) Créditos
- Integrantes e principais responsabilidades (opcional).
