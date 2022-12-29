<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once 'products.php';
    include_once 'uploadproducts.php';
  // Instantiate DB & connect
$database = new Database();
$db = $database->connect();

  // Instantiate blog Client object
    $post = new POST($db);

  // Get raw Order data
    $data = json_decode(file_get_contents("php://input")) or die("");
    $post->name = $data->name or die("");
    $post->type = $data->type or die("");
    $post->price = $data->price or die("");
    $post->description = $data->description or die("");
    $post->img_url = $data->img_url;

  // Create Order
    if($post->create()) {
    echo json_encode(
    array('message' => 'product upload')
    );
} else {
    echo json_encode(
    array('message' => 'Error in upload')
    );
}
?>