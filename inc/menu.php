<ul class="nav navbar-nav">
  <li class="nav-item <?php if (!isset($_GET['page'])): ?> active<?php endif; ?>">
    <a class="nav-link" href="<?php echo $site_url; ?>" title="Overblikket"><i class="fa fa-th"></i> <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item <?php if (($_GET['page'] === 'min-side')): ?> active<?php endif; ?>">
    <a class="nav-link" href="<?php echo $site_url; ?>/?page=min-side">Min side</a>
  </li>
  <li class="nav-item <?php if (($_GET['page'] === 'viden')): ?> active<?php endif; ?>">
    <a class="nav-link" href="<?php echo $site_url; ?>/?page=viden">Viden</a>
  </li>
  <li class="nav-item <?php if (($_GET['page'] === 'opslagstavlen') || isset($_GET['post-id'])): ?> active<?php endif; ?>">
    <a class="nav-link" href="<?php echo $site_url; ?>/?page=opslagstavlen">Opslagstavlen</a>
  </li>
  <li class="nav-item <?php if (($_GET['page'] === 'praktisk-info')): ?> active<?php endif; ?>">
    <a class="nav-link" href="<?php echo $site_url; ?>/?page=praktisk-info">Praktisk info</a>
  </li>
  <li class="nav-item <?php if (($_GET['page'] === 'booking')): ?> active<?php endif; ?>">
    <a class="nav-link" href="<?php echo $site_url; ?>/?page=booking">Booking</a>
  </li>
</ul>