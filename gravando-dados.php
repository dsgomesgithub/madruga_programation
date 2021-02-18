<!DOCTYPE html>
<html>
<head>
	<title>Gerando curriculo...</title>
</head>
<script>
	
</script>
<style>
	body{
		background:#DDDDDD;
		text-transform: uppercase;
	}

	div#HTMLtoPDF{
		width: 600px;
		background:#FFFFFF;
		padding: 20px;
		margin: auto;
		height: 100%;
		border:none;
	}	
	
	div#nome_cad span{
		font-weight: bold;
		color: #000000;
		text-transform: uppercase;
		font-size: 25px;
	}
	div#obejtivo_cad p{
	text-align: justify;
	}
	div#formacao_cad p{
	text-align: justify;
	}
	div#experiencia_cad p{
		text-align: justify;
	}
	
</style>

<body>
	<?php 
		$Nome = $_POST['nome'];
		$Email = $_POST['email'];
		$Endereco = $_POST['endereco'];
		$Telefone = $_POST['telefone'];
		$DataNascimento = $_POST['dataNascimento'];
		$EntidadeEnsino = $_POST["entidadeEnsino"];
		$ensinoMedio = $_POST['ensinoMedio'];
		$CursoAtividadesComplementares = $_POST['cursoAtividadesComplementares'];
		$Formacao = $_POST['formacaoAcademica'];
		$experiencia = $_POST['experienciaTrabalho'];
		$Obejtivo = $_POST['obejtivo'];
	?>
	<div id="HTMLtoPDF">
		<div  id="nome_cad">
			<!--Nome do cantidato--> 
			<h1><span><?php echo $Nome;?></span></h1>
		</div>

		<div>
		<h2><span><b>DADOS PESSOAIS </b></span></h2>
		<div id="dataNascimento_cad">
			<p><b>DATANASCIMENTO:
			</b><?php echo $DataNascimento; ?>
			</p>
		</div>
		
		
		<div id="email_cad">
			<p>
			<b>EMAIL:</b> 
				<?php echo $Email;?>
			</p>
		</div>
		

		<div id="endereco_cad">
			<p><b>ENDEREÇO:</b> 
				<?php echo $Endereco; ?>
			</p>
		</div>

		<div id="telefone_cad">
			<p>
			<b>TELEFONE:</b> 
				<?php echo $Telefone;?>
			</p> 
		</div>
		
		</div>
		<hr>
		
		<div>
			<h2><span><b>ESCOLARIDADE BÁSICA</b></span></h2>
			<div id="ensinoMedio_cad">
				<p><?php echo $EntidadeEnsino; ?></p>
				<p><?php echo $ensinoMedio; ?></p>
			</div>
		</div>
		<hr>
		
		<div>
			<h2><span><b>CURSOS / ATIVIDADES COMPLEMENTARES</b></span></h2>
			<div id="ensinoMedio_cad">
				<p><?php echo $CursoAtividadesComplementares; ?></p>
			</div>
		</div>
		<hr>

		<div>
			<h2><span><b>ESCOLARIDADE SUPERIOR</b></span></h2>
			<div id="formacao_cad">
				<p><?php echo $Formacao; ?></p>
			</div>
		</div>
		<hr>

		<div>
			<h2><span><b>EXPERIÊNCIA PROFISSIONAL</b></span></h2>
			<div id="experiencia_cad">
				<p><?php echo $experiencia; ?></p>
			</div>
		</div>
		<hr>

		<div>
			<h2><span><b>OBJETIVO</b></span></h2>
			<div id="obejtivo_cad">
			 <p><?php echo $Obejtivo; ?></p>
			</div>
		</div>
		<hr>
	
	</div>
	<a href="#" onclick="HTMLtoPDF()" style="position: relative;float: right; right: 10px; top: 5px;text-decoration: none;">Download Curriculo</a>
		<script src="pdfFromHTML.js"></script>
		<script src="jquery-2.1.3.js"></script>
		<script src="jspdf.js"></script>
</body>
</html>