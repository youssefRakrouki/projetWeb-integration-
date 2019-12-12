<?php
class Vol{
    public $idVol;
    public $airline;
    public $lieu_a;
    public $lieu_d;
    public $date_d;
    public $date_r;
    public $heure_d;
    public $heure_r;
    public $prixVol;
    public $nbPlace;

    function __construct($airline,$lieu_a,$lieu_d,$date_d,$date_r,$heure_d,$heure_r,$prixVol,$nbPlace){
        $this->airline=$airline;
        $this->lieu_a=$lieu_a;
        $this->lieu_d=$lieu_d;
        $this->date_d=$date_d;
        $this->date_r=$date_r;
        $this->heure_d=$heure_d;
        $this->heure_r=$heure_r;
        $this->prixVol=$prixVol;
        $this->nbPlace=$nbPlace;
    }


    public function getPrixVol()
    {
        return $this->prixVol;
    }


    public function setPrixVol($prixVol)
    {
        $this->prixVol = $prixVol;
    }


    public function getNbPlace()
    {
        return $this->nbPlace;
    }


    public function setNbPlace($nbPlace)
    {
        $this->nbPlace = $nbPlace;
    }

    function getIdVol(){
        return $this->idVol;
    }
    function setAirline($airline){
        $this->airline=$airline;
    }
    function getAirline(){
        return $this->airline;
    }
    function setLieu_a($lieu_a){
        $this->lieu_a=$lieu_a;
    }
    function getLieu_a(){
        return $this->lieu_a;
    }
    function setLieu_d($lieu_d){
        $this->lieu_d=$lieu_d;
    }
    function getLieu_d(){
        return $this->lieu_d;
    }
    function setDate_d($date_d){
        $this->date_d=$date_d;
    }

    function getDate_d(){
        return $this->date_d;}

    function setDate_r($date_r){
        $this->date_d=$date_r;
    }
    function getDate_r(){
        return $this->date_r;
    }
    function setHeure_d($heure_d){
        $this->heure_d=$heure_d;
    }
    function getHeure_d(){
        return $this->heure_d;
    }
    function setHeure_r($heure_r){
        $this->heure_r=$heure_r;
    }
    function getHeure_r(){
        return $this->heure_r;
    }
}
?>