<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="inc/favicon.ico">

    <title>Symbion Intranet</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="css/select2/select2.min.css" rel="stylesheet" type='text/css'>
    <link href="css/style.css" rel="stylesheet" type='text/css'>
    <!-- JS -->
    <script src="js/searchfield/modernizr.custom.js"></script>
  </head>

  <body>
    <div class="container header">
      <div class="row">
        <div class="logo col-xs-6"><img src="img/symbion_logo.png" alt="Symbion Intranet"></div>
        <div class="col-xs-6">
          <div class="pull-md-right">
            <a type="button" class="" data-toggle="modal" data-target="#loginhelp">
              Hjælp til login
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputEmail" class="sr-only">Email adresse</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Brikkode</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Husk mig
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> <!-- /container -->
    <?php require_once 'inc/login_help_modal.php'; ?>

      <!-- Bootstrap core JavaScript
      ================================================== -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
      <script src="bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
      <script src="http://v4-alpha.getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
      <script src="js/searchfield/classie.js"></script>
      <script src="js/searchfield/uisearch.js"></script>
      <script src="js/select2/select2.min.js"></script>
      <script>
          new UISearch( document.getElementById( 'sb-search' ) );
          
        $(document).ready(function() {
          $(".selecttags").select2({
              placeholder: 'Vælg kategori'
          });
        });
          
      </script>
    </body>
  </html>