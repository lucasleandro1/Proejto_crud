<h1>Novo usuario</h1>

<form action="?page=salvar" method="POST">
    <input type ="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome"
            class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email"
            class="form-control">1
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" 
            class="form-control">
    </div>
    <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" name="data_nasc"
            class="form-control">
    </div>
    <div class="d-flex justify-content-end mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>