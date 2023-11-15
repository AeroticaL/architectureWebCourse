<?php
class LigneCompteBO {
    public $IdLigneCompte;
    public $Description;
    public $Montant;
    public $IdCompte;

    public function __construct($id, $description, $montant,  $idCompte) {
        $this->IdLigneCompte = $id;
        $this->Description = $description;
        $this->Montant = $montant;
        $this->IdCompte = $idCompte;
    }
}
?>