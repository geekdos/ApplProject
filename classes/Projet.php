<?php


class Projet
{
    private $id_projet;
    private $titre;
    private $objectif;
    private $duree;
    private $budget;
    private $priorite;
    private $id_candidate;
    private $nom_sujet;
    private $id_sujet;
    private $resume;
    private $status;
    private $db;

    /**
     * Projet constructor.
     */
    public function __construct()
    {
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
        $this->projetInfos = array();
        $this->status = 'enAttente';
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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getObjectif()
    {
        return $this->objectif;
    }

    /**
     * @param mixed $objectif
     */
    public function setObjectif($objectif)
    {
        $this->objectif = $objectif;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param mixed $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    }

    /**
     * @return mixed
     */
    public function getPriorite()
    {
        return $this->priorite;
    }

    /**
     * @param mixed $priorite
     */
    public function setPriorite($priorite)
    {
        $this->priorite = $priorite;
    }

    /**
     * @return mixed
     */
    public function getIdCandidate()
    {
        return $this->id_candidate;
    }

    /**
     * @param mixed $id_candidate
     */
    public function setIdCandidate($id_candidate)
    {
        $this->id_candidate = $id_candidate;
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
     * @return mixed
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * @param mixed $resume
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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

    /**
     * @return array
     */
    public function getProjetInfos()
    {
        return $this->projetInfos;
    }

    /**
     * @param array $projetInfos
     */
    public function setProjetInfos($projetInfos)
    {
        $this->projetInfos = $projetInfos;
    }

    public function addProjet(){
        $this->projetInfo = array(
            'titre' => $this->getTitre(),
            'objectif' => $this->getObjectif(),
            'duree' => $this->getDuree(),
            'budget' => doubleval($this->getBudget()),
            'priorite' => $this->getPriorite(),
            'id_condidat' => $this->getIdCandidate(),
            'id_sujet' => $this->id_sujet,
            'resume_projet' => $this->uploadResume(),
            'status' => $this->getStatus(),
        );

        $this->getDb()->insert('projet', $this->projetInfo);
        $this->setIdProjet($this->getDb()->lastInsertId());
        
        return $this->id_projet = $this->getDb()->lastInsertId();
    }

    public function uploadResume()
    {
        $allowed = array('png', 'jpg', 'gif', 'zip', 'docx', 'doc', 'ppt', 'rar', 'jpeg', 'pdf');

        $sizeMax = 33189888 * 1024; //30 Mb
        if(isset($this->resume) && $this->resume['error'] == 0){

            $extension = pathinfo($this->resume['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($extension), $allowed) || $this->resume['size'] > $sizeMax){
                echo '{"status":"la taille ou l\'extension du fichier et invalid"}';
                exit;
            }else{
                $this->resume['name'] = 'projet_'.$this->getIdCandidate()."_".str_replace(' ', '_', $this->getTitre()).'.'.$extension;
                $path = '../cvs/resumes/'.$this->resume['name'];

                if(move_uploaded_file($this->resume['tmp_name'], $path)){
                    return $path;
                }
            }
        }

        return false;
    }

    public function getAllProjectByCandidateId(){
        $this->getDb()->where('id_condidat', $this->id_candidate);
        $projects = $this->getDb()->get('projet');

        $projectsList = array();
        foreach ($projects as $values){
            $project = new Projet();

            $project->setIdSujet($values['id_sujet']);
            $project->setIdProjet($values['id_projet']);

            $project->setTitre($values['titre']);
            $project->setPriorite($values['priorite']);
            $project->setStatus($values['status']);

            $project->getDb()->where('id_sujet', $project->getIdSujet());
            $evaInfo = $project->getDb()->get('sujet');
            $project->setNomSujet($evaInfo[0]['nom_sujet']);

            $projectsList [] = $project;
        }
        return $projectsList;
    }

    public function deleteProjectById(){
        $this->getDb()->where('id_projet', $this->getIdProjet());
        return $this->getDb()->delete('projet');
    }

}