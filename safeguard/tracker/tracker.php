<?php
session_start();
require('../templates/header.php');
include("../config/db.php");
echo '
  <link rel="stylesheet" href="tracker.css">
'
?>
<section class="u-clearfix u-gradient u-section-1" id="sec-e0d7">
  <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
    <h1>Tracker de glycémie</h1>
    <form>
      <label for="date">Date:</label>
      <input type="date" id="date" name="date"><br><br>

      <label for="time">Heure:</label>
      <input type="time" id="time" name="time"><br><br>

      <label for="blood-sugar">Glycémie (mg/dL):</label>
      <input type="number" id="blood-sugar" name="blood-sugar"><br><br>

      <button type="button" id="saveGlycemie">Enregistrer</button>
    </form>

    <table id="entries">
      <thead>
        <tr>
          <th>Date</th>
          <th>Heure</th>
          <th>Glycémie (mg/dL)</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM tracker";
        if ($result = $bdd->query($sql)) {
          while ($row = $result->fetch_row()) {
            echo '
          <tr>
            <td>' . $row[1] . '</td>
            <td>' . $row[2] . '</td>
            <td>' . $row[3] . '</td>
          </tr>
        ';
          }
          $result->free_result();
        }
        ?>
      </tbody>
    </table>
  </div>
</section>
<?php
echo '
  <script src="../jquery.js"></script>
  <script src="tracker.js"></script>
';
require('../templates/footer.php');
?>