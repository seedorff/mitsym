<div class="jumbotron" id="alert-23432">
  <h1>Information om opslagstavlen</h1>
  <p class="lead">Her kan en beskrivelse af opslagstavlens funktioner og muligheder fremgå. <br>Denne informationskasse kan med fordel skjules på brugerniveau.</p>
  <button class="btn btn-sm btn-primary" href="" role="button" onclick="$('#alert-23432').hide()">Skjul denne besked</button>
</div><!-- /.jumbotron -->

<div class="row new-post">
  <div class="col-xs-12">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#newpost">
      Skriv opslag
    </button>
  </div>
</div><!-- /.row -->

<div class="filter-container">
  
  <input id="select-type-all" name="filter-selector" type="radio" class="filter-type-all" checked="checked">
  <label for="select-type-all" class="filter-type-all">Alle</label>
  
  <input id="select-type-saelges" name="filter-selector" type="radio" class="filter-saelges">
  <label for="select-type-saelges" class="filter-label-type-saelges">Sælges</label>
  
  <input id="select-type-koebes" name="filter-selector" type="radio" class="filter-koebes">
  <label for="select-type-koebes" class="filter-label-type-koebes">Købes</label>
  
  <input id="select-type-begivenheder" name="filter-selector" type="radio" class="filter-begivenheder">
  <label for="select-type-begivenheder" class="filter-label-type-begivenheder">Begivenheder</label>      
  
  <section class="card-columns-2 messageboard">    

    <?php require 'inc/message_board_post.php'; ?>

  </section>
</div>
<?php require_once 'inc/newpost_modal.php'; ?>