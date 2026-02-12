<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <?php wp_head(); ?>
  
</head>
<body  <?php body_class(); ?>>
  <header>
  <div class="container nav">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
      <span class="logo" aria-hidden="true">
        <svg viewBox="0 0 24 24" role="img" aria-label="Logo Bauer Pub">
          <path d="M7 3h10a2 2 0 0 1 2 2v4a2 2 0 0 1-1 1.73V18a3 3 0 0 1-3 3H9a3 3 0 0 1-3-3V10.73A2 2 0 0 1 5 9V5a2 2 0 0 1 2-2Zm1.5 4V9h7V7h-7ZM9 11v7a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-7H9Z"/>
        </svg>
      </span>
      <span><?php bloginfo('name'); ?></span>
    </a>

    <nav class="navlinks" aria-label="Menu principale">
      <?php
       wp_nav_menu( array(
         'theme_location' => 'primary',
         'container'      => false,
         'fallback_cb'    => false,
         'items_wrap'     => '%3$s', // niente <ul>, usiamo direttamente i <a> (lo stile li prende lo stesso)
       ) );
       ?>
    </nav>
  </div>
</header>

