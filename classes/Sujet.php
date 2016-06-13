<?php


class Sujet
{
    private $id_sujet;
    private $nom_sujet;
    private $subjectInfo;
    private $db;

    /**
     * Sujet constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
        $this->subjectInfo = array();
    }

    /**
     * @return mixed
     */
    public function getNomSujet()
    {
        return $this->nom_sujet;
    }

    /**
     * @param mixed $nom_sujet
     */
    public function setNomSujet($nom_sujet)
    {
        $this->nom_sujet = $nom_sujet;
    }

    /**
     * @return mixed
     */
    public function getIdSujet()
    {
        return $this->id_sujet;
    }

    /**
     * @param mixed $id_sujet
     */
    public function setIdSujet($id_sujet)
    {
        $this->id_sujet = $id_sujet;
    }


    /**
     * @return MysqlDB
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * @param MysqlDB $db
     */
    public function setDb($db)
    {
        $this->db = $db;
    }


    public function addSubject($idCategories = null){

        $this->subjectInfo = array(
            'nom_sujet' => $this->getNomSujet(),
            'id_categorie' => $idCategories,
        );

        return $this->getDb()->insert('sujet', $this->subjectInfo);
    }
    public  function getAllSubjectCat($id_categorie = NULL){
        $this->getDb()->where('id_categorie', $id_categorie);
        return $this->getDb()->get('sujet');
        
    }
    public  function getAllSubject(){
        return $this->getDb()->get('sujet');

    }

    public function deleteSujetById(){
        $this->getDb()->where('id_sujet', $this->getIdSujet());
        return $this->getDb()->delete('sujet');
    }


}