
<h1>Novo Usuário</h1>

<form action="?page=salvar" method="POST" value="cadastrar">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label> Nome </label>
            <input type="text" name="nome" class="form-control" required>
        
    </div>

    <div class="mb-3">
        <label> Email </label>
            <input type="email" name="email" class="form-control" required>
       
    </div>

    <div class="mb-3">
        <label> Senha </label>
            <input type="password" name="senha"
            class="form-control" required>
        
    </div>

    <div class="mb-3">
        <label> Data de nascimento
            <input type="date" name="data_nasc" class="form-control" required>
         </label>
    </div>
    <div class="mb-3">
        <button type="submit" name="submit" class="btn btn-dark">Enviar</button>
    </div>
</form>