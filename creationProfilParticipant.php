<?php
session_start();
include("BDD.php");
include('start.php');

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
        <div id="titreacticle">
            <h2><span style="color:#2040c0;"> Cr&eacute;ation du profil participant</span></h2>
            <p style="margin-top:10px;"> Actuellement, vous ne disposez pas de profil participant. Nous vous invitons &agrave; remplir les champs suivants :</p>
        </div>
        <div id="page">
            <form class="contenuCPP" method="post" action="traitementCreationProfilParticipant.php">
                <fieldset class="fieldsetCPP">
                    <legend class="titreCPP"><p style="text-align:center;"> Informations Personnelles </p></legend>
                    <label for="nom"> <span>*</span> Votre nom : </label><br/><br/>
                    <input type="text" name="nom" id="nom" size="23" maxlength="20" required><br/><br/>
                    <label for="prenom"> <span>*</span> Votre pr&eacute;nom : </label><br/><br/>
                    <input type="text" name="prenom" id="prenom" size="23" maxlength="20" required><br/><br/>
                    <label for="pseudo"> <span>*</span> Votre pseudo : </label><br/><br/>
                    <input type="text" name="pseudo" id="pseudo" size="23" maxlength="20" required><br/><br/>
                    <label for="sexe"> <span>*</span> Votre sexe : </label><br/><br/>
                    <input type="radio" name="personne" value="1" id="homme" required> <label for="homme"> Homme</label><br/>
                    <input style="margin-right:4px;" type="radio" name="personne" value="0" id="femme" required> <label style="margin-right:5px; "for="femme">Femme</label><br/><br/>
                    <label for="date"> Votre date de naissance :</label><br/><br/>
                    <input type="date" name="date" id="date" size="23" maxlength="20"><br/><br/>
                    <label for="lieuNaissance"> Votre lieu de naissance : </label><br/><br/>
                    <input type="text" name="lieuNaissance" id="lieuNaissance" size="23" maxlength="20"><br/><br/>
                    <label for="url"> Votre num&eacute;ro de t&eacute;l&eacute;phone fixe:</label><br/><br/>
                    <input type="telFixe" name="telFixe" id="telFixe" size="23" maxlength="20"><br/><br/>
                    <label for="url"> Votre site web : </label><br/><br/>
                    <input type="url" name="url" id="url" size="40" placeholder="http://www.exemple.com" maxlength="40"><br/><br/>
                    <label for="pays"> <span>*</span> Dans quel pays habitez-vous ? </label><br/><br/>
                    <select name="pays" id="pays" required>
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
                    </select><br/><br/>
                    <label for="description"> Votre Description:</label><br/><br/>
                    <textarea class="tailleDescription" name="description" id="descriptionCreerProfilParticipant" size="200" maxlength="800"></textarea><br/><br/>
                    <input type="submit" value="Cr&eacute;er" >
                    <input type="reset" value="Effacer" >
                </fieldset>
            </form>
        </div>
    </article>
</section>

<?php include("footer.php"); ?>