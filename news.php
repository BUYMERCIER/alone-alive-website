<?php

$title = "News";
require('include/header.php');

?>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Old News
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="LastNews.php">Update(26/04)</a></li>
    <li><a href="LastNews.php">Update(9/05)</a></li>
    <li><a href="LastNews.php">Update(18/05)</a></li>
    <li><a href="LastNews.php">Update(14/06)</a></li>
  </ul>
</div>


<?php

require('include/footer.php');
