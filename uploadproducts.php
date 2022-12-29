<?php 
class POST{
    //DB project-s-w
    private $conn;
    private $table = 'products';
    //Clients Properties
    public $name;
    public $type;
    public $price;
    public $description;
    public $img_url;

    //Constructor With DB

    public function __construct($db) {
        $this->conn = $db;
        }
        
    // Create Client
    public function create() {
        // Create query
        $query = 'INSERT INTO ' . $this->table . ' SET name = :name,type=:type,price = :price, description = :description, img_url = :img_url';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->img_url = htmlspecialchars(strip_tags($this->img_url));

        // Bind data
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':type', $this->type);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':img_url', $this->img_url);


        // Execute query
        if($stmt->execute()) {
        return true;
    }
        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;
    }

}
