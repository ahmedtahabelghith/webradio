<html>

<head>
<title>articles</title>
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
        var b=document.getElementById('titre').value;
        var c=document.getElementById('message').value;
        var d=document.getElementById('date').value;
        var f=document.getElementById('photo').value;
       
       
       
        if(a=="")
        {
            alert('Champs id vide');
            return false;
        }
        else if(b=="")
        {
            alert('Champs titre vide');
            return false;
        }
        else if(c=="")
        {
            alert('Champs message vide');
            return false;
        }
        else if(d=="")
        {
            alert('Champs date vide');
            return false;
        }
       
         else if(f=="")
        {
            alert('Champs photo vide');
            return false;
        }
        
        else
        {
        alert('Enregistré avec succes !');
    return true ;
        }}
   </script>   
   <form method="POST">
    
    <fieldset class='b' style="width:550px;"><legend><h3>articles</h3></legend>
    <table align="center">

<tr><td><img src="logos/id.png" width="15" height="15"> &nbspId</td>
    <td><input type="text" name="id" value="" id="id" class="a"></td></tr>
<tr><td><img src="logos/id.png" width="15" height="15"> &nbspTitre</td>
<td><input type="text" name="titre" value="" id="titre" class="a"></td></tr>
<tr><td><img src="logos/id.png" width="15" height="15"> &nbsp message</td>
<td><textarea name="message" class="a"></textarea></td></tr>
<tr><td><img src="logos/adress.png" width="15" height="15"> &nbspdate</td>
    <td><input type="date" name="date" value="" id="date" class="a"></td></tr>
<tr><td><img src="logos/phone.png" width="15" height="15"> &nbsp Photo</td>
    <td><input name="photo" type="file" class="a"></td></tr>



<tr><td>&nbsp&nbsp<img src="logos/save.png" width="15" height="15"> &nbsp <input type="submit" name="valider" value="Enregistrer" class="a" onclick="return f1()" ></td>
    <td>&nbsp&nbsp<img src="logos/update.png" width="15" height="15"> &nbsp <input type="submit" name="modifier" value="Modifier" class="a" onclick="return f1()"></td>
<td><img src="logos/show.png" width="15" height="15"> &nbsp <input type="submit" name="lister" class="a" value="Afficher le profil"></td>
<td><img src="logos/delete.png" width="15" height="15"> &nbsp <input type="submit" name="supprimer" class="a" value="Supprimer"></td></tr>
    </table></fieldset>
</form>
</body>
</html>    
<?php
class articles
        {
        private $id,$titre,$message,$date,$photo;
        protected $PDO;
                function __construct() {
        if(isset($_POST['valider'])||isset($_POST['modifier']))
        {
        $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
        $this->id=$_POST['id'] ;
        $this->titre=$_POST['titre'] ;
        $this->message=$_POST['message'] ;
        $this->date=$_POST['date'] ;
        $this->photo=$_POST['photo'];
        
        }
         else if(isset($_POST['supprimer'])||isset($_POST['lister']))
        {
             $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
          $this->id=$_POST['id'] ; 
        }
        }
         
        
         function ajout_articles() {
         if(isset($_POST['valider']))
        {
           $statement="INSERT INTO articles VALUES('".$this->id."','".$this->titre."','".$this->message."','".$this->date."',"
        . "'".$this->photo."')";
         $req=  $this->PDO->exec($statement);
         
        }}
         function articles_modifier() {
         if(isset($_POST['modifier']))
        {
             
           
       $reqe="update articles set id='".$this->id."',titre='".$this->titre."',message='".$this->message."',photo='".$this->photo."',date='".$this->date."' where id='".$this->id."' ";
      $req=  $this->PDO->exec($reqe);
        }
        
            }
              function articles_supprimer() {
         if(isset($_POST['supprimer']))
        {
          $sup="DELETE FROM articles WHERE id='".$this->id."' ";
          $this->PDO->exec($sup);
        }
        }
         function lister_articles()
        {
             mysql_connect('localhost', 'root', '');
             mysql_select_db('radio_forza_ca');
        $req="select * from articles ";
            $ex=mysql_query($req);
            if(isset($_POST['lister'])){
            echo"<fieldset class='b' style='width:550px;' ><table align='center'><thead><tr><legend><h3>Profil</h3><legend><th>Id</th><th>titre</th><th>message</th><th>date</th><th>photo</th></tr></thead>";
            while($sh=mysql_fetch_row($ex))
            {
               
               
                echo"<tbody><tr><td class='t'>".$sh[0]."</td><td class='t'>".$sh[1]."</td><td class='t'>".$sh[2]."</td><td class='t'>".$sh[3]."</td><td class='t'>".$sh[4]."</td></tr></tbody>";
                 
            }
            echo"</table></legend>";
            
        }}}
        
        
        $s=new articles();
        $s->ajout_articles();
        $s->articles_modifier();
        $s->articles_supprimer();
        $s->lister_articles();
               