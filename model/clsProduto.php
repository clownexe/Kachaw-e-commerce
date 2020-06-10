<?php
    class Produto{
        // Atributos ou características
        public $id;
        public $nome, $valor, $quantidade, $foto;
        public $categoria;


        // Métodos ou ações
        public function __construct($_id = NULL, $nome = NULL, $valor = NULL, $qtd = NULL, $categoria = NULL, $descricao = NULL, $foto = NULL)
        {
            $this->id = $_id;
            $this->nome = $nome;
            $this->valor = $valor;
            $this->quantidade = $qtd;   
            $this->categoria = $categoria; 
            $this->descricao = $descricao;  
            $this->foto = $foto;
        }

        public function imprimirNomevalor(){
            echo "Nome: ".$this->nome."<br>";
            echo "Preço: ".$this->valor."<br>";
        }
        public function atualizarvalor($percentual = 0){
            $novo_valor = $this->valor + ($this->valor * $percentual / 100);
            $this->valor = $novo_valor; 
        }

        public function consultarNovovalor($percentual = 0){
            $novo_valor = $this->valor + ($this->valor * $percentual / 100);
            return $novo_valor;
        }
    }
?>