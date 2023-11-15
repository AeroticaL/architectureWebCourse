<?php
class ConseillerBO {
    public $IdConseiller;
    public $Nom;
    public $Prenom;
    public $IdAgence;
   
  
    

    public function __construct($id,$nom, $prenom, $idAgence ) {
        $this->IdConseiller = $id;
        $this->IdAgence = $idAgence;
        $this->Prenom = $prenom;
        $this->Nom = $nom;
     
    }
}
?>