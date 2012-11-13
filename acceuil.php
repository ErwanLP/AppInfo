<?php
if (!empty($_SESSION['ID'])) {
    ?>
    <section>
        <article>
            <div class="titreArticle">
                <h2><span> Acceuil</span></h2>
            </div>
            <div class="page">
        <FORM>
            <INPUT TYPE="button" VALUE="Je me connecte en tant que Participant" onClick="switchParticipant()">
            <INPUT TYPE="button" VALUE="Je me connecte en tant que Organisateur" onClick="switchOrganisateur()">
        </FORM>
            </div>
        </article>
        <?php include("aside.php"); ?>
    </section>
    <?php
} else {
    ?>
    <section>
        <article>
            <div class="titreArticle">
                <h2><span> Acceuil</span></h2>
            </div>
            <div class="page">

                <?php
                $result = $bdd->query('SELECT * FROM  compte WHERE 1');
                while ($data = $result->fetch()) {
                    echo $data['nomDeCompte'];
                }
                $result->closeCursor();
                ?>
            </div>
        </article>
        <?php include("aside.php"); ?>
    </section>
    <?php
}
?>   









