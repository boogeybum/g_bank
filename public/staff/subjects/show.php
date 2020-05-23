<?php require_once('../../../private/initialize.php'); ?>


<?php $page_title = 'Show Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <div>
    <a class="action" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&#8678; Back to List</a>
  
  </div>


  Page ID:
  <!-- if statement to return default id of 1 if no id sent -->
  <?php
  $id = $_GET['id'] ?? '1'; 
  echo h($id);
  ?>

  <!-- strings for demonstrating urlencode use cases -->
  <a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br>
  <a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br>
  <a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br>

</div>


<?php include(SHARED_PATH . '/staff_footer.php'); ?>


