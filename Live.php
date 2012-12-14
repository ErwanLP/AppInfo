<!DOCTYPE html>
<html>
    <head>
        <title>Live</title>
        <link rel="stylesheet" href="test2.css">
    </head>
    <body>
        <div class="sidebar-left-floatleft">
            <h1>Configurer</h1>
            <ul id="sidebar-accordion" class="menu-sidebar-left phylac-top-left box-gradient">
                <li><a class="menu-accordion" href="Infoparticipant.php" title="Mon compte">Mon compte</a></li>                         
                <li><a class="menu-accordion" href="parametreprofil.php" title="Mon profil">Mon profil</a></li>
                <li><a class="menu-accordion" href="Mes_amis.php" title="Mes amis">Mes amis</a></li>
                <li><a class="menu-accordion" href="Mesmessages.html" title="Ma messagerie">Ma messagerie</a></li>
                <li><a class="menu-accordion" href="Mesalertes.html" title="Alertes">Alertes</a></li>
                <li  class="active rollin"><a class="" href="Live.php" title="Live">Live</a>
                    <ul>
                        <li class="active"><a href="Live.html" title="�v�nements">�v�nements</a></li>
                        <li><a href="Mesreseaux.html" title="Mes r�seaux">Mes r�seaux</a></li>
                    </ul>
                </li>  
            </ul>
        </div>


        <div class="floatright-main">
            <h2>�v�nements</h2>
        </div>

        <form  class="bloc_live">
            <fieldset class="rollin6">


                <legend class="h3">�v�nements profil</legend>

                <div>
                    <span class="ajout_photo">Ajout/modification d'une photo</span>
                    <span class="radio-checkbox_ajout">
                        <input type="checkbox" id="profil_evenement_photo" name="profil_evenement_photo" checked="checked"/>

                    </span>
                </div>
                </br>

                <div>
                    <span class="ajout_video_floatleft">Ajout/modification d'une vid�o</span>
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
                    <span class="ajout_commentaire">Ajout d'un commentaire sur une vid�o</span>
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
                    <span class=radio-checkbox_ajout">
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
        </form>

        <script>
            //var modification_5

            function modification_5() {
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