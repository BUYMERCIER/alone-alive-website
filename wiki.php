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
      <!--  -->
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#1" aria-expanded="true" aria-controls="collapseOne">
                MinoTaurus
              </a>
            </h4>
          </div>
          <div id="1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
              MinoTaurus est le monstre principal du camp des minotaures.
              
              <img src="../img/Minotaurus.png" alt="MinoTaurus" style="width:width;height:height;"> 
              MinoTaurus est une sorte de taureau sur deux pattes avec de longues cornes, il a une silhouette plutôt athlétique, en bref il ressemble au célèbre minotaure.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#2" aria-expanded="false" aria-controls="collapseTwo">
                Taurus
              </a>
            </h4>
          </div>
          <div id="2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
             Le camp des minotaures contient 2 Taurus.
             <img src="../img/Taurus.png" alt="Taurus" style="width:width;height:height;">
             Taurus ressemble à MinoTaurus il s’agit aussi d’un taureau sur deux pattes, mais cette fois-ci, plus petit et bedonnant.
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#3" aria-expanded="false" aria-controls="collapseThree">
                TheAntagonist
              </a>
            </h4>
          </div>
          <div id="3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
            Le camp des Antagonistes contient 3 mob "The Antagonist".
            <img src="../img/Antagonist.png" alt="Antagonist" style="width:width;height:height;">
            The Antagonist ressemble à un joueur avec une peau noire, un masque et une épée blanche. The Antagonist , est posséder par des esprit malveillant qui détruise petit a petit son âme. Celle si  s’échappe lentement de son corps, créant un halo autour de lui. Cette caractéristique lui donne un aspect unique et le rend reconnaissable rapidement.  
            </div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#4" aria-expanded="false" aria-controls="collapseThree">
                Kanima
              </a>
            </h4>
          </div>
          <div id="4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
            Le Kanima n'a pas de camp. Il se balade dans les forets a la recherche d'adversaire.
             <img src="../img/Kanima.png" alt="Kanima" style="width:width;height:height;">
            Le Kanima est inspiré d’une créature surnaturelle qu’on retrouve dans le Bestiaire, il ressemble à un lézard humanoïde, il a des griffes très coupantes sur sa tête et sur la longueur de son dos.  
            </div>
          </div>
        </div>
      </div>
      <!--  -->
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Nos objets</h3>

          <!--  -->
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    The Scythe of the Archnomage
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    The Ring of the Reaper
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    The Heart of Mino
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
          <!--  -->


    </div>
  </div>
</div>

<?php

require('include/footer.php');
