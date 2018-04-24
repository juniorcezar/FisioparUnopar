<?php
use Unopar\Core\Crud;
?>
<br>
<h2>Listagem de Pacientes</h2>
<hr>
<table class="table table-striped" id="tabela">
<?php
// Realiza a consulta no banco de dados
$consulta = "SELECT nome, endereco, telefone FROM paciente WHERE 1";
foreach (Crud::consultar($consulta) as $row) {
    //$vetor[] = array_map('utf8_encode', $row);

    echo "<tr>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['endereco'] . "</td>";
    echo "<td>" . $row['telefone'] . "</td>";
    echo "</tr>";

}
// echo json_encode($vetor);
?>
</table>
</script>