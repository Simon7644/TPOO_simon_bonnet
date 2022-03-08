<?php
class Ville{
    public $nom;
    public $departement;


    public function description()
    {
        $description = "La ville $this->nom est dans le departement $this->departement</br>"; 
        return $description;
    }
    
}

    $ville = new Ville();
    $ville->nom="Toulouse";
    $ville->departement="Haute Garonne";
    echo $ville->description();

    $ville1 = new Ville();
    $ville1->nom="Saint-Valery-en-Caux";
    $ville1->departement="Seine-Maritime";
    echo $ville1->description();

    $ville2 = new Ville();
    $ville2->nom="Gien";
    $ville2->departement="Loiret";
    echo $ville2->description();