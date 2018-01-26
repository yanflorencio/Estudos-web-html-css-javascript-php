<?php
 $erro = 0;

	if (!preg_match("/[a-zA-Z]/",$_POST["nome"])) $erro++;
	if (!preg_match("/[a-zA-Z]/",$_POST["pais"])) $erro++;
	if (!preg_match("/[a-zA-Z]/",$_POST["estado"])) $erro++;
	if (!preg_match("/[a-zA-Z]/",$_POST["municipio"])) $erro++;
	if (!preg_match("/[0-9]/",$_POST["data_nascimento"])) $erro++;
	if (!preg_match("/[a-zA-Z1-9]/",$_POST["escola_ensino"])) $erro++;
	if (!preg_match("/[a-zA-Z]/",$_POST["estado_ensino"])) $erro++;
	if (!preg_match("/[a-zA-Z]/",$_POST["municipio_ensino"])) $erro++;

	if (!isset($_POST["sex"])) $erro++;
	if (!isset($_POST["primeira"])) $erro++;
	if (!isset($_POST["nota"])) $erro++;

	for ($i=1;$i<=20;$i++){
		if ($_POST[$i] == "") $erro++;
	}
	
	if($erro>0) {
	 echo "ERRADO $erro";
	}else{
		$conn = mysqli_connect("localhost","root","abc");
		mysqli_select_db ($conn,"trabalho_web");
		if(!$conn) die("NAO CONECTOU".mysqli_connect_error());
		else {
			$nome = $_POST["nome"];
			$pais = $_POST["pais"];
			$estado = $_POST["estado"];
			$municipio = $_POST["municipio"];
			$data_nasc = $_POST["data_nascimento"];
			$escola_ensino = $_POST["escola_ensino"];
			$estado_ensino = $_POST["estado_ensino"];
			$municipio_ensino = $_POST["municipio_ensino"];
			$sexo = $_POST["sex"];
			$cor_raça = $_POST[1];
			$estado_civil = $_POST[2];
			$ano_conclusao_medio = $_POST[3];
			$pre_vestibular = $_POST[4];
			$maior_parte_medio = $_POST[5];
			$tipo_escola_medio = $_POST[6];
			$ingressou_faculdade = $_POST[7];
			$cota = $_POST[8];
			$opcao_curso = $_POST["primeira"];
			$nota_corte_curso = $_POST["nota"];
			$mudanca = $_POST[9];
			$meio_transporte = $_POST[10];
			$motivacao_curso = $_POST[11];
			$tempo_chegada = $_POST[12];
			$trabalha = $_POST[13];
			$alimentacao = $_POST[14];
			$moradia = $_POST[15];
			$transporte = $_POST[16];
			$didatico = $_POST[17];
			$alojamento = $_POST[18];
			$escolaridade_mae = $_POST[19];
			$escolaridade_pai = $_POST[20];			
			
			$query = "INSERT INTO `respostas` VALUES (NULL, '".$pais."', '".$estado."', '".$municipio."', '".$data_nasc."', '".$sexo."', '".$cor_raça."', '".$estado_civil."', '".$ano_conclusao_medio."', '".$pre_vestibular."', '".$maior_parte_medio."', '".$tipo_escola_medio."', '".$escola_ensino."', '".$estado_ensino."', '".$municipio_ensino."', '".$ingressou_faculdade."', '".$cota."', '".$opcao_curso."', '".$nota_corte_curso."', '".$mudanca."', '".$meio_transporte."', '".$motivacao_curso."', '".$tempo_chegada."', '".$trabalha."', '".$alimentacao."', '".$moradia."', '".$transporte."', '".$didatico."', '".$alojamento."', '".$escolaridade_mae."', '".$escolaridade_pai."')";
			$query2 = "INSERT INTO `aluno` (`id_aluno`,`nome`,`id_reposta`) VALUES (NULL,'".$nome."',4)";
			if (mysqli_query($conn,$query) && mysqli_query($conn,$query2)){
				echo "inseriu";
			}else echo"nao inseriu";
		};
	}
?>
<br/><a href="Formulario.html">VOLTAR</a>
