<?php
  // Headers
  header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once 'products.php';
    include_once 'uploadcategories.php';
  // Instantiate DB & connect
$database = new Database();
$db = $database->connect();

  // Instantiate blog Client object
    $post = new POST($db);

  // Get raw Order data
    $data = json_decode(file_get_contents("php://input")) or die("");
    $post->type = $data->type;

  // Create Order
    if($post->create()) {
    echo json_encode(
    array('message' => 'categorie upload')
    );
} else {
    echo json_encode(
    array('message' => 'Error in upload')
    );
}
?>