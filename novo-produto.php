<h1> Cadastrar produto</h1>
<form action="?page=salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">
  <table border='0'>
    <tr>
      <td>
        <label>Nome</label>
      </td>
      <td>
        <input type="text" name="nome" class="campoNome">
      </td>
    <tr>
    <tr>
      <td>

        <label>Descrição</label>
      </td>
      <td>
        <input type="text" name="descricao" class="campoNome">
      </td>
    <tr>
    <tr>
      <td>

        <label>valor</label>
      </td>
      <td>
        <input type="number" name="valor" class="campoNome" placeholder="000,00">
      </td>
    <tr>
    <tr>
      <td>

        <label>Disponivel</label>
      </td>
      <td>
        
        <select name="disponibilidade" class="campoNome">
          <option value="não">não</option>
          <option value="sim" selected>sim</option>
          
        </select>
      </td>
    <tr>
  </table>
  <div>
    <button type="submit" class="botaoCadastar">Cadastrar</button>
  </div>
</form>