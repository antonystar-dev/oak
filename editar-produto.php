
<?php
$sql = "SELECT * FROM produto WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<h1> Alterar <?php echo $row->nome;?></h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php echo $row->id;?>">
  <div>
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $row->nome;?>">  
  </div>
  <div>
    <label>Descrição</label>
    <input type="text" name="descricao" value="<?php echo $row->descricao;?>">  
  </div>
  <div>
    <label>Valor</label>
    <input type="text" name="valor" value="<?php echo $row->valor;?>">  
  </div>
  <div>
    <label>Disponivel</label>
    <input type="text" name="disponibilidade" value="<?php echo $row->disponibilidade;?>">  
  </div>
 
  <div>
    <button type="submit">Alterar</button>
</div>
</form>