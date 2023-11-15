<?php
require_once 'LigneCompteDAO.php';

class LigneCompteDO {
    private $ligneCompteDAO;

    public function __construct() {
        $this->ligneCompteDAO = new LigneCompteDAO();
    }
    public function getAllLignesCompte() {
        return $this->ligneCompteDAO->getAllLignesCompte();
    }
}
?>