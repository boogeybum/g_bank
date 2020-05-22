<?php require_once('../../../private/initialize.php'); ?>


<?php

$id = $_GET['id'] ?? '1'; //if statement to return default id of 1 if no id sent

echo h($id);

?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br>
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a><br>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a><br>
