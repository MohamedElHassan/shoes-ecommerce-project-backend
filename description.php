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
        $id = $_GET['pid'];
        //Create query
        $query="SELECT name,type,description,price,img_url
        FROM products WHERE id='$id'";
  // Prepare statement
$stmt = $this->conn->prepare($query);

  // Execute query
$stmt->execute();

return $stmt;
    }
}