<?php

use Unopar\Core\Crud;

if (isset($_POST['usuario']) && isset($_POST['senha']) && isset($_POST['senhaAgain'])) {

	if ($_POST['senha'] === $_POST['senhaAgain']) {

		$usuario = filter_input(INPUT_POST, 'usuario');
		$senha = filter_input(INPUT_POST, 'senha');
		$senhaAgain = filter_input(INPUT_POST, 'senhaAgain');

		$sql = "INSERT INTO funcionario(usuario, senha) VALUES('{$usuario}', '{$senha}')";

		if (Crud::salvar($sql)) {
			echo 'Cadastro realizado com sucesso';
		} else {
			echo 'Erro ao cadastrar';
		}

	} else {
		echo 'Senhas não são iguais';
	}

}/* else {
	//echo 'Preencha os campos por favor';
} */

?>
<h2>Cadastro de funcionario</h2>
<hr>
<form class="form-fluid">
	<div class="row">
			<div class="col-md-4 col-xs-4">
				<div class="form-group">
					<label for="">Nome:</label>
					<input type="text" class="form-control" name="" placeholder="Nome" required="">
				</div>
			</div>
		
		<div class="col-md-3 col-xs-3">
			<div class="form-group">
				<label for="">Sexo:</label>
					<input type="text" class="form-control" name="" placeholder="Sexo" required="">
			</div>
		</div>
		
			<div class="col-md-3 col-xs-3">
				<div class="form-group">
					<label for="">CPF:</label>
					<input type="text" class="form-control" name="" placeholder="CPF" required="">
				</div>
			</div>
					<div class="col-md-2 col-xs-3">
			<div class="form-group">
                <label for="">RG:</label>
                <input type="text" class="form-control" name="" placeholder="RG" required="">
			</div>
        </div>
    </div><!-- Primeira ROW-->

    <div class="row">
        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                <label for="">Cidade:</label>
                <input type="text" class="form-control" name="" placeholder="Cidade" required="">
			</div>
        </div>

        <div class="col-md-3 col-xs-3">
            <div class="form-group">
				<label for="">Telefone:</label>
				<input type="text" class="form-control" name="" placeholder="Telefone" required="">
            </div>
        </div>





        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" name="" placeholder="Email" required="">
            </div>
        </div>
	</div>
    <div class="row">
        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                <label for="">Endereço:</label>
                <input type="text" class="form-control" name="" placeholder="Endereço" required="">
            </div>
        </div>


		<div class="col-md-3 col-xs-3">
			<div class="form-group">
					<label for="">CEP:</label>
					<input type="text" class="form-control" name="" placeholder="CEP" required="">
			</div>
		</div>
		<div class="col-md-2 col-xs-2">
			<div class="form-group">
				<label for="">UF:</label>
				<input type="text" class="form-control" name="" placeholder="UF" required="">
			</div>
		</div>
             
</div>
	
	
<button type="button" class="btn btn-success">Cadastrar</button>
<button type="button" class="btn btn-danger">Voltar</button>
</form>