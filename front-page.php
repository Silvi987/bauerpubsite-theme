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
          <a class="button" href="contattaci.html">Prenota un tavolo</a>
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
          <a class="button" href="contattaci.html">Contatti & mappa →</a>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>