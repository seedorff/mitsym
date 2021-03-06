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

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900,300|Roboto:400,300,700|Fira+Sans:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- FontAwesome icon font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <!-- Select2 -->
    <link href="css/select2/select2.min.css" rel="stylesheet" type='text/css'>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    
    <!-- Bootstrap 4 + custom css -->
    <link href="css/style.min.css" rel="stylesheet" type='text/css'>

    <!-- JS -->
    <script src="js/searchfield/modernizr.custom.js"></script>
  </head>

  <body style="background-image: url(<?php echo $site_url; ?>/img/rand_bg.php)">
    <?php if (!($_GET['page'] === 'login')):?>
    <div class="container header">
      <div class="row">
        <div class="logo col-xs-6"><a href="<?php echo $site_url; ?>"><img src="img/symbion_logo.png" alt="Symbion Intranet"></a></div>
        <div class="col-xs-6 login-meta">
          <div class="pull-md-right">
            <div class="current-user">
              <strong><span class="hidden-xs-down">Logget ind som </span><a href="<?php echo $site_url; ?>/?page=min-side">John Doe</a></strong><br>
              <a href="<?php echo $site_url; ?>/?page=login">Log ud</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-bg bg-primary m-b-2">
      <div class="container">
        <div class="navbar row navbar-dark">
          <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
              &#9776;
          </button>
          <div class="collapse navbar-toggleable-md" id="navbar-header">
            <div class="row">
              <div class="col-lg-8">
                <?php require_once 'inc/menu.php'; ?>
              </div>
              <div class="col-lg-4 pull-lg-right">
                <div id="sb-search" class="sb-search">
                  <form>
                    <input class="sb-search-input" placeholder="Søg i virksomheder" type="search" value="" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search bg-info fa fa-search"></span>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    <div class="container">