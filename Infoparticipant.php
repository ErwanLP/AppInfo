
        <div class="menuParametres">
            <h1>Configurer</h1>
            <ul id="menuParametre">
                <li ><a class="menuParametre" href="Infoparticipant.php" title="Mon compte" ><img src="img/boutonMonCompteDroit.png" /></a>
                    <ul class="active">
                        <li ><a href="Infoparticipant.php" title="Mes infos persos" ><img src="img/boutonMesInfosPerso.png" /></a></li>
                        <li ><a href="#Modificationmdp" title="Modification du mot de passe"><img src="img/boutonModificationMDP.png" /></a></li>
                    </ul>
                </li>
                <li><a class="menuParametre" href="parametreprofil.php" title="Mon profil" ><img src="img/boutonMonProfilArr.png" /></a></li>
                <li><a class="menuParametre" href="Mes_amis.php" title="Mes amis"><img src="img/boutonMesAmisArr.png" /></a></li>
                <li><a class="menuParametre" href="Live.php" title="Live" ><img src="img/boutonLivesDroit.png" /></a></li>
            </ul>
        </div>   
        <div class="titreParametre">
            <h1>Mes infos persos</h1>
            <form  method="post" action="inscription.php" id="gestioncompte">

                <fieldset id="infopersonnel" class="rollin">
                    <input type="hidden" id="bypass_email" name="bypass_email" value="0" />

                    <legend><span>Mes données personnelles</span></legend>
                    <div> <p class="clear_bloc msg_info">Bientôt tu pourras retrouver facilement tes amis sur Doyouevents en saisissant leur email, nom ou prénom. Pour les aider à te retrouver, choisis « oui » ou « non » en bas du formulaire et n'oublie pas de compléter tes informations</p>
                        <script type="text/javascript">
                            // <![CDATA[

                            // Alerting sur la recherche au cas où certains champs ne seraient pas remplis
                            var message = document.getElementById("messageRecherche");
                            function Alert(isChecked)
                            {
                                var elm0 = document.getElementById("prenom"), elm1 = document.getElementById("nom");
                                if(!elm0 || !elm1 || !message)
                                {
                                    return false;
                                }
                                message.style.display = (isChecked && (elm0.value == '' || elm1.value == '')) ? "block" : "none";
                            }

                            //]]>
                        </script>
                    </div>



                    <!-- Sexe -->
                    <div class="info">
                        <span class="infoPerso"><span class="required">Tu es<sup>*</sup> : </span></span>
                        <span class="radio-checkbox">
                            <input type="radio" id="femme" name="genre" class="radio" value="0" /> <label for="female" class="radio">Une femme</label>
                        </span>
                        <span class="radio-checkbox">
                            <input type="radio" id="homme" name="genre" class="radio" value="1" checked="checked"/> <label for="male" class="radio">Un homme</label>
                        </span>

                        <p class="infobulle msg_info" id="infobulle_genre">
                            Ton sexe est une information privée, il ne sera pas affiché sur le site </p>

                    </div>
                    <!-- Pseudo -->
                    <div class=info>
                        <label for=pseudo class="infoPerso">Pseudo<sup>*</sup> :</label>
                        <input type="text" id="pseudo" name="pseudo" class="text" value="guito-le-taureau-bourré-du-sud"/>
                    </div>
                    <!-- Prénom -->
                    <div class="info">
                        <label for="prenom" class="infoPerso">Prénom<sup>*</sup> :</label>
                        <input type="text" id="prenom" name="prenom" class="text" value="florian" />

                        <p class="infobulle msg_info" id="infobulle_prenom">
                            <strong>Aide tes amis à te retrouver</strong>, mets ton vrai prénom. </p>

                    </div>

                    <!-- Nom -->
                    <div class="info">
                        <label for="nom" class="infoPerso">Nom<sup>*</sup> :</label>
                        <input type="text" id="nom" name="nom" class="text" value="guitoger" />

                        <p class="infobulle msg_info" id="infobulle_nom">
                            <strong>Aide tes amis à te retrouver</strong>, mets ton vrai nom. </p>

                    </div>

                    <!--Masquer Nom -->
                    <div class="info">
                        <input type="checkbox" name="MasquerNom" id="MasquerNom" value="0" />
                        <label for="MasquerNom"><strong>Masquer mon Nom</strong></label>
                    </div>
                    <br/>

                    <!-- Date de naissance -->
                    <div class="info">
                        <label class="infoPerso" for="dateDeNaissance" data-fieldgroup="date"><span class="required">Date de naissance<sup>*</sup> :</span></label>
                        <input type="text" id="anniversaire" name="anniversaire" maxlength="2" class="dateAnniv" value="19"/>
                        <select id="mois" name="mois" class="choix mois">
                            <option value="">-- mois --</option>
                            <option value="1">Janvier</option>
                            <option value="2">Février</option>
                            <option value="3">Mars</option>
                            <option value="4">Avril</option>
                            <option value="5">Mai</option>
                            <option value="6">Juin</option>
                            <option value="7">Juillet</option>
                            <option selected="selected" value="8">Août</option>
                            <option value="9">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                        </select>
                        <input type="text" id="année" name="année" maxlength="4" class="anneeAnniv" value="1992"/>

                            <p class="infobulle msg_info" id="infobulle_annee">
                            Ta date de naissance ne sera pas affichée sur le site. En revanche, nous sommes obligés de te la demander pour des raisons légales. </p>

                    </div>

                    <!-- Lieu de naissance -->
                    <div class=info>
                        <label class="infoPerso" for=lieuDeNaissance class="col_third_floatleft">Lieu de Naissance<sup>*</sup> :</label>
                        <input type="text" id="lieuDeNaissance" name="lieuDeNaissance" class="text" value="Paris"/>
                    </div>
                    <!-- Email -->
                    <div class="clear_bloc info">
                        <label class="infoPerso" for="email"><span class="required">Email<sup>*</sup> :</span></label>
                        <input type="text" id="email" name="email" class="text" value="florian.guitoger@gmail.com" />

                        <p class="infobulle msg_info" id="infobulle_email">
                            Cette information nous sert à te renvoyer ton mot de passe en cas d'oubli. Elle n'est pas affichée sur le site. </p>

                    </div>

                    <!-- Profession -->
                    <div class=info>
                        <label for=profession class="infoPerso">Profession :</label>
                        <input type="text" id="profession" name="profession" class="text" value="Etudiant"/>
                    </div>
                    <!-- Adresse -->
                    <div class="info">
                        <label for="adresse" class="infoPerso">Adresse postale<sup>*</sup> :</label>
                        <input type="text" id="adresse" name="adresse" class="text" value="82,rue d&#039;australie" />
                    </div>

                    <!-- Masquer Adresse -->
                    <div class="info">
                        <input type="checkbox" name="MasquerAdresse" id="MasquerAdresse" value="0" />
                        <label for="MasquerAdresse"><strong>Masquer mon adresse</strong></label>
                    </div>
                    <br/>

                    <!-- Code Postal -->
                    <div class="info">
                        <label class="infoPerso" for="pcode"><span class="required">Code postal<sup>*</sup> :</span></label>
                        <input type="text" id="pcode" name="pcode" class="text" value="95500" />

                    </div>

                    <!-- Ville -->
                    <div class="info">
                        <label for="ville" class="infoPerso">Ville<sup>*</sup> :</label>
                        <input type="text" id="ville" name="ville" class="text" value="gonesse" />
                    </div>

                    <!-- Pays -->
                    <div class="info">
                        <label class="infoPerso" for="pays"><span class="required">Pays<sup>*</sup> :</span></label>
                        <select class="choix" id="country" name="pays">
                            <option value="AF">Afghanistan</option>
                            <option value="ZA">Afrique du Sud</option>
                            <option value="AX">Åland</option>
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
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, République du</option>
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
                            <option value="EC">Équateur (République de l&#039;)</option>
                            <option value="ER">Érythrée</option>
                            <option value="ES">Espagne</option>
                            <option value="EE">Estonie</option>
                            <option value="VA">État de la cité du Vatican</option>
                            <option value="US">États-Unis</option>
                            <option value="ET">Éthiopie</option>
                            <option value="RU">Fédération de Russie</option>
                            <option value="FJ">Fidji</option>
                            <option value="FI">Finlande</option>
                            <option selected="selected" value="FR">France</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambie</option>
                            <option value="GE">Géorgie</option>
                            <option value="GS">Géorgie du Sud et Sandwich du Sud (ÎIes)</option>
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
                            <option value="IM">Île de Man</option>
                            <option value="NF">Île de Norfolk</option>
                            <option value="MU">Île Maurice</option>
                            <option value="BV">Îles Bouvet</option>
                            <option value="KY">Îles Caïmans</option>
                            <option value="CC">Îles Cocos-Keeling</option>
                            <option value="CK">Îles Cook</option>
                            <option value="FO">Îles Féroé</option>
                            <option value="HM">Îles Heard et Mc Donald</option>
                            <option value="FK">Îles Malouines</option>
                            <option value="MH">Îles Marshall</option>
                            <option value="SB">Îles Salomon</option>
                            <option value="TK">Îles Tokelau</option>
                            <option value="TC">Îles Turks et Caïcos</option>
                            <option value="SJ">Île Svalbard et Jan Mayen</option>
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
                            <option value="LY">Jamahiriya arabe libyenne (Lybie)</option>
                            <option value="JM">Jamaïque</option>
                            <option value="JP">Japon</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordanie</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KG">Kirghizistan</option>
                            <option value="KI">Kiribati</option>
                            <option value="KW">Koweït</option>
                            <option value="LS">Lesotho</option>
                            <option value="LV">Lettonie</option>
                            <option value="LB">Liban</option>
                            <option value="LR">Liberia</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lituanie</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macédoine, Ex-République yougoslave de</option>
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
                            <option value="MD">Moldova (République de)</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolie</option>
                            <option value="ME">Monténégro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar (Union de)</option>
                            <option value="NA">Namibie</option>
                            <option value="NR">Nauru (République de)</option>
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
                            <option value="PS">Palestine (territoire occupé)</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papouasie Nouvelle-Guinée</option>
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
                            <option value="KN">St Christopher et Nevis (Îles)</option>
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
                            <option value="TL">Timor Oriental</option>
                            <option value="TG">Togo</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinité-et-Tobago</option>
                            <option value="TN">Tunisie</option>
                            <option value="TM">Turkménistan</option>
                            <option value="TR">Turquie</option>
                            <option value="TV">Tuvalu (Îles)</option>
                            <option value="UA">Ukraine</option>
                            <option value="UY">Uruguay</option>
                            <option value="VU">Vanuatu (République de)</option>
                            <option value="VE">Venezuela (République Bolivarienne du)</option>
                            <option value="VN">Vietnam</option>
                            <option value="WF">Wallis et Futuna</option>
                            <option value="YE">Yémen</option>
                            <option value="ZM">Zambie</option>
                            <option value="ZW">Zimbabwe</option>
                            <option value="--">Autre pays</option>
                        </select>

                    </div>

                    <!-- Téléphone Fixe -->
                    <div class="info">
                        <label for="telephoneFixe" class="infoPerso">Téléphone fixe :</label>
                        <input type="text" id="telephonefixe" name="telephonefixe" class="text" value="0123456987" />
                    </div>

                    <!-- Téléphone Mobile -->
                    <div class="info">
                        <label for="NumeroPortable" class="infoPerso">Mobile<sup>*</sup> :</label>
                        <input type="text" id="NumeroPortable" name="NumeroPortable" class="text" value="0612345789" />
                        <p class="infobulle msg_info" id="infobulle_portable">
                            Pour recevoir des infos publicitaires sur ton téléphone mobile tu dois saisir ici ton numéro. </p>

                    </div>
                    <!-- Masquer Téléphone -->
                    <div class="info">
                        <input type="checkbox" name="MasquerNum" id="MasquerNum" value="0" />
                        <label for="MasquerNum"><strong>Masquer mes numéro de téléphone</strong></label>
                    </div>

                    <br/>
                    <!-- Langue -->
                    <div class="info">
                        <label class="infoPerso" for="langage"><span class="required">Version et langue<sup>*</sup> :</span></label>
                        <select class="choix" id="lang" name="locale">
                            <option selected="selected" value="fr_FR">France</option>
                            <option value="en_GB">International (anglais)</option>

                        </select>
                        <p class="infobulle msg_info" id="infobulle_langue">La langue qui sera utilisée sur l'ensemble des textes et contenu du site.</p>
                    </div>

                    <!-- Site Web -->
                    <div class="info">
                        <label for="siteWeb" class="infoPerso">Site Web :</label>
                        <input type="text" name="siteWeb" id="siteWeb" class="text" value="www.florianguitogerlebourre.com" />
                    </div>

                    <!--loisirs/hobbies-->
                    <div class="info">
                        <label class="infoPerso" for="loisirs/hobbies"></label>
                        <p>Loisirs/hobbies:</p><textarea name="loisirs/hobbies" cols=60 rows=15>
                        </textarea>
                    </div>

                    <!--Description-->
                    <div class="info">
                        <label class="infoPerso" for="description"></label>
                        <p>Description:</p><textarea name="description" cols=60 rows=15>
                        </textarea>
                    </div>

                    <div class="info">
                        <input type="button" onClick="modification()" value="Envoyer">
                        <input type="reset" value="Effacer">
                    </div>
                </fieldset>



                <fieldset id="Modificationmdp" class="disabled">
                    <legend class="h2"><span>Changer mon mot de passe</span></legend>
                    <div> <p >Ne remplis les trois champs ci-dessous que si tu souhaites changer de mot de passe.</p>

                        <!-- Ancien: Mot de passe -->
                        <div class="effacerMdp">
                            <label class="infoPerso" for="ancienMdp"><span class="required">Ancien mot de passe<sup>*</sup> :</span></label>
                            <input autocomplete="off" type="password" id="ancienMdp" name="ancienMdp" class="text" value="" />

                            <p class="infobulle msg_info " id="infobulle_ancienMdp">
                                Saisis ton ancien mot de passe pour pouvoir le modifier. </p>

                        </div>

                        <!-- Nouveau: Mot de passe -->
                        <div class="mdp">
                            <label class="infoPerso" for="nouveauMdp"><strong class="required">Nouveau mot de passe<sup>*</sup> :</strong></label>
                            <input autocomplete="off" type="password" id="nouveauMdp" name="nouveauMdp" class="text" value="" />

                            <p class="infobulle msg_info" id="infobulle_nouveauMdp">
                                Ton mot de passe doit contenir de 6 à 16 caractères et ne doit pas comporter d'espace. </p>
                        </div>

                        <!-- Nouveau: Mot de passe Confirmation -->
                        <div class="mdp">
                            <label class="infoPerso" for="Mdpconfimer"><span class="required">Vérifier le nouveau mot de passe<sup>*</sup> :</span></label>
                            <input autocomplete="off" type="password" id="Mdpconfime" name="Mdpconfimer" class="text" value="" />

                            <p class="infobulle msg_info" id="infobulle_Mdpconfime">
                                Saisis à nouveau ton mot de passe pour le confirmer. </p>

                        </div>
                    </div>



                    <div class="info">
                        <input type="button" onClick="modification_1()" value="Envoyer">
                        <input type="reset" value="Effacer">
                    </div>


                </fieldset>

                <br/>
            </form>
        </div>
        <script>

            sfHover = function() {
                var sfEls = document.getElementById("sidebar-accordion").getElementsByTagName("li");
                for (var i=0; i<sfEls.length; i++) {
                    sfEls[i].onmouseover=function() {
                        this.className+=" sfhover";
                    }
                    sfEls[i].onmouseout=function() {
                        this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
                    }
                }
            }
            if (window.attachEvent) window.attachEvent("onload", sfHover);

            //var modification

            function modification() {
                if (confirm('Voulez vous enregistrer vos modifications, cliquez sur "OK" si c\'est le cas.')) {
                    alert('Les modifications ont été enregistrés.');
                    myForm = document.getElementById("personalData");
                    myForm .submit();

                }
                else {
                    alert("Aucune modification a été enregistré.");
                }
            }
            //var modification_1

            function modification_1() {
                if (confirm('Voulez vous enregistrer vos modifications, cliquez sur "OK" si c\'est le cas.')) {
                    alert('Les modifications ont été enregistrés.');
                    myForm = document.getElementById("personalData");
                    myForm .submit();

                }
                else {
                    alert("Aucune modification a été enregistré.");
                }
            }
        </script>
    
