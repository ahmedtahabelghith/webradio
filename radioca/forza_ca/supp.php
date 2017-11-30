<?php
mysql_connect('localhost','root','');
   mysql_select_db('radio_forza_ca');  
$id=$_GET['oo'];
$reqz="delete from dedicace where Id='".$id."' ";
$f=  mysql_query($reqz);
                 header('location:./dedicace.php');