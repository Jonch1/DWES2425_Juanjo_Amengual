<?php
class Empleat {
    private $nom;
    private $llinatges;
    private $sou;

    public function __construct($nom, $llinatges, $sou) {
        $this->nom = $nom;
        $this->llinatges = $llinatges;
        $this->sou = $sou;
    }

    // Getters
    public function getNom() {
        return $this->nom;
    }

    public function getLlinatges() {
        return $this->llinatges;
    }

    public function getSou() {
        return $this->sou;
    }

    // Setters
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setLlinatges($llinatges) {
        $this->llinatges = $llinatges;
    }

    public function setSou($sou) {
        $this->sou = $sou;
    }

    // Mètode per obtenir el nom complet
    public function getNomComplet() {
        return $this->nom . ' ' . $this->llinatges;
    }

    // Mètode per saber si ha de pagar impostos
    public function hadePagarImpostos() {
        return $this->sou > 3333;
    }
}

// Exemple d'ús
$empleat = new Empleat("Joan", "Garcia", 3500);
echo $empleat->getNomComplet();  // Joan Garcia
echo $empleat->hadePagarImpostos() ? 'True' : 'False';  // True
?>

