
    <div class="header">
      <div class="row">
        <div class="logo col-xs-6"><img src="img/symbion_logo.png" alt="Symbion Intranet"></div>
        <div class="col-xs-6 login-meta">
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

    </div> <!-- /header -->
    <?php require_once 'inc/login_help_modal.php'; ?>