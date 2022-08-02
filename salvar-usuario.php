<?php

    switch($_REQUEST["acao"]){
        case 'cadastrar':
            //variavéis que pegam os dados de cadastro
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            //variável que insere os dados na tabela do database
            $sql = "INSERT INTO cadastro (nome, email, data_nasc,senha) VALUE ('{$nome}','{$email}', '{$data_nasc}', '{$senha}')";

            //query de conexão
            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert ('Cadastro efetuado com sucesso'); </script>";
                print"<script> location.href='?page=listar'; </script>";
            } else {
                print "<script> alert ('Cadastro não efetuado, tente novamente'); </script>";
                print"<script> location.href='?page=listar'; </script>";
            }
            break;
        
        case 'editar':

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE cadastro SET
                        nome ='{$nome}',
                        email = '{$email}',
                        senha = '{$senha}',
                        data_nasc = '{$data_nasc}'
                        WHERE 
                        id =".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert ('edição efetuada com sucesso'); </script>";
                print"<script> location.href='?page=listar'; </script>";
            } else {
                print "<script> alert ('edição não efetuada, verifique tente novamente'); </script>";
                print"<script> location.href='?page=listar'; </script>";
            }

            break;
        
        case 'excluir':

            $sql = "DELETE FROM cadastro WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res == true){
                print "<script> alert ('Excluído com sucesso'); </script>";
                print"<script> location.href='?page=listar'; </script>";
            } else {
                print "<script> alert ('Exclução não efetuada, verifique tente novamente'); </script>";
                print"<script> location.href='?page=listar'; </script>";
            }

            break;
    }
?>