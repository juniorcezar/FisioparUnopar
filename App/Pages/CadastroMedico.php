<?php
use Unopar\Core\Crud;
    if (isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['crm']) && isset($_POST['uf']) && isset($_POST['areaat']) && isset($_POST['email']) && isset($_POST['cep']) && isset($_POST['numero'])&& isset($_POST['complemento'])&& isset($_POST['rua'])&& isset($_POST['cidade'])&& isset($_POST['tel']) )  {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $crm = $_POST['crm'];
        $uf = $_POST['uf'];
        $areaat = $_POST['areaat'];
        $email = $_POST['email'];
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
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
<body>
<h2>Cadastro de Médicos</h2>
<form class="form-fluid" method="POST">
    <div class="row">
            <div class="col-md-6 col-xs-2">
                <div class="form-group">
                    <label for="">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome" required="">
                </div>
            </div>
        
        <div class="col-md-3 col-xs-2">
            <div class="form-group">
                <label for="">Area de Atuação:</label>
                    <select class="form-control" width="100%" required="" name="areaat">
                        <option>Ortopedia</option>
						<option>Ginecologia</option>
						<option>Cardiovascular</option>
						<option>Pneumo</option>
						<option>Pediatria</option>
						<option>Neurologia</option>
                    </select>
            </div>
        </div>
            <div class="col-md-3 col-xs-3">
                <div class="form-group">
                    <label for="">CRM:</label>
                    <input type="text" class="form-control" name="crm" placeholder="CRM" required="">
                </div>
            </div>
    </div><!-- Primeira ROW-->

    <div class="row">
        <div class="col-md-3 col-xs-2">
            <div class="form-group">
                <label for="">Cidade:</label>
                <input type="text" class="form-control" name="cidade" placeholder="Cidade" required="">
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
                <input type="text" class="form-control" name="" placeholder="RG">
            </div>
        </div>


        <div class="col-md-3 col-xs-2">
            <div class="form-group">
                <label for="">Email:</label>
                <input type="text" class="form-control" name="email" placeholder="Email" required="">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-xs-3">
            <div class="form-group">
                <label for="">Rua:</label>
                <input type="text" class="form-control" name="rua" placeholder="Rua" required="">
            </div>
        </div>

        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                    <label for="">Telefone:</label>
                    <input type="text" class="form-control" name="tel" placeholder="Telefone" required="">
            </div>
        </div>
        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                    <label for="">CEP:</label>
                    <input type="text" class="form-control" name="cep" placeholder="CEP" required="">
            </div>
        </div>
        <div class="col-md-2 col-xs-2">
            <div class="form-group">
                <label for="">UF:</label>
                <input type="text" class="form-control" name="uf" placeholder="UF" required="">
            </div>
        </div>
             <div class="col-md-2 col-xs-3">
                <div class="form-group">
                    <label for="">Numero:</label>
                    <input type="text" class="form-control" name="numero" placeholder="Numero" required="">
                </div>
            </div>
        </div>
    
    
        <div class="row form-group">
            <div class="col-md-3">
                <input type="submit" class="btn btn-info" value="Salvar">
                <input type="reset" class="btn btn-warning" value="Limpar">
            </div>
        </div>
    </form>
</body>