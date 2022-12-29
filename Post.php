<?php 
class POST{
    //DB Products
    private $conn;
    private $table = 'products';
    //Product Properties
    public $img_url;
    public $id;
    public $name;
    public $type;
    public $description;
    public $price;
    
    //Constructor With DB

    public function __construct($db) {
        $this->conn = $db;
        }
     // Get Posts
    public function read(){
        //Create query
        $query='SELECT id,name,type,description,price,img_url
        FROM 
        '.$this->table;
  // Prepare statement
$stmt = $this->conn->prepare($query);

  // Execute query
$stmt->execute();

return $stmt;
    }
}