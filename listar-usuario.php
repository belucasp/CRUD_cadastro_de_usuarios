<h1>Listar Usuários</h1>
<?php
    $sql = "SELECT * FROM cadastro";
    
    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover '>";
        print "<tr>";
        print "<th>ID</td>";
        print "<th>Nome</td>";
        print "<th>E-mail</td>";
        print "<th>Data de Nascimento</td>";
        print "<th>Ações</th>";
        print"</tr>";

        while($row = $res->fetch_object()){   
            print"<tr>";
            print "<td>".$row-> id."</td>";
            print "<td>".$row-> nome."</td>";
            print "<td>".$row-> email."</td>";
            print "<td>".$row-> data_nasc."</td>";
            print"</tr>";
            print"<td>
                <button  onclick= \"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                <button onclick= \"if(confirm('Tem certeza que quer excluir esse registro?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>  
            </td>";
        }

    } else {
        print "<p class='alert alert-danger'> Não encontrou resultados</p>";
    }
    
?>