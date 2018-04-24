<?php

// Usando a classe Crud para ter acesso aos métodos a partir deste arquivo
use Unopar\Core\Crud;
    
// Verificando se os campos do formulário foram preenchidos
if (isset($_POST['nome']) && isset($_POST['endereco'])
	&& isset($_POST['telefone']) && isset($_POST['sexo'])
	&& isset($_POST['rg']) && isset($_POST['cpf'])) {

	// Definindo um array com os dados do formulário
	$dadosCadastro = [

		'nome' 		=> filter_input(INPUT_POST, 'nome'),
		'endereco' 	=> filter_input(INPUT_POST, 'endereco'),
		'telefone' 	=> filter_input(INPUT_POST, 'telefone'),
		'sexo' 		=> filter_input(INPUT_POST, 'sexo'),
		'rg' 		=> filter_input(INPUT_POST, 'rg'),
		'cpf' 		=> filter_input(INPUT_POST, 'cpf')
	];

	// Variável que está armazenando a query com os dados do formulário
	$sql = "INSERT INTO paciente(nome, endereco, telefone, sexo, rg, cpf) VALUES(
		'{$dadosCadastro['nome']}', '{$dadosCadastro['endereco']}',
		'{$dadosCadastro['telefone']}', '{$dadosCadastro['sexo']}',
		'{$dadosCadastro['rg']}', '{$dadosCadastro['cpf']}')";

	// Acessando o método 'salvar' da classe Crud e passando como parâmetro a nossa query
	// Se retornar verdadeiro então quer dizer que foi inserido no banco de dados com sucesso
	if (Crud::salvar($sql)) {
        
        // Chamando o sweet alert
		echo "<script>swal('Paciente cadastrado com sucesso!', '', 'success');</script>";
	} else {

		echo "<script>swal('Erro', 'paciente já cadastrado', 'error')</script>";
	}
    } else {
	// echo 'Preencha todos os campos por favor';
    }
// Vamos gerar a consulta do banco de dados
    
?>
<h2>Cadastro de Pacientes</h2>
<hr>
<form class="form-fluid">
    <div class="row form-group">
        <div class="col-md-6">
            <label for="">Nome: </label>
            <input type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="col-md-3">
            <label for="">Data de Nascimento: </label>
            <input type="date" class="form-control" placeholder="Idade">
        </div>
        <div class="col-md-3">
            <label for="">Sexo: </label><br>
            <label class="radio-inline"><input type="radio" name="optradio">Masculino</label>
            <label class="radio-inline "><input type="radio" name="optradio">Feminino</label>
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-2">
            <label for="exampleFormControlSelect1">Etnia:</label>
            <select class="form-control" id="exampleFormControlSelect1">
                    <option>Selecione</option>
                    <option>Branco</option>
                    <option>Pardo</option>
                    <option>Negro</option>
                </select>
        </div>

        <div class="col-md-2">
            <label for="">CPF: </label>
            <input type="text" class="form-control" placeholder="CPF">
        </div>
        <div class="col-md-2">
            <label for="">RG: </label>
            <input type="text" class="form-control" placeholder="RG">
        </div>
        <div class="col-md-3">
            <label for="">Telefone 1: </label>
            <input type="text" class="form-control" placeholder="Telefone">
        </div>
        <div class="col-md-3">
            <label for="">Telefone 2: </label>
            <input type="text" class="form-control" placeholder="Celular">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-2">
            <label for="">CEP: </label>
            <input type="text" class="form-control" placeholder="CEP">
        </div>
		
		<div class="col-md-2">
            <label for="">Estado:</label>
            <select id="inputState" class="form-control">
                    <option selected>Selecione</option>
                    <option>Paraná</option>
                </select>
        </div>
		
		<div class="col-md-2">
            <label for="">Cidade:</label>
            <input type="text" class="form-control" placeholder="Cidade">
        </div>
		
		<div class="col-md-4">
            <label for="">Logradouro:</label>
            <input type="text" class="form-control" placeholder="Logradouro">
        </div>
		
		<div class="col-md-2">
            <label for="">Nº:</label>
            <input type="text" class="form-control" placeholder="Número">
        </div>
	   
    </div>

    <div class="row form-group">
           
        <div class="col-md-4">
            <label for="">Bairro:</label>
            <input type="text" class="form-control" placeholder="Bairro">
        </div>
		
		<div class="col-md-4">
            <label for="">Complemento:</label>
            <input type="text" class="form-control" placeholder="Complemento">
        </div>
		
		<div class="col-md-4">
		<label for="exampleFormControlInput1">E-mail </label>
		<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
		</div>      
    </div>
        


        
    
    <div class="row form-group">
	
	<div class="col-md-2">
            <label for="">Estado Civil:</label>
            <select id="inputState" class="form-control">
                    <option selected>Selecione</option>
                    <option>Solteiro</option>
                    <option>Casado</option>
                    <option>Viuvo</option>
                    <option>Separado</option>
                </select>
        </div>

        <div class="col-md-3">
            <label for="">Cartão(Sus): </label>
            <input type="text" class="form-control" placeholder="CNS">
        </div>
        
        <div class="col-md-4">
            <label for="">Valid. Carteira: </label>
            <input type="date" class="form-control" placeholder="Valid. Carteira">
        </div>

    </div>

    <div class="row form-group">
        <div class="col-md-4">
            <label for="">Nome da Mãe: </label>
            <input type="text" class="form-control" placeholder="Nome da Mãe">
        </div>
        
        <div class="col-md-4">
            <label for="">Nome do Pai: </label>
            <input type="text" class="form-control" placeholder="Nome da Mãe">
        </div>
        
        <div class="col-md-4">
          
    </div>
    
    <div class="row form-group">
     <div class="col-md-3">
            <label for="">Data/Hora: </label>
            <input type="date" class="form-control" placeholder="Data/Hora">
        </div>
    </div>
    
    <div class="row form-group">
    
       <div class="col-md-12">
  <label for="comment">Observações:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
        
    </div>
    
    
    <div class="row form-group">
        <div class="col-md-3">
            <input type="submit" class="btn btn-info" value="Salvar">
            <input type="reset" class="btn btn-warning" value="Limpar">
        </div>
    </div>
</form>
