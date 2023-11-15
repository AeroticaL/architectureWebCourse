<?php
require_once 'clientDAO.php';
require_once 'clientBO.php';

class ClientDO {
    private $clientDAO;

    public function __construct() {
        $this->clientDAO = new ClientDAO();
    }
    public function getClients() {
        $clientsDTO = $this->clientDAO->getClients();
        $clientsBO = [];

        foreach ($clientsDTO as $clientDTO) {
            $clientsBO[] = new ClientBO(
                $clientDTO->IdClient,
                $clientDTO->IdConseiller,
                $clientDTO->Nom,
                $clientDTO->Prénom,
                $clientDTO->Adresse,
                $clientDTO->Situation_F
            );
        }

        return $clientsBO;
    }
    public function obtenirDetailsClient($clientId) {
        $clientDTO = $this->clientDAO->obtenirDetailsClient($clientId);

        return new ClientBO(
            $clientDTO->IdClient,
            $clientDTO->IdConseiller,
            $clientDTO->Nom,
            $clientDTO->Prenom,
            $clientDTO->Adresse,
            $clientDTO->Situation_F
        );
    }
}
?>