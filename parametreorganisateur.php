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
    <div class="description">
        <fieldset>
            <img src="img/logo.png" width="200" height="200" alt="Logo" style="border: solid black 2px"/>                  
            <?php
            $result2 = $bdd->query('SELECT * FROM organisateur WHERE ID = ' . $_SESSION['ID'] . ' ');
            $data = $result2->fetch();
            ?>
            <p class="nom4"><?php echo $data['nom'] . "  " . $data['prenom'];
            ?></p>
            <p class="lieu4"><?php echo $data['nomSociete'] . ", " . $data['pays'];
            ?></p>
        </fieldset>


    </div>
    <div class="menu">
        <ul id="simple-menu">
            <li><input type="button" onclick="self.location.href='profil.php';" value="Mes Infos"/></li>
            <li><input type="button" onclick="self.location.href='profil.php';" value="Mes &Eacute;v&eacute;nements"/></li>
            <li><input type="button" onclick="self.location.href='profil.php';" value="Ma Messagerie"/></li>
            <li><input type="button" onclick="self.location.href='parametreorganisateur.php';" value="Param&egrave;tres"/>
                <ul class="sousmenu">
                    <li><a href="Infoorganisateur.php" title="Mon compte" onclick="self.location.href='Infoorganisateur.php';"></a></li>                         
                    <li><a href="parametreprofil.php" title="Mon profil" onclick="self.location.href='parametreprofil.php';"></a></li>
                    <li><a href="Mes_amis.php" title="Mes amis" onclick="self.location.href='Mes_amis.php';"></a></li>
                    <li><a href="Live.php" title="Live" onclick="self.location.href='Live.php';"></a></li>
                </ul>
            </li>
            <!--<li><a href="#" title="Mes Infos">Mes Infos</a></li>
            <li><a href="#" title="Mes Amis">Mes Amis</a></li>
            <li><a href="test1.php" title="Paramètres">Paramètres</a></li>-->
        </ul>
    </div>


    <!--<div class="menuParametres">
        <h1>Configurer</h1>
        <ul id="menuParametre">
            <li><a class="menuParametre" href="Infoparticipant.php" title="Mon compte" onclick="window.open(this.href); return false;"></a></li>                         
            <li><a class="menuParametre" href="parametreprofil.php" title="Mon profil" onclick="window.open(this.href); return false;"></a></li>
            <li><a class="menuParametre" href="Mes_amis.php" title="Mes amis" onclick="window.open(this.href); return false;"></a></li>
            <li><a class="menuParametre" href="Live.php" title="Live" onclick="window.open(this.href); return false;"></a></li>            

        </ul>
    </div>-->


    <div class="titreParametre">          
        <form  method="post" action="/m/account/" id="gestioncompte"><br/><br/><br/>

            <fieldset id="fieldset1" >

                <input type="hidden" id="Email_" name="Email_" value="0" />

                <legend><div class="title">Informations personnelles</div></legend>
                <div> 		            
                    <script type="text/javascript">
                        // <![CDATA[
        
                        // Alerte sur la recherche au cas où certains champs ne seraient pas remplis
                        var message = document.getElementById("messageRecherche");
                        function showSearchAlert(isChecked)
                        {
                            var elm0 = document.getElementById("prenom"), elm1 = document.getElementById("nom");                
                            if(!elm0 || !elm1 || !message)
                            {
                                return false;
                            }        
                            message.style.display = (isChecked && (elm0.value == '' || elm1.value == '')) ? "block" : "none";
                        }
        
                        //]]>
                    </script><br/>




                    <?php
                    $ID = $_SESSION['ID'];

                    $result = $bdd->query('SELECT * FROM  organisateur WHERE organisateur.ID = ' . $ID . '');
                    //echo 'SELECT * FROM  organisateur WHERE organisateur.ID = ' . $ID . '';

                    while ($data = $result->fetch()) {
                        ?>


                        <!-- Sexe -->
                        <div class="info"><br/>
                            <!--<span class="infoPerso"><span class="required">Tu es<sup>*</sup> : </span></span>-->
                            <span class="radio-checkbox">
                                &nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Tu es<sup>*</sup> : &nbsp;&nbsp;<input type="radio" id="femme" name="genre" class="radio" value="<?php echo $data['sexe']; ?>" /> <label for="female" class="radio">Une femme</label>&nbsp;&nbsp;&nbsp;
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
                            Date de naissance  : &nbsp; <input type="text" id="nom" name="nom" class="text" value="<?php echo $data['dateDeNaissance']; ?>" />

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
                            <!-- Adresse société-->
                            <div class="info"><br/>
                                &nbsp;&nbsp;
                                <!--<label for="adresse" class="infoPerso">Adresse postale<sup>*</sup> :</label>-->
                                Adresse de la soci&eacute;t&eacute; &nbsp; : &nbsp; <input type="text" id="adresseSociete" name="adresseSociete" class="text" value="<?php echo $data['adresseSociete']; ?>" />
                            </div>



                            <!-- Code Postal société -->
                            <div class="info"><br/>
                                <!--<label class="codePostalSociete" for="pcode"><span class="required">Code postal société<sup>*</sup> :</span></label>-->
                                Code postal de la soci&eacute;t&eacute; &nbsp; : &nbsp; <input type="text" id="codePostalSociete" name="codePostalSociete" class="text" value="<?php echo $data['codePostalSociete']; ?>" />

                            </div>

                            <!-- Ville -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label for="ville" class="infoPerso">Ville<sup>*</sup> :</label>-->
                                Ville<sup>*</sup> : &nbsp; <input type="text" id="ville" name="ville" class="text" value="<?php echo $data['ville']; ?>" />
                            </div>

                            <!-- Pays -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label class="infoPerso" for="pays"><span class="required">Pays<sup>*</sup> :</span></label>-->
                                Pays<sup>*</sup> :&nbsp; <select class="choix" id="country" name="pays">
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

                            <!-- Téléphone Société -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label for="telephoneFixe" class="infoPerso">Téléphone fixe :</label>-->
                                T&eacute;l&eacute;phone soci&eacute;t&eacute; : &nbsp;&nbsp; <input type="text" id="telephoneFixe" name="TelephoneFixe" class="text" value="<?php echo $data['telephoneSociete']; ?>"/>
                            </div>

                            <!-- Téléphone Mobile -->
                            <div class="info"><br/>
                                &nbsp;
                                 <!--<label for="NumeroPortable" class="infoPerso">Mobile<sup>*</sup> :</label>-->
                                T&eacute;l&eacute;phone Mobile<sup>*</sup> : &nbsp;&nbsp; <input type="text" id="numeroPortable" name="TelephoneMobile" class="text" value="<?php echo $data['telephoneMobile']; ?>"/>




                                <!-- Langue -->
                                <div class="info"><br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                          <!--<label class="infoPerso" for="langage"><span class="required">Version et langue<sup>*</sup> :</span></label>-->
                                    Langues<sup>*</sup> : &nbsp; <select class="choix" id="lang" name="locale">
                                        <option selected="selected" value="fr_FR">France</option>
                                        <option value="en_GB">International (anglais)</option>

                                    </select>

                                </div>

                                <!-- Site Web -->

                                <div class="info"><br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!--<label for="siteWeb" class="infoPerso">Site Web :</label>-->
                                    Site Web &nbsp;&nbsp;: &nbsp;&nbsp; <input type="text" name="siteWeb" id="siteWeb" class="text" value="<?php echo $data['siteWeb']; ?>"/>
                                </div>
                                <!-- Nom Société -->
                                <div class="info"><br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
                                    <!--<label for="prenom" class="infoPerso">Info Société<sup>*</sup> :</label>-->
                                    Nom Soci&eacute;t&eacute; &nbsp; :  &nbsp; <input type="text" id="nomSociete" name="nomSociete" class="text" value="<?php echo $data['nomSociete']; ?>" />


                                    <div class="info"><br/>
                                        <input type="button" onClick="modification()" value="Envoyer" style="width:80px;height: 70px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="reset" value="Effacer" style="width:80px;height: 70px">
                                    </div>
                                    </fieldset>
                                    </form>
                                </div>
                            <?php } ?>
                            </section>



                            <script type="text/javascript">
                              
                                
                                //var modification

                                function modification() {
                                    if (confirm('Voulez vous enregistrer vos modifications, cliquez sur "OK" si c\'est le cas.')) {
                                        alert('Les modifications ont été enregistrés.');
                                        myForm = document.getElementById("personalData");
                                        myForm .submit();

                                    }
                                    else {
                                        alert("Aucune modification n'a été enregistrée.");
                                    }
                                }

                            </script>
                            <?php include("footer.php"); ?>
