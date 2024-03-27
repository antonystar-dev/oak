<h1> Cadastrar produto</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <div>
    <label>Nome</label>
    <input type="text" name="nome">  
  </div>
  <div>
    <label>Descrição</label>
    <input type="text" name="descricao">  
  </div>
  <div>
    <label>valor</label>
    <input type="text" name="valor">  
  </div>
  <div>
    <label>Disponivel</label>
    <input type="text" name="disponibilidade">  
  </div>
  <div>
    <button type="submit" class="botaoCadastar">Cadastrar</button>
</div>
</form>