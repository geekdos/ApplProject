<?php


class Equipement
{
    private $nom;
    private $type;
    private $id_projet;
    private $equipementInfos;
    private $db;

    /**
     * Equipement constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
        $this->equipementInfos = array();
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->id_projet;
    }

    /**
     * @param mixed $id_projet
     */
    public function setIdProjet($id_projet)
    {
        $this->id_projet = $id_projet;
    }

    /**
     * @return mixed
     */
    public function getEquipementInfos()
    {
        return $this->equipementInfos;
    }

    /**
     * @param mixed $equipementInfos
     */
    public function setEquipementInfos($equipementInfos)
    {
        $this->equipementInfos = $equipementInfos;
    }

    /**
     * @return mixed
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param mixed $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }

    public function addEquipement(){
        return $this->getDb()->insert('equipement', $this->equipementInfos);
    }



}