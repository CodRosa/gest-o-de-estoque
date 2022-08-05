<?php
include("cnx.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Gestão de estoque</title>
</head>
<body bgcolor = "#F0F8FF">
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<a href="inserir.php" class='head-top'>Cadastro</a>
		<br>
		<?php

				if(isset($_GET['buscar']))
				{
					$buscar = $_GET['buscar'];
                    $campo = $_GET['campo'];
				}
				else 
				{
					$buscar = '';
                    $campo = 'ferramenta';
				}

				$i=0;
			echo("<form action='visualizar.php' method='get'>
                <select name='campo' class='Busca'>
                    <option value='ferramenta'>ferramenta</option>
                    <option value='marca'>marca</option>

                </select>
			    <input class='Busca' type='text' name='buscar' value='$buscar'> <input type='submit' class='Busca' value='Buscar'>
			</form>");

			echo("<table border='4'>
				<tr class='back'>
					<th><p class='head'>ferramenta</p></th>
					<th><p class='head'>marca</p></th>
					<th colspan=2><p class='head'>função</p>
			 		</th>
			 	</tr>");

				$selecionar = mysqli_query($cnx,"select * from estoque where $campo like '%$buscar%'");
				while ($sql = mysqli_fetch_array($selecionar))
				{

					$id = $sql['id'];
					$ferramenta=$sql['ferramenta'];
					$marca= $sql['marca'];
					echo "<tr>
						<td><p>$ferramenta</p></td>
						<td><p>$marca</p></td>
						<td class='função'><a href='editar.php?id=$id'><img src='img/lapis.png'></a></td>
						</a></td>
						<td class='funcão'><a href='excluir.php?id=$id'><img src='img/delete.png'></a></td>
					</tr> ";
					$i=$i+1;
				}
            echo "<b><p class='Contador'>$i Registros encontrados</p></b>"
			?>
		</table>
        
	</center>

</body>
</html>