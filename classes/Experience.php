<?php


class Experience
{
    private $nom_experience;
    private $discription;
    private $id_candidat;
    private $infoExperience;
    private $db;

    /**
     * Experience constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
        $this->infoExperience = array();
    }

    /**
     * @return mixed
     */
    public function getNomExperience()
    {
        return $this->nom_experience;
    }

    /**
     * @param mixed $nom_experience
     */
    public function setNomExperience($nom_experience)
    {
        $this->nom_experience = $nom_experience;
    }

    /**
     * @return mixed
     */
    public function getDiscription()
    {
        return $this->discription;
    }

    /**
     * @param mixed $discription
     */
    public function setDiscription($discription)
    {
        $this->discription = $discription;
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
    public function getInfoExperience()
    {
        return $this->infoExperience;
    }

    /**
     * @param mixed $infoExperience
     */
    public function setInfoExperience($infoExperience)
    {
        $this->infoExperience = $infoExperience;
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

    public function addExperience()
    {
        $this->db->insert('experience',$this->infoExperience);
    }



}