<?php 
  // Headers

use LDAP\Result;

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
    include_once 'products.php';
    include_once 'login.php';
  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();
  // Instantiate blog client object
  $post = new POST($db);

  // Blog clients query
  $result=$post->read();
  // Get row count
  $num=$result->rowCount();

  // Check if any clients
  if($num > 0) {
    // Post array
    $posts_arr = array();
    //$posts_arr['data'] = array();

    // Turn to JSON & output
    echo json_encode(array('message'=>'good'));

  } else {
    // No Products
    echo json_encode(
      array('message' => 'No clients Found')
    );
  }