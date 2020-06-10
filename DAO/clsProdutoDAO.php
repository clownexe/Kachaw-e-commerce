<?php

class ProdutoDAO
{

    public static function inserir($produto)
    {
        $query = "INSERT INTO produtos 
                (nome, preco, quantidade, codCategoria, foto) VALUES (
                '" . $produto->nome . "' ,
                 " . $produto->preco . "  ,
                 " . $produto->quantidade . " ,
                 " . $produto->categoria->id . " , 
                '" . $produto->foto . "'   )";
        Conexao::executar($query);
    }

    public static function editar($produto)
    {
        $query = "UPDATE produtos SET
                nome = '" . $produto->nome . "' ,
                preco = " . $produto->preco . "  ,
                quantidade = " . $produto->quantidade . " ,
                codCategoria = " . $produto->categoria->id . " ,
                foto = '" . $produto->foto . "' 
                WHERE id =  " . $produto->id;

        Conexao::executar($query);
    }

    public static function excluir($id)
    {
        $query = "DELETE FROM produtos WHERE id = " . $id;
        Conexao::executar($query);
    }

    public static function getProdutos($filtroId = NULL)
    {
        if ($filtroId == 1)
            $filtro = "p.nome asc";
        elseif ($filtroId == 2)
            $filtro = "p.nome desc";
        elseif ($filtroId == 3)
            $filtro = "p.id desc";
        elseif ($filtroId == 4)
            $filtro = "p.id asc";
        else
            $filtro = "p.id desc";
        $query = "SELECT p.id, p.nome, p.valor, p.quantidade, p.descricao, p.foto, 
                         c.id AS codCat, c.nome AS nomeCat
                    FROM produtos p 
                    INNER JOIN categorias c ON c.id = p.idCat 
                    ORDER BY " . $filtro;
        $result = Conexao::consultar($query);
        $lista = new ArrayObject();
        while (list($cod, $nome, $valor, $qtd, $descricao, $foto, $codCat, $nomeCat) = mysqli_fetch_row($result)) {
            $cat = new Categoria();
            $cat->id = $codCat;
            $cat->nome = $nomeCat;
            $prod = new Produto();
            $prod->id = $cod;
            $prod->nome = $nome;
            $prod->valor = $valor;
            $prod->quantidade = $qtd;
            $prod->descricao = $descricao;
            $prod->categoria = $cat;
            $prod->foto = $foto;
            $lista->append($prod);
        }
        return $lista;
    }



    public static function getProdutosById($id)
    {
        $query = "SELECT p.id, p.nome, p.valor, p.quantidade, p.descricao, p.foto, 
                         c.id AS codCat, c.nome AS nomeCat
                    FROM produtos p 
                    INNER JOIN categorias c ON c.id = p.idCat 
                    WHERE p.id = " . $id . "
                    ORDER BY p.nome ";
        $result = Conexao::consultar($query);
        if ($result == NULL) {
            return NULL;
        } elseif (mysqli_num_rows($result) == 0) {
            return -1;
        } else {
            $lista = new ArrayObject();
            list($cod, $nome, $valor, $qtd, $descricao, $foto, $codCat, $nomeCat) = mysqli_fetch_row($result);
            $cat = new Categoria();
            $cat->id = $codCat;
            $cat->nome = $nomeCat;
            $prod = new Produto();
            $prod->id = $cod;
            $prod->nome = $nome;
            $prod->valor = $valor;
            $prod->quantidade = $qtd;
            $prod->descricao = $descricao;
            $prod->categoria = $cat;
            $prod->foto = $foto;
            $lista->append($prod);
            return $lista;
        }
    }
}
