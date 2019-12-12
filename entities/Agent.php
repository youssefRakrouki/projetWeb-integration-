<?php


class Agent
{
    private $cin;
    private $nom;
    private $prenom;
    private $email;
    private $numTel;
    private $userName;
    private $mdp;
    private $role;
    private $salaire;

    function __construct($cin,$nom,$prenom,$email,$numTel,$userName,$mdp,$role,$salaire){
        $this->cin=$cin;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->numTel=$numTel;
        $this->userName=$userName;
        $this->mdp=$mdp;
        $this->role=$role;
        $this->salaire=$salaire;
    }

    public function getCin()
    {
        return $this->cin;
    }

    public function setCin($cin)
    {
        $this->cin = $cin;
    }


    public function getNom()
    {
        return $this->nom;
    }


    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function getNumTel()
    {
        return $this->numTel;
    }


    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;
    }


    public function getUserName()
    {
        return $this->userName;
    }


    public function setUserName($userName)
    {
        $this->userName = $userName;
    }


    public function getMdp()
    {
        return $this->mdp;
    }


    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
    }


    public function getRole()
    {
        return $this->role;
    }


    public function setRole($role)
    {
        $this->role = $role;
    }


    public function getSalaire()
    {
        return $this->salaire;
    }


    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }



}