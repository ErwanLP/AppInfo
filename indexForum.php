<?php
session_start();
$titre = 'index du forum';
include('start.php');
include('BDD.php');
?>
<?php /* include("head.php"); */ ?>
<?php
include("header.php");

include("nav.php");
?>

<section>
    <aside class ="new">
        <?php include('nouveauteEvenement.php'); ?>

        <?php
        if (!isset($_SESSION['ID'])) {
            include("connexion.php");
        }
        if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) {
            ?>
            <div class="positionBouton">
                <a href="creationEvenement.php"><img src ="img/ampouleCreerEvenement.png"/></a>
            </div>
            <?php
        }
        ?>

    </aside>

    <aside class ="navg">
        <?php include ("arbre.php"); ?>
    </aside>

    <article>

        <h2><span style="color:#2040c0;"> Forum </span></h2>

        <div class="navigationForum">
            <div class="sousMenuBasculeForum">
                <span>Discussion g&eacute;n&eacute;rale</span>
                <div class="sousMenuForumAlpha">
                    <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th> Sections</th>
                            <th> Nombre de sujets/messages </th>
                            <th> Dernier message </th>
                        </tr>
                        <tr class="affichageSujet">
                            <td><a href="souhait.php">Souhait</a></td>
                            <td> Messages : 823 et Commentaires : 3465</td>
                            <td> ngjern</td>
                        </tr>
                        <tr class="affichageSujet">
                            <td><a href="taverne.php">Taverne</a></td>
                            <td> Messages : 234 et Commentaires : 1386</td>
                            <td> v,pqv</td>
                        </tr>
                        <tr class="affichageSujet">
                            <td><a href="presentation.php">Pr&eacute;sentation</a></td>
                            <td> Messages : 561 et Commentaires : 8856</td>
                            <td> v,el</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="sousMenuBasculeForum">
                <span>&Eacute;v&eacute;nement</span>
                <div class="sousMenuForumBeta">
                    <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th>Titre des sujets</th>
                            <th>Cr&eacute;ateur</th>
                            <th>Date de cr&eacute;ation</th>
                            <th>Dernier message</th>

                        </tr>
                        <tr class="affichageSujet">
                            <td><a href="commentaireForum.php">bar</a></td>
                            <td>erwan</td>
                            <td>12/12/12</td>
                            <td>j'aime le rugby</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="sousMenuBasculeForum">
                <span>Organisateur</span>
                <div class="sousMenuForumBeta">
                    <table class="affichageTableau">
                        <tr class="barreDeTitre">
                            <th>Titre des sujets</th>
                            <th>Cr&eacute;ateur</th>
                            <th>Date de cr&eacute;ation</th>
                            <th>Dernier message</th>

                        </tr>
                        <tr class="affichageSujet">
                            <td><a href="commentaireForum.php">bar</a></td>
                            <td>Bolzastreet</td>
                            <td>12/12/12</td>
                            <td>la vie est un jeu</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="sousMenuBasculeForum">
                <span style="border:3px solid black;background-color:#666;">Aide et Support</span>
                <div class="sousMenuForumBeta">

                </div>
            </div>
        </div>
    </article>
</section>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready( function () {
        // On cache les sous-menus :
        $(".navigationForum div.sousMenuForumBeta").hide();
        // On sélectionne tous les items de liste portant la classe "sousMenuBascule"
        // et on remplace l'élément span qu'ils contiennent par un lien :
        $(".navigationForum div.sousMenuBasculeForum span").each( function () {
            // On stocke le contenu du span :
            var TexteSpan = $(this).text();
            $(this).replaceWith('<a href="" title="Afficher le sous-menu">' + TexteSpan + '</a>') ;
        } ) ;

        // On modifie l'évènement "click" sur les liens dans les items de liste
        // qui portent la classe "toggleSubMenu" :
        $(".navigationForum div.sousMenuBasculeForum > a").click( function () {
            // Si le sous-menu était déjà ouvert, on le referme :
            if ($(this).next("div.sousMenuForumBeta:visible").length != 0) {
                $(this).next("div.sousMenuForumBeta").slideUp("normal");
            }
            // Si le sous-menu est caché, on ferme les autres et on l'affiche :
            else {
                $(".navigationForum div.sousMenuForumBeta").slideUp("normal");
                $(this).next("div.sousMenuForumBeta").slideDown("normal");
            }
            // On empêche le navigateur de suivre le lien :
            return false;
        });
    } ) ;
</script>
<?php include("footer.php");
?>

