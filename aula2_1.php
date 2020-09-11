<html>
	<head>
		<title>Exercicio Teste</title>
	</head>
	<body>
		<form action="" method="post" name="frm1" id="frm1">
			Selecione o sexo:<br/>
			<select name="sexo" id="sexo">
				<option value=""> SELECIONE</option>
				<option value="f"> Feminino</option>
				<option value="m"> Masculino</option>
			</select>
			<input type="submit" name="btnOk" value="Ok">
		</form>
	</body>
</html>
<?php





print_r($_POST);

?>