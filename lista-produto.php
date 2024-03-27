<h1> Produtos</h1>
<?php
$sql = "SELECT * FROM produto";
$res = $conn->query($sql);
$qtd = $res->num_rows;
if ($qtd > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NOME</th>";
    echo "<th>DESCRIÇÃO</th>";
    echo "<th>VALOR</th>";
    echo "<th>DISPONIVEL</th>";
    echo "<th>AÇÃO</th>";
    echo "</tr>";
    while ($row = $res->fetch_object()) {
        echo "<tr>";
        echo "<td>" . $id = $row->id . "</td>";
        echo "<td>" . $nome = $row->nome . "</td>";
        echo "<td>" . $descricao = $row->descricao . "</td>";
        echo "<td>" . $valor = $row->valor . "</td>";
        echo "<td>" . $disponivel = $row->disponibilidade . "</td>";
        echo "<td>
         <button onclick=\"location.href='?page=editar&id=" . $row->id . "';\" class='btn btn-success'>Editar</button>
         <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\"class='btn btn-danger'>Excluir</button>
         </td>";

        echo "</tr>";
    }
    echo "<table>";
} else {
    echo "<p>Não encontrou resultados!</p>";
}
?>