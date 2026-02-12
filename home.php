<?php get_header(); ?>

<main class="container">
    <h2 id="eventi" class="section-title">Eventi Futuri</h2>
    <p class="muted" style="margin:0 0 14px">Clicca su un evento per vedere i dettagli (titolo, descrizione e data).</p>

//
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post-card">
        <h3 class="post-card-title"><?php the_title(); ?></h3>

          <?php the_post_thumbnail(); ?>
        
          <?php the_content(); ?>
          <br>
        <p>
          <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="btn btn-primary">Vai al blog</a>
        </p>
      </article>
      <?php endwhile; endif; ?>

      <h3 style="margin: 1.5rem 0 0.75rem;">Ultimi articoli</h3>

      <?php
      $query = new WP_Query( ['posts_per_page' => 3 ] );
      ?>

      <?php if ( $query->have_posts() ) : ?>
        <ul class="post-list">
          <?php 
          while ( $query->have_posts() ): $query->the_post(); 
             get_template_part('partials/post');
          endwhile; 
          ?>
        </ul>
      <?php else : ?>
        <p>Nessun articolo pubblicato.</p>
      <?php endif; ?>
    </section>
//

<?php if (have_posts()): ?>
        <ul class="post-list">
          <?php 
          while ( have_posts() ) : the_post(); 
            get_template_part('partials/post');
          endwhile; 
          ?>
        </ul>
<?php else : ?>
        <p>Nessun articolo pubblicato.</p>
<?php endif; ?>

    <hr class="sep" />

</main>

<?php get_footer(); ?>