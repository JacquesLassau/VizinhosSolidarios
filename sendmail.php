<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Enviando...</title>
</head>
<body>

<?php
	
	$nome = @trim(stripslashes($_GET['nome']));
	$email = @trim(stripslashes($_GET['email']));
	$telefone = @trim(stripslashes($_GET['telefone']));	
	$mensagem = @trim(stripslashes($_GET['mensagem']));		
	
	$to = "vsolidariospe@gmail.com";	
	$subject = "Contato do Site Vizinhos Solidários";
	$html = "
	<!DOCTYPE html>
				<html lang='pt-br'>
					<head>
						<link href='css/bootstrap.min.css' rel='stylesheet'>
						<link href='css/font-awesome.min.css' rel='stylesheet'>
						<link href='css/prettyPhoto.css' rel='stylesheet'>
						<link href='css/animate.min.css' rel'stylesheet'>
						<link href='css/main.css' rel='stylesheet'>
						<link href='css/responsive.css' rel='stylesheet'>					
					</head>
					<body>
						<div class='container'>
						<h2>Dados do Candidato a Voluntário</h2>
						<table class='table table-striped'>
							<thead>
								<tr>
									<td><strong>Nome: </strong></td><td>$nome</td>
								</tr>
								<tr>
									<td><strong>Email: </strong></td><td>$email</td>
								</tr>
								<tr>
									<td><strong>Telefone: </strong></td><td>$telefone</td>
								</tr>								
								<tr>
									<td><strong>Mensagem: </strong></td><td>$mensagem</td>
								</tr>
							</thead>
						</table>
					</body>
				</html>
	";
	
	
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: $email\n";
	
	mail($to, $subject, $html, $headers);

?>

</body>
</html>