
<?php
$sql = "SELECT * FROM produto WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<h1> Alterar <?php echo $row->nome;?></h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php echo $row->id;?>">
  <table border='0'>
    <tr>
      <td>
        <label>Nome</label>
      </td>
      <td>
        <input type="text" name="nome" class="campoNome" value="<?php echo $row->nome;?>">
      </td>
    <tr>
    <tr>
      <td>

        <label>Descrição</label>
      </td>
      <td>
        <input type="text" name="descricao" class="campoNome" value="<?php echo $row->descricao;?>">
      </td>
    <tr>
    <tr>
      <td>

        <label>valor</label>
      </td>
      <td>
        <input type="text" name="valor" class="campoNome" value="<?php echo $row->valor;?>">
      </td>
    <tr>
    <tr>
      <td>

        <label>Disponivel</label>
      </td>
      <td>
        
        <select name="disponibilidade" class="campoNome">
          <option value="não">não</option>
          <option value="sim" >sim</option>
          <option value="<?php echo $row->disponibilidade;?>" selected><?php echo $row->disponibilidade;?></option>
          
        </select>
      </td>
    <tr>
  </table>
     
  <div>
    <button type="submit" class="botaoAlterarProduto">Alterar</button>
</div>
</form>