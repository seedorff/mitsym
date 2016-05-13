<div class="jumbotron">
  <h1>Information om opslagstavlen</h1>
  <p class="lead">Her kan en beskrivelse af opslagstavlens funktioner og muligheder fremgå. <br>Denne informationskasse kan med fordel skjules på brugerniveau.</p>
  <a class="btn btn-sm btn-primary" href="../../components/#navbar" role="button">Skjul denne besked</a>
</div><!-- /.jumbotron -->

<div class="row new-post">
  <div class="col-xs-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newpost">
      Skriv opslag
    </button>
  </div>
</div><!-- /.row -->

<div class="row">
  <section class="col-xs-12 card-columns messageboard">    

    <?php require 'inc/message_board_post.php'; ?>

    <?php require 'inc/message_board_post.php'; ?>

    <?php require 'inc/message_board_post.php'; ?>

    <?php require 'inc/message_board_post.php'; ?>

    <?php require 'inc/message_board_post.php'; ?>

    <?php require 'inc/message_board_post.php'; ?>

  </section>
</div>
<?php require_once 'inc/newpost_modal.php'; ?>