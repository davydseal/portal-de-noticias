<!DOCTYPE html>
<html>
 <head>
  <title>Portal</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<body>

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
<table align=center>
		<tr>
			
			<td><img src="img/anuncio.jpg" width="1327" height="100"></td>
			</tr>

	</table>


  <div class="container">
  	<h2 align="left">Notícias</a></h2>
   <br />
   <div id="load_data"></div>
   <div id="load_data_message"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
  </div>



 </body>
</html>
<script>

$(document).ready(function(){
 
 var limit = 7;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>Não há mais noticias</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Carregando....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1000);
  }
 });
 
});
</script>
