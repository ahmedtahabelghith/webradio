<?php
     class equipes
        {
        private $id,$nom,$adresse,$telephone;
        protected $PDO;
        function __construct() {
        if(isset($_POST['valider'])||isset($_POST['modifier']))
        {
            
           $this->PDO=new PDO('mysql:host=localhost;dbname=radio_forza_ca','root','');
        $this->id=$_POST['id'] ;
        $this->nom=$_POST['nom'] ;
        $this->adresse=$_POST['adresse'] ;
        $this->telephone=$_POST['telephone'] ;
        
        }
         else if(isset($_POST['supprimer'])||isset($_POST['id']))
        {
          $this->id=$_POST['id'] ; 
        }
        }
         function ajout_equipe() {
         if(isset($_POST['valider']))
        {
         $reqe="INSERT INTO equipe VALUES('".$this->id."','".$this->nom."','".$this->adresse."','".$this->telephone."')";
         $this->PDO->exec($reqe);
        }
        
            }
           
        
            }
             
            
           
        
        
        $cl=new Equipes();
        
        $cl->ajout_equipe();
        