<!DOCTYPE html>
<?php include("profil.php"); ?>
<html>
  <head>
    <title>Live</title>
    <link rel="stylesheet" href="css.css">
  </head>
<body>
<header></header>


<div class="sidebar-left-floatleft">
<h1>Configurer</h1>
    <ul id="sidebar-accordion" class="menu-sidebar-left phylac-top-left box-gradient">
                    <li><a class="menu-accordion" href="Mesinfosperso.html" title="Mon compte">Mon compte</a></li>                         
                            <li><a class="menu-accordion" href="parametreprofil.html" title="Mon profil">Mon profil</a></li>
                            <li><a class="menu-accordion" href="Mes_amis.html" title="Mes amis">Mes amis</a></li>
                            <li><a class="menu-accordion" href="Mesmessages.html" title="Ma messagerie">Ma messagerie</a></li>
                            <li><a class="menu-accordion" href="Mesalertes.html" title="Alertes">Alertes</a></li>
                            <li  class="active rollin"><a class="" href="Live.html" title="Live">Live</a>
                               <ul>
                                <li><a href="Live.html" title="�v�nements">�v�nements</a></li>
                                <li class="active"><a href="Mesreseaux.html" title="Mes r�seaux">Mes réseaux</a></li>
                                </ul>
                                </li>  
                </ul>
</div>

<div class="floatright-main">
<h2>Mes R�seaux</h2>
</div>
<fieldset class="rollin5">
<legend class="h2"><span>Mes Liens</span></legend>
 <span class="reseau radio-checkbox">
                <input value="1" type="checkbox" id="reseau" name="reseau" class="checkbox" checked="checked"/>
                <label for="recommandation">Je souhaite afficher mes reseaux sociaux</label><br />
            </span>

     
<div class="reseau">
                <img class="reseau" src="img/facebook.png" />
<label class="reseau" for="Facebook"><span class="required">Facebook:</span></label>
   
  <input type="text" id="Facebook" name="Facebook" class="text" value="http://                                    " />
</div>
</br>

<div class="reseau">
               <img class="reseau" src="img/myspace.png" /> 
               <label class="reseau" for="Myspace"><span class="required">Myspace:</span></label>
<input type="text" id="Myspace" name="Myspace" class="text" value="http://                                        " />
</div>
</br>

<div class="reseau">
                <img class="reseau" src="img/Twitter.png" />
                <label class="reseau" for="Twitter"><span class="required">Twitter:</span></label>
 
<input type="text" id="Twitte" name="Twitte" class="text" value="http://                                           " />
</div>
</div>
</br>


<div class="reseau">
                         <input type="button" onClick="modification_2()" value="Envoyer">
                         <input type="reset" value="Effacer">
                         </div>

    
</fieldset>

<script>
//var modification_2

function modification_2() {
 if (confirm('Voulez vous enregistrer vos modifications, cliquez sur "OK" si c\'est le cas.')) {
    alert('Les modifications ont �t� enregistr�s.');
	myForm = document.getElementById("personalData");
        myForm .submit();

}
else {
    alert("Aucune modification a �t� enregistr�.");
}
}

</script>



</body>
</html>
     

