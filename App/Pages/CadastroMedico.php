<?php
use Unopar\Core\Crud;
if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['crm']) && isset($_POST['uf']) && isset($_POST['areaat']) && isset($_POST['email']) && isset($_POST['cep']) && isset($_POST['numero'])&& isset($_POST['rg'])&& isset($_POST['rua'])&& isset($_POST['cidade'])&& isset($_POST['tel']) )  {



    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $crm = $_POST['crm'];
    $uf = $_POST['uf'];
    $areaat = $_POST['areaat'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $rua = $_POST['rua'];
    $cidade = $_POST['cidade'];
    $tel = $_POST['tel'];

    $resultado = Crud::consultar("SELECT * FROM medico WHERE medico.cpf_med = '$cpf' AND medico.crm_med = '$crm'");
    if(empty($resultado)){
       $gravar = Crud::salvar("INSERT INTO medico (nome_med ,cpf_med, crm_med) VALUES ('$nome', '$cpf', '$crm')");
       echo "Cadastrado com Sucesso !";
   } else{
       echo "Não foi possivel cadastrar babaca";
   }
}







?>

<!DOCTYPE html>

<script language="javascript">
  function TestaCPF(elemento) {
    vcpf = elemento.value;
    vcpf = vcpf.replace(/[^\d]+/g, '');
    if (vcpf == '') return elemento.style.backgroundColor = "#FF4500";
  // Elimina CPFs invalidos conhecidos
  if (vcpf.length != 11 ||
    vcpf == "00000000000" ||
    vcpf == "11111111111" ||
    vcpf == "22222222222" ||
    vcpf == "33333333333" ||
    vcpf == "44444444444" ||
    vcpf == "55555555555" ||
    vcpf == "66666666666" ||
    vcpf == "77777777777" ||
    vcpf == "88888888888" ||
    vcpf == "99999999999")
    return elemento.style.backgroundColor = "#FF4500";
  // Valida 1o digito
  add = 0;
  for (i = 0; i < 9; i++)
    add += parseInt(vcpf.charAt(i)) * (10 - i);
  rev = 11 - (add % 11);
  if (rev == 10 || rev == 11)
    rev = 0;
  if (rev != parseInt(vcpf.charAt(9)))
    return elemento.style.backgroundColor = "#FF4500";
  // Valida 2o digito
  add = 0;
  for (i = 0; i < 10; i++)
    add += parseInt(vcpf.charAt(i)) * (11 - i);
  rev = 11 - (add % 11);
  if (rev == 10 || rev == 11)
    rev = 0;
  if (rev != parseInt(vcpf.charAt(10)))
   return elemento.style.backgroundColor = "#FF4500";
  return elemento.style.backgroundColor = "#1E90FF";
  }
</script>
<h2>Cadastro de Médicos</h2>
<hr>
<!-- Inicio primeira Linha-->
<form class="form-fluid" method="POST">
    <div class="row">
            <div class="col-md-6 col-xs-2">
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" required="">
                </div>
            </div>

            <div class="col-md-3 col-xs-3">
                <div class="form-group">
                    <label for="">CPF:</label>
                    <input  id="vcpf" type="text" class="form-control" name="cpf" placeholder="CPF" size="12" maxlength="11"  onblur="TestaCPF(this)" >
                </div>
            </div>

            <div class="col-md- col-xs-3">
                <div class="form-group">
                    <label for="">RG:</label>
                    <input type="text" class="form-control" name="rg" placeholder="RG">
                </div>
            </div>
          </div>
<!-- Fim primeira Linha-->

<!-- Inicio segunda linha-->
<div class="row">
        <div class="col-md-3 col-xs-2">
            <div class="form-group">
                <label for="">Area de Atuação:</label>
                    <select class="form-control" width="100%" required="" name="areaat">
                        <option>Ortopedia</option>
                    </select>
            </div>
        </div>

        <div class="col-md-3 col-xs-3">
              <div class="form-group">
                  <label for="">CRM:</label>
                  <input type="text" class="form-control" name="crm" placeholder="CRM" required="">
              </div>
        </div>

        <div class="col-md-2 col-xs-3">
              <div class="form-group">
                  <label for="">Telefone:</label>
                  <input type="text" class="form-control" name="tel" placeholder="Telefone" required="">
                </div>
        </div>

        <div class="col-md-4 col-xs-2">
              <div class="form-group">
                  <label for="">Email:</label>
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
              </div>
        </div>
    </div>
<!-- Fim segunda linha-->

<!-- Inicio terceira linha-->
<div class="row">

      <div class="col-md-2 col-xs-3">
          <div class="form-group">
                  <label for="">CEP:</label>
                  <input type="text" class="form-control" name="cep" placeholder="CEP" required="">
          </div>
      </div>

      <div class="col-md-5 col-xs-3">
          <div class="form-group">
              <label for="">Logradouro:</label>
              <input type="text" class="form-control" name="rua" placeholder="Rua" required="">
          </div>
      </div>

      <div class="col-md-2 col-xs-3">
         <div class="form-group">
             <label for="">Numero:</label>
             <input type="text" class="form-control" name="numero" placeholder="Numero" required="">
         </div>
     </div>

     <div class="col-md-3 col-xs-3">
        <div class="form-group">
            <label for="">Bairro:</label>
            <input type="text" class="form-control" name="bairro" placeholder="Bairro" required="">
        </div>
    </div>
</div>
<!-- Fim terceira linha-->

<!-- Inicio quarta linha-->
<div class="row">
  <div class="col-md-2 col-xs-3">
      <div class="form-group">
          <label for="">Estado:</label>
              <select class="form-control" width="100%" required="" name="uf">
                  <option value="1">AC</option>
                  <option value="2">PR</option>
                  <option value="3">SP</option>
              </select>
      </div>
  </div>
        <div class="col-md-3 col-xs-2">
            <div class="form-group">
                <label for="">Cidade:</label>
                <input type="text" class="form-control" name="cidade" placeholder="Cidade" required="">
            </div>
        </div>

        <div class="col-md-7 col-xs-2">
            <div class="form-group">
                <label for="">Complemento:</label>
                <input type="text" class="form-control" name="complemento" placeholder="Complemento" required="">
            </div>
        </div>
</div>
<!-- Fim quarta linha-->

<!-- Linha dos botoes-->
<div class="row form-group">
          <div class="col-md-3">
                <input type="submit" class="btn btn-info" value="Salvar">
                <input type="reset" class="btn btn-warning" value="Limpar">
          </div>
</div>
<!-- Fim da linha dos botoes-->
</form>
