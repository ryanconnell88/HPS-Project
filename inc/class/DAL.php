<?php

class DAL {

    private $userName;
    private $userPassword;
    public $isValid;

    function __constructor() {}

    // Connecting to database using credentials form config.php file    
    function db_connect() {
        static $connection;
        
        $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB, DB_PORT)
            or die("Failed to connect to MySQL: " . mysqli_connect_error());
            
        if($connection) {
            echo "MySQL database connected successfully.<br><br>";
        }        
        return $connection;
    }
    

    // Get username
    function getUsername() {
        return $this->userName;                     
    }

    // Get password
    function getPassword() {
        return $this->userPassword;                     
    }

    // Set username
    function setUsername($userName) {
        $this->userName = $userName;               
    }    

    // Set password
    function setPassword($userPassword) {
        $this->userPassword = $userPassword;
        // return $this->userPassword;
    } 
    
    // Create query to take username and password from database
    function getLoginCredentials($userName, $userPassword, $db) {
       $sql = "SELECT * FROM login WHERE username='$userName' AND user_password='$userPassword'";
       $result = mysqli_query($db, $sql);
       if (!$result) {
            return mysqli_connect_error();        
        } else {
            return $result;
        }     
    }
    
    // Chech match of the credentials in database
    function loginValidation($query) {
        global $isValid;
        $isValid = true;
        $count = mysqli_num_rows($query);
        if($count == 0) {          
           header('Location: pages/landing.php'); /* Redirect browser */
           return $isValid;
        } else {
            /* Redirect browser */
            header('Location: index.php?error');
            exit();
         }   
       
    }
}    

?>