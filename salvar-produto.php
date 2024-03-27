<?php
switch ($_REQUEST["acao"]) {
    case "cadastrar":
       $nome = $_POST["nome"];
       $descricao = $_POST["descricao"];
       $valor = $_POST["valor"];
       $disponivel = $_POST["disponibilidade"];
      $sql = "INSERT INTO produto (nome,descricao, valor, disponibilidade) VALUES('{$nome}','{$descricao}','{$valor}','{$disponivel}')";
       $res = $conn->query($sql);
        if($res==true){
            print "<script>alert('Cadastro realizado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";

        }else{
            print "<script>alert('Não foi possivel cadastrar o produto');</script>";
            print "<script>location.href='?page=listar';</script>";
        }


        break;
    case "editar":
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $valor = $_POST["valor"];
        $disponivel = $_POST["disponibilidade"];
        $sql = "UPDATE produto SET nome='{$nome}', descricao='{$descricao}',valor='{$valor}',disponibilidade='{$disponivel}' WHERE id=".$_REQUEST["id"];
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
       $sql="DELETE FROM produto WHERE id=".$_REQUEST["id"];
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