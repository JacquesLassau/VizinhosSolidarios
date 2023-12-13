<html>
<head>
<title>Enviando...</title>
</head>
<body>
<?php	
	$nome = @trim($_GET['name']);
	$email = @trim($_GET['email']);
	$telefone = @trim($_GET['phone']);	
	$mensagem = @trim($_GET['message']);	
	$to = "jacques.desenvolvedorweb@gmail.com";	
	$subject = "Contato - Voluntário";
	$html = "
	<!DOCTYPE html>
				<html>
					<head>						
						<link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap'
						rel='stylesheet'>
					<title>Vizinhos Solidários</title>
					<!-- Bootstrap core CSS -->
					<link href='vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
					<!-- Additional CSS Files -->
					<link rel='stylesheet' href='assets/css/fontawesome.css'>
					<link rel='stylesheet' href='assets/css/custom.css'>
					<link rel='stylesheet' href='assets/css/owl.css'>
					<link rel='stylesheet' href='assets/css/animate.css'>
					<link rel='stylesheet' href='https://unpkg.com/swiper@7/swiper-bundle.min.css' />					
					</head>
					<body>
						<div class='container'>
						<h2>Voluntário</h2>
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
									<td><strong>Por que deseja ser voluntário? </strong></td><td>$mensagem</td>
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