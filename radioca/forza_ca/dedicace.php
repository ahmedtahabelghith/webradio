<html>

<head>
<title>dedicace</title>
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
        var b=document.getElementById('pseudo').value;
        var c=document.getElementById('message').value;
        
       
       
        if(a=="")
        {
            alert('Champs id vide');
            return false;
        }
        else if(b=="")
        {
            alert('Champs pseudo vide');
            return false;
        }
        else if(c=="")
        {
           
        else
        {
        alert('Enregistré avec succes !');
    return true ;
        }}
   </script>   
   <form method="POST">
    
    <fieldset class='b' style="width:550px;"><legend><h3>dedicace</h3></legend>
    <table align="center">

<tr><td><img src="logos/id.png" width="15" height="15"> &nbspId</td>
    <td><input type="text" name="id" value="" id="id" class="a"></td></tr>
<tr><td><img src="logos/id.png" width="15" height="15"> &nbspPseudo</td>
<td><input type="text" name="pseudo" value="" id="pseudo" class="a"></td></tr>
<tr><td><img src="logos/id.png" width="15" height="15"> &nbsp Message</td>
<td><input type="text" name="message" value="" id="message" class="a"></td></tr>




<tr><td>&nbsp&nbsp<img src="logos/save.png" width="15" height="15"> &nbsp <input type="submit" name="valider" value="Valider" class="a" onclick="return f1()" ></td>
    <td>&nbsp&nbsp<img src="logos/update.png" width="15" height="15"> &nbsp <input type="submit" name="modifier" value="Modifier" class="a" onclick="return f1()"></td>
<td><img src="logos/show.png" width="15" height="15"> &nbsp <input type="submit" name="lister" class="a" value="Afficher le profil"></td>
<td><img src="logos/delete.png" width="15" height="15"> &nbsp <input type="submit" name="supprimer" class="a" value="Supprimer"></td></tr>
    </table></fieldset>
</form>
</body>
</html>    
               
<?php
class dedicace
        {
        private $id,$pseudo,$message,$v;
        protected $PDO;
                function __construct() {
        if(isset($_POST['valider'])||isset($_POST['modifier']))
        {
        $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
        $this->id=$_POST['id'] ;
        $this->pseudo=$_POST['pseudo'] ;
        $this->message=$_POST['message'] ;
        $v="";
        
        }
         else if(isset($_POST['supprimer'])||isset($_POST['lister']))
        {
             $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
         $this->id=$_POST['id'] ;
		 $v=""; 
		 
        }
        }
         
        
         function valider_dedicace() {
         if(isset($_POST['valider']))
        {
	      
		  
           $reqe="update dedicace set v='1' where id ='".$this->id."' ";
      $req=  $this->PDO->exec($reqe);
         
        }}
         function dedicace_modifier() {
         if(isset($_POST['modifier']))
        {
          
           
       $reqe="update dedicace set id='".$this->id."',message='".$this->message."' where pseudo='".$this->pseudo."' ";
      $req=  $this->PDO->exec($reqe);
        }
        
            }
              function dedicace_supprimer() {
         if(isset($_POST['supprimer']))
        {
		

 
		
          
		$id=$_GET['choix'];
			
			$sup="DELETE  FROM dedicace WHERE id ='".$id."' ";
          $this->PDO->exec($sup);
 
			
	
 
	
	}

          
		    
          
        


        }
         function lister_dedicace()
        {
             mysql_connect('localhost', 'root', '');
             mysql_select_db('radio_forza_ca');
        $req="select * from dedicace ";
            $ex=mysql_query($req);
            
			
            echo"<fieldset class='b' style='width:550px;' ><table align='center'><thead><tr><legend><h3>Dedicaces</h3><legend><th>Id</th><th>pseudo</th><th>message</th></tr></thead>";
           
 while($sh=mysql_fetch_row($ex))
            {
			
   $id=$sh[0];
       

               
                echo"<tbody><tr><td class='t'>     <input type='checkbox' name='choix[]' id=".$sh[0]." value=".$id.">".$sh[0]."</td><td class='t'>".$sh[1]."</td><td class='t'>".$sh[2]."<td class='t'><td><a href='supp.php?oo=".$sh[0]." '>Supprmier</a></td><td class='t'><td><a href='val.php?oo=".$sh[0]." '>valider</a></td></tr></tr></tbody>";
                 
            }
            echo"</table></legend>";
            
        }}
        
        
        $j=new dedicace();
        $j->valider_dedicace();
        $j->dedicace_modifier();
        $j->dedicace_supprimer();
        $j->lister_dedicace();