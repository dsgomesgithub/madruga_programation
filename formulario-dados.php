<!DOCTYPE html>
<html>
<head>
	<title>Cadastro_curriculo</title>
</head>
<style>
	body{
		text-transform: uppercase;
	}
	#div-login{
		width: 600px;
		background:#0099DD;
		padding: 20px;
		margin: auto;
		height: 100%;
	}
		input[type="text"]{
			width: 580px;
			padding: 10px;
			border: none;
		}
		textarea{
			width: 580px;
			padding: 10px;
			height: 100px;
			border: none;
		}
		input[type="submit"]{
			width: 90px;
			height: 30px;
			cursor: pointer;
		}
		div#escolaridade h3{
			color: #fff;
		}
		div#dadosPessoais h3{
			color: #fff;
		}
		div#CursoAtividadesComplementares h3{
			color: #fff;
		}
		div#experienciaTrabalho h3{
			color: #fff;
		}
		div#Objetivo h3{
			color: #fff;
		}
	</style>
<body>
	<div id="div-login">
		<h3 style="color: #fff;">FORMULARIO DE CADATRO DE DADOS PARA CURRICULO</h3>
		<form action="gravando-dados.php" method="post"> 
			<div id="dadosPessoais">
			<h3>DADOS PESSOAIS</h3>
			<input type="text" placeholder="Nome" name="nome"><br><br>
			<input type="text" placeholder="Email" name="email"><br><br>
			<input type="text" placeholder="Endereçoo" name="endereco"><br><br>
			<input type="text" placeholder="Telefone" name="telefone"><br><br>
			<input type="text" placeholder="Data de nascimento" name="dataNascimento"><br> <br>
			
			</div>
			
			
			<div id="escolaridade">
			<h3>ESCOLARIDADE BÁSICA</h3>
			<input type="text" placeholder="Entidade de Ensino" name="entidadeEnsino"><br><br>
			<input id="completo_id" type="radio" value="Ensino Medio Completo" name="ensinoMedio">
			<label for="completo_id">ENSINO MEDIO COMPLETO</label><br>
			<input id="incompleto_id" type="radio" value="Ensino Medio Incompleto" name="ensinoMedio">
			<label for="incompleto_id">ENSINO MEDIO INCOMPLETO</label><br>
			<input id="incompleto_id" type="radio" value="Cursando Ensino Medio " name="ensinoMedio">
			<label for="incompleto_id">CURSANDO ENSINO MEDIO</label>
			</div>
			
			<div id="escolaridade">
				<h3>ESCOLARIDADE SUPERIOR</h3>
				<input type="text" placeholder="Escolaridade" name="formacaoAcademica"></input><br>
			</div>
			
			<div id="CursoAtividadesComplementares">
				<h3>CURSOS / ATIVIDADES COMPLEMENTARES</h3>
				<input type="text" placeholder="Experiência trabalho..." name="cursoAtividadesComplementares">
			</div>

			<div id="experienciaTrabalho">
				<h3>EXPERIÊNCIA DE TRABALHO</h3>
				<input type="text" placeholder="Experiência trabalho..." name="experienciaTrabalho">
			</div>

			<div id="Objetivo">
				<h3>Objetivo De Trabalho</h3>
				<input type="text" placeholder="Objetivo: Aréa de atuação..." name="obejtivo"></input>
			</div>
			<br>
			<input type="submit" value="Grava dados">
		</form>
	</div>
</body>
</html>