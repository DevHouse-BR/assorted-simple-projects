<%@ LANGUAGE=VBScript%>
<html>

<head>
<title>�ndice de Not�cias</title>
</head>

<h1 align="center"><font face="Comic Sans MS"> �ndice das Not�cias</font></h1>
<hr>
<%
Dim DB
Dim SQL
Set DB = Server.CreateObject("ADODB.Connection")
DB.Open "noticias"
SQL="SELECT ID,DATA,TITULO,CONTEUDO FROM NOTICIAS order by DATA DESC"
Set RecSet=DB.Execute(SQL)
If RecSet.Eof then 
	Response.Write "N�o h� not�cias cadastradas!"
Else
	Response.Write "Clique na not�cia desejada:<br><br>"
	Do Until RecSet.Eof
		Response.Write RecSet("DATA")
		Response.Write "-<a href=conteudo.asp?ID="&RecSet("ID")&">"
		Response.Write RecSet("TITULO") & "</A><BR>"
		RecSet.MoveNext
	Loop
End If
DB.close
%>
<p><a href="main.htm"> Retornar ao �ndice Geral</a><br>
</html>

