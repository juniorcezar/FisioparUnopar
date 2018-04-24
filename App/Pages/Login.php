<?php

use Unopar\Core\Crud;

$usuario = filter_input(INPUT_POST, 'usuario');
$senha = filter_input(INPUT_POST, 'senha');

?>

<h1>Faça seu Login</h1>
<form method="post">
	<table>
		<tr>
			<td>Usuário: </td>
			<td><input type="text" name="usuario"></td>
		</tr>

		<tr>
			<td>Senha: </td>
			<td><input type="password" name="senha"></td>
		</tr>

		<tr>
			<td><button type="submit">Entrar</button></td>
			<td><button><a href="Home">Voltar</a></button></td>
		</tr>
	</table>
</form>