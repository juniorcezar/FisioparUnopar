<?php
// Usando a classe Crud para ter acesso aos métodos a partir deste arquivo
error_reporting(0);
ini_set(“display_errors”, 0 );
use Unopar\Core\Crud;


	if(isset($_POST['paciente']) && isset($_POST['medico']) && isset($_POST['hora']) && isset($_POST['sala']) && isset($_POST['valor']) && isset($_POST['data']) && isset($_POST['cod_paciente']) && isset($_POST['data']) && isset($_POST['convenio']) && isset($_POST['dura_consulta']) && isset($_POST['tp_consulta']) && isset($_POST['obs_consulta']) ){

		$paciente = $_POST['paciente'];
		$medico = $_POST['medico'];
		$hora = $_POST['hora'];
		$sala = $_POST['sala'];
		$valor = $_POST['valor'];
		$data = $_POST['data'];
		$cod_paciente = $_POST['cod_paciente'];
		$convenio = $_POST['convenio'];
		$dura_consulta = $_POST['dura_consulta'];
		$tp_consulta = $_POST['tp_consulta'];
		$obs_consulta = $_POST['obs_consulta'];

		$resultado = Crud::consultar("SELECT * FROM agendamento WHERE agendamento.medico = '$medico' AND agendamento.data_ag = '$data' AND agendamento.hora_ag = '$hora'");
		if(empty($resultado)){
		$gravar = Crud::salvar("INSERT INTO agendamento (paciente, medico, data_ag, hora_ag, val_cst, sala_cst, cod_paciente, convenio, dura_consulta, tp_consulta, obs_consulta) VALUES ('$paciente', '$medico', '$data', '$hora', '$valor', '$sala', '$cod_paciente', '$convenio', '$dura_consulta', '$tp_consulta', '$obs_consulta')");
			echo "Cadastrado";
		} else{
			echo "Não cadastrado";
		}
	}
?>

<h2>Cadastro </h2>
<hr>
<form class="form-fluid">


	<div class="row">
			<div class="col-md-9 col-xs-2">
				<div class="form-group">
					<label for="">Cliente ou Compromisso:</label>
					<input type="text" class="form-control" name="paciente" placeholder="Nome" required="">
				</div>
			</div>

		  <div class="col-md-3 col-xs-3">
            <div class="form-group">
                    <label for="">Cod. do Cliente:</label>
                    <input type="text" class="form-control" name="cod_paciente" placeholder="Telefone" required="">
            </div>
        </div>

		<div class="col-md-3 col-xs-2">
            <div class="form-group">
                <label for="">Medico:</label>
                <input type="text" class="form-control" name="medico" placeholder="" required="">

            </div>
        </div>


 		<div class="col-md-5 col-xs-3">
			<div class="form-group">
				<label for="">Convenio</label>
					<select class="form-control" width="100%" required="" name="convenio">
					<option>S.U.S </option>


					</select>
			</div>
		</div>

			 <div class="col-md-4 col-xs-3">
                <div class="form-group">
                    <label for="">Ultima Consulta:</label>
                    <input type="text" class="form-control" name="" placeholder="Email" required="">
                </div>
			</div>
    </div><!-- Primeira ROW-->

    <div class="row">
    	<div class="col-md-6 col-xs-3">
                <div class="form-group">
                    <label for="">Data:</label>
                    <input type="date" class="form-control" name="data" placeholder="Email" required="">
                </div>
			</div>

        <div class="col-md-2 col-xs-2">
            <div class="form-group">
                <label for="">Sessao:</label>
                <input type="text" class="form-control" name="" placeholder="" required="">
			</div>
        </div>


		<div class="col-md-2 col-xs-3">
			<div class="form-group">
                <label for="">Horario:</label>
 				<input type="time" value="Horário" placeholder="Horário" required="" name="hora">
 			</div>
        </div>

		<div class="col-md-2 col-xs-3">
			<div class="form-group">
                <label for="">Duracao:</label>
 				<input type="time" value="Horário" placeholder="Horário" required="" name="dura_consulta">
 			</div>
        </div>


	</div>

    <div class="row"><!-- Quarta ROW-->


<div class="col-md-6 col-xs-2">
			<div class="form-group">
				<label for="">Tipo da Consulta</label>
				<select class="form-control" width="100%" required="" name="tp_consulta">
						<option>Ortopedia</option>
						<option>Cardiologia</option>
						<option>Pneumo</option>
						<option>Ginecologia</option>
						<option>Pediatria</option>
						<option>Neurologia</option>



					</select>
			</div>
		</div>

		<div class="col-md-3 col-xs-3">
			<div class="form-group">
				<label for="">Situacao</label>
					<select class="form-control" width="100%" required="">
						<option>Marcado</option>

					</select>
			</div>
		</div>

			<div class="col-md-3 col-xs-3">
			<div class="form-group">
				<label for="">UBS</label>
					<select class="form-control" width="100%" required="" name="convenio">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>


					</select>
			</div>

		</div>
		</div>

	<div class="row"><!-- Quinta ROW-->
		<div class="col-md-12 col-xs-3">
                <div class="form-group">
                    <p> Observacoes do Compromisso<br>
    				<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="120" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" name="obs_consulta"></textarea></span> </p>
                </div>
			</div>


  	<div class="col-md-12 col-xs-3">
                <div class="form-group">
                    <p> Tipo de Encaminhamento<br>
    				<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="120" rows="5" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                </div>
			</div>

			</ul>

	<div class="col-md-6 col-xs-3">
                <div class="form-group">
                    <label for="">Codigo do Tratamento</label>
                    <input type="text" class="form-control" name="" placeholder=" " required="">
                </div>
			</div>

			<div class="col-md-6 col-xs-3">
                <div class="form-group">
                    <label for="">Condutas</label>
                    <input type="text" class="form-control" name="" placeholder=" " required="">
                </div>
			</div>

			<div class="col-md-12 col-xs-3">
                <div class="form-group">
                    <label for="">Aparelhos</label>
                    <input type="text" class="form-control" name="" placeholder=" " required="">

                </div>
			</div>

	    <button type="button" class="btn btn-success">OK</button>
		<button type="button" class="btn btn-danger">Cancelar</button>
 </form>
