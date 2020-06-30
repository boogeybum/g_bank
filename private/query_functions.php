<?php

  function find_all_subjects() {
    global $db;

    $sql = "SELECT * FROM SUBJECTS ";
    $sql .= "ORDER BY position ASC";
    $result = mysqli_query($db, $sql);
    return $result;
  }

?>