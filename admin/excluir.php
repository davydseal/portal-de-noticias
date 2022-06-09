<?php

$codigo = $_POST["codigo"];

require("ligar.php");
$delete = "DELETE FROM $table_noticias where codigo=$codigo";
$resultado = mysqli_query($mysqli,$delete);

if($resultado != 0)
{
?>
<script language="javascript">
document.location.href="admin.php";
</script>
<?php
}
else
{
?>
<script language="javascript">
document.location.href="admin.php";
</script>
<?php
}

?>

