<?php get_header(); ?>

  <main class="container">
    <div class="breadcrumb">
      <a href="index.html">Home</a> <span>›</span> <span>Contattaci</span>
    </div>

    <h2 class="section-title">Contattaci</h2>

    <div class="split">
      <section class="card">
        <h3 style="margin:0 0 8px">Prenotazioni & info</h3>
        <p class="muted" style="margin-top:0">
          Questo sito è 100% statico (senza JavaScript). Per scriverci, usa i contatti qui sotto oppure il link email.
        </p>

        <div style="margin-top:14px; display:grid; gap:10px">
          <div class="badge">☎️ +39 06 1234 5678</div>
          <a class="badge" href="mailto:info@bauerpub.it?subject=Richiesta%20dal%20sito%20Bauer%20Pub">✉️ info@bauerpub.it</a>
          <div class="badge">📍 Via del Luppolo 12, 00100 Roma</div>
        </div>

        <hr class="sep" />

        <h3 style="margin:0 0 10px">Messaggio rapido</h3>
        <p class="small muted" style="margin-top:0">
          (Nota: l'invio via <em>mailto</em> dipende dal client email del dispositivo.)
        </p>

        <form class="form" action="mailto:info@bauerpub.it" method="post" enctype="text/plain">
          <div>
            <label class="small" for="nome">Nome</label>
            <input id="nome" name="Nome" placeholder="Es. Marco" />
          </div>
          <div>
            <label class="small" for="email">Email</label>
            <input id="email" name="Email" type="email" placeholder="Es. marco@email.it" />
          </div>
          <div>
            <label class="small" for="messaggio">Messaggio</label>
            <textarea id="messaggio" name="Messaggio" placeholder="Scrivi qui..."></textarea>
          </div>
          <button class="button" type="submit">Apri email →</button>
        </form>
      </section>

      <aside class="card">
        <h3 style="margin:0 0 10px">Mappa</h3>
        <div style="border-radius:16px; overflow:hidden; border:1px solid var(--border)">
          <iframe
            title="Mappa Bauer Pub"
            width="100%"
            height="320"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.openstreetmap.org/export/embed.html?bbox=12.483%2C41.893%2C12.503%2C41.903&layer=mapnik">
          </iframe>
        </div>
        <p class="small muted" style="margin-top:10px">
          (Coordinate demo: sostituisci il link con la posizione reale.)
        </p>

        <hr class="sep" />

        <h3 style="margin:0 0 8px">Orari</h3>
        <p class="muted" style="margin:0">Lun–Gio 18:00–01:00</p>
        <p class="muted" style="margin:6px 0 0">Ven–Sab 18:00–02:00</p>
        <p class="muted" style="margin:6px 0 0">Dom 17:00–00:00</p>
      </aside>
    </div>
  </main>

<?php get_footer(); ?>