<html>
<head>
<title>Portal</title>
<meta http-equiv=”Content-Type” content=”text/html; charset=iso-8859-1″>

<style type="text/css">
<!--
a:link{
text-decoration:none;
color:black;
}

a:visited{
text-decoration:none;
color:black;
}

a:hover{
text-decoration: underline; 
color:orange;
}

.p2 {
  font-family: Arial, Helvetica, sans-serif;
}
-->
</style>


<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: orange;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>


</head>
<body bgcolor="#f7f7f8">

<?php

$codigo_news = $_GET["codigo_news"];

       require("admin/ligar.php");
       $consulta_news = "SELECT * FROM $table_noticias WHERE codigo=$codigo_news";
       $resultado = mysqli_query($mysqli,$consulta_news);
       $vetor = mysqli_fetch_array($resultado);
       

?>

<div class="navbar">
  <a href="index.php">INÍCIO</a>
  <a href="#news">CONTATO</a>
  <div class="dropdown">
    <button class="dropbtn">SOCIAL 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Facebook</a>
      <a href="#">Twitter</a>
      <a href="#">Instagram</a>
    </div>
  </div> 
</div>
<br>

<table align=left>
		<tr>
			<td bgcolor="#fff"><a href="#"><img src="img/<?php print($vetor['img']); ?>" title="Resident Evil Village" width="1048" height="450"></a></td>
			
		</tr>


	</table>

	<table align=left>
		<tr>
	<td bgcolor="#fff" width="1315" height="100" align=left><p class=p2 style="font-size:120%;"><?php print($vetor['titulo']); ?></p></td>
</tr>
	</table>

<table align=left>
		<tr>
			<td bgcolor="#fff" width="1048" valign=top><p class=p2 style="font-size:120%;"><?php print($vetor['noticia']); ?></FONT></td>
			<td valign=top><img src="img/anuncio.jpg" width="262" height="450"></td>
			</tr>

	</table>
			
</body>
</html>