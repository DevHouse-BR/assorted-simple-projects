<?php
$link = mysql_connect("localhost", "root", "Velox666") or die("Erro de conex�o com o banco: " . mysql_error());
mysql_select_db ("flundi");
$result = mysql_query("SELECT * FROM djs") or die("Erro ao acessar registros no Banco de dados: " . mysql_error());	
$eof = mysql_num_rows($result);
?>
<html>
	<head>
		<title>DJS</title>
		<style type="text/css">
		<!--
		.textfield {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 11px;
			color: #0158A7;
			background-color: #F0F9FF;
			border: none;
		}
		.label {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 11px;
			font-style: italic;
			font-weight: bold;
			text-align: right;
			vertical-align: top;
			border: 1px solid #FFFFFF;
			color: #0161A7;
		}
		.tabela {
			background-color: #B9E1FF;
			border: 1px solid #FFFFFF;
		}
		.botao {
			font-family: Arial, Helvetica, sans-serif;
			font-size: 11px;
			border: 1px solid #0161A7;
			background-color: #F0F9FF;
			color: #0161A7;
			width: 100%;
		}
		-->
		</style>
		<script language="JavaScript" type="text/javascript">
			function novo(){
				self.location = 'form_dj.php?metodo=add';
			}
		</script>
	</head>
	<body>
		<table class="tabela" width="100%">
			<tr>
				<td><input type="button" class="botao" onClick="javascript: novo();" value="Novo"></td>
				<td class="label" align="center"><?=$eof?>&nbsp;djs cadastrados.</td>
			</tr>
		</table>
		<br>
		<table class="tabela" width="100%">
			<tr>
				<td class="textfield" align="center"><b>Editar</b></td>
				<td class="textfield" align="center"><b>Nome</b></td>
				<td class="textfield" align="center"><b>Cidade</b></td>
				<td class="textfield" align="center"><b>Estilo</b></td>
				<td class="textfield" align="center"><b>Coment�rio</b></td>
				<td class="textfield" align="center"><b>Links</b></td>
			</tr>
			<?php for($i = 0; $i < $eof; $i++){
					$dj = mysql_fetch_row($result); ?>
				<tr>
					<td class="textfield"><a href="form_dj.php?metodo=update&id=<?=$dj[0]?>"><img border="0" src="../imagens/edit.gif"></a></td>
					<td class="textfield"><b><?=$dj[1]?></b></td>
					<td class="textfield"><?=$dj[2]?></td>
					<td class="textfield"><?=$dj[3]?></td>
					<td class="textfield"><?=$dj[4]?></td>
					<td class="textfield"><?=$dj[5]?></td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>
<?php mysql_close($link); ?>