<?php 
class POST{
    //DB Products
    private $conn;
    private $table = 'clients';
    //Product Properties
    public $email;
    public $password;
    
    //Constructor With DB

    public function __construct($db) {
        $this->conn = $db;
        }
     // Get Posts
    public function read(){
        //Create query
        $email =$_GET['email'];
        $password=$_GET['password'];
        $query="SELECT email,password
        FROM clients WHERE email='$email' AND `password` ='$password'";
  // Prepare statement
$stmt = $this->conn->prepare($query);

  // Execute query
$stmt->execute();
return $stmt;

    }
    
}
