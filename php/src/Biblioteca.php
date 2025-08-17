<?php
class Biblioteca {
    private $livros = [];


    //adiciona livro no acervo
    public function adicionarLivro($titulo, $autor, $quantidade) {
        if ($quantidade <= 0) {
            throw new Exception("Quantidade deve ser maior que zero");
        }
        
        $this->livros[] = [
            'titulo' => trim($titulo),
            'autor' => trim($autor),
            'quantidade' => $quantidade
        ];
    }

   //função para adiconar 
    public function emprestarLivro($titulo) {
        $titulo = trim($titulo);
        $encontrou = false;
        
        foreach ($this->livros as &$livro) {
            if (strtolower($livro['titulo']) == strtolower($titulo)) {
                $encontrou = true;
                if ($livro['quantidade'] > 0) {
                    $livro['quantidade']--;
                } else {
                    throw new Exception("Não há exemplares disponíveis");
                }
            }
        }
        
        if (!$encontrou) {
            throw new Exception("Livro não encontrado");
        }
    }

    //função para listar os livros cadastrados
    public function listarDisponiveis() {
        $disponiveis = [];
        foreach ($this->livros as $livro) {
            if ($livro['quantidade'] > 0) {
                $disponiveis[] = $livro;
            }
        }
        return $disponiveis;
    }
}