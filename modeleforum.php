<?php

function getAllTopic($bdd) {
    return $bdd->query('SELECT * FROM topicforum ORDER BY id');
}

function getAllMessageForum($bdd) {
    return $bdd->query('SELECT * FROM messageforum ORDER BY id');
}

function getTopicSouhaitOrganisateur($bdd, $nom, $commentaire, $pseudo) {
    return $bdd->query('SELECT nom,date_creation,commentaire,pseudo FROM organisateur,topicforum,categorieforum,souscategorieforum
            WHERE topicforum.id_organisateur=organisateur.id
            AND organisateur.pseudo=' . $pseudo . '
            AND topicforum.id_souscategorie=categorie.id
            AND topicforum.id_souscategorie=1
            AND topicforum.nom=' . $nom . '
            AND topicforum.commentaire=' . $commentaire . '
            ORDER BY topicforum.date_creation');
}

function getTopicSouhaitParticipant($bdd, $nom, $commentaire, $pseudo) {
    return $bdd->query('SELECT nom,date_creation,commentaire,pseudo FROM participant,topicforum,categorieforum,souscategorieforum
            WHERE topicforum.id_participant=participant.id
            AND participant.pseudo=' . $pseudo . '
           
            AND topicforum.id_souscategorieforum=categorieforum.id
            AND topicforum.id_souscategorieforum=1
            AND topicforum.nom=' . $nom . '
            AND topicforum.commentaire=' . $commentaire . '
            ORDER BY topicforum.date_creation');
}

function getTopicTaverneOrganisateur($bdd,$nom,$commentaire,$pseudo) {
    return $bdd->query('SELECT nom,date_creation,commentaire,pseudo FROM organisateur,topicforum,categorieforum,souscategorieforum
           WHERE topicforum.id_organisateur=organisateur.id
            AND organisateur.pseudo=' . $pseudo . '
            AND topicforum.id_souscategorieforum=categorieforum.id
            AND topicforum.id_souscategorieforum=2
            AND topicforum.nom=' . $nom . '
            AND topicforum.commentaire=' . $commentaire . '
            ORDER BY topicforum.date_creation');
}

function getTopicTaverneParticipant($bdd,$nom,$commentaire,$pseudo) {
    return $bdd->query('SELECT nom,date_creation,commentaire,pseudo FROM participant,topicforum,categorieforum,souscategorieforum
           WHERE topicforum.id_participant=participant.id
            AND participant.pseudo=' . $pseudo . '
            AND topicforum.id_souscategorieforum=categorieforum.id
            AND topicforum.id_souscategorieforum=2
            AND topicforum.nom=' . $nom . '
            AND topicforum.commentaire=' . $commentaire . '
            ORDER BY topicforum.date_creation');
}

function getTopicPresentationOrganisateur($bdd,$nom,$commentaire,$pseudo) {
    return $bdd->query('SELECT nom,date_creation,commentaire,pseudo FROM organisateur,topicforum,categorieforum,souscategorieforum
           WHERE topicforum.id_organisateur=organisateur.id
            AND organisateur.pseudo=' . $pseudo . '
            AND topicforum.id_souscategorieforum=categorieforum.id
            AND topicforum.id_souscategorieforum=3
            AND topicforum.nom=' . $nom . '
            AND topicforum.commentaire=' . $commentaire . '
            ORDER BY topicforum.date_creation');

}

?>