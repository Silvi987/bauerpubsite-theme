<?php get_header(); ?>

  <section class="hero" aria-label="Hero">
    <div class="container content">
      <div>
        <div class="kicker"><span class="dot" aria-hidden="true"></span> Birre, cucina e musica dal vivo</div>
        <h1>Il tuo pub di quartiere, con l'atmosfera giusta.</h1>
        <p class="lead">
          Al Bauer Pub trovi spine selezionate, burger fatti bene e un calendario eventi sempre acceso.
        </p>
        <div style="margin-top:16px; display:flex; gap:10px; flex-wrap:wrap">
          <a class="button" href="#eventi">Vedi eventi ↓</a>
          <a class="button" href="<?php echo get_permalink(get_page_by_path('contattaci')) ?>">Prenota un tavolo</a>
        </div>
      </div>

      <aside class="hero-card">
        <h3>Orari & Info</h3>
        <div class="meta">
          <div class="row"><span aria-hidden="true">🕒</span> Lun–Gio 18:00–01:00 · Ven–Sab 18:00–02:00 · Dom 17:00–00:00</div>
          <div class="row"><span aria-hidden="true">🍔</span> Cucina aperta fino alle 23:30</div>
          <div class="row"><span aria-hidden="true">🎸</span> Live & DJ set ogni settimana</div>
        </div>
      </aside>
    </div>
  </section>

  <main class="container">
    <h2 id="eventi" class="section-title">Prossimi eventi</h2>
    <p class="muted" style="margin:0 0 14px">Clicca su un evento per vedere i dettagli (titolo, descrizione e data).</p>

    <div class="grid" aria-label="Elenco eventi">

    <?php
      $query = new WP_Query( ['posts_per_page' => 4 ] );
      ?>

    <?php if ( $query->have_posts() ) : ?>
    
          <?php 
          while ( $query->have_posts() ): $query->the_post(); 
             get_template_part('partials/post');
          endwhile; 
          ?>
     
      <?php else : ?>
        <p>Nessun articolo pubblicato.</p>
      <?php endif; ?>


    </div>

    <hr class="sep" />

    <div class="split">
      <div class="card">
        <h3 style="margin:0 0 8px">Cosa trovi al Bauer</h3>
        <p class="muted">
          Birre artigianali e classiche, cocktail semplici, cucina comfort e un ambiente caldo.
          Perfetto per una pinta dopo lavoro o una serata con musica.
        </p>
      </div>
      <div class="card">
        <h3 style="margin:0 0 8px">Dove siamo</h3>
        <p class="muted">
          Via del Luppolo 12, Roma (zona centrale). A due passi dalla metro. Parcheggi nelle vie limitrofe.
        </p>
        <div style="margin-top:12px">
          <a class="button" href="<?php echo get_permalink(get_page_by_path('contattaci')) ?>">Contatti & mappa →</a>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>