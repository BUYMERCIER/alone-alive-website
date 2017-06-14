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
                  <img src="../img/scythe.png" alt="scyhte" style="width:width;height:height;">
                  "The Scythe of the Archnomage" est un objet qui confère 25 dégats et 10 dégats brut ainsi que 7 points de mobilité.
                  C'est un objet extrêmement offensif très orienté pour la chasse d'autres joueurs.C'est un objet pour les joueurs ayant un style d'assassin.
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
                  <img src="../img/ring.png" alt="ring" style="width:width;height:height;">
                  Malgré sa petite taille, "the Ring of the reaper" est un objet extrémement puissant si bien utilisé puisque celui-ci tue instantanément tous les ennemis ayant moins de 5% de leur santé.
                  Si un ennemi (un monstre ou un joueur) est tué par cet effet, "the Ring of the reaper" confère un buff cummulable durant 1 min 30 donnant 5 ou 10 points de vie supplémentaires selon s'il s'agit d'un monstre ou d'un autre joueur. si une nouvelle charge se cumule la durée est remise à 1min30.  
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
                  <img src="../img/heartofmino.png" alt="heart" style="width:width;height:height;">
                  S'il vous arrive de tuer un des MinoTaurus lors d'un combat corps à corps, vous allez avoir la chance de récupérer son coeur.
                  "The Heart of Mino" est un objet qui donne 500 points de vie supplémentaires. De plus cet objet soigne le joueur, s'il n'a subit aucun dégât depuis plus de 5 secondes d'un montant équivalent à 5% de ses points de vie 
                </div>
              </div>
            </div>
             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    The crown of the Fallen King 
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <img src="../img/crown.png" alt="crown" style="width:width;height:height;">
                  "the crown of the fallen king" est un objet provenant d'un Roi qui a été décapité par les monstres présent maintenant sur la carte, nous pouvons toujours observer les vestiges de son château à l'horizon.
                  "the crown of the fallen king" donne 250 points de vie supplémentaires, 8 points de mobilité et 8\% de vol de vie. Gardez la à portée de main, elle peut s'avérer très utile dans les cas de mort imminente. 
                </div>
              </div>
            </div>
             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    The FireStone 
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <img src="../img/firestone.png" alt="firestone" style="width:width;height:height;">
                  "the Firestone" est un objet qui donne 200 points de vie et 5 points de mobilité supplémentaires.

                  Il s'agit d'un objet particulièrement puissant puisqu'il inflige 5 dégats par seconde à toutes les entités à moins de 10 unités de distance.

                  Cet objet est présent de façon aléatoire sur la carte, vous pouvez savoir si un de vos adversaires possède des pouvoirs provenant de la FireStone car celle-ci laisse echapper des particules rouges.
                </div>
              </div>
            </div>
             <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    The saber of the Antagonist 
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <img src="../img/antagonist-saber.png" alt="antagonist-saber" style="width:width;height:height;">
                  Tout comme le "mask of the Antagonist",  la seule façon de récupérer cette arme est de tuer le monstre éponyme.
                  Ce sabre est une arme redoutable et la récupérer pourra vous permettre d'avoir des capacités redoutables face à vos adversaires.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    The mask of the antagonist  
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  <img src="../img/antagonist-mask.png" alt="antagonist-mask" style="width:width;height:height;">
                  Vous pourrez accéder à cet objet si vous parvenez à tuer le monstre The Antagonist.
                  "the mask of the antagonist" est un objet qui donne 100 points de vie supplémentaire et 25 dégats.
                  Il s'agit donc d'un objet assez équilibrés ayant à la fois des caractéristiques offensives et défensives.
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
