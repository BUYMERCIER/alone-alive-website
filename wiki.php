<?php

$title = "Wiki";
require('include/header.php');

?>

<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Nos monstres</a></li>
    <li><a data-toggle="tab" href="#menu1">Nos objets</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Nos monstres</h3>
      <p>contenu ici</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Nos objets</h3>

      <!-- objet 1 -->

      <a class="btn btn-primary" role="button" data-toggle="collapse" href="#1" aria-expanded="false" aria-controls="collapseExample">
        Objet 1
      </a>
      <div class="collapse" id="1">
        <div class="well">
          ...1
        </div>
      </div>

      <!-- objet 2 -->

      <a class="btn btn-primary" role="button" data-toggle="collapse" href="#2" aria-expanded="false" aria-controls="collapseExample">
        Objet 2
      </a>
      <div class="collapse" id="2">
        <div class="well">
          ...2
        </div>
      </div>

    </div>
  </div>
</div>

<?php

require('include/footer.php');
