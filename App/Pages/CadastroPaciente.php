<?php

// Usando a classe Crud para ter acesso aos métodos a partir deste arquivo
use Unopar\Core\Crud;
    
// Verificando se os campos do formulário foram preenchidos
if  (isset($_POST['nome']) && isset($_POST['endereco']) 
    && isset($_POST['est_civ']) && isset($_POST['sexo']) 
    && isset($_POST['data_nasc']) && isset($_POST['etnia'])
    && isset($_POST['tel_prim']) && isset($_POST['tel_sec'])
    && isset($_POST['email']) && isset($_POST['sexo'])
    && isset($_POST['cns']) && isset($_POST['valid_cart'])
    && isset($_POST['nome_mae']) && isset($_POST['nome_pai'])
    && isset($_POST['convenio']) && isset($_POST['dat_hr'])
	&& isset($_POST['rg']) && isset($_POST['cpf'])
    && isset($_POST['observacoes'])) {

	// Definindo um array com os dados do formulário
	$dadosCadastro = [

		'nome' 		=> filter_input(INPUT_POST, 'nome'),
		'endereco' 	=> filter_input(INPUT_POST, 'endereco'),
		'tel_prim' 	=> filter_input(INPUT_POST, 'tel_prim'),
        'tel_sec'   => filter_input(INPUT_POST, 'tel_sec'),
		'sexo' 		=> filter_input(INPUT_POST, 'sexo'),
        'est_civ'   => filter_input(INPUT_POST, 'etnia'),
        'email'     => filter_input(INPUT_POST, 'email'),
        'cns'       => filter_input(INPUT_POST, 'cns'),
        'valid_cart'=> filter_input(INPUT_POST, 'valid_cart'),
        'nome_mae'  => filter_input(INPUT_POST, 'nome_mae'),
        'nome_pai'  => filter_input(INPUT_POST, 'nome_pai'),
        'convenio'  => filter_input(INPUT_POST, 'convenio'),
        'dat_hr'    => filter_input(INPUT_POST, 'dat_hr'),
        'observacoes'=> filter_input(INPUT_POST, 'observacoes'),
		'rg' 		=> filter_input(INPUT_POST, 'rg'),
		'cpf' 		=> filter_input(INPUT_POST, 'cpf')
	];

	// Variável que está armazenando a query com os dados do formulário
	

	// Acessando o método 'salvar' da classe Crud e passando como parâmetro a nossa query
	// Se retornar verdadeiro então quer dizer que foi inserido no banco de dados com sucesso
	$gravar = Crud::salvar("INSERT INTO paciente(nome, data_nasc, sexo, etnia, cpf, rg, tel_prim, tel_sec, endereco, email, est_civ, cns, valid_cart, nome_mae, nome_pai, convenio, dat_hr, observacoes) VALUES(
        '{$dadosCadastro['nome']}', '{$dadosCadastro['data_nasc']}',
        '{$dadosCadastro['sexo']}', '{$dadosCadastro['etnia']}',
        '{$dadosCadastro['cpf']}', '{$dadosCadastro['rg']}'
        '{$dadosCadastro['tel_prim']}', '{$dadosCadastro['tel_sec']}',
        '{$dadosCadastro['endereco']}', '{$dadosCadastro['email']}',
        '{$dadosCadastro['est_civ']}', '{$dadosCadastro['cns']}',
        '{$dadosCadastro['valid_cart']}', '{$dadosCadastro['nome_mae']}',
        '{$dadosCadastro['nome_pai']}', '{$dadosCadastro['convenio']}',
        '{$dadosCadastro['dat_hr']}', '{$dadosCadastro['observacoes']}')");


       
   }
    
?>
<h2>Cadastro de Pacientes</h2>
<hr>
<form class="form-fluid">
    <div class="row form-group">
        <div class="col-md-3">
            <label for="">Nome: </label>
            <input type="text" class="form-control" placeholder="Nome" name="nome">
        </div>
        <div class="col-md-3">
            <label for="">Sobrenome: </label>
            <input type="text" class="form-control" placeholder="Sobrenome">
        </div>
        <div class="col-md-3">
            <label for="">Data de Nascimento: </label>
            <input type="date" class="form-control" placeholder="Idade" name="data_nasc">
        </div>
        <div class="col-md-3">
            <label for="">Sexo: </label><br>
            <label class="radio-inline"><input type="radio" name="optradio" value="m">Masculino</label>
            <label class="radio-inline "><input type="radio" name="optradio" value="f">Feminino</label>
            
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-2">
            <label for="exampleFormControlSelect1">Etnia:</label>
            <select class="form-control" id="exampleFormControlSelect1">
                    <option>Selecione</option>
                    <option value="Branco">Branco</option>
                    <option value="Pardo">Pardo</option>
                    <option value="Negro">Negro</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Indigena">Indigena</option>
                </select>
        </div>

        <div class="col-md-2">
            <label for="">CPF: </label>
            <input type="text" class="form-control" placeholder="CPF" name="cpf">
        </div>
        <div class="col-md-2">
            <label for="">RG: </label>
            <input type="text" class="form-control" placeholder="RG" name="rg">
        </div>
        <div class="col-md-3">
            <label for="">Telefone 1: </label>
            <input type="text" class="form-control" placeholder="Telefone" name="tel_prim">
        </div>
        <div class="col-md-3">
            <label for="">Telefone 2: </label>
            <input type="text" class="form-control" placeholder="Celular" name="tel_sec">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-2">
            <label for="">CEP: </label>
            <input type="text" class="form-control" placeholder="CEP">
        </div>


        <div class="col-md-3">
            <label for="">Logradouro:</label>
            <input type="text" class="form-control" placeholder="Rua">
        </div>
        <div class="col-md-2">
            <label for="">Nº:</label>
            <input type="text" class="form-control" placeholder="Número">
        </div>
        <div class="col-md-2">
            <label for="">Bairro:</label>
            <input type="text" class="form-control" placeholder="Bairro">
        </div>

        <div class="col-md-3">
            <label for="">Cidade:</label>
            <input type="text" class="form-control" placeholder="Cidade">
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-2">
            <label for="">Estado:</label>
            <select id="inputState" class="form-control">
                    <option selected>Selecione</option>
                    <option>Paraná</option>
                </select>
        </div>

        <div class="col-md-3">
            <label for="">Rua:</label>
            <input type="text" class="form-control" placeholder="Rua">
        </div>

        <div class="col-md-3">
            <label for="">Complemento:</label>
            <input type="text" class="form-control" placeholder="Complemento">
        </div>


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

        <div class="col-md-2">
            <label for="">Cartão(Sus): </label>
            <input type="text" class="form-control" placeholder="CNS">
        </div>
    </div>
    <div class="row form-group">
        <div class="col-md-3">
            <label for="">Convênio:</label>
            <select id="inputState" class="form-control">
                    <option selected>Selecione</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                </select>
        </div>

        <div class="col-md-3">
            <label for="">Plano:</label>
            <select id="inputState" class="form-control">
                    <option selected>Plano</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
                    <option>...</option>
            </select>
        </div>

        <div class="col-md-3">
            <label for="">Registro no Convênio: </label>
            <input type="text" class="form-control" placeholder="Registro no Convênio" name="convenio">
        </div>
        <div class="col-md-3">
            <label for="">Valid. Carteira: </label>
            <input type="date" class="form-control" placeholder="Valid. Carteira" name="valid_cart">
        </div>

    </div>

    <div class="row form-group">
        <div class="col-md-4">
            <label for="">Nome da Mãe: </label>
            <input type="text" class="form-control" placeholder="Nome da Mãe" name="nome_mae">
        </div>
        
        <div class="col-md-4">
            <label for="">Nome do Pai: </label>
            <input type="text" class="form-control" placeholder="Nome da Mãe" name="nome_pai">
        </div>
        
        <div class="col-md-4">
    <label for="exampleFormControlInput1">E-mail </label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" name="email">
  </div>      
    </div>
    
    <div class="row form-group">
     <div class="col-md-3">
            <label for="">Data/Hora: </label>
            <input type="date" class="form-control" placeholder="Data/Hora" name="dat_hr">
        </div>
    </div>
    
    <div class="row form-group">
    
       <div class="col-md-12">
  <label for="comment">Observações:</label>
  <textarea class="form-control" rows="5" id="comment" name="observacoes"></textarea>
</div>
        
    </div>
    
    
    <div class="row form-group">
        <div class="col-md-3">
            <input type="submit" class="btn btn-info" value="Salvar">
            <input type="reset" class="btn btn-warning" value="Limpar">
        </div>
    </div>

</form>
