<h1>Listar médico</h1>
<?php
    $sql = "SELECT * FROM medico";

    $res = $con->query($sql);

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-hover table-striped table-bordered'>";
        print"<tr>";
        print "<th>#</th>";
        print "<td>Nome</td>";
        print "<td>CPF</td>";
        print "<td>Senha</td>";
        print "<td>Data de nascimento</td>";
        print"</tr>";
        while ($row = $res->fetch_object()){
            print"<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->Nome."</td>";
            print "<td>".$row->CPF."</td>";
            print "<td>".$row->Celular."</td>";
            print "<td>".$row->data_nasc."</td>";
            print"<td><button onclick=\"location.href='?page=editar-medico&id=".$row->id."';\"class ='btn btn-success'>Editar</button>
            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar-medico&acao=excluir&id=".$row->id."';}else{false}\"class ='btn btn-danger'>Excluir</button></td>";
            print"</tr>";
        }
        print"</table>";
    }else {
        print "<p class='alert alert-danger'>
        Não encontrou resultados!</p>"; 
    }
?>