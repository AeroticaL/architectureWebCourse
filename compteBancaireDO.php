<?php
require_once 'compteBancaireDAO.php';

class CompteBancaireDO {
    private $compteBancaireDAO;

    public function __construct() {
        $this->compteBancaireDAO = new CompteBancaireDAO();
    }

    public function obtenirTousLesComptes() {
        return $this->compteBancaireDAO->obtenirTousLesComptes();
    }
}
