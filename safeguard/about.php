<?php
session_start();
require('templates/header.php');
include("config/db.php");
?>
    <section class="u-clearfix u-gradient u-section-1" id="sec-e0d7">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <?php
    $sql = "SELECT * FROM content_about";
    if ($result = $bdd->query($sql)) {
      while ($row = $result->fetch_row()) {
        echo '
          <div class="fr-view u-align-center u-clearfix u-rich-text u-text u-text-1 mt-2">
            <h1 style="text-align: center;">' . $row[1] . '</h1>
            <p style="text-align: center;">
              <span style="line-height: 2.0;">' . $row[2] . '</span>
            </p>
          </div>  s
        ';
      }
      $result->free_result();
    }
    ?>
    
    <?php
require('templates/footer.php');
?>