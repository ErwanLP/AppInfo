<!DOCTYPE html>
<?php include("profil.php"); ?>
<html>
    <head>
        <title>Live</title>
        <link rel="stylesheet" href="parametre.css">
    </head>
    <body>
        <div class="menuParametres">
            <h1>Configurer</h1>
            <ul id="menuParametre">
                <li><a class="menuParametre" href="Infoparticipant.php" title="Mon compte" onclick="window.open(this.href); return false;"><img src="img/boutonMonCompteArr.png" /></a></li>                         
                <li><a class="menuParametre" href="parametreprofil.php" title="Mon profil" onclick="window.open(this.href); return false;"><img src="img/boutonMonProfilArr.png" /></a></li>
                <li><a class="menuParametre" href="Mes_amis.php" title="Mes amis" onclick="window.open(this.href); return false;"><img src="img/boutonMesAmisArr.png" /></a></li>
              
                <li><a class="" href="Live.php" title="Live" onclick="window.open(this.href); return false;"><img src="img/boutonLivesDroit.png" /></a>
                    <ul>
                        <li ><a href="Live.php" title="Evénements" onclick="window.open(this.href); return false;"><img src="img/boutonEvenementReseaux.png" /></a></li>
                        
                    </ul>
                </li>  
            </ul>
        </div>


        <div class="titreParametre ">
            <h2>Evénements/Mes réseaux</h2>
        </div>

        

        <form  class="bloc_live">
            <fieldset class="rollin6">


                <legend class="h3">Evénements profil</legend>

                <div>
                    <span class="ajout_photo">Ajout/modification d'une photo</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="profil_evenement_photo" name="profil_evenement_photo" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="ajout_video_floatleft">Ajout/modification d'une vidéo</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="profil_evenement_video" name="profil_evenement_video" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="ajout_commentaire">Ajout d'un commentaire profil</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="profil_evenement_commentaire" name="profil_evenement_commentaire" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="ajout_commentaire">Ajout d'un commentaire sur une photo</span>
                    <span class="radio-checkbox_ajout_commentaire ">
                        <input type="checkbox" id="profil_evenement_commentaire_photo" name="profil_evenement_commentaire_photo" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="ajout_commentaire">Ajout d'un commentaire sur une vidéo</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="profil_evenement_commentaire_video" name="profil_evenement_commentaire_video" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="info_modification">Ajout/modification d'informations</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="profil_evenement_info_modification" name="profil_evenement_info_modification" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="ajout_article">Ajout/modification d'un article</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="article-evenement" name="article-evenement" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="Abonner">S'abonner</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="evenement_Abonner" name="evenement_Abonner" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="Note">Note sur un article</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="note_evenement" name="note_evenement" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <input type="button" onClick="modification_5()" value="Envoyer">
                    <input type="reset" value="Effacer">
                </div>
                </fieldset>
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
            <br/>

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

            </br>


            <div class="reseau">
                <input type="button" onClick="modification_2()" value="Envoyer">
                <input type="reset" value="Effacer">
            </div>

            </fieldset>
        </form>

        <script>
            //var modification_5

            function modification_5() {
                if (confirm('Voulez vous enregistrer vos modifications, cliquez sur "OK" si c\'est le cas.')) {
                    alert('Les modifications ont été enregistrés.');
                    myForm = document.getElementById("personalData");
                    myForm .submit();

                }
                else {
                    alert("Aucune modification a été enregistré.");
                }
            }



    
            //var modification_2

            function modification_2() {
                if (confirm('Voulez vous enregistrer vos modifications, cliquez sur "OK" si c\'est le cas.')) {
                    alert('Les modifications ont eté enregistrés.');
                    myForm = document.getElementById("personalData");
                    myForm .submit();

                }
                else {
                    alert("Aucune modification a été enregistré.");
                }
            }

        </script>



    </body>
</html>
