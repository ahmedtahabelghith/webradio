<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Radio Forza CA en direct</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

    <body background="../images/lol.jpg">
	
<?php
session_start();
$nom=$_SESSION['nom'];
echo 'Bonjour ', $nom ,'! Que pouvons nous faire pour vous ajourd hui ?';
?>

 <html>

<head>
<title>admins</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<style>
        th{
        background-color: bisque;
        border-radius: 3px 3x 3px 3px;
        
}
.t{
    background-color:gainsboro ;
    border-radius: 3px 3px 3px 3px ;
}
.a{
  border-radius: 4px 4px 4px 4px ; 
 
}
.b
{
  border-radius: 4px 4px 4px 4px ; 
  border: 1px black dashed ;
  
  
 
}
    </style>
</head>
<body>
    <script>
    function f1()
    {   
        var a=document.getElementById('id').value;
        var b=document.getElementById('nom').value;
        var c=document.getElementById('adresse').value;
        var d=document.getElementById('telephone').value;
        
        var f=document.getElementById('email').value;
       
       
       
        if(a=="")
        {
            alert('Champs id vide');
            return false;
        }
        else if(b=="")
        {
            alert('Champs nom vide');
            return false;
        }
        else if(c=="")
        {
            alert('Champs adresse vide');
            return false;
        }
        else if(d=="")
        {
            alert('Champs telephone vide');
            return false;
        }
       
         else if(f=="")
        {
            alert('Champs Email vide');
            return false;
        }
        
        else
        {
        alert('Enregistré avec succes !');
    return true ;
        }}
   </script>   
   <form method="POST" action="./Equipes.php">
    
    <fieldset class='b' style="width:550px;"><legend><h3> Votre Choix  </h3></legend>
    <table align="center">

<tr>
    <td><a href="espace_admin.php?id=eq"class="a">Gestion equipes</a></td></tr>
<tr>
    <td><a href="espace_admin.php?id=ded" class="a">Gestion dedicace</a></td></tr>
	<tr>
    <td><a href="espace_admin.php?id=jou"class="a">Gestion Joueurs</a></td></tr>
	<tr>
    <td><a href="espace_admin.php?id=cont"class="a">Gestion contacts</a></td></tr>
	<tr>
    <td><a href="espace_admin.php?id=er"class="a">Gestion equipe radio</a></td></tr>
<tr>
    <td><a href="espace_admin.php?id=admin"class="a">Gestion administrateur</a></td></tr>
	<tr>
    <td><a href="espace_admin.php?id=art"class="a">Gestion articles</a></td></tr>
<tr>
    <td><a href="espace_admin.php?id=art"class="a">Gestion Utilisateur</a></td></tr>
	




   
</tr>
    </table></fieldset>
</form>
</body><?php

class espace_equipe {
  
}

 if(isset($_GET['id']))
 {
     if($_GET['id']=="eq"){include 'formulaire_equipe.php';}
     if($_GET['id']=="ded"){include 'dedicace.php';}
	 if($_GET['id']=="jou"){include 'joueurs.php';}
	 if($_GET['id']=="cont"){include 'contacts.php';}
	 if($_GET['id']=="admin"){include 'administrateur.php';}
	 if($_GET['id']=="er"){include 'equipe_radio.php';}
     if($_GET['id']=="art"){include 'articles.php';}
     
 }?>