<?php

class Personne
{
    private $id_personne;
    private $nom;
    private $prenom;
    private $cin;
    private $dateNaiss;
    private $telephone;
    private $adress;
    private $nationalite;
    private $email;
    private $password;
    private $type;
    private $db;

    /**
     * Personne constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
        $this->type = 'candidat';
    }
    
    /**
     * @return mixed
     */
    public function getIdPersonne()
    {
        return $this->id_personne;
    }

    /**
     * @param mixed $id_personne
     */
    public function setIdPersonne($id_personne)
    {
        $this->id_personne = $id_personne;
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
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * @param mixed $dateNaiss
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * @param mixed $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * @return mixed
     */
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * @param mixed $nationalite
     */
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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


    public function insertPerson()
    {
        $personInfo = array(
            'nom' => $this->getNom(),
            'prenom' => $this->getPrenom(),
            'cin' => $this->getCin(),
            'dateNaiss' => $this->getDateNaiss(),
            'telephone' => $this->getTelephone(),
            'adress' => $this->getAdress(),
            'nationalite' => $this->getNationalite(),
            'email' => $this->getEmail(),
            'password' => $this->getPassword(),
            'type' => $this->getType(),
        );

        $this->getDb()->insert('personne', $personInfo);
        $this->setIdPersonne($this->getDb()->lastInsertId());

        return $this->id_personne = $this->getDb()->lastInsertId();
    }

    public function getCandidateIdByPersonId($id = null, $type = null)
    {
        $this->getDb()->where('	id_personne', $id);
        $typeId = $this->getDb()->get($type);
        return intval($typeId[0]['id_'.$type]);
    }

    public function deletePersonneById(){
        $this->getDb()->where('id', $this->getIdPersonne());
        return $this->getDb()->delete('personne');
    }
}