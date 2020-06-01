<?php

require_once('../../../private/initialize.php');

?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back to List</a>

  <div class="page edit">
  <h1>Edit Page</h1>

    <form action="<?php echo url_for('/staff/pages/edit.php?id=1'); ?>" method="post">
      <dl>
        <dt>Page Name</dt>
        <dd><input type="text" name="menu_name" value=""></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
        <input type="hidden" name="visible" value="0">
        <input type="checkbox" name="visible" value="1">
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Page">
      </div>
    </form>
    
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>