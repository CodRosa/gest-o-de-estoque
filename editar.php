<?php
include('cnx.php');
$id=$_GET['id'];
$select= mysqli_query($cnx,"select * from estoque where id='$id'");
while($sql=mysqli_fetch_array($select))
{
    $ferramenta=$sql['ferramenta'];
    $marca=$sql['marca'];
}

    echo"<!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Editar Estoque</title>
            
        </head>
        <body>
        <label>Ferramenta:</label>  
<input type='text' name='ferramenta' value='$ferramenta'>

<label>marca:</label>
<input type='text' name='marca' id='' value='$marca'>

<input type='hidden' name='id' value='$id'>

<input type='submit' value='Enviar'>

<a href='visualizar.php'>Voltar</a>
</form>
        </body>
        </html>";
        ?>