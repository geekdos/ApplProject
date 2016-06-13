<?php
class Login
{
    private $username;
    private $password;
    private $id;
    private $type;
    private $db;

    /**
     * Login constructor.
     * @param $username
     * @param $password
     */
    public function __construct($username, $password)
    {
        
        $this->username = $username;
        $this->password = $password;
        $this->db = new MysqlDB('localhost', 'root', '', 'appelprojet');
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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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

    public function seConnecter()
    {
        $this->username = html_entity_decode(trim($this->username));
        $this->password = md5($this->password);
        $connect = false;
        $resulta = $this->db->get('personne');

        foreach ($resulta as $vale){
            if(($vale['email'] === $this->username) && ($vale['password'] === $this->password)){
                $this->type = $vale['type'];
                $this->id = $vale['id'];
                $connect = true;
                break;
            }
        }
        return $connect;
    }

}