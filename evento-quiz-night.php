<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <span>Evento</span>
    </div>

    <div class="event-hero">
      <div class="badge">📅 Giovedì 29 gennaio 2026</div>
      <h2 style="margin-top:10px">Quiz Night a squadre</h2>
      <p style="margin:10px 0 0; color:rgba(233,238,245,.88)">Sfida a domande (musica, cinema, cultura pop). Forma la tua squadra, prenota un tavolo e punta al podio: premi per i primi classificati e birra in promo per tutta la serata.</p>

      <div style="margin-top:14px; display:flex; gap:10px; flex-wrap:wrap">
        <a class="button" href="index.html#eventi">← Altri eventi</a>
        <a class="button" href="<?php echo get_permalink(get_page_by_path('contattaci')) ?>">Prenota / Info</a>
      </div>
    </div>

    <h3 class="section-title">Altri eventi</h3>
    <div class="grid" aria-label="Altri eventi">
      <a class="card" href="evento-karaoke-friday.html" aria-label="Apri evento: Karaoke Friday">
  <div class="top">
    <div>
      <h3>Karaoke Friday</h3>
      <p>Microfono aperto, classici intramontabili e tante risate. Porta gli amici e scegli il tuo pezzo!</p>
    </div>
    <div class="datepill">16/01/2026</div>
  </div>
  <hr class="sep" />
  <span class="button">Dettagli evento →</span>
</a>
<a class="card" href="evento-live-jazz-night.html" aria-label="Apri evento: Live Jazz Night">
  <div class="top">
    <div>
      <h3>Live Jazz Night</h3>
      <p>Serata jazz con trio dal vivo: standard, improvvisazione e atmosfera calda da pub.</p>
    </div>
    <div class="datepill">23/01/2026</div>
  </div>
  <hr class="sep" />
  <span class="button">Dettagli evento →</span>
</a>
<a class="card" href="evento-quiz-night.html" aria-label="Apri evento: Quiz Night a squadre">
  <div class="top">
    <div>
      <h3>Quiz Night a squadre</h3>
      <p>Sfida a domande (musica, cinema, cultura pop). Premi per i primi classificati e birra in promo.</p>
    </div>
    <div class="datepill">29/01/2026</div>
  </div>
  <hr class="sep" />
  <span class="button">Dettagli evento →</span>
</a>
<a class="card" href="evento-burger-beer-pairing.html" aria-label="Apri evento: Burger & Beer Pairing">
  <div class="top">
    <div>
      <h3>Burger & Beer Pairing</h3>
      <p>Degustazione guidata: 3 mini-burger + 3 birre abbinate. Posti limitati, consigliata prenotazione.</p>
    </div>
    <div class="datepill">06/02/2026</div>
  </div>
  <hr class="sep" />
  <span class="button">Dettagli evento →</span>
</a>
    </div>
  </main>

  <?php get_footer(); ?>