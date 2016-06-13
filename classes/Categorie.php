<?php



class Categorie
{
    private $id_categorie;
    private $nom_categorie;
    private $db;

    /**
     * Categorie constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');

        $this->categorieInfos = array();
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * @param mixed $id_categorie
     */
    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    /**
     * @return mixed
     */
    public function getNomCategorie()
    {
        return $this->nom_categorie;
    }

    /**
     * @param mixed $nom_categorie
     */
    public function setNomCategorie($nom_categorie)
    {
        $this->nom_categorie = $nom_categorie;
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



    public function addCategorie(){
        $this->categorieInfos = array(

            'nom_categorie' => $this->nom_categorie,

        );

        return $this->getDb()->insert('categorie', $this->categorieInfos);
    }

    public function getAllCategories()
    {
        return $this->getDb()->get('categorie');
    }

    public function deleteCategorieById(){
        $this->getDb()->where('id_categorie', $this->getIdCategorie());
        return $this->getDb()->delete('categorie');
    }

}