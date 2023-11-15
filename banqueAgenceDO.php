<?php
require_once 'banqueAgenceDAO.php';
class BanqueAgenceDO {
    private $banqueAgenceDAO;
    public function __construct() {
        $this->banqueAgenceDAO = new BanqueAgenceDAO();
    }
    public function getAgences() {
        return $this->banqueAgenceDAO->getAgences();
    }
}
?>


