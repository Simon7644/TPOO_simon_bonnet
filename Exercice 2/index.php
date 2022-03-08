<?php
class Ville{
    private $nom;
    private $departement;

    public function __construct($nom, $departement){
        $this->nom = $nom;
        $this->departement = $departement;
    }

    public function description()
    {
        $description = "La ville $this->nom est dans le departement $this->departement</br>"; 
        return $description;
    }
    
}

    $ville = new Ville("Toulouse", "Haute Garonne");
    echo $ville->description();

    $ville1 = new Ville("Saint-Valery-en-Caux", "Seine-Maritime");
    echo $ville1->description();

    $ville2 = new Ville("Gien", "Loiret");
    echo $ville2->description();