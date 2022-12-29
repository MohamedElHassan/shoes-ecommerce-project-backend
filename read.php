<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
    include_once 'products.php';
    include_once 'Post.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new POST($db);

  // Blog post query
  $result = $post->read();
  // Get row count
  $num = $result->rowCount();

  // Check if any products
  if($num > 0) {
    // Post array
    $posts_arr = array();
    //$posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      $post_item = array(
        'id' => $id,
        'img_url' => $img_url,
        'name' => $name,
        'type' =>$type,
        'description'=>$description,
        'price'=>$price
      );

      // Push to "data"
      array_push($posts_arr, $post_item);
      // array_push($posts_arr['data'], $post_item);
    }

    // Turn to JSON & output
    echo json_encode($posts_arr);

  } else {
    // No Products
    echo json_encode(
      array('message' => 'No Products Found')
    );
  }