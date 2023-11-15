<?php
require_once 'conseillerDAO.php';

class ConseillerDO {
    private $conseillerDAO;

    public function __construct() {
        $this->conseillerDAO = new ConseillerDAO();
    }

    public function getConseillers() {
        return $this->conseillerDAO->getConseillers();
    }
}
?>