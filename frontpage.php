  <div class="jumbotron" id="alert-765456">
    <h1>Vigtig info</h1>
    <p class="lead">I dette område kan Symbion teamet orientere om vigtige og aktuelle hændelser eller informationer. Beskedområdet kan med fordel have et automatisk deaktiveringstidspunkt, der kan angives ved aktivering af beskeden.</p>
    <button class="btn btn-sm btn-primary" href="" role="button" onclick="$('#alert-765456').hide()">Skjul denne besked</button>
  </div><!-- /.jumbotron -->

  <div class="card-columns">
    
  	<?php require_once 'inc/widgets/event_feed.php'; ?>
    <?php require_once 'inc/widgets/ugemenu.php'; ?>
    <?php require_once 'inc/widgets/opslagstavle_feed.php'; ?>
    
    <div class="card card-block card-inverse card-warning">
        <h3 class="card-title">Husk parkering</h3>
        <p class="card-text">De nye parkeringsregler er trådt i kraft pr. 2. maj 2016. Ønsker du at parkere på symbions område, skal du have en gyldig p-licens.</p>
        <p class="card-text">Anvender .card-warning for baggrund.</p>
        <a href="#" class="btn btn-secondary">Indtast nummerplade</a>
    </div>
    <?php require_once 'inc/widgets/nyevirksomheder.php'; ?>

    </div><!-- /.card-columns -->
  </div>