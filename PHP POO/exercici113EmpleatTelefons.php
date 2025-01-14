<?php
class Empleat {
    private $nom;
    private $llinatges;
    private $sou;
    private $telefons = [];

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

    // Afegeix un telèfon a la matriu
    public function afegirTelefon(int $telefon) : void {
        $this->telefons[] = $telefon;
    }

    // Mostra els telèfons separats per comes
    public function llistarTelefons() : string {
        return implode(", ", $this->telefons);
    }

    // Elimina tots els telèfons
    public function buidarTelefons() : void {
        $this->telefons = [];
    }
}

// Exemple d'ús
$empleat = new Empleat("Joan", "Garcia", 3500);
$empleat->afegirTelefon(123456789);
$empleat->afegirTelefon(987654321);
echo $empleat->llistarTelefons();  // 123456789, 987654321
$empleat->buidarTelefons();
echo $empleat->llistarTelefons();  // (buit)
?>

