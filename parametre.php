<!DOCTYPE html>
<html>
    <head>   
        <title>Mes Paramètres</title>
        <link rel="stylesheet" href="profil.css">
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="parametre.css">
    </head>
    <body>
        <?php
        session_start();
        include("head.php");

        include("header.php");

        include("nav.php");        
        
        $bdd = new PDO('mysql:host=localhost;dbname=appinfo', 'root', 'root');
        
        ?>


        <section>
            <aside class ="navg">
                <?php include ("arbre.php"); ?>
            </aside>
            <aside class ="new">
                <div class ="eventNew">
                    <img class ="photonew" src ="img/new.jpg"/>
                </div>
            </aside>
            <div id="description">
                <fieldset>
                    <a href="img/avatar.jpg"><img src="img/avatar_mini.jpg" alt="Avatar" title="Cliquez pour agrandir" style="border: solid black 2px"/></a>
                    <p id="nom4">Alexis MARTIN</p>
                    <p id="lieu">France, Groslay</p>
                </fieldset>

            </div>
            <div class="menu">
                <ul id="simple-menu">
                    <li><input type="button" onclick="self.location.href='profil.php';" value="Mes Infos"/></li>
                    <li><input type="button" onclick="self.location.href='profil.php';" value="Mes Amis"/></li>
                    <li><input type="button" onclick="self.location.href='profil.php';" value="Mes Events"/></li>
                    <li><input type="button" onclick="self.location.href='test1.php';" value="Paramètres"/>
                        <ul class="sousmenu">
                            <li><a href="Infoparticipant.php" title="Mon compte" onclick="self.location.href='Infoparticipant.php';"></a></li>                         
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
                            
                            $result = $bdd->query('SELECT * FROM  participant WHERE participant.id = "'. $ID . '"');
                         
                                while ($data = $result->fetch()) {
                            
                            ?>
                            
                            
                            <!-- Sexe -->
                            <div class="info"><br/>
                                <!--<span class="infoPerso"><span class="required">Tu es<sup>*</sup> : </span></span>-->
                                <span class="radio-checkbox">
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Tu es<sup>*</sup> : &nbsp;&nbsp;<input type="radio" id="femme" name="genre" class="radio" value="0" /> <label for="female" class="radio">Une femme</label>&nbsp;&nbsp;&nbsp;
                                </span>
                                <span class="radio-checkbox">
                                    <input type="radio" id="homme" name="genre" class="radio" value="1" checked="checked"/> <label for="male" class="radio">Un homme</label>
                                </span>


                            </div>
                            <!-- Pseudo -->
                            <div class=info><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--Pseudo<sup>*</sup><label for=pseudo class="infoPerso">Pseudo<sup>*</sup> :</label>--> Pseudo<sup>*</sup> : <input type="text" id="pseudo" name="pseudo" class="text" value="<?php echo $data['pseudo'];?>"/>
                            </div>
                            
                            <!--Avatar-->
                            <div class=info><br/>
                                <!--<label for=avatar>Ajouter une photo(Jpeg,png,jpg)<sup>*</sup>:</label>-->
                               Ajouter une photo(jpeg,png)<sup>*</sup> : <input type='file' name='avatar'/>
                            </div>
                            
                            <!-- Prenom -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label for="prenom" class="infoPerso">Prenom<sup>*</sup> :</label>-->
                                Prénom<sup>*</sup> : <input type="text" id="prenom" name="prenom" class="text" value="<?php echo $data['prenom'];?>" />


                            </div>

                            <!-- Nom -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label for="nom" class="infoPerso">Nom<sup>*</sup> :</label>-->
                                Nom<sup>*</sup> : <input type="text" id="nom" name="nom" class="text" value="<?php echo $data['nom'];?>" />



                            </div>




                            <!-- Date de naissance -->
                            <div class="info"><br/>
                                <!--<label class="infoPerso" for="dateDeNaissance" data-fieldgroup="date"><span class="required">Date de naissance<sup>*</sup> :</span></label>-->
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date de naissance<sup>*</sup> : 
                                <select id="jour" name="jour" class="choix jour">
                                    <option value="">------- jours ---------</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="1">4</option>
                                    <option value="2">5</option>
                                    <option value="3">6</option>
                                    <option value="1">7</option>
                                    <option value="2">8</option>
                                    <option value="3">9</option>
                                    <option value="1">10</option>
                                    <option value="2">11</option>
                                    <option value="3">12</option>
                                    <option value="1">13</option>
                                    <option value="2">14</option>
                                    <option value="3">15</option>
                                    <option value="1">16</option>
                                    <option value="2">17</option>
                                    <option value="3">18</option>
                                    <option value="1" selected="selected">19</option>
                                    <option value="2">20</option>
                                    <option value="3">21</option>
                                    <option value="1">22</option>
                                    <option value="2">23</option>
                                    <option value="3">24</option>
                                    <option value="1">25</option>
                                    <option value="2">26</option>
                                    <option value="3">27</option>
                                    <option value="1">28</option>
                                    <option value="2">29</option>
                                    <option value="3">30</option>
                                    <option value="1">31</option>

                                </select>&nbsp;
                                <select id="mois" name="mois" class="choix mois">
                                    <option value="mois">------- mois ---------</option>
                                    <option value="1">Janvier</option>
                                    <option value="2">Février</option>
                                    <option value="3">Mars</option>
                                    <option value="4">Avril</option>
                                    <option value="5">Mai</option>
                                    <option value="6">Juin</option>
                                    <option value="7">Juillet</option>
                                    <option value="8">Août</option>
                                    <option value="9">Septembre</option>
                                    <option value="10">Octobre</option>
                                    <option value="11">Novembre</option>
                                    <option value="12" selected="selected">Décembre</option>
                                </select>&nbsp;

                                <select id="année" name="année" class="choix année">
                                    <option value="année">-------années---------</option>
                                    <option value="1921">1921</option>
                                    <option value="1922">1922</option>
                                    <option value="1923">1923</option>
                                    <option value="1924">1924</option>
                                    <option value="1925">1925</option>
                                    <option value="1926">1926</option>
                                    <option value="1927">1927</option>
                                    <option value="1928">1928</option>
                                    <option value="1929">1929</option>
                                    <option value="1930">1930</option>
                                    <option value="1931">1931</option>
                                    <option value="1932">1932</option>
                                    <option value="1933">1933</option>
                                    <option value="1934">1934</option>
                                    <option value="1935">1935</option>
                                    <option value="1936">1936</option>
                                    <option value="1937">1937</option>
                                    <option value="1938">1938</option>
                                    <option value="1939">1939</option>
                                    <option value="1940">1940</option>
                                    <option value="1941">1941</option>
                                    <option value="1942">1942</option>
                                    <option value="1943">1943</option>
                                    <option value="1944">1944</option>
                                    <option value="1945">1945</option>
                                    <option value="1946">1946</option>
                                    <option value="1947">1947</option>
                                    <option value="1948">1948</option>
                                    <option value="1949">1949</option>
                                    <option value="1950">1950</option>
                                    <option value="1951">1951</option>
                                    <option value="1952">1952</option>
                                    <option value="1953">1953</option>
                                    <option value="1954">1954</option>
                                    <option value="1955">1955</option>
                                    <option value="1956">1956</option>
                                    <option value="1957">1957</option>
                                    <option value="1958">1958</option>
                                    <option value="1959">1959</option>
                                    <option value="1960">1960</option>
                                    <option value="1961">1961</option>
                                    <option value="1962">1962</option>
                                    <option value="1963">1963</option>
                                    <option value="1964">1964</option>
                                    <option value="1965">1965</option>
                                    <option value="1966">1966</option>
                                    <option value="1967">1967</option>
                                    <option value="1968">1968</option>
                                    <option value="1969">1969</option>
                                    <option value="1970">1970</option>
                                    <option value="1971">1971</option>
                                    <option value="1972">1972</option>
                                    <option value="1973">1973</option>
                                    <option value="1974">1974</option>
                                    <option value="1975">1975</option>
                                    <option value="1976">1976</option>
                                    <option value="1977">1977</option>
                                    <option value="1978">1978</option>
                                    <option value="1979">1979</option>
                                    <option value="1980">1980</option>
                                    <option value="1981">1981</option>
                                    <option value="1982">1982</option>
                                    <option value="1983">1983</option>
                                    <option value="1984">1984</option>
                                    <option value="1985">1985</option>
                                    <option value="1986">1986</option>
                                    <option value="1987">1987</option>
                                    <option value="1988">1988</option>
                                    <option value="1989">1989</option>
                                    <option value="1990">1990</option>
                                    <option value="1991">1991</option>
                                    <option value="1992" selected="selected">1992</option>
                                    <option value="1993">1993</option>
                                    <option value="1994">1994</option>
                                    <option value="1995">1995</option>
                                    <option value="1996">1996</option>
                                    <option value="1997">1997</option>
                                    <option value="1998">1998</option>
                                    <option value="1999">1999</option>
                                    <option value="2000">2000</option>
                                    <option value="2001">2001</option>
                                    <option value="2002">2002</option>
                                    <option value="2003">2003</option>
                                    <option value="2004">2004</option>
                                    <option value="2005">2005</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                </select>


                            </div>

                            <!-- Lieu de naissance -->
                            <div class=info><br/>
                                <!--<label class="infoPerso" for=lieuDeNaissance class="col_third_floatleft">Lieu de Naissance<sup>*</sup> :</label>-->
                                Lieu de naissance<sup>*</sup> : <input type="text" id="lieuDeNaissance" name="lieuDeNaissance" class="text" value="<?php echo $data['lieuNaissance'];?>"/>
                            </div>
                            <!-- Email -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label class="infoPerso" for="email"><span class="required">Email<sup>*</sup> :</span></label>-->
                                Email<sup>*</sup> : <input type="text" id="email" name="email" class="text" value="<?php echo $data['mail'];?>" />



                            </div>

                            <!-- Profession -->
                            <div class=info><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!-- <label for=profession class="infoPerso">Profession :</label>-->
                                Profession : <input type="text" id="profession" name="profession" class="text" value="<?php echo $data['profession'];?>"/>
                            </div>
                            <!-- Adresse -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label for="adresse" class="infoPerso">Adresse postale<sup>*</sup> :</label>-->
                                Adresse<sup>*</sup> : <input type="text" id="adresse" name="adresse" class="text" value="<?php echo $data['adresse'];?>" />
                            </div>



                            <!-- Code Postal -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label class="infoPerso" for="pcode"><span class="required">Code postal<sup>*</sup> :</span></label>-->
                                Code postal<sup>*</sup> : <input type="text" id="pcode" name="pcode" class="text" value="<?php echo $data['codePostal'];?>" />

                            </div>

                            <!-- Villes -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label for="ville" class="infoPerso">Ville<sup>*</sup> :</label>-->
                                Villes<sup>*</sup> : <input type="text" id="villes" name="villes" class="text" value="<?php echo $data['villes'];?>" />
                            </div>

                            <!-- Pays -->
                            <div class="info"><br/>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <!--<label class="infoPerso" for="pays"><span class="required">Pays<sup>*</sup> :</span></label>-->
                                Pays<sup>*</sup> : <select class="choix" id="country" name="pays">
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
                                Téléphone fixe : <input type="text" id="telephoneFixe" name="TelephoneFixe" class="text" value="<?php echo $data['telephoneFixe'];?>" />
                            </div>

                            <!-- Téléphone Mobile -->
                            <div class="info"><br/>
                               &nbsp;
                                <!--<label for="NumeroPortable" class="infoPerso">Mobile<sup>*</sup> :</label>-->
                               Téléphone Mobile<sup>*</sup> : <input type="text" id="numeroPortable" name="TelephoneMobile" class="text" value="<?php echo $data['telephoneMobile'];?>" />




                                <!-- Langue -->
                                <div class="info"><br/>
                                    &nbsp;&nbsp;&nbsp;
                                    <!--<label class="infoPerso" for="langage"><span class="required">Version et langue<sup>*</sup> :</span></label>-->
                                    Versions et langues<sup>*</sup> : <select class="choix" id="lang" name="locale">
                                        <option selected="selected" value="fr_FR">France</option>
                                        <option value="en_GB">International (anglais)</option>

                                    </select>

                                </div>

                                <!-- Site Web -->

                                <div class="info"><br/>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <!--<label for="siteWeb" class="infoPerso">Site Web :</label>-->
                                    Site Web : <input type="text" name="siteWeb" id="siteWeb" class="text" value="<?php echo $data['siteWeb'];?>" />
                                </div>

                                <!--loisirs-->
                                <div class="info"><br/>
                                    <!--<label class="infoPerso" for="loisirs"></label>-->
                                    <p>Loisirs :</p><textarea name="loisirs" style="width: 700px;height: 150px"><?php echo $data['loisirs'];?>
                                    </textarea>
                                </div>

                                <!--Description-->
                                <div class="info"><br/>
                                    <!--<label class="infoPerso" for="description"></label>-->
                                    <p>Description :</p><textarea name="description" style="width: 700px;height: 150px"><?php echo $data['description'];?></textarea>
                                </div>

                                <div class="info"><br/>
                                    <input type="button" onClick="modification()" value="Envoyer" style="width:80px;height: 70px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="reset" value="Effacer" style="width:80px;height: 70px">
                                </div>
                                </fieldset>
                                </form>
                            </div>
                            <?php   } ?>
                            </section>
                            <?php include("footer.php"); ?>


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
                           
                            </body>
                            </html>