<?php
include("cnx.php");
$ferramenta = $_GET['ferramenta'];
$marca = $_GET['marca'];
if ($inserir= mysqli_query($cnx,"insert into estoque (id,ferramenta,marca) values(default,'$ferramenta','$marca')"))
{
    echo "Ferramenta casdastrada com sucesso.<a href ='visualizar.php'>Voltar</a>";
}
else{
  echo mysqli_error($cnx);
}
?>