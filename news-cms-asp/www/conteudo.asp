<%@ LANGUAGE=VBScript%>
<html>

<head>
<title>Conte�do das Not�cias</title>
</head>

<h1 align="center"> Conte�do das Not�cias </h1>
<%
Dim DB
Dim SQL
Dim RecSet
Set DB=Server.CreateObject ("ADODB.Connection")
DB.Open "noticias"
If Request.QueryString("ID") <> "" then
	SQL =  "SELECT  ID, DATA, TITULO, CONTEUDO FROM NOTICIAS where ID=" & Request.QueryString ("ID")
                  Set RecSet=DB.Execute(SQL)
	If  RecSet.eof  then  
		Response.Write "O c�digo <b>" & Request.QueryString("ID") & "</b> n�o existe!"
	Else
		Response.Write "<b>" & RecSet ("ID") &" </b>"
		Response.Write "<title>Not�cia - " & RecSet("TITULO") & "</title>" & vbCrLF
		Response.Write "<b>" &  RecSet("TITULO") & "</b><BR><BR>"
		Response.Write RecSet ("CONTEUDO")
	End If
Else
	Response.Write "Nenhum C�digo de not�cia Informado!"
End If
DB.close
%>
<hr>
<a href="indice.asp"> Retornar ao �ndice de Not�cias</a><br>
</html>