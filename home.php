<?php get_header(); ?>

<main class="container">
    <h2 id="eventi" class="section-title">Eventi Futuri</h2>
    <p class="muted" style="margin:0 0 14px">Clicca su un evento per vedere i dettagli (titolo, descrizione e data).</p>

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