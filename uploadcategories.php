<?php 
class POST{
    //DB project-s-w
    private $conn;
    private $table = 'categories';
    //Clients Properties
    public $type;
    //Constructor With DB
    public function __construct($db) {
        $this->conn = $db;
        }
        
    // Create Client
    public function create() {
        // Create query
        $query = 'INSERT INTO ' . $this->table . ' SET type=:type';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->type = htmlspecialchars(strip_tags($this->type));

        // Bind data
        $stmt->bindParam(':type', $this->type);


        // Execute query
        if($stmt->execute()) {
        return true;
    }
        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;
    }

}
