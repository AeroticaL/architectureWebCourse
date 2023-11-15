<?php
class BanqueAgenceBO {
    public $IdAgence;
    public $NomAgence;
    public $Adresse;
    public function __construct($id, $nomAgence, $adresse) {
        $this->IdAgence = $id;
        $this->NomAgence = $nomAgence;
        $this->Adresse = $adresse;
    }
}
?>