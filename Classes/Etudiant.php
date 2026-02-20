<?php

/**
 * Modèle Etudiant 
 * Version optimisée pour éviter la redondance de code
 */
class Etudiant {
    private ?int $id;
    private string $nom;
    private string $prenom;
    private string $ville;
    private string $sexe;

    // Constructeur avec valeurs par défaut
    public function __construct(?int $id = null, string $nom = "", string $prenom = "", string $ville = "", string $sexe = "") {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ville = $ville;
        $this->sexe = $sexe;
    }

    // --- Getters avec déclaration de type de retour ---

    public function getId(): ?int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function getVille(): string {
        return $this->ville;
    }

    public function getSexe(): string {
        return $this->sexe;
    }

    // --- Setters avec fluid interface (optionnel mais pro) ---

    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function setVille(string $ville): void {
        $this->ville = $ville;
    }

    public function setSexe(string $sexe): void {
        $this->sexe = $sexe;
    }

    /**
     * Représentation textuelle de l'objet
     */
    public function __toString(): string {
        return sprintf("%s %s", strtoupper($this->nom), $this->prenom);
    }
}