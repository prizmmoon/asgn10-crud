<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $name = $_POST['name'] ?? '';
  $habitat = $_POST['habitat'] ?? '';
  $description = $_POST['description'] ?? '';
  
  $result = insert_salamander($name, $habitat, $description);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/salamanders/show.php?id=' . $new_id));
} else {
  redirect_to(url_for('salamanders/new.php'));
}

?>
