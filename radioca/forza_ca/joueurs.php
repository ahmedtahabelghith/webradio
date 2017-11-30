<html>

<head>
<title>Joueurs</title>
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
        var f=document.getElementById('prenom').value;
       
       
       
        
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
            alert('Champs prenom vide');
            return false;
        }
        
        else
        {
        alert('Enregistré avec succes !');
    return true ;
        }}
   </script>   
   <form method="POST">
    
    <fieldset class='b' style="width:550px;"><legend><h3>Joueurs</h3></legend>
    <table align="center">

<tr><td><img src="logos/id.png" width="15" height="15"> &nbspId</td>
    <td><input type="text" name="id" value="" id="id" class="a"></td></tr>
<tr><td><img src="logos/id.png" width="15" height="15"> &nbspNom</td>
<td><input type="text" name="nom" value="" id="nom" class="a"></td></tr>
<tr><td><img src="logos/id.png" width="15" height="15"> &nbsp Prenom</td>
<td><input type="text" name="prenom" value="" id="prenom" class="a"></td></tr>
<tr><td><img src="logos/adress.png" width="15" height="15"> &nbspAge</td>
    <td><input type="text" name="age" value="" id="adresse" class="a"></td></tr>
<tr><td><img src="logos/phone.png" width="15" height="15"> &nbspNationalite</td>
    <td><input type="text" name="nationalite" value="" id="telephone" class="a"></td></tr>



<tr><td>&nbsp&nbsp<img src="logos/save.png" width="15" height="15"> &nbsp <input type="submit" name="valider" value="Enregistrer" class="a" onclick="return f1()" ></td>
    <td>&nbsp&nbsp<img src="logos/update.png" width="15" height="15"> &nbsp <input type="submit" name="modifier" value="Modifier" class="a" onclick="return f1()"></td>
<td><img src="logos/show.png" width="15" height="15"> &nbsp <input type="submit" name="lister" class="a" value="Afficher le profil"></td>
<td><img src="logos/delete.png" width="15" height="15"> &nbsp <input type="submit" name="supprimer" class="a" value="Supprimer"></td></tr>
    </table></fieldset>
</form>
</body>
</html>    
               
<?php
class joueurs
        {
        private $id,$nom,$prenom,$age,$nationalite;
        protected $PDO;
                function __construct() {
        if(isset($_POST['valider'])||isset($_POST['modifier']))
        {
        $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
        $this->id=$_POST['id'] ;
        $this->nom=$_POST['nom'] ;
        $this->prenom=$_POST['prenom'] ;
        $this->age=$_POST['age'] ;
        $this->nationalite=$_POST['nationalite'] ;
        
        }
         else if(isset($_POST['supprimer'])||isset($_POST['lister']))
        {
             $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
          $this->id=$_POST['id'] ; 
        }
        }
         
        
         function ajout_joueur() {
         if(isset($_POST['valider']))
        {
           $statement="INSERT INTO joueurs VALUES('".$this->id."','".$this->nom."','".$this->prenom."','".$this->age."',"
        . "'".$this->nationalite."')";
         $req=  $this->PDO->exec($statement);
         
        }}
         function joueur_modifier() {
         if(isset($_POST['modifier']))
        {
             
           
       $reqe="update joueurs set id='".$this->id."',nom='".$this->nom."',prenom='".$this->prenom."',age='".$this->age."',nationalite='".$this->nationalite."' where id='".$this->id."' ";
      $req=  $this->PDO->exec($reqe);
        }
        
            }
              function joueur_supprimer() {
         if(isset($_POST['supprimer']))
        {
          $sup="DELETE FROM joueurs WHERE id='".$this->id."' ";
          $this->PDO->exec($sup);
        }
        }
         function lister_joueur()
        {
             mysql_connect('localhost', 'root', '');
             mysql_select_db('radio_forza_ca');
        $req="select * from joueurs ";
            $ex=mysql_query($req);
            if(isset($_POST['lister'])){
            echo"<fieldset class='b' style='width:550px;' ><table align='center'><thead><tr><legend><h3>id</h3><legend><th>Id</th><th>Nom</th><th>Prenom</th><th>Age</th><th>Nationalite</th></tr></thead>";
            while($sh=mysql_fetch_row($ex))
            {
               
               
                echo"<tbody><tr><td class='t'>".$sh[0]."</td><td class='t'>".$sh[1]."</td><td class='t'>".$sh[2]."</td><td class='t'>".$sh[3]."</td><td class='t'>".$sh[4]."</td></tr></tbody>";
                 
            }
            echo"</table></legend>";
            
        }}}
        
        
        $j=new joueurs();
        $j->ajout_joueur();
        $j->joueur_modifier();
        $j->joueur_supprimer();
        $j->lister_joueur();