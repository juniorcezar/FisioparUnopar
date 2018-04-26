<h2>Cadastro de Pacientes</h2>
<hr>
<form class="form-fluid" method="post">
  <!--Primeira Linha -->
  <div class="row form-group">
    <!--Nome -->
    <div class="col-md-6">
      <label for="">Nome: </label>
      <input type="text" class="form-control" placeholder="Nome" name="nome">
    </div>

    <!--Data de Nascimento -->
    <div class="col-md-3">
      <label for="">Data de Nascimento: </label>
      <input type="date" class="form-control" placeholder="Idade" name="dataNasc">
    </div>

    <!--Sexo -->
    <div class="col-md-3">
      <label for="">Sexo: </label><br>
      <label class="radio-inline"><input type="radio" name="sexo" value="2">Masculino</label>
      <label class="radio-inline "><input type="radio" name="sexo" value="1">Feminino</label>
    </div>
  </div>
  <!--Fim da Primeira Linha -->

  <!--Segunda Linha -->
  <div class="row form-group">
    <!--Etnia -->
    <div class="col-md-2">
      <label for="exampleFormControlSelect1">Etnia:</label>
      <select class="form-control" id="exampleFormControlSelect1" name="etnia">
        <option>Selecione</option>
        <option value="1">Branco</option>
        <option value="2">Pardo</option>
        <option value="3">Negro</option>
        <option value="4">Amarelo</option>
        <option value="5">Indigena</option>
      </select>
    </div>

    <!--CPF -->
    <div class="col-md-2">
      <label for="">CPF: </label>
      <input type="text" class="form-control" placeholder="CPF" name="cpf">
    </div>

    <!--RG -->
    <div class="col-md-2">
      <label for="">RG: </label>
      <input type="text" class="form-control" placeholder="RG" name="rg">
    </div>

    <!--Telefone 1 -->
    <div class="col-md-3">
      <label for="">Telefone 1: </label>
      <input type="text" class="form-control" placeholder="Telefone" name="telPrim">
    </div>

    <!--Telefone 2 -->
    <div class="col-md-3">
      <label for="">Telefone 2: </label>
      <input type="text" class="form-control" placeholder="Celular" name="telSec">
    </div>
  </div>
  <!--Fim da Segunda Linha -->

  <!--Terceira Linha -->
  <div class="row form-group">
    <!--CEP -->
    <div class="col-md-2">
      <label for="">CEP: </label>
      <input type="text" class="form-control" placeholder="CEP" name="cep">
    </div>

    <!--Logradouro -->
    <div class="col-md-5">
      <label for="">Logradouro:</label>
      <input type="text" class="form-control" placeholder="Rua" name="rua">
    </div>

    <!--Número da Casa -->
    <div class="col-md-2">
      <label for="">Nº:</label>
      <input type="text" class="form-control" placeholder="Número" name="numCasa">
    </div>

    <!--Bairro -->
    <div class="col-md-3">
      <label for="">Bairro:</label>
      <input type="text" class="form-control" placeholder="Bairro" name="bairro">
    </div>
  </div>
  <!--Fim da Terceira Linha -->

  <!--Quarta Linha -->
  <div class="row form-group">
    <!--Estado -->
    <div class="col-md-2">
      <label for="">Estado:</label>
      <select id="inputState" class="form-control" name="estado">
        <option selected>Selecione</option>
        <option value="parana">Paraná</option>
      </select>
    </div>

    <!--Cidade -->
    <div class="col-md-3">
      <label for="">Cidade:</label>
      <input type="text" class="form-control" placeholder="Cidade" name="cidade">
    </div>

    <!--Complemento -->
    <div class="col-md-7">
      <label for="">Complemento:</label>
      <input type="text" class="form-control" placeholder="Complemento" name="complemento">
    </div>
  </div>
  <!--Fim da Quarta Linha -->

  <!--Quinta Linha -->
  <div class="row form-group">

    <!--Estado Civil -->
    <div class="col-md-2">
      <label for="">Estado Civil:</label>
      <select id="inputState" class="form-control" name="estadoCivil">
        <option selected>Selecione</option>
        <option value="solteiro">Solteiro</option>
        <option value="casado">Casado</option>
        <option value="viuvo">Viuvo</option>
        <option value="separado">Separado</option>
      </select>
    </div>

    <!--Cartão SUS -->
    <div class="col-md-3">
      <label for="">Cartão(Sus): </label>
      <input type="text" class="form-control" placeholder="CNS" name="cns">
    </div>

    <!--Validade da Carteira -->
    <div class="col-md-3 col-md-offset-1">
      <label for="">Valid. Carteira: </label>
      <input type="date" class="form-control" placeholder="Valid. Carteira" name="validCart">
    </div>

    <!--Convênio -->
    <div class="col-md-2 col-md-offset-1">
      <label for="">Convênio:</label>
      <select id="inputState" class="form-control" name="convenio">
        <option selected value="sus">SUS</option>
      </select>
    </div>
  </div>
  <!--Fim da Quinta Linha -->

  <!--Sexta Linha -->
  <div class="row form-group">
    <!--Nome do Responsavel -->
    <div class="col-md-4">
      <label for="">Nome do Responsavel: </label>
      <input type="text" class="form-control" placeholder="Nome da Mãe" name="nomePai">
    </div>

    <!--Nome da Mãe -->
    <div class="col-md-4">
      <label for="">Nome da Mãe: </label>
      <input type="text" class="form-control" placeholder="Nome da Mãe" name="nomeMae">
    </div>

    <!--E-mail -->
    <div class="col-md-4">
      <label for="exampleFormControlInput1">E-mail </label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com" name="email">
    </div>
  </div>
  <!--Fim da Sexta Linha -->

  <!--Sétima Linha -->
    <div class="row form-group">
      <!--Observações -->
      <div class="col-md-12">
        <label for="comment">Observações:</label>
        <textarea class="form-control" rows="5" id="comment" name="observacoes"></textarea>
      </div>
    </div>
  <!--Fim da Sétima Linha -->

  <!--Linha de botoes-->
  <div class="row form-group">
    <!--Botões para Salvar e para Limpar -->
    <div class="col-md-3">
      <input type="submit" class="btn btn-info" value="Salvar">
      <input type="reset" class="btn btn-warning" value="Limpar">
    </div>
  </div>
  <!--Fim da linha de botoes-->
</form>

<?php
use Unopar\Core\Crud;

// Dados do endereço
$cep = filter_input(INPUT_POST, 'cep');
$estado = filter_input(INPUT_POST, 'estado');
$cidade = filter_input(INPUT_POST, 'cidade');
$bairro = filter_input(INPUT_POST, 'bairro');
$rua = filter_input(INPUT_POST, 'rua');
$numCasa = filter_input(INPUT_POST, 'numCasa');
$complemento = filter_input(INPUT_POST, 'complemento');

if (isset($cep) && isset($estado) && isset($cidade) && isset($bairro)
  && isset($rua) && isset($numCasa) && isset($complemento)) {

    $sqlEndereco = "INSERT INTO endereco(CEP, Estado, Cidade, Logradouro, Numero, Bairro, Complemento)
    VALUES(:cep, :estado, :cidade, :logradouro, :numero, :bairro, :complemento)";

    $enderecoBind = [
      ':cep' => $cep,
      ':estado' => $estado,
      ':cidade' => $cidade,
      ':logradouro' => $rua,
      ':numero' => $numCasa,
      ':bairro' => $bairro,
      ':complemento' => $complemento
    ];

    if (Crud::insert($sqlEndereco, $enderecoBind)) {
      echo 'Cadastro de Endereço efetuado com sucesso';
    } else {
      echo 'Erro ao Cadastrar Endereco';
    }
} else {
  echo 'Campos do endereço sem preencher!';
}

// Formatação das Datas
$dataNasc = filter_input(INPUT_POST, 'dataNasc');
$valCarteira = filter_input(INPUT_POST, 'validCart');
$dataHora = filter_input(INPUT_POST, 'dataHora');

// Dados do Paciente
$nome = filter_input(INPUT_POST, 'nome');
$sexo = filter_input(INPUT_POST, 'sexo');
$etnia = filter_input(INPUT_POST, 'etnia');
$cpf = filter_input(INPUT_POST, 'cpf');
$rg = filter_input(INPUT_POST, 'rg');
$telPrim = filter_input(INPUT_POST, 'telPrim');
$telSec = filter_input(INPUT_POST, 'telSec');
$email = filter_input(INPUT_POST, 'email');
$estadoCivil = filter_input(INPUT_POST, 'estadoCivil');
$cns = filter_input(INPUT_POST, 'cns');
$nomeMae = filter_input(INPUT_POST, 'nomeMae');
$nomePai = filter_input(INPUT_POST, 'nomePai');
$convenio = filter_input(INPUT_POST, 'convenio');
$observacoes = filter_input(INPUT_POST, 'observacoes');
$endereco = '1';

if (isset($nome) && isset($dataNasc) && isset($sexo) && isset($etnia)
  && isset($cpf) && isset($rg) && isset($telPrim) && isset($telSec)
  && isset($email) && isset($estadoCivil) && isset($cns) && isset($valCarteira)
  && isset($nomeMae) && isset($nomePai) && isset($convenio) && isset($dataHora)
  && isset($observacoes)) {

    $sql = "INSERT INTO paciente(nome, data_nasc, sexo, etnia, cpf, rg, tel_prim, tel_sec
      endereco, email, est_civ, cns, valid_cart, nome_mae, nome_pai, convenio, dat_hr, observacoes
      VALUES(:nome, :dataNasc, :sexo, :etnia, :cpf, :rg, :telPrim, :telSec, :endereco,
      :email, :estCivil, :cns, :validCart, :nomeMae, :nomePai, :convenio, :dat_hr, :obs))";

    $pacienteBind = [
      ':nome' => $nome,
      ':dataNasc' => $dataNasc,
      ':sexo' => $sexo,
      ':etnia' => $etnia,
      ':cpf' => $cpf,
      ':rg' => $rg,
      ':telPrim' => $telPrim,
      ':telSec' => $telSec,
      ':endereco' => $endereco,
      ':email' => $email,
      ':estCivil' => $estadoCivil,
      ':cns' => $cns,
      ':validCart' => $valCarteira,
      ':nomeMae' => $nomeMae,
      ':nomePai' => $nomePai,
      ':convenio' => $convenio,
      ':dat_hr' => $dataHora,
      ':obs' => $observacoes
    ];

    if (Crud::insert($sql, $pacienteBind)) {
      echo 'Cadastro de Paciente realizado com sucesso';
    } else {
      echo 'Cadastro de Paciente não realizado';
    }
  } else {
    echo 'Campos do Paciente sem preencher';
  }
  var_dump($_POST);
?>
