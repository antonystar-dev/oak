<h1> Editar usuario</h1>
<?php
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?php echo $row->id;?>">
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $row->nome;?>" class="form-control">  
  </div>
  <div class="mb-3">
    <label>email</label>
    <input type="email" name="email" value="<?php echo $row->email;?>" class="form-control">  
  </div>
  <div class="mb-3">
    <label>senha</label>
    <input type="password" name="senha"  class="form-control" required>  
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Alterar</button>
</div>
</form>