<?php get_header(); ?>

  <main class="site-main container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
    <article>
      
      <header class="single-post-header">
        
        <h1 class="single-post-title"><?php the_title(); ?></h1>
        <p class="single-post-meta">
          <?php $cats = get_the_category('eventi');
          if ( $cats ) : ?>
            in <span class="badge"><?php echo esc_html( $cats[0]->name ); ?></span>
          <?php endif; ?>
        </p>
        
      </header>

      <div class="single-post-content">
        <?php the_post_thumbnail('medium_large'); ?>
        <?php the_content(); ?>
      </div>
    </article>

    <?php endwhile; endif; ?>

  </main>

<?php get_footer(); ?>