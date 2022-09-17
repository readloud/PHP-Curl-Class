<?php
// (A) THE VARIABLES
$var = "foo";
$arr = ["Apple", "Beet", "Cherry"];
?>

<!-- (B) OUTPUT VARIABLE -->
<p><?=$var?></p>

<!-- (C) COMBINING THE USE OF DELIMITER AND SHORT TAG -->
<ul>
  <?php foreach ($arr as $fruit) { ?>
  <li><?=$fruit?></li>
  <?php } ?>
</ul>