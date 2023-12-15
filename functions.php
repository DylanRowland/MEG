<?php session_start();
require($_SERVER['DOCUMENT_ROOT'].'/db.php');

  function nav() {
    echo '<div class="navbar">';
    echo '<a href="index.php">Home</a>';
    echo '<a href="#">About</a>';
    echo '<a href="#">Contact</a>';
    echo '<a href="#">Services</a>';
    echo '<a href="#">Portfolio</a>';
    echo '</div>';
  }


?>
