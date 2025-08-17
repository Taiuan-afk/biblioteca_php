<?php
require_once __DIR__.'/../src/Biblioteca.php';

$biblioteca = new Biblioteca();

function exibirMenu() {
    echo "\n=== BIBLIOTECA ===\n";
    echo "1. Cadastrar livro\n";
    echo "2. Emprestar livro\n";
    echo "3. Listar disponíveis\n";
    echo "4. Sair\n";
    echo "Opção: ";
}

while (true) {
    exibirMenu();
    $opcao = trim(fgets(STDIN));
    
    try {
        switch ($opcao) {
            case '1':
                echo "Título: "; $titulo = fgets(STDIN);
                echo "Autor: "; $autor = fgets(STDIN);
                echo "Quantidade: "; $quant = (int)fgets(STDIN);
                $biblioteca->adicionarLivro($titulo, $autor, $quant);
                echo "Livro cadastrado!\n";
                break;
                
            case '2':
                echo "Título para empréstimo: "; $titulo = fgets(STDIN);
                $biblioteca->emprestarLivro($titulo);
                echo "Empréstimo realizado!\n";
                break;
                
            case '3':
                echo "\nLIVROS DISPONÍVEIS:\n";
                foreach ($biblioteca->listarDisponiveis() as $livro) {
                    echo "- {$livro['titulo']} ({$livro['quantidade']} disponíveis)\n";
                }
                break;
                
            case '4':
                exit("Até logo!\n");
                
            default:
                echo "Opção inválida!\n";
        }
    } catch (Exception $e) {
        echo "ERRO: " . $e->getMessage() . "\n";
    }
}