<?php
$metodo = $_GET["metodo"];

if($metodo == "update"){
	$link = mysql_connect("localhost", "root", "Velox666") or die("Erro de conex�o com o banco: " . mysql_error());
	mysql_select_db ("flundi");
	$id = $_GET["id"];
	$query = "SELECT * FROM djs where cd=" . $id;
	$result = mysql_query($query) or die("Erro ao acessar registros no Banco de dados: " . mysql_error());
	$dj = mysql_fetch_row($result);
}
?>
<html>
<head>
<title>DJS</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.textfield {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	background-color: #F0F9FF;
	width: 100%;
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
	width: 20%;
}
.cell {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	font-style: italic;
	font-weight: bold;
	text-align: right;
	vertical-align: top;
	border: 1px solid #FFFFFF;
	color: #0161A7;
}
.botao {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	border: 1px solid #FFFFFF;
	background-color: transparent;
	color: #0161A7;
}
.tabela {
	background-color: #B9E1FF;
	border: 1px solid #FFFFFF;
	width: 90%;
}
.textarea {
font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
	background-color: #F0F9FF;
	width: 100%;
	border: none;
scrollbar-3dlight-color:#;
scrollbar-arrow-color:#FFFFFF;
scrollbar-base-color:#;
scrollbar-track-color:#B9E1FF;
scrollbar-face-color:#B9E1FF;
scrollbar-shadow-color:#FFFFFF;
scrollbar-highlight-color:#;
scrollbar-darkshadow-color:#FFFFFF;
}
-->
</style>
<?php if($metodo == "update"){ ?> 
	<script language="JavaScript" type="text/javascript">
		function apagar(){
			self.location = "del.php?oque=djs&id=<?=$id?>";
		}
	</script>
<? } ?>
</head>

<body>
  
<table align="center" class="tabela" cols="2">
  <form name="form1" method="post" action="salvadj.php">
    <tr> 
      <td colspan="2" style="border: 1px solid #FFFFFF; text-align: center;"><b>DJS</b></td>
    </tr>
    <tr> 
      <td class="label">Nome</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="nome" class="textfield">
		<?php } else {?>
			<input type="text" name="nome" class="textfield" value="<?=$dj[1]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">Cidade</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="cidade" class="textfield">
		<?php } else {?>
			<input type="text" name="cidade" class="textfield" value="<?=$dj[2]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">Estilo</td>
       <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="estilo" class="textfield">
		<?php } else {?>
			<input type="text" name="estilo" class="textfield" value="<?=$dj[3]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">Comentarios<br><br><br><br><br><br><br><br><br><br><br><br><br><br><div style="cursor: pointer" onclick="javascript: window.open('http://www.detetivez.hpg.ig.com.br/tutoriais/html/fotehtml.htm')">Formata��o de texto</div><div style="cursor: pointer" onclick="javascript: window.open('http://www.detetivez.hpg.ig.com.br/tutoriais/html/espehtml.htm')">Caracteres Especiais</div></td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<textarea name="comentario"  class="textarea" rows="15"></textarea>
		<?php } else {?>
			<textarea name="comentario"  class="textarea" rows="15"><?=$dj[4]?></textarea>
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td class="label">Links</td>
      <td class="cell">
	  	<?php if ($metodo == "add") {?>
			<input type="text" name="links" class="textfield">
		<?php } else {?>
			<input type="text" name="links" class="textfield" value="<?=$dj[5]?>">
		<?php } ?>
		</td>
    </tr>
    <tr> 
      <td></td>
      <td align="right"><input type="button" value="Apagar" class="botao" onClick="javascript: apagar();"><input type="submit" value="Salvar" class="botao"></td>
    </tr>
    <?php if ($metodo == "add") {?>
    <input type="hidden" name="metodo" value="add">
    <?php } else {?>
    <input type="hidden" name="metodo" value="update">
	<input type="hidden" name="id" value="<?=$id?>">
    <?php } ?>
  </form>
</table>
</body>
</html>
