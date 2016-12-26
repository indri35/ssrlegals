<header id="navbar" role="banner">
  <div class="header-main container">
    <div class="logo col-md-6 col-sm-6">
        <a href="/"><img class="img-responsive" width="494" height="101" src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
    </div>        
    <div class="info col-md-6 col-sm-6">
        <br />
        <br />
        <br />
        <div class="contact pull-right">
            <p class="phone"><i class="fa fa-phone"></i>(021) 82403072</p> 
            <p class="email"><i class="fa fa-envelope"></i>sdazkia@gmail.com | smpazkia@gmail.com</p>
        </div>
    </div>
  </div>

  <div  class="<?php print $navbar_classes; ?>">
    <div class="navbar-header">
      <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?php print t('Toggle navigation'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <?php endif; ?>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php else: print("<ul class='menu nav navbar-nav secondary navbar-right'><li class='first leaf'><a href='/user/login'>Member login</a></li></ul>"); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>

  </div>
</header>

<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->

  <div class="row">

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>

    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if (!empty($page['slideshow'])): ?>
        <?php print render($page['slideshow']); ?>
      <?php endif; ?>
      <?php if (!empty($page['banner_psb'])): ?>
        <?php print render($page['banner_psb']); ?>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="col-sm-3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

<footer class="footer">
  <?php if (!empty($page['footer_md1']) || !empty($page['footer_md2']) || !empty($page['footer_md3']) || !empty($page['footer_md4'])): ?>
    <div class="footer-content  <?php print $container_class; ?>">
      <div class="row">
        <?php if (!empty($page['footer_md1'])): ?>
          <div class="col-md-3" >
            <?php print render($page['footer_md1']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_md2'])): ?>
          <div class="col-md-3" >
            <?php print render($page['footer_md2']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_md3'])): ?>
          <div class="col-md-3" >
            <?php print render($page['footer_md3']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_md4'])): ?>
          <div class="col-md-3" >
            <?php print render($page['footer_md4']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <?php endif; ?>
  <?php if (!empty($page['footer_bottom'])): ?>
    <div class="footer-bottom  <?php print $container_class; ?>">  
      <?php print render($page['footer_bottom']); ?>
    </div>
  <?php endif; ?>
</footer>
