<?php		
	
	$strDoacao = $_POST["txtValor"];	
	$valorDecimalDoacao = str_replace(",",".",$strDoacao);
	
	
	echo "<script type='text/javascript'>";
	echo "alert('No momento não estamos imprimindo Boletos. Por favor, realize o depósito em nossa conta poupança...');";
	echo "window.location.href = 'index.html';";	
	echo "</script>";	
	die();
	
?>