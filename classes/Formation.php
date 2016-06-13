<?php

class Formation
{
    private $nom_formation;
    private $diplome;
    private $id_candidat;
    private $infoFromation;
    private $db;

    /**
     * Formation constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
        $this->infoFromation = array();
    }

    /**
     * @return mixed
     */
    public function getNomFormation()
    {
        return $this->nom_formation;
    }

    /**
     * @param mixed $nom_formation
     */
    public function setNomFormation($nom_formation)
    {
        $this->nom_formation = $nom_formation;
    }

    /**
     * @return mixed
     */
    public function getDiplome()
    {
        return $this->diplome;
    }

    /**
     * @param mixed $diplome
     */
    public function setDiplome($diplome)
    {
        $this->diplome = $diplome;
    }

    /**
     * @return mixed
     */
    public function getIdCandidat()
    {
        return $this->id_candidat;
    }

    /**
     * @param mixed $id_candidat
     */
    public function setIdCandidat($id_candidat)
    {
        $this->id_candidat = $id_candidat;
    }

    /**
     * @return mixed
     */
    public function getInfoFromation()
    {
        return $this->infoFromation;
    }

    /**
     * @param mixed $infoFromation
     */
    public function setInfoFromation($infoFromation)
    {
        $this->infoFromation = $infoFromation;
    }

    public function addFormation()
    {
        $this->db->insert('formation',$this->infoFromation);
    }

}