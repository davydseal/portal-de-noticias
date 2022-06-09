<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "portal");
 $query = "SELECT * FROM noticias ORDER BY codigo DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
 <a href="consultar_noticia.php?codigo_news='.$row["codigo"].'"><img src="img/'.$row["img"].'" width="335" height="198"/></a>
  <h3>'.$row["titulo"].'</h3>
  <p>'.$row["noticia"].'</p>
  <p class="text-muted" align="right">By - '.$row["img"].'</p>
  <hr />
  ';
 }
}

?>