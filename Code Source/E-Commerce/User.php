<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author makhtas
 */
class User implements IUser {

    protected $_id;
    protected $_nom;
    protected $_prenom;
    protected $_pseudo;
    protected $_email;
    protected $_password;
    protected $_refCivilite;
    protected $_dateDeNaiisance;

    function _construct($id, $nom, $prenom, $email, $password, $dateNaissance, $pseudo, $refCivilite) {
        $this->_id = $id;
        $this->_email = $email;
        $this->_pseudo = $pseudo;
        $this->_nom = $nom;
        $this->_password = $password;
        $this->_prenom = $prenom;
        $this->_refCivilite = $refCivilite;
        $this->_dateDeNaiisance = $dateNaissance;
    }

    function afficherUser() {
        return new User();
    }

    function getNomUser() {

        return $this->_nom;
    }

    function getPrenomUser() {
        return $this->_prenom;
    }

    function getPseudoUser() {
        return $this->_pseudo;
    }

    function getEmailUser() {
        return $this->_email;
    }

    function getPasswordUser() {
        return $this->_password;
    }

    function getDateNaissanceUser() {
        return $this->_dateDeNaiisance;
    }

    function getRefCiviliteUser() {
        return $this->_refCivilite;
    }

}

?>
