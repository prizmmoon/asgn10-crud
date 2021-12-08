<?php 
require_once('../../private/initialize.php');

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$salamander = find_salamander_by_id($id);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamanderHeader.php'); 
?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

<h1>Salamander: <?= h($salamander['salamanderName']) ?></h1>

<dl>
  <dt>ID</dt>
  <dd><?= h($salamander['id']) ?></dd>
</dl>
<dl>
  <dt>Name</dt>
  <dd><?= h($salamander['salamanderName']) ?></dd>
</dl>
<dl>
  <dt>Habitat</dt>
  <dd><?= h($salamander['salamanderHabitat']) ?></dd>
</dl>
<dl>
  <dt>Description</dt>
  <dd><?= h($salamander['salamanderDescription']) ?></dd>
</dl>

Page ID: <?= h($id); ?>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
