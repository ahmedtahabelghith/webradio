<?php
mysql_connect('localhost','root','');
   mysql_select_db('radio_forza_ca');  
$id=$_GET['oo'];
$reqz="update dedicace set v='1' where id ='".$id."' ";
$f=  mysql_query($reqz);
                 header('location:./dedicace.php');


 
                 
            
            echo"</table></legend>";
            
        




?>