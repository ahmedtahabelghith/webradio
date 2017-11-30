<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="./Authentification_files/style.css"><link rel="shortcut icon" href="http://www.tunav-webtrace.com/tunavweb/images/Others/GlobeIco.ico"><title>
	Authentification
</title><style type="text/css"></style></head>
<body style="background-image: url(images/rfca.png;); background-repeat: repeat-x;
    overflow: hidden">
    <form method="post" action="" onsubmit="javascript:return WebForm_OnSubmit();" id="form1">
<div class="aspNetHidden">
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJOTM1Njc0MDI5ZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAgUKaW1nRW5nbGlzaAUJaW1nRnJlbmNotEqte3noXOtvo4HfU5Uyhu1eB9CD9mfSAJyf9vTMAmQ=">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['form1'];
if (!theForm) {
    theForm = document.form1;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="./Authentification_files/WebResource.axd" type="text/javascript"></script>


<script src="./Authentification_files/ScriptResource.axd" type="text/javascript"></script>
<script src="./Authentification_files/ScriptResource(1).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
if (typeof(Sys) === 'undefined') throw new Error('Échec du chargement de l\u0027infrastructure ASP.NET Ajax côté client.');
//]]>
</script>

<script src="./Authentification_files/ScriptResource(2).axd" type="text/javascript"></script>
<script src="./Authentification_files/WebResource(1).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div class="aspNetHidden">

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBwLIs77WBgKmg7i8CAKW58jlCgKki8v2DALGxLSWAQLjmaSLDAKOoeEvHSaTRQFthtJTYpxw9/ljTWObr1Hq07AQWY9i8CKM65s=">
</div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'form1', ['tUpdatePanel1','UpdatePanel1'], [], [], 90, '');
//]]>
</script>

    <table id="content100" align="center" cellspacing="0" cellpadding="0" border="0" height="600" width="100%" style="background: url(&#39;images/Others/globe.png&#39;) no-repeat 900px 300px;">
	<tbody><tr>
		<td>
            </td>
		<td>
            </td>
		<td>
            </td>
	</tr>
	<tr>
		<td>
            </td>
		<td valign="top">
                <table height="100%" width="100%">
                    <tbody><tr>
                        <td align="center">
                            <img id="Image1" src="./Authentification_files/NewLogoTunav128.png">
                        </td>
                        <td align="left" valign="middle">
                            <span id="lblWelcome" style="color:White;font-size:XX-Large;font-weight:bold;">Bienvenue sur WebTrace</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="top">
                        </td>
                        <td align="left" valign="top">
                            <table>
                                <tbody><tr>
                                    <td>
                                        <div id="UpdatePanel1">
			
                                                <table>
                                                    <tbody><tr>
                                                        <td>
                                                            <img id="Image2" src="./Authentification_files/lock.png" style="height:110px;">
                                                        </td>
                                                        <td>
                                                            <table id="LoginControl" cellspacing="0" cellpadding="0" style="color:#333333;border-color:#B5C7DE;border-width:1px;border-style:Solid;font-size:10pt;width:281px;border-collapse:collapse;">
				<tbody><tr>
					<td>
                                                                    <table border="0" cellpadding="4" cellspacing="0" style="border-collapse: collapse">
                                                                        <tbody><tr>
                                                                            <td>
                                                                                <table border="0" cellpadding="0" style="width: 281px">
                                                                                    <tbody><tr>
                                                                                        <td align="center" colspan="2" style="font-weight: bold; font-size: 0.9em; color: white;
                                                                                            background-color: #FF9933">
                                                                                            <span id="LoginControl_logIn">Authentification</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="right" style="width: 105px">
                                                                                            <label for="LoginControl_UserName" id="LoginControl_UserNameLabel" style="color:White;">Utilisateur</label>&nbsp;
                                                                                        </td>
                                                                                        <td align="left">
                                                                                            <input name="LoginControl$UserName" type="text" id="LoginControl_UserName" style="font-size:0.8em;width:110px;">
                                                                                            
                                                                                            <span id="LoginControl_UserNameRequired" title="User Name is required." style="visibility:hidden;">*</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="right" style="width: 105px">
                                                                                            <span id="LoginControl_PassWrd" style="color:White;">Mot de passe</span>&nbsp;
                                                                                        </td>
                                                                                        <td align="left">
                                                                                            <input name="LoginControl$Password" type="password" id="LoginControl_Password" style="font-size:0.8em;width:110px;">
                                                                                            
                                                                                            <span id="LoginControl_PasswordRequired" title="Password is required." style="visibility:hidden;">*</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" colspan="2" style="color: red">
                                                                                            
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="right" colspan="2" style="height: 18px">
                                                                                            &nbsp;<input type="submit" name="LoginControl$LoginButton" value="Log In" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;LoginControl$LoginButton&quot;, &quot;&quot;, true, &quot;LoginControl&quot;, &quot;&quot;, false, false))" id="LoginControl_LoginButton" style="color:#284E98;background-color:White;border-color:#507CD1;border-width:1px;border-style:Solid;font-family:Verdana;font-size:0.8em;">
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody></table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody></table>
                                                                </td>
				</tr>
			</tbody></table>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            
		</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <input type="image" name="imgEnglish" id="imgEnglish" title="Anglais" src="./Authentification_files/ang.gif">
                                        <input type="image" name="imgFrench" id="imgFrench" title="Français" src="./Authentification_files/fr.gif">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div id="UpdateProgress4" style="display:none;" role="status" aria-hidden="true">
			
                                                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                                <span id="Label5" style="color:White;">Chargement...</span>&nbsp;<img id="Image3" src="./Authentification_files/loading2.gif">
                                            
		</div>
                                    </td>
                                </tr>
                            </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </tbody></table>
            </td>
		<td>
            </td>
	</tr>
	<tr>
		<td>
            </td>
		<td>
            </td>
		<td>
            </td>
	</tr>
</tbody></table>

    <table id="copyrightT" align="center" cellspacing="0" cellpadding="0" border="0">
	<tbody><tr>
		<td align="center" style="height: 24px; background-color: #6699ff;">
                Copyright 2014 Ahmed Taha belghith. Tous droits réservés
            </td>
	</tr>
</tbody></table>

    <div id="AlertDiv" style="visibility: hidden; position: absolute;
        top: 450px; width: 200px; padding: 12px; border: #000000 1px solid; background-color: red;
        text-align: left; color: White; font-size: larger">
        <div id="AlertMessage" align="left">
        </div>
        <br>
        <div id="AlertButtons">
            <input name="OKButton" type="button" id="OKButton" value="OK" onclick="ClearErrorState()">
        </div>
    </div>
    <!--script language="javascript" type="text/javascript" src="javascript/MainIndex.js"></script-->
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("LoginControl_UserNameRequired"), document.getElementById("LoginControl_PasswordRequired"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var LoginControl_UserNameRequired = document.all ? document.all["LoginControl_UserNameRequired"] : document.getElementById("LoginControl_UserNameRequired");
LoginControl_UserNameRequired.controltovalidate = "LoginControl_UserName";
LoginControl_UserNameRequired.errormessage = "User Name is required.";
LoginControl_UserNameRequired.validationGroup = "LoginControl";
LoginControl_UserNameRequired.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
LoginControl_UserNameRequired.initialvalue = "";
var LoginControl_PasswordRequired = document.all ? document.all["LoginControl_PasswordRequired"] : document.getElementById("LoginControl_PasswordRequired");
LoginControl_PasswordRequired.controltovalidate = "LoginControl_Password";
LoginControl_PasswordRequired.errormessage = "Password is required.";
LoginControl_PasswordRequired.validationGroup = "LoginControl";
LoginControl_PasswordRequired.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
LoginControl_PasswordRequired.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        WebForm_AutoFocus('LoginControl');
document.getElementById('LoginControl_UserNameRequired').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('LoginControl_UserNameRequired'));
}

document.getElementById('LoginControl_PasswordRequired').dispose = function() {
    Array.remove(Page_Validators, document.getElementById('LoginControl_PasswordRequired'));
}
Sys.Application.add_init(function() {
    $create(Sys.UI._UpdateProgress, {"associatedUpdatePanelId":"UpdatePanel1","displayAfter":500,"dynamicLayout":true}, null, null, $get("UpdateProgress4"));
});
//]]>
</script>
</form>


</body></html>