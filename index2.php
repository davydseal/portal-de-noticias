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
<div class="navbar">
  <a href="index.html">INÍCIO</a>
  <a href="#news">CONTATO</a>
  <a href="#news">SOBRE</a>
  <div class="dropdown">
    <button class="dropbtn">REDES SOCIAIS 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">FACEBOOK</a>
      <a href="#">INSTAGRAM</a>
      <a href="#">YOUTUBE</a>
    </div>
  </div> 
</div>
<br>

<table align=left>
		<tr>
			<td bgcolor="#fff"><a href="noticia.html"><img src="img/assa.jpg" title="Assassin's Creed Valhalla" width="262" height="450"></a></td>
			<td bgcolor="#fff"><a href="#"><img src="img/cyber.jpg" title="Cyberpunk 2077" width="262" height="450"></a></td>
			<td bgcolor="#fff"><a href="#"><img src="img/thelast.jpg" title="The Last of Us Part II" width="262" height="450"></a></td>
			<td bgcolor="#fff"><a href="#"><img src="img/resi.jpg" title="Resident Evil Village" width="262" height="450"></a></td>
			<td bgcolor="#fff"><a href="#"><img src="img/returnal.jpg" title="Returnal" width="262" height="450"></a></td>
		</tr>
<tr>
	<td bgcolor="#fff" width="262" height="100" align=center><p class=p2 style="font-size:120%;"><a href="#">Assassin's Creed Valhalla</a></p></td>
	<td bgcolor="#fff" width="262" height="100" align=center><p class=p2 style="font-size:120%;"><a href="#">Cyberpunk 2077</a></p></td>
	<td bgcolor="#fff" width="262" height="100" align=center><p class=p2 style="font-size:120%;"><a href="#">The Last of Us Parte 2</a></p></td>
	<td bgcolor="#fff" width="262" height="100" align=center><p class=p2 style="font-size:120%;"><a href="#">Resident Evil 7</a></p></td>
	<td bgcolor="#fff" width="262" height="100" align=center><p class=p2 style="font-size:120%;"><a href="#">Returnal</a></p></td>
</tr>

	</table>


	<table>
<tr>
	<td bgcolor="#f7f7f8" width="1500" height="20" align=center><marquee><p class=p2 style="font-size:120%;"><a href="#">Assassin's Creed Valhalla</a></p></marquee></td>
</tr>

	</table>
  <?php
             require("admin/ligar.php");
            $consulta3 = "SELECT * FROM $table_noticias WHERE status=1 order by codigo";
            $resultado3 = mysqli_query($mysqli,$consulta3);
            $quantos_forum = mysqli_num_rows($resultado3);

            ?>

                      <?php

            for($j=0;$j < $quantos_forum;$j++)
            {
            $variavel = mysqli_fetch_array($resultado3);


            ?>
<table align=left>
		<tr>
			<td rowspan = "2"><a href="consultar_noticia.php?codigo_news=<?php print($variavel['codigo']); ?>"><img src="img/<?php print($variavel['img']); ?>" width="335" height="198"></a></td>
			<td bgcolor="#fff" width="650" valign=top><p class=p2 style="font-size:150%;"><a href="consultar_noticia.php?codigo_news=<?php print($variavel['codigo']); ?>"><b><?php print($variavel['titulo']); ?></b></a></p><br><br><br><br><FONT COLOR="gray">0 visualizações</FONT> <FONT COLOR="gray">há 01 dia</FONT></td>
			</tr>

	</table>

	                                         <?php
 }
 ?>  

					<table align=left>
		<tr>
			<td rowspan = "2"><a href="#"><img src="img/2.jpg" width="335" height="198"></a></td>
			<td bgcolor="#fff" width="650" valign=top><p class=p2 style="font-size:150%;"><a href="#"><b>D II: Resurrected, a remasterização do segundo jogo da franquia da Blizzard, foi anunciado para PS4, PS5, Xbox One, Xbox Series X/S, Nintendo Switch e PC.</b></a></p><br><br><br><br><FONT COLOR="gray">0 visualizações</FONT> <FONT COLOR="gray">há 01 dia</FONT></td>
			</tr>

	</table>
		<table align=left>
		<tr>
			<td rowspan = "2"><a href="#"><img src="img/3.jpg" width="335" height="198"></a></td>
			<td bgcolor="#fff" width="650" valign=top><p class=p2 style="font-size:150%;"><a href="#"><b>D II: Resurrected, a remasterização do segundo jogo da franquia da Blizzard, foi anunciado para PS4, PS5, Xbox One, Xbox Series X/S, Nintendo Switch e PC.</b></a></p><br><br><br><br><FONT COLOR="gray">0 visualizações</FONT> <FONT COLOR="gray">há 01 dia</FONT></td>
			</tr>

	</table>
			<table align=left>
		<tr>
			<td rowspan = "2"><a href="#"><img src="img/4.jpg" width="335" height="198"></a></td>
			<td bgcolor="#fff" width="650" valign=top><p class=p2 style="font-size:150%;"><a href="#"><b>D II: Resurrected, a remasterização do segundo jogo da franquia da Blizzard, foi anunciado para PS4, PS5, Xbox One, Xbox Series X/S, Nintendo Switch e PC.</b></a></p><br><br><br><br><FONT COLOR="gray">0 visualizações</FONT> <FONT COLOR="gray">há 01 dia</FONT></td>
			</tr>

	</table>
			<table align=left>
		<tr>
			<td rowspan = "2"><a href="#"><img src="img/5.jpg" width="335" height="198"></a></td>
			<td bgcolor="#fff" width="650" valign=top><p class=p2 style="font-size:150%;"><a href="#"><b>D II: Resurrected, a remasterização do segundo jogo da franquia da Blizzard, foi anunciado para PS4, PS5, Xbox One, Xbox Series X/S, Nintendo Switch e PC.</b></a></p><br><br><br><br><FONT COLOR="gray">0 visualizações</FONT> <FONT COLOR="gray">há 01 dia</FONT></td>
			</tr>

	</table>
<table align=center>
		<tr>
			
			<td><img src="img/anuncio.jpg" width="330" height="500"></td>
			</tr>

	</table>
			
</body>
</html>