<?php
class CompteBancaireBancaireBO {
    public $IdCompteBancaire;
    public $TypeCompteBancaire;
    public $Solde;
    public $IdClient;
    public $IdConseiller;

    public function __construct($id, $idClient, $typeCompteBancaire, $solde, $idConseiller) {
      $this->IdCompteBancaire = $id;
      $this->TypeCompteBancaire = $typeCompteBancaire;
      $this->Solde = $solde;
      $this->IdClient = $idClient;
      $this->IdConseiller = $idConseiller;
    }
}
?>