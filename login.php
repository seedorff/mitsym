  <div class="row">

    <div class="logo col-xs-6"><img src="img/symbion_logo.png" alt="Symbion Intranet"></div>
    <div class="col-xs-6 login-meta">
      <div class="pull-md-right">
        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#loginhelp">
          Hjælp til login
        </button>
      </div>
    </div>

  </div>

  <div class="row">

    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">

      <div class="card">
        <div class="card-block">
          <form class="form-signin">
            <h2 class="form-signin-heading">Login</h2>
            <fieldset class="form-group">
              <label for="inputEmail">Email adresse</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </fieldset>
            <fieldset class="form-group">
              <label for="inputPassword">Brikkode</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            </fieldset>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Husk mig
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          </form>
        </div>
      </div>
      
    </div> 

  </div>
  <?php require_once 'inc/login_help_modal.php'; ?>