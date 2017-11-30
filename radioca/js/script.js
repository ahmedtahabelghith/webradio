function Trim (myString)
{
return myString.replace(/^\s+/g,'').replace(/\s+$/g,'');
} 

function AfficheImageActu(img) 
{
	document.getElementById('imgActu').style.backgroundImage = 'url('+ img + ')';
}

function AfficheTitreActu(titre) 
{
	document.getElementById('titreActu').innerHTML = titre;
}

function InitialiseTitreEmission(emission, total) 
{
	var i=1;
	while(i<=total)
	{
		document.getElementById('titreemission' + String(i)).className='txtEmission';
		i= i+1;
	}
	document.getElementById('titreemission' + String(emission)).className='txtEmissionSelected';
}


function IsMessageValide() {
	var prenom = document.getElementById('prenom').value;
	var nom = document.getElementById('nom').value;
	var email = document.getElementById('email').value;
	var message = document.getElementById('message').value;
	if (Trim(prenom )=='' || Trim(nom )=='' || Trim(email)=='' || Trim(message)=='')
	{
		alert ('Veullez remplir tous les champs !');
		return false;
	}
	
	if (!IsValidEmail(email))
	{
		alert ('Adresse e-mail invalide !');
		return false;
	}
	return true;
}
function IsInscrieValide() {
	var prenom = document.getElementById('pseudo').value;
	var nom = document.getElementById('password').value;
	var email = document.getElementById('email').value;
	
	if (Trim(prenom )=='' || Trim(nom )=='' || Trim(email)=='' )
	{
		alert ('Veullez remplir tous les champs !');
		return false;
	}
	
	if (!IsValidEmail(email))
	{
		alert ('Adresse e-mail invalide !');
		return false;
	}
	return true;
}

function IsEnregistrementValide()
{
	var nom = document.getElementById('nom').value;
	var prenom = document.getElementById('prenom').value;
	var email = document.getElementById('email').value;
	var pass1 = document.getElementById('pass1').value;
	var pass2 = document.getElementById('pass2').value;
	if (Trim(nom)=='' || Trim(prenom)=='' || Trim(email)=='' || Trim(pass1)=='' || Trim(pass2)=='')
	{
		alert ('Veullez remplir tous les champs !');
		return false;
	}
	
	if (!IsValidEmail(email))
	{
		alert ('Adresse email invalide !');
		return false
	}
	
	if (pass1 != pass2)
	{
		alert ('vérifier votre mot de passe !');
		return false
	}
	return true;
}

function IsValidMailForPass() {
	var adress = document.getElementById('adressmail').value;
	if (Trim(adress)=='')
	{
		alert ('Veullez remplir tous les champs !');
		return false;
	}
	
	if (!IsValidEmail(adress))
	{
		alert ('Adresse e-mail invalide !');
		return false;
	}
	return true;
}



function IsValidEmail(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   return false
		}
		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		     return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    return false
		 }
 		 return true					
	}
	
function Actualisededicace()
{
    var xhr=null;
    if (window.XMLHttpRequest) 
	{ 
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) 
    {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    //on appelle le fichier reponse.txt
	xhr.open("GET.html", "includes/dedicaceajax.inc.html" , false);
 	xhr.send(null);	
	document.getElementById('zonededicace').innerHTML= xhr.responseText;
}

function ActualiseFacebook()
{
    var xhr=null;
    if (window.XMLHttpRequest) 
	{ 
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) 
    {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    //on appelle le fichier reponse.txt
	xhr.open("GET.html", "includes/indexfacebook.inc.html" , false);
 	xhr.send(null);	
	document.getElementById('zonefacebook').innerHTML= Trim(xhr.responseText);
	setTimeout("ActualiseFacebook()",10000);
}

function Actualisetelechargement(emission)
{
	var xhr=null;
    if (window.XMLHttpRequest) 
	{ 
        xhr = new XMLHttpRequest();
    }
    else if (window.ActiveXObject) 
    {
        xhr = new ActiveXObject("Microsoft.XMLHTTP");
    }
    //on appelle le fichier reponse.txt
	xhr.open("GET.html", "includes/telechargementdetail.inc5445.html?id=" + String(emission) , false);
	xhr.send(null);
	document.getElementById('zonefichier').innerHTML= xhr.responseText;
}