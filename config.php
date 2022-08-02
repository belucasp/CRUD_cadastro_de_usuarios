<?php

    define('HOST', 'localhost');
    define( 'USER', 'root');
    define('PASS', '');
    define('BASE','test');

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    /* Teste de conexão com o database, status: conectado
    if($conn -> connect_errno{
        print "Erro de conexão com o database";
    } else {
        print "Conexão efetuada com sucesso!";
    }*/
?>