<?php
class Personne{
    private $nom;
    private $prenom;
    private $adresse;

    public function __construct($nom, $prenom, $adresse){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
    }

    public function getpersonne()
    {
        $description = "La personne nommée $this->nom et prénommée $this->prenom a pour adresse $this->adresse</br></br>"; 
        return $description;
    }

    public function setadresse($adresse)
    {
        $this->adresse = $adresse;
    }
    
}

    $personne = new Personne("Bonnet", "Simon", "40 rue Ella Maillart");
    $personne->setadresse("123 avenue 4");
    echo $personne->getpersonne();
    
    $personne1 = new Personne("Bandicoot", "Crash", "Ile wumpa");
    echo $personne1->getpersonne();

    $personne2 = new Personne("Hedgehog", "Sonic", "Green Hills");
    echo $personne2->getpersonne();

    