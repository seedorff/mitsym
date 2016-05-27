  <div class="jumbotron" id="alert-765456">
    <h1>Vigtig info</h1>
    <p class="lead">I dette område kan Symbion teamet orientere om vigtige og aktuelle hændelser eller informationer. Beskedområdet kan med fordel have et automatisk deaktiveringstidspunkt, der kan angives ved aktivering af beskeden.</p>
    <button class="btn btn-sm btn-primary" href="" role="button" onclick="$('#alert-765456').hide()">Skjul denne besked</button>
  </div><!-- /.jumbotron -->

  <div class="card-columns">
    
  	<?php require_once 'inc/widgets/event_feed.php'; ?>
    <?php require_once 'inc/widgets/ugemenu.php'; ?>
    <?php require_once 'inc/widgets/opslagstavle_feed.php'; ?>
    <?php require_once 'inc/widgets/nyevirksomheder.php'; ?>
    <?php require_once 'inc/widgets/symbion_paqle_feed.php'; ?>
    <?php require_once 'inc/widgets/orbit_paqle_feed.php'; ?>
    <?php require_once 'inc/widgets/blog_feed.php'; ?>

    </div><!-- /.card-columns -->
  </div>