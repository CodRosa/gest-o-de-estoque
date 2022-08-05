<?php
if(!($cnx = mysqli_connect("localhost","root","","gestão"))); 
{
echo mysqli_error($cnx);
}