<div class="jumbotron">
  <h1>Information om opslagstavlen</h1>
  <p class="lead">Her kan en beskrivelse af opslagstavlens funktioner og muligheder fremgå. <br>Denne informationskasse kan med fordel skjules på brugerniveau.</p>
  <a class="btn btn-sm btn-primary" href="../../components/#navbar" role="button">Skjul denne besked</a>
</div><!-- /.jumbotron -->

<div class="row">
  <div class="col-md-4">
    <div class="card card-block">
        <h4 class="card-title">Nyt opslag</h4>
        <form accept-charset="UTF-8" action="" method="POST">
            <fieldset class="form-group">
                
                
                <select class="selecttags" multiple="multiple">
                  <option value="begivenhed">begivenhed</option>
                  <option value="sælges">saelges</option>
                </select>
                

              </fieldset>
            <fieldset class="form-group">
              <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Din opslagstekst"></textarea>
            </fieldset>
            <button class="btn btn-info" type="submit">Gem opslag</button>
        </form>
    </div>
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