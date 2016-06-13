<?php


class Candidat extends Personne
{
    private $id;
    private $id_personne;
    private $cv;
    private $personneInfos;
    private $condidatInfos;

    /**
     * Candidat constructor.
     */
    public function __construct()
    {   parent::__construct();
        $this->personneInfos = array();
        $this->condidatInfos = array();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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



    public function insertCandidate(){

        $this->condidatInfos = array(
            'id_personne' => intval($this->getIdPersonne()),
            'cv' => $this->uploadCv(),
        );

        $this->getDb()->insert('candidat', $this->condidatInfos);
        $this->setId($this->getDb()->lastInsertId());
        return $this->id = $this->getDb()->lastInsertId();
    }


    public function uploadCv()
    {
        $allowed = array('png', 'jpg', 'gif', 'zip', 'docx', 'doc', 'ppt', 'rar', 'jpeg', 'pdf');
        
        $sizeMax = 33189888 * 1024; //30 Mb
        if(isset($this->cv) && $this->cv['error'] == 0){

            $extension = pathinfo($this->cv['name'], PATHINFO_EXTENSION);

            if(!in_array(strtolower($extension), $allowed) || $this->cv['size'] > $sizeMax){
                echo '{"status":"la taille ou l\'extension du fichier et invalid"}';
                exit;
            }else{
                $this->cv['name'] = 'candidate_'.$this->getIdPersonne().'.'.$extension;
                $path = '../cvs/candidates/'.$this->cv['name'];

                if(move_uploaded_file($this->cv['tmp_name'], $path)){
                    return $path;
                }
            }
        }
    }

    public function sendMail()
    {
        // Le message
        $message = "M/Mell ".$this->getNom()." ".$this->getPrenom()."\n";
        $message .= "ICR vous informe que Votre compte a ete bien crée";

        $sujet = "Inscription IRC";

        $headers = 'From: abderrahmanesalmi@gmail.com' . "\r\n" .
            'Reply-To: abderrahmanesalmi@gmail.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Dans le cas où nos lignes comportent plus de 70 caractères, nous les coupons en utilisant wordwrap()
        $message = wordwrap($message, 70, "\r\n");

        // Envoi du mail
        mail($this->getEmail(), $sujet, $message);
        mail($this->getEmail(), $sujet, $message, $headers);
    }

    public function getProfilById(){

        $this->getDb()->where('id', intval($this->getIdPersonne()));
        return $this->getDb()->get('personne');
    }
    
}