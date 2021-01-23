<?php 

require_once('database.php');

/**
 * Class user
 */
class User
{

    private $id;
    private $username;
    private $password;
    private $creationDate;
    private $status;
    private $admin;
    
    function __construct($id, $username, $password, $creationDate, $status, $admin)
    {
        $this->id           = $id;
        $this->username     = $username;
        $this->password     = $password;
        $this->creationDate = $creationDate;
        $this->status       = $status;
        $this->admin        = $admin;
    }


    /* Getters */
        public function getId(){
            return $this->id;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getCreationDate(){
            return $this->creationDate;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getAdmin(){
            return $this->admin;
        }
    /* End Getters */

    /* Setters */
        public function setId($id){
            $this->id = $id;
        }

        public function setUsername($username){
            $this->username = $username;
        }

        public function setCreationDate($creationDate){
            $this->creationDate = $creationDate;
        }

        public function setStatus($status){
            $this->status = $status;
        }

        public function setAdmin($admin){
            $this->admin = $admin;
        }
    /* End Setters */


    public static function Create($username, $password) {
        $query = "INSERT INTO user (username, password) VALUES ('$username', '$password');";

        $db = new Database();       
        $result = $db->RunQuery($query);
        User::Login($username, $password);
    }

    public static function Login($username, $password) {
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password';";

        $db = new Database();       
        $result = $db->RunQuery($query);
        if ($result) {
            $result = mysqli_fetch_assoc($result);
            session_start();
            $_SESSION['user_id']  = $result['id'];
            $_SESSION['username'] = $result['username'];
            header("Location: /");
        }
    }

}

?>