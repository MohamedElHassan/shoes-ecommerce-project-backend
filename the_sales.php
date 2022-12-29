<?php 
class POST{
    //DB project-s-w
    private $conn;
    private $table = 'the_sales';
    //Clients Properties
    public $product_name;
    public $price;
    public $quantity;
    public $date;

    //Constructor With DB

    public function __construct($db) {
        $this->conn = $db;
        }
        
    // Create Client
    public function create() {
        // Create query
        $query = 'INSERT INTO ' . $this->table . ' SET product_name = :product_name, price = :price, quantity = :quantity, date = :date';

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->product_name = htmlspecialchars(strip_tags($this->product_name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->quantity = htmlspecialchars(strip_tags($this->quantity));
        $this->date = htmlspecialchars(strip_tags($this->date));

        // Bind data
        $stmt->bindParam(':product_name', $this->product_name);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':quantity', $this->quantity);
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
