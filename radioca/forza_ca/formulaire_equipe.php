<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Equipes</title>
</head>

<body>


<form method="post">
<fieldset><legend>Equipes</legend>
<table align="center" border="0">
<tr><td>Id equipe</td><td><input type="text" name="id" value=""/></td></tr>
<tr><td>Nom</td><td><input type="text" name="nom" value=""/></td></tr>
<tr><td>Nombre points</td><td><input type="text" name="nombrepoint" value=""/></td></tr>
<tr><td>Jouee</td><td><input type="text" name="jouee" value=""/></td></tr>
<tr><td>Gagné</td><td><input type="text" name="gagne" value=""/></td></tr>
<tr><td>Nul</td><td><input type="text" name="nul" value=""/></td></tr>
<tr><td>P</td><td><input type="text" name="p" value=""/></td></tr>
<tr><td>C</td><td><input type="text" name="c" value=""/></td></tr>
<tr><td>diff</td><td><input type="text" name="diff" value=""/></td></tr>
<tr><td><input type="submit" name="valider" value="Valider"/></td>
<td><input type="submit" name="supprimer" value="Supprimer"/></td>
<td><input type="submit" name="modifier" value="Modifier"/></td></tr>
</table></fieldset>
</form>
</body>
</html>
<?php

mysql_connect('localhost','root','');
mysql_select_db('radio_forza_ca');
if(isset($_POST['valider']))
{

$id=$_POST['id'];
$nom=$_POST['nom'];
$nombrepoint=$_POST['nombrepoint'];
$jouee=$_POST['jouee'];
$gagne=$_POST['gagne'];
$nul=$_POST['nul'];
$p=$_POST['p'];
$c=$_POST['c'];
$diff=$_POST['diff'];
$req="insert into equipes values ('".$id."','".$nom."','".$nombrepoint."','".$jouee."','".$gagne."','".$nul."','".$p."','".$c."','".$diff."') ";
mysql_query($req);
}
else if(isset($_POST['supprimer']))
{
$id=$_POST['id'];
$req="delete from equipes where id='".$id."' ";
mysql_query($req);
}


?>