<h1>Editar Usuário</h1>
<?php

    $sql = "SELECT * FROM cadastro WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST" value="editar">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label> Nome </label>
            <input type="text" name="nome" class="form-control"  value="<?php print $row->nome; ?>" required>
        
    </div>

    <div class="mb-3">
        <label> Email </label>
            <input type="email" name="email" class="form-control" value="<?php print $row->email; ?>" required>
       
    </div>

    <div class="mb-3">
        <label> Senha </label>
            <input type="password" name="senha"
            class="form-control" required>
        
    </div>

    <div class="mb-3">
        <label> Data de nascimento
            <input type="date" name="data_nasc" class="form-control" value="<?php print $row->data_nasc;?>" required>
         </label>
    </div>
    
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-dark">Enviar</button>
    </div>
</form>