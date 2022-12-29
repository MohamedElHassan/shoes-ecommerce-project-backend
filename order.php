<?php 
class POST{
    //DB project-s-w
    private $conn;
    private $table = 'orders';
    //Clients Properties
    public $reset_id;
    public $name;
    public $address;
    public $city;
    public $zip;
    public $date;

    //Constructor With DB

    public function __construct($db) {
        $this->conn = $db;
        }
        
    // Create Client
    public function create() {
        // Create query
        $query = 'INSERT INTO ' . $this->table . ' SET reset_id = :reset_id, name = :name, address = :address, city = :city, zip= :zip, date = :date';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->reset_id = htmlspecialchars(strip_tags($this->reset_id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $this->city = htmlspecialchars(strip_tags($this->city));
        $this->zip = htmlspecialchars(strip_tags($this->zip));
        $this->date = htmlspecialchars(strip_tags($this->date));

        // Bind data
        $stmt->bindParam(':reset_id', $this->reset_id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':address', $this->address);
        $stmt->bindParam(':city', $this->city);
        $stmt->bindParam(':zip', $this->zip);
        $stmt->bindParam(':date', $this->date);


        // Execute query
        if($stmt->execute()) {
        return true;
    }
        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;
    }

}
