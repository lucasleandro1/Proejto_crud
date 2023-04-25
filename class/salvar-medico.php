<?php
    switch($_REQUEST["acao"]){
        case'cadastrar':
            $nome= $_POST["nome"];
            $CPF= $_POST["CPF"];
            $senha= md5($_POST["senha"]);
            $celular = $_POST["celular"];
            $data_nasc= $_POST["data_nasc"];

            $sql="INSERT INTO medico (nome,
             CPF, senha, celular,data_nasc)
             VALUES('{$nome}', '{$CPF}',
             '{$senha}','{$celular}', '{$data_nasc}')";
            
            $res = $con->query($sql);

            if ($res == true) {
                print "<script>alert('Cadastro 
                realizado com sucesso');</script>";
                print "<script>location.href='?page=listar_medico';</script>";
            }else {
                print "<script>alert('Não foi prossivel 
                cadastrar');</script>";
                print "<script>location.href=
                '?page=listar_medico';</script>";
            }
            break;
        case'editar':
            $nome= $_POST["nome"];
            $CPF= $_POST["CPF"];
            $senha= md5($_POST["senha"]);
            $celular = $_POST["celular"];
            $data_nasc= $_POST["data_nasc"];
            $sql = "UPDATE medico SET nome ='{$nome}',
            CPF='{$CPF}',
            senha='{$senha}',
            celular='{$celular}',
            data_nasc='{$data_nasc}'
            WHERE 
                id=".$_REQUEST["id"];
            $res = $con->query($sql);
            if ($res == true) {
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar_medico';</script>";
            }else {
                print "<script>alert('Não foi prossivel 
                editar');</script>";
                print "<script>location.href=
                '?page=listar_medico';</script>";
            }
            break;
        case'excluir':
            $sql = "DELETE FROM medico WHERE id=".$_REQUEST["id"];
            $res = $con->query($sql);
            if ($res == true) {
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=listar_medico';</script>";
            }else {
                print "<script>alert('Não foi prossivel 
                excluir');</script>";
                print "<script>location.href=
                '?page=listar_medico';</script>";
            }
            break;
    }
