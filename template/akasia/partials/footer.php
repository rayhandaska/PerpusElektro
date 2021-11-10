<footer class="s-footer">
  <?php
  // Promoted titles - Only show at the homepage
  if($sysconf['enable_promote_titles'] && !( isset($_GET['search']) || isset($_GET['title']) || isset($_GET['keywords']) || isset($_GET['p']) ) ) :
    // query top book
    $topbook = $dbs->query('SELECT biblio_id, title, image FROM biblio WHERE
        promoted=1 ORDER BY last_update DESC LIMIT 30');
    if ($num_rows = $topbook->num_rows) :
    ?>
    <!-- Featured
    ============================================= -->
    <div class="s-feature-content animated fadeInUp delay9">
    <div class="s-feature-list" itemscope itemtype="http://schema.org/Book" vocab="http://schema.org/" typeof="Book">
      <ul id="topbook" class="jcarousel-skin-tango">
        <?php
          while ($book = $topbook->fetch_assoc()) :
            $title = explode(" ", $book['title']);
            if (!empty($book['image'])) : ?>
            <li class="book">
              <a itemprop="name" property="name" href="./index.php?p=show_detail&amp;id=<?php echo $book['biblio_id'] ?>" title="<?php echo $book['title'] ?>">
                <img itemprop="image" src="images/docs/<?php echo $book['image'] ?>" alt="<?php echo $book['title'] ?>" />
              </a>
            </li>
            <?php else: ?>
            <li class="book">
              <a itemprop="name" property="name" href="./index.php?p=show_detail&amp;id=<?php echo $book['biblio_id'] ?>" title="<?php echo $book['title'] ?>">
                <div class="s-feature-title"><?php echo $title[0].'<br/>'.$title[1] ?><br/>...</div>
                <img itemprop="image" src="./template/default/img/book.png" alt="<?php echo $book['title'] ?>" />
              </a>
            </li>
            <?php
            endif;
          endwhile;
        ?>
      </ul>
    </div>
    </script>
    </div>
    <?php endif; ?> 
  <?php endif; ?>

  <div class="s-footer-content container">
    <div class="row">
      <div class="col-lg-6 col-sm-3 col-xs-12">
        <div class="s-footer-tagline">
          <a href="//elektro.undip.ac.id" target="_blank"><?php echo SENAYAN_VERSION; ?></a>
        </div>
      </div>
      <nav class="col-lg-6 col-sm-9 col-xs-12">
        <ul class="s-footer-menu">
          <li><a href="index.php"><?php echo __('Home'); ?></a></li>
          <li><a target="_blank" rel="archives" href="//www.facebook.com/UndipElektro">Facebook</a></li>
          <li><a target="_blank" rel="archives" href="//www.twitter.com/undip">Twitter</a></li>
          <li><a target="_blank" rel="archives" href="//www.youtube.com/c/TeknikElektroUndip">Youtube</a></li>
          <li><a target="_blank" rel="archives" href="#">Github</a></li>
          <li><a target="_blank" rel="archives" href="#">Forum</a></li>
        </ul>
      </nav>
    </div>
  </div>
</footer>
