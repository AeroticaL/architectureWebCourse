<?php
class ClientBO {
    public $IdClient;
    public $IdConseiller;
    public $Nom;
    public $Prenom;
    public $Adresse;
    public $Situation_F;

    public function __construct($id, $idConseiller,$nom, $prenom,  $adresse, $situationF) {
        $this->IdClient = $id;
        $this->IdConseiller = $idConseiller;
        $this->Nom = $nom;
        $this->Prenom = $prenom;
        $this->Adresse = $adresse;
        $this->Situation_F = $situationF;
    }
}
?>