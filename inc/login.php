<?php if (($_GET['login'] === 'false')):?>
<form class="form-inline">
  <fieldset class="form-group signin">
    <input type="text" class="form-control form-control-sm" placeholder="Email" id="login-email">
    <input type="password" class="form-control form-control-sm" placeholder="Brik-kode" id="login-brikkode">
  </fieldset>
  <a href="<?php echo $site_url; ?>" type="submit" class="btn btn-primary btn-sm"><i class="fa fa-chevron-right"></i></a>
</form>
<?php else: ?>
<div class="current-user">
<strong><span class="hidden-xs-down">Logget ind som </span><a href="<?php echo $site_url; ?>/?page=min-side">John Doe</a></strong><br>
<a href="<?php echo $site_url; ?>/login.php">Log ud</a>
</div>
<?php endif; ?>