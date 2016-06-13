<?php

class Coequipier
{
    private $id_coequipier;
    private $nom_coequipier;
    private $prenom_coequipier;
    private $role_coequipier;
    private $id_projet;
    private $db;
    private $coequipierInfos;

    /**
     * Coequipier constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
        $this->coequipierInfos = array();
    }

    /**
     * @return mixed
     */
    public function getIdCoequipier()
    {
        return $this->id_coequipier;
    }

    /**
     * @param mixed $id_coequipier
     */
    public function setIdCoequipier($id_coequipier)
    {
        $this->id_coequipier = $id_coequipier;
    }

    /**
     * @return mixed
     */
    public function getPrenomCoequipier()
    {
        return $this->prenom_coequipier;
    }

    /**
     * @param mixed $prenom_coequipier
     */
    public function setPrenomCoequipier($prenom_coequipier)
    {
        $this->prenom_coequipier = $prenom_coequipier;
    }

    /**
     * @return mixed
     */
    public function getNomCoequipier()
    {
        return $this->nom_coequipier;
    }

    /**
     * @param mixed $nom_coequipier
     */
    public function setNomCoequipier($nom_coequipier)
    {
        $this->nom_coequipier = $nom_coequipier;
    }

    /**
     * @return mixed
     */
    public function getRoleCoequipier()
    {
        return $this->role_coequipier;
    }

    /**
     * @param mixed $role_coequipier
     */
    public function setRoleCoequipier($role_coequipier)
    {
        $this->role_coequipier = $role_coequipier;
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

    /**
     * @return array
     */
    public function getCoequipierInfos()
    {
        return $this->coequipierInfos;
    }

    /**
     * @param array $coequipierInfos
     */
    public function setCoequipierInfos($coequipierInfos)
    {
        $this->coequipierInfos = $coequipierInfos;
    }
    

    public function addCoequipier(){
        return $this->getDb()->insert('coequipier', $this->coequipierInfos);
    }   



}