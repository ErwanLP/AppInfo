<?php
session_start();
include("start.php");

include("header.php");

include("nav.php");

$bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', '');
?>


<section>
    <aside class ="navg">
        <?php include ("arbre.php"); ?>
    </aside>
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
    <?php if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "participant" AND $_SESSION['ID'] != null) { ?>
        <div id="description">
            <fieldset>
                <img src="img/avatar_mini.jpg" alt="Avatar" title="Avatar" style="border: solid black 2px"/>                  
                <?php
                $result = $bdd->query('SELECT * FROM participant WHERE ID = ' . $_SESSION['ID'] . ' ');
                while ($data = $result->fetch()) {
                    ?>
                    <p class="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
                    ?></p>
                    <p class="lieu4"><?php
                echo $data['pays'] . ", " . $data['villes'];
            }$result->closeCursor();
                ?></p>
            </fieldset>

        </div>
        <div class="menu">
            <ul id="simple-menu">                
                <li><input type="button" onclick="self.location.href='profil.php?target=info#description';" value="Mes Infos"/></li>                
                <li><input type="button" onclick="self.location.href='profil.php?target=amis#description';" value="Mes Amis"/></li>                
                <li><input type="button" onclick="self.location.href='profil.php?target=abo#description';" value="Mes Abonnements"/></li>            
                <li><input type="button" onclick="self.location.href='profil.php?target=event#description';" value="Mes &Eacute;v&eacute;nements"/></li>
                <li><input type="button" onclick="self.location.href='profil.php?target=messagerie#description';" value="Ma Messagerie"/></li>
                <li><input type="button" onclick="self.location.href='profil.php?target=pp#description';" value="Param&egrave;tres"/></li>

            </ul>
        </div>

        <?php
        if (isset($_GET['target'])) {
            $target = $_GET['target'];
            if ($target == "info") {
                $result = $bdd->query('SELECT * FROM participant WHERE ID = ' . $_SESSION['ID'] . ' ');
                while ($data = $result->fetch()) {
                    ?>
                    <div id="coordonnee">
                        <p id="infoPerso">
                            <!--<span class="titre">Informations Personnelles</span><br/><br/><br/>-->
                            <strong>Pseudo :</strong><?php echo " " . $data['pseudo']; ?><br/><br/>
                            <strong>Prénom :</strong><?php echo " " . $data['prenom']; ?><br/><br/>
                            <strong>Nom :</strong><?php echo " " . $data['nom']; ?><br/><br/>
                            <strong>Sexe :</strong><?php
                if ($data['sexe'] == 1) {
                    echo " Homme";
                } else {
                    echo " Femme";
                }
                    ?><br/><br/>                    
                            <strong>Date de naissance :</strong><?php echo " " . $data['dateDeNaissance']; ?><br/><br/>
                            <strong>Adresse :</strong><?php echo " " . $data['adresse'] . " - " . $data['codePostal'] . " - " . $data['villes']; ?><br/><br/>
                            <strong>E-mail :</strong><?php echo " " . $data['mail']; ?><br/><br/>
                            <strong>T&eacute;l&eacute;phone fixe :</strong><?php echo " " . $data['telephoneFixe']; ?><br/><br/>
                            <strong>T&eacute;l&eacute;phone mobile :</strong><?php echo " " . $data['telephoneMobile']; ?><br/><br/>
                            <strong>Site Web :</strong><?php echo " " . $data['siteWeb']; ?>
                        </p>

                        <p id="preference">
                            <strong>Profession :</strong><?php echo " " . $data['profession']; ?><br/><br/>
                            <strong>Loisirs :</strong><?php echo " " . $data['loisirs']; ?><br/><br/>
                            <strong>Description :</strong><br/><br/>
                            <?php echo " " . $data['description']; ?>

                        </p>
                    </div>
                    <?php
                }$result->closeCursor();
            }
            if ($target == "amis") {
                ?>
                <div id="amis" >
                    <!-- php -->
                    <fieldset>
                        <a href="img/jerry.jpg"><img src="img/jerry_mini.jpg" alt="Jerry" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                        <p class="nom1">Jerry BOLZASTREET</p>
                        <p class="lieu1">France, Paris</p>
                    </fieldset>
                    <fieldset>
                        <a href="img/momo.jpg"><img src="img/momo_mini.jpg" alt="Momo" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                        <p id="nom2">Mohammed LACHKHAB</p>
                        <p id="lieu2">France, Versailles</p>
                    </fieldset>
                    <fieldset>
                        <a href="img/flo.jpg"><img src="img/flo_mini.jpg" alt="Flo" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                        <p id="nom3">Florian GUITOGER</p>
                        <p id="lieu3">France, Gonesse</p>
                    </fieldset>
                </div>

                <?php
            }
            if ($target == "abo") {
                ?>
                <div id="abonnement">
                    <?php
                    $result = $bdd->query('SELECT * FROM organisateur,abonnement WHERE organisateur.ID = abonnement.ID_organisateur AND abonnement.ID_participant = ' . $_SESSION['ID'] . '');
                    while ($data = $result->fetch()) {
                        ?>
                        <fieldset>
                            <a href="img/jerry.jpg"><img src="img/jerry_mini.jpg" alt="Jerry" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                            <p class="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
                        ?></p>
                            <p class="lieu4"><?php echo $data['nomSociete'] . ", " . $data['pays'];
                        ?></p>
                            <?php
                            $action = $_GET['action'];
                            if ($action == "delete") {
                                $bdd->query('DELETE FROM organisateur, abonnement WHERE organisateur.ID = abonnement.ID_organisateur AND abonnement.ID_participant = ' . $_SESSION['ID'] . '');
                            }
                            ?>
                            <a href="profil.php?target=abo&action=delete"><img src="img/croixsupp.png" alt="Supprimer" id="supprimer"/></a>
                        </fieldset>
                        <?php
                    }$result->closeCursor();
                    ?>
                </div>


                <?
            }
            if ($target == "event") {
                ?>
                <div id="mesEvents" >

                </div>



                <?php
            }
            if ($target == "messagerie") {
                //messagerie
                ?>
                <div id="messagerieTotal">


                    <h1 class="titreMessagerie">MESSAGERIE:</h1>

                    <?php
                    $idProfil = $_SESSION['ID'];
                    $typeProfil = $_SESSION['SWITCH'];
                    $sql = 'SELECT pseudo FROM ' . $typeProfil . ' WHERE ID =  "' . $idProfil . '"';
                    $result = $bdd->query($sql);
                    // echo "<br/>" . $sql;
                    ?><div class="messagerie"> <?php
            while ($data = $result->fetch()) {
                $pseudoProfil = $data['pseudo'];
            }$result->closeCursor();



            if (isset($_GET['pseudoAutre'])) {
                $pseudoAutre = $_GET['pseudoAutre'];
                $sql = '(SELECT * FROM messagerie WHERE pseudo_des = "' . $pseudoProfil . '" AND pseudo_exp ="' . $pseudoAutre . '") UNION (SELECT * FROM messagerie WHERE pseudo_exp = "' . $pseudoProfil . '" AND pseudo_des ="' . $pseudoAutre . '") ORDER BY ID';
                $result = $bdd->query($sql);

                // echo "<br/>" . $sql;
            } else {
                $sql = 'SELECT  * FROM  messagerie WHERE (pseudo_des =  "' . $pseudoProfil . '" OR pseudo_exp ="' . $pseudoProfil . '") ORDER BY ID DESC';
                $result = $bdd->query($sql);
                //echo "<br/>" . $sql;
            }


            while ($data = $result->fetch()) {
                $pseudodesCour = $data['pseudo_des'];
                if ($pseudodesCour == $pseudoProfil) {
                    $destinataire = "vous";
                } else {
                    $pseudoAutre = $pseudodesCour;
                    $destinataire = $pseudoAutre;
                }

                $pseudoexpCour = $data['pseudo_exp'];
                if ($pseudoexpCour == $pseudoProfil) {
                    $expediteur = "vous";
                } else {
                    $pseudoAutre = $pseudoexpCour;
                    $expediteur = $pseudoAutre;
                }
                        ?> 


                            <?php
                            $date = $data['date'];
                            $date = substr($date, 0, 10)
                            ?>
                            <div class="divmessageCour">
                                <h4>De <?php echo $expediteur ?> à <?php echo $destinataire ?> le <?php echo $date ?> :</h4>

                                <?php
                                $message = $data['message'];
                                echo $message;
                                if (!isset($_GET['pseudoAutre'])) {
                                    ?> <br/><br/><a href="profil.php?target=messagerie&pseudoAutre=<?php echo $pseudoAutre ?>#description">Voir la conversation enti&egrave;re</a> 

                                <?php } ?>    
                            </div> 

                            <?php
                        } $result->closeCursor();
                        ?> </div><?php
            //////////////////

            if (isset($_GET['pseudoAutre'])) {
                            ?> <br/><br/>

                        <form action="traitMessagerie.php" method="post">
                            Nouveau message :<input type="text" name="message" class="taperMessage" required>
                            <input type="hidden" name="pseudoAutre" value="<?php echo $pseudoAutre ?>">
                            <input type="submit" value="Submit">
                        </form>
                    <?php } else { ?>
                        <br/>
                        <form action="traitMessagerie.php" method="post">
                            Destinataire : 
                            <input type="text" name="pseudoAutre" value="" class="taperPseudo" required><br/><br/>
                            Nouveau message :
                            <input type="text" name="message" class="taperMessage" required>

                            <input type="submit" value="Submit">
                        </form>
                    <?php }
                    ?>

                </div>



                <?php
            }
            if ($target == "pp") {
                ?>
                <div class="titreParametre">          
                    <form  method="post" action="traitementProfil.php" id="gestioncompte"><br/><br/><br/>

                        <fieldset id="fieldset1" >

                            <input type="hidden" id="Email_" name="Email_" value="0" />

                            <legend> <div class="title">Informations personnelles</div></legend>
                            <div> 		            
                                <br/>




                                <?php
                                $ID = $_SESSION['ID'];

                                $result = $bdd->query('SELECT * FROM  participant WHERE participant.id = "' . $ID . '"');

                                while ($data = $result->fetch()) {
                                    ?>


                                    <!-- Sexe -->
                                    <div class="info"><br/>
                                        <!--<span class="infoPerso"><span class="required">Tu es<sup>*</sup> : </span></span>-->
                                        <span class="radio-checkbox">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            Vous êtes<sup>*</sup> : &nbsp;&nbsp;<input type="radio" id="femme" name="genre" class="radio" value="0" /> <label for="female" class="radio">Une femme</label>&nbsp;&nbsp;&nbsp;
                                        </span>
                                        <span class="radio-checkbox">
                                            <input type="radio" id="homme" name="genre" class="radio" value="1" checked="checked"/> <label for="male" class="radio">Un homme</label>
                                        </span>


                                    </div>
                                    <!-- Pseudo -->
                                    <div class=info><br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!--Pseudo<sup>*</sup><label for=pseudo class="infoPerso">Pseudo<sup>*</sup> :</label>-->
                                        Pseudo<sup>*</sup> :  &nbsp; <input type="text" id="pseudo" name="pseudo" class="text" value="<?php echo $data['pseudo']; ?>"/>
                                    </div>

                                    <!--Avatar-->
                                    <div class=info><br/>
                                        <!--<label for=avatar>Ajouter une photo(Jpeg,png,jpg)<sup>*</sup>:</label>-->
                                        Ajouter une photo(jpeg,png)<sup>*</sup> :  &nbsp; <input type='file' name='avatar'/>
                                    </div>

                                    <!-- Prenom -->
                                    <div class="info"><br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!--<label for="prenom" class="infoPerso">Prenom<sup>*</sup> :</label>-->
                                        Pr&eacute;nom<sup>*</sup> :  &nbsp; <input type="text" id="prenom" name="prenom" class="text" value="<?php echo $data['prenom']; ?>" />


                                    </div>

                                    <!-- Nom -->
                                    <div class="info"><br/>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!--<label for="nom" class="infoPerso">Nom<sup>*</sup> :</label>-->
                                        Nom<sup>*</sup> :  &nbsp; <input type="text" id="nom" name="nom" class="text" value="<?php echo $data['nom']; ?>" />
                                    </div>




                                    <!-- Date de naissance -->
                                    <div class="info"><br/>
                                        <!--<label class="infoPerso" for="dateDeNaissance" data-fieldgroup="date"><span class="required">Date de naissance<sup>*</sup> :</span></label>-->
                                        Date de naissance : &nbsp; <input type="text" id="date" name="date" class="text" value="<?php echo $data['dateDeNaissance']; ?>" />




                                        <!-- Lieu de naissance -->
                                        <div class=info><br/>
                                            <!--<label class="infoPerso" for=lieuDeNaissance class="col_third_floatleft">Lieu de Naissance<sup>*</sup> :</label>-->
                                            Lieu de naissance : &nbsp; <input type="text" id="lieuDeNaissance" name="lieuDeNaissance" class="text" value="<?php echo $data['lieuNaissance']; ?>"/>
                                        </div>
                                        <!-- Email -->
                                        <div class="info"><br/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <!--<label class="infoPerso" for="email"><span class="required">Email<sup>*</sup> :</span></label>-->
                                            Email<sup>*</sup> : &nbsp; <input type="text" id="email" name="email" class="text" value="<?php echo $data['mail']; ?>" />



                                        </div>

                                        <!-- Profession -->
                                        <div class=info><br/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <!-- <label for=profession class="infoPerso">Profession :</label>-->
                                            Profession : &nbsp; <input type="text" id="profession" name="profession" class="text" value="<?php echo $data['profession']; ?>"/>
                                        </div>
                                        <!-- Adresse -->
                                        <div class="info"><br/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <!--<label for="adresse" class="infoPerso">Adresse postale<sup>*</sup> :</label>-->
                                            Adresse &nbsp; : &nbsp; <input type="text" id="adresse" name="adresse" class="text" value="<?php echo $data['adresse']; ?>" />
                                        </div>



                                        <!-- Code Postal -->
                                        <div class="info"><br/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <!--<label class="infoPerso" for="pcode"><span class="required">Code postal<sup>*</sup> :</span></label>-->
                                            Code postal &nbsp; : &nbsp; <input type="text" id="pcode" name="pcode" class="text" value="<?php echo $data['codePostal']; ?>" />

                                        </div>

                                        <!-- Villes -->
                                        <div class="info"><br/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <!--<label for="ville" class="infoPerso">Ville<sup>*</sup> :</label>-->
                                            Ville<sup>*</sup> : &nbsp; <input type="text" id="villes" name="villes" class="text" value="<?php echo $data['villes']; ?>" />
                                        </div>

                                        <!-- Pays -->
                                        <div class="info"><br/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <!--<label class="infoPerso" for="pays"><span class="required">Pays<sup>*</sup> :</span></label>-->
                                            Pays<sup>*</sup> :&nbsp;&nbsp; <select class="choix" id="pays" name="pays">
                                                <option value="AF">Afghanistan</option>
                                                <option value="ZA">Afrique du Sud</option>
                                                <option value="AL">Albanie</option>
                                                <option value="DZ">Algérie</option>
                                                <option value="DE">Allemagne</option>
                                                <option value="AD">Andorre</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctique</option>
                                                <option value="AG">Antigua-et-Barbuda</option>
                                                <option value="AN">Antilles néerlandaises</option>
                                                <option value="SA">Arabie Saoudite</option>
                                                <option value="AR">Argentine</option>
                                                <option value="AM">Arménie</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Australie</option>
                                                <option value="AT">Autriche</option>
                                                <option value="AZ">Azerbaïdjan</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahreïn</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbade (la)</option>
                                                <option value="BE">Belgique</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Bénin</option>
                                                <option value="BM">Bermudes</option>
                                                <option value="BT">Bhoutan</option>
                                                <option value="BY">Biélorussie</option>
                                                <option value="BO">Bolivie (l&#039;État plurinational de)</option>
                                                <option value="BA">Bosnie et Herzégovine</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BR">Brésil</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgarie</option>
                                                <option value="BF">Burkina-Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="KH">Cambodge</option>
                                                <option value="CM">Cameroun</option>
                                                <option value="CA">Canada</option>
                                                <option value="CV">Cap-Vert</option>
                                                <option value="CL">Chili</option>
                                                <option value="CN">Chine</option>
                                                <option value="CY">Chypre</option>
                                                <option value="CO">Colombie</option>
                                                <option value="KM">Comores</option>
                                                <option value="CD">République du Congo</option>
                                                <option value="KR">Corée</option>
                                                <option value="KP">Corée du Nord</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte D&#039;Ivoire</option>
                                                <option value="HR">Croatie</option>
                                                <option value="CU">Cuba</option>
                                                <option value="DK">Danemark</option>
                                                <option value="UM">Dépendances américaines du Pacifique</option>
                                                <option value="DJ">Djibouti</option>
                                                <option value="DM">Dominique (la)</option>
                                                <option value="EG">Égypte</option>
                                                <option value="AE">Émirats Arabes Unis</option>
                                                <option value="EC">Équateur</option>
                                                <option value="ER">Érythrée</option>
                                                <option value="ES">Espagne</option>
                                                <option value="EE">Estonie</option>
                                                <option value="VA">État de la cité du Vatican</option>
                                                <option value="US">États-Unis</option>
                                                <option value="ET">Éthiopie</option>
                                                <option value="RU">Fédération de Russie</option>
                                                <option value="FJ">Fidji</option>
                                                <option value="FI">Finlande</option>
                                                <option value="FR" selected="selected">France</option>
                                                <option value="GA">Gabon</option>
                                                <option value="GM">Gambie</option>
                                                <option value="GE">Géorgie</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Grèce</option>
                                                <option value="GD">Grenade</option>
                                                <option value="GL">Groenland</option>
                                                <option value="GP">Guadeloupe (France DOM-TOM)</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernesey</option>
                                                <option value="GN">Guinée</option>
                                                <option value="GW">Guinée-Bissau</option>
                                                <option value="GQ">Guinée Équatoriale</option>
                                                <option value="GY">Guyane</option>
                                                <option value="GF">Guyane française</option>
                                                <option value="HT">Haïti</option>
                                                <option value="HN">Honduras (le)</option>
                                                <option value="HK">Hong Kong</option>
                                                <option value="HU">Hongrie</option>
                                                <option value="CX">Île Christmas</option>
                                                <option value="AC">Île de l&#039;Ascension</option>                              
                                                <option value="MU">Île Maurice</option>        
                                                <option value="KY">Îles Caïmans</option>
                                                <option value="CK">Îles Cook</option>
                                                <option value="FO">Îles Féroé</option>
                                                <option value="FK">Îles Malouines</option>
                                                <option value="MH">Îles Marshall</option>
                                                <option value="SB">Îles Salomon</option>
                                                <option value="VI">Îles Vierges américaines</option>
                                                <option value="VG">Îles Vierges britanniques</option>
                                                <option value="IN">Inde</option>
                                                <option value="ID">Indonésie</option>
                                                <option value="IQ">Irak</option>
                                                <option value="IR">Iran</option>
                                                <option value="IE">Irlande</option>
                                                <option value="IS">Islande</option>
                                                <option value="IL">Israël</option>
                                                <option value="IT">Italie</option>
                                                <option value="LY">Lybie</option>
                                                <option value="JM">Jamaïque</option>
                                                <option value="JP">Japon</option>
                                                <option value="JO">Jordanie</option>
                                                <option value="KZ">Kazakhstan</option>
                                                <option value="KE">Kenya</option>
                                                <option value="KG">Kirghizistan</option>                                 
                                                <option value="KW">Koweït</option>                                 
                                                <option value="LV">Lettonie</option>
                                                <option value="LB">Liban</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lituanie</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MK">Macédoine</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MY">Malaisie</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malte</option>
                                                <option value="MP">Mariannes du Nord (Îles du Commonwealth)</option>
                                                <option value="MA">Maroc</option>
                                                <option value="MQ">Martinique (France DOM-TOM)</option>
                                                <option value="MR">Mauritanie</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexique</option>
                                                <option value="FM">Micronésie</option>
                                                <option value="MD">Moldova</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolie</option>
                                                <option value="ME">Monténégro</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="NA">Namibie</option>
                                                <option value="NP">Népal</option>
                                                <option value="NI">Nicaragua</option>
                                                <option value="NE">Niger</option>
                                                <option value="NG">Nigéria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NO">Norvège</option>
                                                <option value="NC">Nouvelle Calédonie</option>
                                                <option value="NZ">Nouvelle Zélande</option>
                                                <option value="OM">Oman</option>
                                                <option value="UG">Ouganda</option>
                                                <option value="UZ">Ouzbékistän</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestine</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papouasie,Nouvelle-Guinée</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="NL">Pays-Bas</option>
                                                <option value="PE">Pérou</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PN">Pitcairn (Îles)</option>
                                                <option value="PL">Pologne</option>
                                                <option value="PF">Polynésie française (DOM-TOM)</option>
                                                <option value="PR">Porto Rico</option>
                                                <option value="PT">Portugal</option>
                                                <option value="QA">Qatar</option>
                                                <option value="SY">République arabe syrienne</option>
                                                <option value="CF">République Centrafricaine</option>
                                                <option value="LA">République démocratique populaire du Laos</option>
                                                <option value="DO">République Dominicaine</option>
                                                <option value="CZ">République tchèque</option>
                                                <option value="RE">Réunion (Île de la)</option>
                                                <option value="RO">Roumanie</option>
                                                <option value="UK">Royaume-Uni</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="EH">Sahara occidental</option>
                                                <option value="BL">Saint-Barthélémy</option>
                                                <option value="SH">Sainte Hélène</option>
                                                <option value="LC">Saint-Lucie</option>
                                                <option value="SM">Saint-Marin</option>
                                                <option value="MF">Saint-Martin</option>
                                                <option value="PM">Saint-Pierre-et-Miquelon (France DOM-TOM)</option>
                                                <option value="VC">Saint-Vincent et les Grenadines</option>
                                                <option value="SV">Salvador</option>
                                                <option value="WS">Samoa</option>
                                                <option value="AS">Samoa américaines</option>
                                                <option value="ST">Sâo Tomé et Prince</option>
                                                <option value="SN">Sénégal</option>
                                                <option value="RS">Serbie</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapour</option>
                                                <option value="SK">Slovaquie</option>
                                                <option value="SI">Slovénie</option>
                                                <option value="SO">Somalie</option>
                                                <option value="SD">Soudan</option>
                                                <option value="SS">Soudan du Sud</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SE">Suède</option>
                                                <option value="CH">Suisse</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzanie</option>
                                                <option value="TD">Tchad</option>
                                                <option value="TF">Terres Australes françaises (DOM-TOM)</option>
                                                <option value="IO">Territoires Britanniques de l&#039;océan Indien</option>
                                                <option value="TH">Thaïlande</option>
                                                <option value="TG">Togo</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinité-et-Tobago</option>
                                                <option value="TN">Tunisie</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="WF">Wallis et Futuna</option>
                                                <option value="YE">Yémen</option>
                                                <option value="ZM">Zambie</option>
                                                <option value="ZW">Zimbabwe</option>
                                                <option value="--">Autre pays</option>
                                            </select>

                                        </div>

                                        <!-- Téléphone Fixe -->
                                        <div class="info"><br/>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <!--<label for="telephoneFixe" class="infoPerso">Téléphone fixe :</label>-->
                                            T&eacute;l&eacute;phone fixe : &nbsp; <input type="text" id="telephoneFixe" name="telephoneFixe" class="text" value="<?php echo $data['telephoneFixe']; ?>"/>
                                        </div>

                                        <!-- Téléphone Mobile -->
                                        <div class="info"><br/>
                                            &nbsp;
                                             <!--<label for="NumeroPortable" class="infoPerso">Mobile<sup>*</sup> :</label>-->
                                            T&eacute;l&eacute;phone Mobile<sup>*</sup> : &nbsp; <input type="text" id="numeroPortable" name="numeroPortable" class="text" value="<?php echo $data['telephoneMobile']; ?>"/>



                                            <!-- Site Web -->

                                            <div class="info"><br/>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <!--<label for="siteWeb" class="infoPerso">Site Web :</label>-->
                                                Site Web : &nbsp; <input type="text" name="siteWeb" id="siteWeb" class="text" value="<?php echo $data['siteWeb']; ?>"/>
                                            </div>

                                            <!--loisirs-->
                                            <div class="info"><br/>
                                                <!--<label class="infoPerso" for="loisirs"></label>-->
                                                <p>Loisirs : &nbsp; </p><textarea name="loisirs" style="width: 700px;height: 150px"><?php echo $data['loisirs']; ?>
                                                </textarea>
                                            </div>

                                            <!--Description-->
                                            <div class="info"><br/>
                                                <!--<label class="infoPerso" for="description"></label>-->
                                                <p>Description : &nbsp; </p><textarea name="description" style="width: 700px;height: 150px"><?php echo $data['description']; ?></textarea>
                                            </div>

                                            <div class="info"><br/>
                                                <input type="submit" value="Envoyer" style="width:80px;height: 70px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="reset" value="Effacer" style="width:80px;height: 70px">
                                            </div>
                                            </fieldset>
                                            </form>
                                        </div>



                                        <?php
                                    }
                                }
                            }
                        }
                        ?>

                        <?php if (isset($_SESSION['SWITCH']) AND $_SESSION['SWITCH'] == "organisateur" AND $_SESSION['ID'] != null) { ?>
                            <div id="description">
                                <fieldset>
                                    <?php
                                    
                                    $result = $bdd->query('SELECT * FROM organisateur WHERE ID = "' . $_SESSION['ID'] . '"');
                                    while ($data = $result->fetch()) {
                                        $logo = $data['logo'];
                                        ?>
                                    <img src="<?php if ($logo == NULL){ $logo = img/dye_logo.jpg; }else { $logo = $data['logo'];} echo $logo ?>" width="200" height="200" alt="Logo" style="border: solid black 2px"/>                  
                                    
                                        
                                        <p id="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
                                        ?></p>
                                        <p id="lieu"><?php
                                    echo $data['nomSociete'] . ", " . $data['pays'];
                                }$result->closeCursor();
                                    ?></p>
                                </fieldset>

                            </div>

                            <div class="menu">
                                <ul id="simple-menu">
                                    <li><input type="button" onclick="self.location.href='profil.php?target=info#description';" value="Mes Infos"/></li>        
                                    <li><input type="button" onclick="self.location.href='profil.php?target=event#description';" value="Mes &Eacute;v&eacute;nements"/></li>
                                    <li><input type="button" onclick="self.location.href='profil.php?target=messagerie#description';" value="Ma Messagerie"/></li>
                                    <li><input type="button" onclick="self.location.href='profil.php?target=po#description';" value="Param&egrave;tres"/></li>
                                </ul>
                            </div>

                            <?php
                            if (isset($_GET['target'])) {
                                $target = $_GET['target'];
                                if ($target == "info") {
                                    $result = $bdd->query('SELECT * FROM organisateur WHERE ID = ' . $_SESSION['ID'] . ' ');
                                    while ($data = $result->fetch()) {
                                        ?>

                                        <div id="coordonnee">
                                            <p id="infoPerso">
                                                <strong>Pseudo :</strong><?php echo " " . $data['pseudo']; ?><br/><br/>
                                                <strong>Prénom :</strong><?php echo " " . $data['prenom']; ?><br/><br/>
                                                <strong>Nom :</strong><?php echo " " . $data['nom']; ?><br/><br/> 
                                                <strong>E-mail :</strong><?php echo " " . $data['mail']; ?><br/><br/>                        
                                                <strong>T&eacute;l&eacute;phone mobile :</strong><?php echo " " . $data['telephoneMobile']; ?><br/><br/>

                                            </p>
                                            <p id="preference">
                                                <strong>Soci&eacute;t&eacute; :</strong><?php echo " " . $data['nomSociete']; ?><br/><br/>
                                                <strong>Adresse de la soci&eacute;t&eacute; :</strong><?php echo " " . $data['adresseSociete'] . " - " . $data['codePostalSociete'] . " - " . $data['ville']; ?><br/><br/>
                                                <strong>Site Web :</strong><?php echo " " . $data['siteWeb']; ?><br/><br/>  
                                                <strong>T&eacute;l&eacute;phone soci&eacute;t&eacute; :</strong><?php echo " " . $data['telephoneSociete']; ?><br/><br/>                        
                                                <strong>Activit&eacute; :</strong><?php echo " " . $data['activite']; ?><br/><br/>
                                                <strong>Profession :</strong><?php echo " " . $data['profession']; ?><br/><br/>

                                            </p>
                                        </div>      
                                        <?php
                                    } $result->closeCursor();
                                }
                                if ($target == "event") {
                                    ?>
                                    <div id="mesEvents">


                                    </div>





                                    <?php
                                }
                                if ($target == "messagerie") {
                                    ?>
                                    <div id="messagerieTotal">


                                        <h1 class="titreMessagerie">MESSAGERIE:</h1>

                                        <?php
                                        $idProfil = $_SESSION['ID'];
                                        $typeProfil = $_SESSION['SWITCH'];
                                        $sql = 'SELECT pseudo FROM ' . $typeProfil . ' WHERE ID =  "' . $idProfil . '"';
                                        $result = $bdd->query($sql);
                                        // echo "<br/>" . $sql;
                                        ?><div class="messagerie"> <?php
                            while ($data = $result->fetch()) {
                                $pseudoProfil = $data['pseudo'];
                            }$result->closeCursor();



                            if (isset($_GET['pseudoAutre'])) {
                                $pseudoAutre = $_GET['pseudoAutre'];
                                $sql = '(SELECT * FROM messagerie WHERE pseudo_des = "' . $pseudoProfil . '" AND pseudo_exp ="' . $pseudoAutre . '") UNION (SELECT * FROM messagerie WHERE pseudo_exp = "' . $pseudoProfil . '" AND pseudo_des ="' . $pseudoAutre . '") ORDER BY ID';
                                $result = $bdd->query($sql);

                                // echo "<br/>" . $sql;
                            } else {
                                $sql = 'SELECT  * FROM  messagerie WHERE (pseudo_des =  "' . $pseudoProfil . '" OR pseudo_exp ="' . $pseudoProfil . '") ORDER BY ID DESC';
                                $result = $bdd->query($sql);
                                //echo "<br/>" . $sql;
                            }


                            while ($data = $result->fetch()) {
                                $pseudodesCour = $data['pseudo_des'];
                                if ($pseudodesCour == $pseudoProfil) {
                                    $destinataire = "vous";
                                } else {
                                    $pseudoAutre = $pseudodesCour;
                                    $destinataire = $pseudoAutre;
                                }

                                $pseudoexpCour = $data['pseudo_exp'];
                                if ($pseudoexpCour == $pseudoProfil) {
                                    $expediteur = "vous";
                                } else {
                                    $pseudoAutre = $pseudoexpCour;
                                    $expediteur = $pseudoAutre;
                                }
                                            ?> 


                                                <?php
                                                $date = $data['date'];
                                                $date = substr($date, 0, 10)
                                                ?>
                                                <div class="divmessageCour">
                                                    <h4>De <?php echo $expediteur ?> à <?php echo $destinataire ?> le <?php echo $date ?> :</h4>

                                                    <?php
                                                    $message = $data['message'];
                                                    echo $message;
                                                    if (!isset($_GET['pseudoAutre'])) {
                                                        ?> <br/><br/><a href="profil.php?target=messagerie&pseudoAutre=<?php echo $pseudoAutre ?>#description">Voir la conversation enti&egrave;re</a> 

                                                    <?php } ?>    
                                                </div> 

                                                <?php
                                            } $result->closeCursor();
                                            ?> </div><?php
                                //////////////////

                                if (isset($_GET['pseudoAutre'])) {
                                                ?> <br/><br/>

                                            <form action="traitMessagerie.php" method="post">
                                                Nouveau message :<input type="text" name="message" class="taperMessage" required>
                                                <input type="hidden" name="pseudoAutre" value="<?php echo $pseudoAutre ?>">
                                                <input type="submit" value="Submit">
                                            </form>
                                        <?php } else { ?>
                                            <br/>
                                            <form action="traitMessagerie.php" method="post">
                                                Destinataire : 
                                                <input type="text" name="pseudoAutre" value="" class="taperPseudo" required><br/><br/>
                                                Nouveau message :
                                                <input type="text" name="message" class="taperMessage" required>

                                                <input type="submit" value="Submit">
                                            </form>
                                        <?php }
                                        ?>

                                    </div>




                                    <?php
                                }
                                if ($target == "po") {
                                    ?>

                                    <div class="titreParametre">          
                                        <form  method="post" action="traitementProfil.php" id="gestioncompte"><br/><br/><br/>

                                            <fieldset id="fieldset1" >

                                                <input type="hidden" id="Email_" name="Email_" value="0" />

                                                <legend> <div class="title">Informations personnelles</div></legend>
                                                		            
                                                    




                                                    <?php
                                                    $ID = $_SESSION['ID'];

                                                    $result = $bdd->query('SELECT * FROM  organisateur WHERE organisateur.id = "' . $ID . '"');

                                                    while ($data = $result->fetch()) {
                                                        ?>


                                                        <!-- Sexe -->
                                                        <div class="info"><br/>
                                                            <!--<span class="infoPerso"><span class="required">Tu es<sup>*</sup> : </span></span>-->
                                                            <span class="radio-checkbox">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                Vous êtes<sup>*</sup> : &nbsp;&nbsp;<input type="radio" id="femme" name="genre" class="radio" value="0" /> <label for="female" class="radio">Une femme</label>&nbsp;&nbsp;&nbsp;
                                                            </span>
                                                            <span class="radio-checkbox">
                                                                <input type="radio" id="homme" name="genre" class="radio" value="1" checked="checked"/> <label for="male" class="radio">Un homme</label>
                                                            </span>


                                                        </div>
                                                        <!-- Pseudo -->
                                                        <div class=info><br/>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <!--Pseudo<sup>*</sup><label for=pseudo class="infoPerso">Pseudo<sup>*</sup> :</label>-->
                                                            Pseudo<sup>*</sup> :  &nbsp; <input type="text" id="pseudo" name="pseudo" class="text" value="<?php echo $data['pseudo']; ?>"/>
                                                        </div>

                                                        <!--Logo-->
                                                        <div class=info><br/>
                                                            <!--<label for=avatar>Ajouter une photo(Jpeg,png,jpg)<sup>*</sup>:</label>-->
                                                            Modifier l'image(jpeg,png)<sup>*</sup> :  &nbsp; <input type='file' name='logo'/>
                                                        </div>

                                                        <!-- Prenom -->
                                                        <div class="info"><br/>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <!--<label for="prenom" class="infoPerso">Prenom<sup>*</sup> :</label>-->
                                                            Pr&eacute;nom<sup>*</sup> :  &nbsp; <input type="text" id="prenom" name="prenom" class="text" value="<?php echo $data['prenom']; ?>" />


                                                        </div>

                                                        <!-- Nom -->
                                                        <div class="info"><br/>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <!--<label for="nom" class="infoPerso">Nom<sup>*</sup> :</label>-->
                                                            Nom<sup>*</sup> :  &nbsp; <input type="text" id="nom" name="nom" class="text" value="<?php echo $data['nom']; ?>" />
                                                        </div>




                                                        <!-- Date de naissance -->
                                                        <div class="info"><br/>
                                                            <!--<label class="infoPerso" for="dateDeNaissance" data-fieldgroup="date"><span class="required">Date de naissance<sup>*</sup> :</span></label>-->
                                                            Date de naissance : &nbsp; <input type="text" id="date" name="date" class="text" value="<?php echo $data['dateDeNaissance']; ?>" />

                                                            <!-- Email -->
                                                            <div class="info"><br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <!--<label class="infoPerso" for="email"><span class="required">Email<sup>*</sup> :</span></label>-->
                                                                Email<sup>*</sup> : &nbsp; <input type="text" id="email" name="email" class="text" value="<?php echo $data['mail']; ?>" />



                                                            </div>

                                                            <!-- Profession -->
                                                            <div class=info><br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <!-- <label for=profession class="infoPerso">Profession :</label>-->
                                                                Profession : &nbsp; <input type="text" id="profession" name="profession" class="text" value="<?php echo $data['profession']; ?>"/>
                                                            </div>
                                                            
                                                            <!-- Nom Societe -->
                                                            <div class=info><br/>
                                                                <!--<label class="infoPerso" for=lieuDeNaissance class="col_third_floatleft">Lieu de Naissance<sup>*</sup> :</label>-->
                                                                Nom de la soci&eacute;t&eacute; : &nbsp; <input type="text" id="nomSociete" name="nomSociete" class="text" value="<?php echo $data['nomSociete']; ?>"/>
                                                            </div>
                                                            
                                                            <!-- Adresse Societe-->
                                                            <div class="info"><br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <!--<label for="adresse" class="infoPerso">Adresse postale<sup>*</sup> :</label>-->
                                                                Adresse soci&eacute;t&eacute; &nbsp; : &nbsp; <input type="text" id="adresse" name="adresse" class="text" value="<?php echo $data['adresseSociete']; ?>" />
                                                            </div>



                                                            <!-- Code Postal -->
                                                            <div class="info"><br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <!--<label class="infoPerso" for="pcode"><span class="required">Code postal<sup>*</sup> :</span></label>-->
                                                                Code postal &nbsp; : &nbsp; <input type="text" id="pcode" name="pcode" class="text" value="<?php echo $data['codePostalSociete']; ?>" />

                                                            </div>

                                                            <!-- Villes -->
                                                            <div class="info"><br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <!--<label for="ville" class="infoPerso">Ville<sup>*</sup> :</label>-->
                                                                Ville<sup>*</sup> : &nbsp; <input type="text" id="ville" name="ville" class="text" value="<?php echo $data['ville']; ?>" />
                                                            </div>

                                                            <!-- Pays -->
                                                            <div class="info"><br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <!--<label class="infoPerso" for="pays"><span class="required">Pays<sup>*</sup> :</span></label>-->
                                                                Pays<sup>*</sup> :&nbsp;&nbsp; <select class="choix" id="country" name="pays">
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="ZA">Afrique du Sud</option>
                                                                    <option value="AL">Albanie</option>
                                                                    <option value="DZ">Algérie</option>
                                                                    <option value="DE">Allemagne</option>
                                                                    <option value="AD">Andorre</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctique</option>
                                                                    <option value="AG">Antigua-et-Barbuda</option>
                                                                    <option value="AN">Antilles néerlandaises</option>
                                                                    <option value="SA">Arabie Saoudite</option>
                                                                    <option value="AR">Argentine</option>
                                                                    <option value="AM">Arménie</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australie</option>
                                                                    <option value="AT">Autriche</option>
                                                                    <option value="AZ">Azerbaïdjan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahreïn</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbade (la)</option>
                                                                    <option value="BE">Belgique</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Bénin</option>
                                                                    <option value="BM">Bermudes</option>
                                                                    <option value="BT">Bhoutan</option>
                                                                    <option value="BY">Biélorussie</option>
                                                                    <option value="BO">Bolivie (l&#039;État plurinational de)</option>
                                                                    <option value="BA">Bosnie et Herzégovine</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BR">Brésil</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgarie</option>
                                                                    <option value="BF">Burkina-Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodge</option>
                                                                    <option value="CM">Cameroun</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cap-Vert</option>
                                                                    <option value="CL">Chili</option>
                                                                    <option value="CN">Chine</option>
                                                                    <option value="CY">Chypre</option>
                                                                    <option value="CO">Colombie</option>
                                                                    <option value="KM">Comores</option>
                                                                    <option value="CD">République du Congo</option>
                                                                    <option value="KR">Corée</option>
                                                                    <option value="KP">Corée du Nord</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="CI">Côte D&#039;Ivoire</option>
                                                                    <option value="HR">Croatie</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="DK">Danemark</option>
                                                                    <option value="UM">Dépendances américaines du Pacifique</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominique (la)</option>
                                                                    <option value="EG">Égypte</option>
                                                                    <option value="AE">Émirats Arabes Unis</option>
                                                                    <option value="EC">Équateur</option>
                                                                    <option value="ER">Érythrée</option>
                                                                    <option value="ES">Espagne</option>
                                                                    <option value="EE">Estonie</option>
                                                                    <option value="VA">État de la cité du Vatican</option>
                                                                    <option value="US">États-Unis</option>
                                                                    <option value="ET">Éthiopie</option>
                                                                    <option value="RU">Fédération de Russie</option>
                                                                    <option value="FJ">Fidji</option>
                                                                    <option value="FI">Finlande</option>
                                                                    <option value="FR" selected="selected">France</option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambie</option>
                                                                    <option value="GE">Géorgie</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Grèce</option>
                                                                    <option value="GD">Grenade</option>
                                                                    <option value="GL">Groenland</option>
                                                                    <option value="GP">Guadeloupe (France DOM-TOM)</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernesey</option>
                                                                    <option value="GN">Guinée</option>
                                                                    <option value="GW">Guinée-Bissau</option>
                                                                    <option value="GQ">Guinée Équatoriale</option>
                                                                    <option value="GY">Guyane</option>
                                                                    <option value="GF">Guyane française</option>
                                                                    <option value="HT">Haïti</option>
                                                                    <option value="HN">Honduras (le)</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hongrie</option>
                                                                    <option value="CX">Île Christmas</option>
                                                                    <option value="AC">Île de l&#039;Ascension</option>                              
                                                                    <option value="MU">Île Maurice</option>        
                                                                    <option value="KY">Îles Caïmans</option>
                                                                    <option value="CK">Îles Cook</option>
                                                                    <option value="FO">Îles Féroé</option>
                                                                    <option value="FK">Îles Malouines</option>
                                                                    <option value="MH">Îles Marshall</option>
                                                                    <option value="SB">Îles Salomon</option>
                                                                    <option value="VI">Îles Vierges américaines</option>
                                                                    <option value="VG">Îles Vierges britanniques</option>
                                                                    <option value="IN">Inde</option>
                                                                    <option value="ID">Indonésie</option>
                                                                    <option value="IQ">Irak</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IE">Irlande</option>
                                                                    <option value="IS">Islande</option>
                                                                    <option value="IL">Israël</option>
                                                                    <option value="IT">Italie</option>
                                                                    <option value="LY">Lybie</option>
                                                                    <option value="JM">Jamaïque</option>
                                                                    <option value="JP">Japon</option>
                                                                    <option value="JO">Jordanie</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KG">Kirghizistan</option>                                 
                                                                    <option value="KW">Koweït</option>                                 
                                                                    <option value="LV">Lettonie</option>
                                                                    <option value="LB">Liban</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lituanie</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MK">Macédoine</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MY">Malaisie</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malte</option>
                                                                    <option value="MP">Mariannes du Nord (Îles du Commonwealth)</option>
                                                                    <option value="MA">Maroc</option>
                                                                    <option value="MQ">Martinique (France DOM-TOM)</option>
                                                                    <option value="MR">Mauritanie</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexique</option>
                                                                    <option value="FM">Micronésie</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolie</option>
                                                                    <option value="ME">Monténégro</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="NA">Namibie</option>
                                                                    <option value="NP">Népal</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigéria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NO">Norvège</option>
                                                                    <option value="NC">Nouvelle Calédonie</option>
                                                                    <option value="NZ">Nouvelle Zélande</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="UG">Ouganda</option>
                                                                    <option value="UZ">Ouzbékistän</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PW">Palau</option>
                                                                    <option value="PS">Palestine</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papouasie,Nouvelle-Guinée</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="NL">Pays-Bas</option>
                                                                    <option value="PE">Pérou</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn (Îles)</option>
                                                                    <option value="PL">Pologne</option>
                                                                    <option value="PF">Polynésie française (DOM-TOM)</option>
                                                                    <option value="PR">Porto Rico</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="SY">République arabe syrienne</option>
                                                                    <option value="CF">République Centrafricaine</option>
                                                                    <option value="LA">République démocratique populaire du Laos</option>
                                                                    <option value="DO">République Dominicaine</option>
                                                                    <option value="CZ">République tchèque</option>
                                                                    <option value="RE">Réunion (Île de la)</option>
                                                                    <option value="RO">Roumanie</option>
                                                                    <option value="UK">Royaume-Uni</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="EH">Sahara occidental</option>
                                                                    <option value="BL">Saint-Barthélémy</option>
                                                                    <option value="SH">Sainte Hélène</option>
                                                                    <option value="LC">Saint-Lucie</option>
                                                                    <option value="SM">Saint-Marin</option>
                                                                    <option value="MF">Saint-Martin</option>
                                                                    <option value="PM">Saint-Pierre-et-Miquelon (France DOM-TOM)</option>
                                                                    <option value="VC">Saint-Vincent et les Grenadines</option>
                                                                    <option value="SV">Salvador</option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="AS">Samoa américaines</option>
                                                                    <option value="ST">Sâo Tomé et Prince</option>
                                                                    <option value="SN">Sénégal</option>
                                                                    <option value="RS">Serbie</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapour</option>
                                                                    <option value="SK">Slovaquie</option>
                                                                    <option value="SI">Slovénie</option>
                                                                    <option value="SO">Somalie</option>
                                                                    <option value="SD">Soudan</option>
                                                                    <option value="SS">Soudan du Sud</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SE">Suède</option>
                                                                    <option value="CH">Suisse</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzanie</option>
                                                                    <option value="TD">Tchad</option>
                                                                    <option value="TF">Terres Australes françaises (DOM-TOM)</option>
                                                                    <option value="IO">Territoires Britanniques de l&#039;océan Indien</option>
                                                                    <option value="TH">Thaïlande</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinité-et-Tobago</option>
                                                                    <option value="TN">Tunisie</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Vietnam</option>
                                                                    <option value="WF">Wallis et Futuna</option>
                                                                    <option value="YE">Yémen</option>
                                                                    <option value="ZM">Zambie</option>
                                                                    <option value="ZW">Zimbabwe</option>
                                                                    <option value="--">Autre pays</option>
                                                                </select>

                                                            </div>

                                                            <!-- Téléphone Societe -->
                                                            <div class="info"><br/>
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                <!--<label for="telephoneFixe" class="infoPerso">Téléphone fixe :</label>-->
                                                                T&eacute;l&eacute;phone soci&eacute;t&eacute; : &nbsp; <input type="text" id="telephoneSociete" name="telephoneSociete" class="text" value="<?php echo $data['telephoneSociete']; ?>"/>
                                                            </div>

                                                            <!-- Téléphone Mobile -->
                                                            <div class="info"><br/>
                                                                &nbsp;
                                                                 <!--<label for="NumeroPortable" class="infoPerso">Mobile<sup>*</sup> :</label>-->
                                                                T&eacute;l&eacute;phone Mobile<sup>*</sup> : &nbsp; <input type="text" id="telephoneMobile" name="telephoneMobile" class="text" value="<?php echo $data['telephoneMobile']; ?>"/>



                                                                <!-- Site Web -->

                                                                <div class="info"><br/>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <!--<label for="siteWeb" class="infoPerso">Site Web :</label>-->
                                                                    Site Web : &nbsp; <input type="text" name="siteWeb" id="siteWeb" class="text" value="<?php echo $data['siteWeb']; ?>"/>
                                                                </div>

                                                                <!--activite-->
                                                                <div class="info"><br/>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <!--<label for="siteWeb" class="infoPerso">Site Web :</label>-->
                                                                    Activit&eacute; : &nbsp; <input type="text" name="activite" id="activite" class="text" value="<?php echo $data['activite']; ?>"/>
                                                                </div>

                                                                <div class="info"><br/>
                                                                    <input type="submit" value="Envoyer" style="width:80px;height: 70px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <input type="reset" value="Effacer" style="width:80px;height: 70px">
                                                                </div>
                                                                </fieldset>
                                                                </form>
                                                            </div>


                                                            <?php
                                                        }
                                                    }
                                                }
                                            }
                                            ?>



                                            </section>
                                            <?php include("footer.php"); ?>

