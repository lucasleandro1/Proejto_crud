<h1>Editar usuario</h1>
<?php
    $sql ="SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $con->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type ="hidden" name="acao" value="editar">
    <input type ="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->Nome; ?>"
            class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->Email; ?>"
            class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" 
            class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>"
            class="form-control">
    </div>
    <div class="d-flex justify-content-end mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>