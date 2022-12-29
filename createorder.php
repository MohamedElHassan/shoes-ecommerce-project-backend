<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once 'products.php';
    include_once 'order.php';
  // Instantiate DB & connect
$database = new Database();
$db = $database->connect();

  // Instantiate blog Client object
    $post = new POST($db);

  // Get raw Order data
    $data = json_decode(file_get_contents("php://input")) or die("");
    $post->name = $data->name or die("");
    $post->address = $data->address or die("");
    $post->city = $data->city or die("");
    $post->zip = $data->zip or die("");
    $post->date = $data->date;

  // Create Order
    if($post->create()) {
    echo json_encode(
    array('message' => 'Order register')
    );
} else {
    echo json_encode(
    array('message' => 'Error in register')
    );
}
?>