<h1>Listar usuario</h1>
<?php
    $sql = "SELECT * FROM usuarios";

    $res = $con->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {

    }else {
        print "<p class='alert alert-danger'>
        Não encontrou resultados!</p>";
    }
?>