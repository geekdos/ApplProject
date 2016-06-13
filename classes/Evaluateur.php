<?php

class Evaluateur extends Personne
{
    private $id_personne;
    private $discipline;
    private $domainerecherche;
    private $etablissementrattache;
    private $cv;
    private $evaluateurInfos;

    /**
     * Evaluateur constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->evaluateurInfos = array();
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
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * @param mixed $discipline
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;
    }

    /**
     * @return mixed
     */
    public function getDomainerecherche()
    {
        return $this->domainerecherche;
    }

    /**
     * @param mixed $domainerecherche
     */
    public function setDomainerecherche($domainerecherche)
    {
        $this->domainerecherche = $domainerecherche;
    }

    /**
     * @return mixed
     */
    public function getEtablissementrattache()
    {
        return $this->etablissementrattache;
    }

    /**
     * @param mixed $etablissementrattache
     */
    public function setEtablissementrattache($etablissementrattache)
    {
        $this->etablissementrattache = $etablissementrattache;
    }

    /**
     * @return mixed
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param mixed $cv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    }

    /**
     * @return array
     */
    public function getEvaluateurInfos()
    {
        return $this->evaluateurInfos;
    }

    /**
     * @param array $evaluateurInfos
     */
    public function setEvaluateurInfos($evaluateurInfos)
    {
        $this->evaluateurInfos = $evaluateurInfos;
    }

    

    public function addEvaluator(){
        $this->evaluateurInfos = array(
            'id_personne' => intval($this->getIdPersonne()),
            'discipline' => $this->discipline,
            'domainerecherche' => $this->domainerecherche,
            'etablissementrattache' => $this->etablissementrattache,
            'cv' => $this->uploadCvEva(),
        );

        return $this->getDb()->insert('evaluator', $this->evaluateurInfos);
    }

    public function getAllEvaluators(){
        $this->getDb()->where('type', 'evaluator');
        $personnes = $this->getDb()->get('personne');
        $evaluators = array();
        foreach ($personnes as $values){
            $id = $values['id'];
            $evaluator = new Evaluateur();
            $evaluator->setNom($values['nom']);
            $evaluator->setPrenom($values['prenom']);
            $evaluator->setCin($values['cin']);
            $evaluator->setEmail($values['email']);
            $evaluator->setIdPersonne($id);
            $evaluator->getDb()->where('id_personne', $id);
            $evaInfo = $evaluator->getDb()->get('evaluator');
            $evaluator->setDiscipline($evaInfo[0]['discipline']);
            $evaluator->setDomainerecherche($evaInfo[0]['domainerecherche']);

            $evaluators [] = $evaluator;
        }

        return $evaluators;
    }

    public function uploadCvEva()
    {
        $allowed = array('png', 'jpg', 'gif', 'zip', 'docx', 'doc', 'ppt', 'rar', 'jpeg', 'pdf');

        $sizeMax = 33189888 * 1024; //30 Mb
        if(isset($this->cv) && $this->cv['error'] == 0){

            $extension = pathinfo($this->cv['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($extension), $allowed) || $this->cv['size'] > $sizeMax){
                echo '{"status":"la taille ou l\'extension du fichier et invalid"}';
                exit;
            }else{
                $this->cv['name'] = 'evaluateur_'.$this->getIdPersonne().'.'.$extension;
                $path = '../cvs/evaluateurs/'.$this->cv['name'];

                if(move_uploaded_file($this->cv['tmp_name'], $path)){
                    return $path;
                }
            }
        }
    }
    

}