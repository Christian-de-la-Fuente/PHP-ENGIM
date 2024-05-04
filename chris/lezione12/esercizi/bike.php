<?php

class Bike {
    // Proprietà
    private $color;
    private $owner;

    // Metodo per impostare il colore della bici
    public function setColor($color) {
        $this->color = $color;
    }

    // Metodo per impostare il proprietario della bici
    public function setOwner($owner) {
        $this->owner = $owner;
    }

    // Metodo per ottenere i dati della bici
    public function getData() {
        return "Proprietario: " . $this->owner . ", Colore: " . $this->color;
    }
}

// Esempio di utilizzo
$myBike = new Bike();
$myBike->setColor("Rosso");
$myBike->setOwner("Rosso Malpelo");
echo $myBike->getData(); // Output: Proprietario: Rosso Malpelo, Colore: Rosso