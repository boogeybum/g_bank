<?php

require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/pages/index.php'));
}

$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';

?>