<%@ LANGUAGE=VBScript%>
<html>

<head>
<title>Altera�ao de Not�cias</title>
<%
Dim SQL
Dim RecSet
Dim DB
ID = Request.Form("ID") 
Set DB = server.createobject("ADODB.connection") 
DB.Open "noticias" 
SQL = "DELETE FROM NOTICIAS WHERE ID=" & REQUEST("ID")
Set RecSet = DB.Execute(SQL) 
DB.close
%> 
</head>

<p align="center"><b> 
Not�cia de C�digo igual a 8 foi alterada com sucesso!</b>
<hr>
<a href="main.htm"> Retornar ao �ndice Geral</a><br>
</html>
