<?php

namespace app\controller\usuario;

class InsertUsuario
{
    public static function Insert(): bool
    {
        $self = new self;
        $nome = $_POST['nome'];
        $sobre_nome = $_POST['sobre_nome'];
        $cpf = $_POST['cpf'];
        $query = "INSERT INTO usuario (nome, sobre_nome, cpf) values ('{$nome}', '{$sobre_nome}', '{$cpf}');";
        var_dump($query);
        return true;
    }
}
