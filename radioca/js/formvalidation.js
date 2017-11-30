function Formulaire(formulaire)
// constructeur de la classe (en entr�e : l'attribut "name" du formulaire � valider)
{
   // variables membres
   this.form=formulaire; // nom du formulaire
   this.erreurs=new Array(); // tableau des champs contenant des erreurs de saisie

   // tableaux des r�gles de validation appliqu�es aux champs
   this.regles=new Array();
   this.messages=new Array();
   this.validations=new Array();
   this.params=new Array();

   // m�thodes
   this.regle=regleChamp;
   this.nettoyer=nettoyerChaine;
   this.valider=validerForm;
   this.liste=listeErreurs;
}

function regleChamp(champ, type, message, param)
/* ajoute une r�gle de validation :
- "champ" est la valeur de l'attribut "name" du champ
- "type" est la r�gle de validation proprement dite
- "message" est le message d'erreur en cas de validation erron�e
- "param" est un param�tre facultatif, utilis� par ceratines r�gles */
{
   this.regles.push(champ);
   this.validations.push(type);
   this.messages.push(message);
   this.params.push(param);
}

function listeErreurs()
// retourne la liste des erreurs
{
   var x, liste="";
   
   // construction de la cha�ne
   for(x=0; x<this.erreurs.length; x++) liste+="- "+this.erreurs[x]+"\n";
   
   return liste;
}


function nettoyerChaine(chaine)
// supprime les espaces en d�but et fin de cha�ne (�quivalent � la fonction PHP "trim()")
{
   regex=new RegExp("(^ +)|( +$)", "g");
   chaine=chaine.replace(regex, "");

   return chaine;
}

function validerForm()
// valide le formulaire : chaque champ doit v�rifier les r�gles qui lui ont �t� d�finies
{
   var x, regex, msg="";
   eval("var formulaire=document."+this.form+";");
   
   // si aucune r�gle n'a �t� d�finie, la validation est toujours vraie
   if(!this.regles.length) return true;
   
   // on examine chaque champ
   for(x=0; x<this.regles.length; x++)
   {
      // on effectue au pr�alable un petit nettoyage sur le champ � valider
      eval("formulaire."+this.regles[x]+".value=this.nettoyer(formulaire."+this.regles[x]+".value);");
      
      switch(this.validations[x])
      {
         // le champ doit avoir le m�me contenu qu'un autre
         case "comparaison":
            eval("if(formulaire."+this.regles[x]+".value!='"+this.params[x]+"') this.erreurs.push(this.messages[x]);");
            break;
            
         /* le champ doit avoir une certaine longueur : c'est le dernier param�tre sous la forme "min,max"
         (0 signifiant pas de minimum ou de maximum) */
         case "lendedicace":
            eval("var longueur=formulaire."+this.regles[x]+".value.length;");
            if(longueur)
            {
               //var temp=this.params[x].split(",( +)?");
               mini=10;
               maxi=1600;
               
               if((mini && longueur<mini) || (maxi && longueur>maxi)) this.erreurs.push(this.messages[x]);
            }
            break;
         case "longueur":
            eval("var longueur=formulaire."+this.regles[x]+".value.length;");
            if(longueur)
            {
               var temp=this.params[x].split(",( +)?");
               mini=parseInt(temp[0]);
               maxi=parseInt(temp[1]);
               
               if((mini && longueur<mini) || (maxi && longueur>maxi)) this.erreurs.push(this.messages[x]);
            }
            break;
         // le champ (uniquement s'il est rempli) doit v�rifier une expression r�guli�re
         case "regex":
            switch(this.params[x])
            {
               // quelques exemples...
               case "mail":
                  regex=new RegExp("^[a-z0-9_]([.-]?[a-z0-9_]+)+@[a-z0-9_]([.-]?[a-z0-9_]+)+\.([a-z]{2,4}|[a-z]{6})$", "gi");
                  break;
                  
               case "alpha_num":
                  regex=new RegExp("^[_a-z0-9]+$", "gi");
                  break;
                  
               case "code_postal":
                  regex=new RegExp("^(0[1-9]|[1-9][0-9])[0-9]{3}$", "g");
                  break;
               case "date":
				  regex=new RegExp("^[0-9]{4}[-](0[1-9]|1[0-2])[-][0-3][0-9]$","g");
                  break;
				// par d�faut (non vide)
               default:
                  regex=new RegExp("^.+$", "g");

            }
            
            eval('if(formulaire.'+this.regles[x]+'.value!="" && !regex.exec(formulaire.'+this.regles[x]+'.value)) this.erreurs.push(this.messages[x]);');
            break;
            
         case "requis":
         default:
         // le champ doit juste �tre rempli
            eval('if(formulaire.'+this.regles[x]+'.value=="") this.erreurs.push(this.messages[x]);');
      }
   }
   
   // en cas d'erreur, on affiche les diff�rents messages
   if(this.erreurs.length)
   {
      var msg="Le formulaire comporte des erreurs :\n\n"+this.liste()+"\nVeuillez remplir correctement les champs.";
      alert(msg);
      return false;
   }
   
   // en cas de succ�s, on envoie le formulaire
   return true;
}