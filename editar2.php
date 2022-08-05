<?php
    include('cnx.php');
    $id=$_GET['id'];
    $ferramenta=$_GET['ferramenta'];
    $marca=$_GET['marca'];
    
    if($editar=mysqli_query ($cnx, "update estoque set ferramenta='$ferramenta', marca = '$marca' where id = '$id'"))
    {
    
	 echo " <center><h2>Dados alterados com sucesso!</h2> <br>
	  <a href='visualizar.php'><button>VOLTAR</button></a></center>";
}
?>