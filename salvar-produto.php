<?php
switch ($_REQUEST["acao"]) {
    case "cadastrar":
       $nome = $_POST["nome"];
       $email = $_POST["email"];
       $senha = $_POST["senha"];
       $sql = "INSERT INTO usuarios (nome,email, senha) VALUES('{$nome}','{$email}','{$senha}')";
       $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Cadastro realizado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";

        }else{
            print "<script>alert('Não foi possivel cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }


        break;
    case "editar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $sql = "UPDATE usuarios SET nome='{$nome}', email='{$email}',senha='{$senha}' WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
         if($res==true){
             print "<script>alert('Editado com sucesso');</script>";
             print "<script>location.href='?page=listar';</script>";
 
         }else{
             print "<script>alert('Não foi possivel editar');</script>";
             print "<script>location.href='?page=listar';</script>";
         }
        break;
    case "excluir":
       $sql="DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
       $res = $conn->query($sql);
         if($res==true){
             print "<script>alert('Deletado com sucesso');</script>";
             print "<script>location.href='?page=listar';</script>";
 
         }else{
             print "<script>alert('Não foi possivel excluir');</script>";
             print "<script>location.href='?page=listar';</script>";
         }
        break;
}