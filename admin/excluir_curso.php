<?php

include("includes/conecta.php");
$sql = "DELETE FROM tbl_cursos WHERE id = $id";
$resultado = mysql_query($sql) or die ("Erro ao remover a p�gina.");

//echo ("<meta http-equiv='refresh' content='1; URL=index_.php?link=6'>");
header('Location: lista_cursos.php');

?>