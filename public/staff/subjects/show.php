<?php require_once('../../../private/initialize.php'); ?>

<?php
  $id = $_GET['id'] ?? '1';
?>

<?php $page_title = 'Show Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

    <a class="action" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&#8678; Back to List</a>
  
  <div class="subjects show" >

    <!-- if statement to return default id of 1 if no id sent -->
    Page ID: <?php echo h($id); ?>
  
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>