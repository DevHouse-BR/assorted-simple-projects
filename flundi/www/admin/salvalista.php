<?php
$conteudo = $_POST["conteudo"];
$filename = "lista.txt";
$result = false;

if ($fd = fopen ($filename, "w")){
	$result = fwrite($fd, $conteudo); 
	fclose ($fd);
}
?>
<html>
	<head>
		<title>Salvando as informa��es</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<? if ($result){ ?>
			<script language="JavaScript" type="text/javascript">
					setTimeout("location='lista.php'",2000);
			</script>
		<? } ?>
	</head>
	<body>
		<? if ($result){ ?>
			<center><h3>Informa��es gravadas com sucesso...</h3></center>
		<? } ?>
	</body>
</html>