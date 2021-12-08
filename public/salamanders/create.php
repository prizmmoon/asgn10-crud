<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $salamanderName = $_POST['salamanderName'] ?? '';
  $salamanderHabitat = $_POST['salamanderHabitat'] ?? '';
  $salamanderDescription = $_POST['salamanderDescription'] ?? '';
  
  $result = insert_salamander($salamanderName, $salamanderHabitat, $salamanderDescription);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/salamanders/show.php?id=' . $new_id));
} else {
  redirect_to(url_for('salamanders/new.php'));
}

?>
