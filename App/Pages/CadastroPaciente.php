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
      <label class="radio-inline"><input type="radio" name="sexo" value="masculino">Masculino</label>
      <label class="radio-inline "><input type="radio" name="sexo" value="feminino">Feminino</label>
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
        <option value="branco">Branco</option>
        <option value="pardo">Pardo</option>
        <option value="negro">Negro</option>
        <option value="amarelo">Amarelo</option>
        <option value="indigena">Indigena</option>
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
      <input type="text" class="form-control" placeholder="Telefone" name="telefone1">
    </div>

    <!--Telefone 2 -->
    <div class="col-md-3">
      <label for="">Telefone 2: </label>
      <input type="text" class="form-control" placeholder="Celular" name="telefone2">
    </div>
  </div>
  <!--Fim da Segunda Linha -->

  <!--Terceira Linha -->
  <div class="row form-group">
    <!--CEP -->
    <div class="col-md-2">
      <label for="">CEP: </label>
      <input type="text" class="form-control" placeholder="CEP" name="cep" id="cep">
    </div>

    <!--Logradouro -->
    <div class="col-md-5">
      <label for="">Logradouro:</label>
      <input type="text" class="form-control" placeholder="Rua" name="logradouro" id="logradouro">
    </div>

    <!--Número da Casa -->
    <div class="col-md-2">
      <label for="">Nº:</label>
      <input type="number" class="form-control" placeholder="Número" name="numCasa">
    </div>

    <!--Bairro -->
    <div class="col-md-3">
      <label for="">Bairro:</label>
      <input type="text" class="form-control" placeholder="Bairro" name="bairro" id="bairro">
    </div>
  </div>
  <!--Fim da Terceira Linha -->

  <!--Quarta Linha -->
  <div class="row form-group">
    <!--Estado -->
    <div class="col-md-2">
      <label for="">Estado: </label>
      <input type="text" class="form-control" placeholder="Estado" name="estado" id="estado">
    </div>

    <!--Cidade -->
    <div class="col-md-3">
      <label for="">Cidade:</label>
      <input type="text" class="form-control" placeholder="Cidade" name="cidade" id="cidade">
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
      <input type="date" class="form-control" placeholder="Valid. Carteira" name="valCarteira">
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
      <input type="text" class="form-control" placeholder="Nome do Responsável" name="nomeResponsavel">
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
<script type="text/javascript">
  jQuery(function($){
   $("#cep").change(function(){
    var cep_code = $(this).val();
    if( cep_code.length <= 0 ) return;
    $.get("http://apps.widenet.com.br/busca-cep/api/cep.json", { code: cep_code },
      function(result){
        if( result.status!=1 ){
          alert(result.message || "Houve um erro desconhecido");
          return;
        }
        $("input#cep").val( result.code );
        $("input#estado").val( result.state );
        $("input#cidade").val( result.city );
        $("input#bairro").val( result.district );
        $("input#logradouro").val( result.address );
      });
  });
});
</script>

<?php
use Unopar\Core\Crud;

// Dados do endereço
$id = '6';
$cep = str_replace('-', '', filter_input(INPUT_POST, 'cep'));
$logradouro = str_replace('-', ' ', filter_input(INPUT_POST, 'logradouro'));
$numCasa = filter_input(INPUT_POST, 'numCasa');
$bairro = filter_input(INPUT_POST, 'bairro');
$estado = filter_input(INPUT_POST, 'estado');
$cidade = filter_input(INPUT_POST, 'cidade');
$complemento = filter_input(INPUT_POST, 'complemento');

if (isset($id) && isset($cep) && isset($logradouro) && isset($numCasa) && isset($bairro)
  && isset($estado) && isset($cidade)) {

    $sqlEndereco = "INSERT INTO endereco VALUES
    (:id, :cep, :logradouro, :numCasa, :bairro, :estado, :cidade, :complemento)";

    $enderecoBind = [
      ':id' => $id,
      ':cep' => $cep,
      ':logradouro' => $logradouro,
      ':numCasa' => $numCasa,
      ':bairro' => $bairro,
      ':estado' => $estado,
      ':cidade' => $cidade,
      ':complemento' => $complemento
    ];

    if (! Crud::insert($sqlEndereco, $enderecoBind)) {
      echo '<script>alert("Erro ao cadastrar endereço!")</script>';
    }
} else {
  echo 'Campos do endereço sem preencher!';
}

/*
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
  var_dump($_POST);*/
?>
