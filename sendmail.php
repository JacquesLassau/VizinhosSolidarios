<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Enviando...</title>
</head>
<body>
<?php	
	$nome = @trim($_GET['nome']);
	$email = @trim($_GET['email']);
	$assunto = @trim($_GET['assunto']);	
	$mensagem = @trim($_GET['mensagem']);	
	$to = "contato@vizinhossolidarios.ong.br";	
	$subject = $assunto;
	$html = "
	<!DOCTYPE html>
				<html lang='pt-br'>
					<head>						
						<link href='resources/css/bootstrap.min.css' rel='stylesheet'>
						<link href='resources/css/font-awesome.min.css' rel='stylesheet'>
						<link href='resources/css/prettyPhoto.css' rel='stylesheet'>
						<link href='resources/css/animate.min.css' rel'stylesheet'>
						<link href='resources/css/main.css' rel='stylesheet'>
						<link href='resources/css/responsive.css' rel='stylesheet'>					
					</head>
					<body>
						<div class='container'>
						<h2>Fale Conosco</h2>
						<table class='table table-striped'>
							<thead>
								<tr>
									<td><strong>Nome: </strong></td><td>$nome</td>
								</tr>
								<tr>
									<td><strong>Email: </strong></td><td>$email</td>
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
	$headers .= "Content-type: text/html; charset=utf-8\n";
	$headers .= "From: $email\n";	
	mail($to, $subject, $html, $headers);
?>
</body>
</html>