<?php require_once('../../../private/initialize.php'); ?>

<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  
  <div class="">
    <a class="action" href="<?php echo url_for('/staff/pages/index.php'); ?>">&#8678; Back to List</a>
  </div>


  Page ID: 
  <?php
    $id = $_GET['id'] ?? '1';
    echo h($id);
  ?>
  

</div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>