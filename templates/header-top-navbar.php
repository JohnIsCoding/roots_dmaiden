<div class="container">
<header id="banner" class="navbar" role="banner">
  <?php roots_header_inside(); ?>
  <div class="navbar-inner">
    <div class="<?php echo WRAP_CLASSES; ?>">
     <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      
      <div class="row">
      <div class="span3">
      <ul class="tagline">
      <li class="desc">Fine Art</li>
      <li class="desc">Portraiture</li>
      </ul>
      </div>
        
        <div class="span6 offset3">
         <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'walker' => new Roots_Navbar_Nav_Walker(), 'menu_class' => 'nav')); ?>
      </nav>
        </div> <!-- .span6 -->
      </div> <!-- .row -->
    </div>
  </div>
</header>
</div> <!-- container -->