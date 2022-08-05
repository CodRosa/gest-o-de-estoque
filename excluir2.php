<?php
    inclua "cnx.php";
    $id = $_GET['id'];
    if($excluir=mysqli_query($cnx,"excluir do estoque onde id ='$id'"))
{
echo "PRODUTO EXCLUIDO COM SUCESSO!";
echo '<a href = "visualizar.php">Voltar</a>';
}
senão
{
	echo mysqli_error($cnx);
}
?>