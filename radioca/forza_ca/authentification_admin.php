<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Radio Forza CA en direct</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

    <body background="../images/maquette-web - Copie.jpg">
	
        <script>
    function f1()
    {
        var x=document.getElementById('login').value;
        var y=document.getElementById('password').value;
        if(x=="")
        {
            alert('Saisir login');
            return false;
        }
        else if(y=="")
        {alert ('Saisir mot de passe');
        return false ; }
    
 else {return true;} }
    </script>
        <fieldset><legend>Authentification Admin</legend><form method="post">
            
            <table>
                <tr><td>Login</td>
                <td><input type="text" name="login" id="login" value=""></td></tr>
                <tr><td>Password</td>
                    <td><input type="password" name="password" id="password" value=""></td>
                </tr>
                <tr><td><input type="submit" name="valider" value="Acces" onclick="return f1()"></td></tr>
            </table>
        </form></fieldset>
    </body>
</html>
<?php
class authentification_administrateur {
    private $login,$password;
    protected $PDO;
    public function __construct() {
        if(isset($_POST['valider']))
        {
        $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
        $this->login=$_POST['login'];
        $this->password=$_POST['password'];  }  
        }
    function verif()
    {
        if(isset($_POST['valider']))
        {
           
        $req="select * from administrateur where login='".$this->login."' and password='".$this->password."'";
        $reqe=  $this->PDO->prepare($req);
        $reqe->execute();
       $rech=$reqe->fetch(PDO::FETCH_NUM,PDO::FETCH_ORI_NEXT);
        if(($rech[0]==true)&&($rech[1]==true))
        {
          header("Location:espace_admin.php"); 
          session_start();
          $_SESSION['nom']=$rech[1];
        }
        else
        {
            echo '<script>alert("Login ou mot de passe erronee")</script>';
        }
        }
    }
   
    
}
 $a=new authentification_administrateur();
 $a->verif();
?>