<?php 
//post loop
$url="inc/feeds/opslagstavle_posts.json";
$json=file_get_contents($url);
$data=json_decode($json,true);

foreach($data as $key => $post){ 
if ($post['posted-in'] === 'Sælges'):
    $posted_in_class = 'saelges';
elseif ($post['posted-in'] === 'Købes'):
    $posted_in_class = 'koebes';
elseif ($post['posted-in'] === 'Begivenheder'):
    $posted_in_class = 'begivenheder';
endif;
?>
<article class="card card-block post <?php echo $posted_in_class; ?>">
    <div class="dropdown">
        <span type="button" data-toggle="dropdown">
            <i class="dropdown-toggle"></i>
        </span>
        <ul class="dropdown-menu" role="menu">
            <li class="dropdown-item" role="presentation"><a role="menuitem" tabindex="-1" href="#">Redigér</a></li>
            <li class="dropdown-item" role="presentation"><a role="menuitem" tabindex="-1" href="#">Slet</a></li>
        </ul>
    </div>

    <header class="post-heading">
        <img class="pull-left" src="<?php echo $post['author-img']; ?>" alt="User image" />
        <h5><?php echo $post['author']; ?><i class="fa fa-caret-right text-muted"></i><span class="posted-in"><?php echo $post['posted-in']; ?></span></h5>
        <div class="post-meta text-muted"><span class="post-date"><?php echo $post['post-date']; ?></span></div>
    </header>
    <h4 class="post-title"><a href="<?php echo $site_url; ?>/?post-id=<?php echo $post['id']; ?>"><?php echo $post['post-title']; ?></a></h4>
    <div class="post-body collapsed-post">
        <p><?php echo $post['the-post']; ?></p>
    </div>
    <footer class="post-footer">
        <a href="mailto:<?php echo $post['author-email']; ?>">Kontakt <?php echo $post['author']; ?></a> 
    </footer>
</article>
<?php } ?>