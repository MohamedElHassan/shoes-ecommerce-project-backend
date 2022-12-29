<?php 
class POST{
    //DB project-s-w
    private $conn;
    private $table = 'clients';
    //Clients Properties
    public $id;
    public $name;
    public $email;
    public $password;
    //Constructor With DB

    public function __construct($db) {
        $this->conn = $db;
        }
        
    // Create Client
    public function create() {
        // Create query
        $query = 'INSERT INTO ' . $this->table . ' SET id = :id, name = :name, email = :email, password = :password';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));

        // Bind data
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);

        // Execute query
        if($stmt->execute()) {
        return true;
    }
        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;
    }

}
