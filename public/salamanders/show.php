<?php 
require_once('../../private/initialize.php');

// $id = isset($_GET['id']) ? $_GET['id'] : '1';
$id = $_GET['id'] ?? '1'; // PHP > 7.0

$sql = "SELECT * FROM salamander ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_query($db, $sql);
confirm_result_set($result);

$salamander = mysqli_fetch_assoc($result);
mysqli_free_result($result);

$page_title = 'View Salamander';
include(SHARED_PATH . '/salamanderHeader.php'); 
?>

<a href="<?= url_for('/salamanders/index.php'); ?>">&laquo; Back to List</a>

Page ID: <?= h($id); ?>

<?php include(SHARED_PATH . '/salamanderFooter.php'); ?>
