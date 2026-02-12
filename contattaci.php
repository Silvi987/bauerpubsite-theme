<!doctype html>
<html lang="it">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contattaci — Bauer Pub</title>
  <meta name="description" content="Contatti, mappa e come prenotare." />
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
  <div class="container nav">
    <a class="brand" href="index.html">
      <span class="logo" aria-hidden="true">
        <svg viewBox="0 0 24 24" role="img" aria-label="Logo Bauer Pub">
          <path d="M7 3h10a2 2 0 0 1 2 2v4a2 2 0 0 1-1 1.73V18a3 3 0 0 1-3 3H9a3 3 0 0 1-3-3V10.73A2 2 0 0 1 5 9V5a2 2 0 0 1 2-2Zm1.5 4V9h7V7h-7ZM9 11v7a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-7H9Z"/>
        </svg>
      </span>
      <span>Bauer Pub</span>
    </a>

    <nav class="navlinks" aria-label="Menu principale">
      <a href="index.html">Home</a>
      <a href="chi-siamo.html">Chi siamo</a>
      <a href="contattaci.html">Contattaci</a>
    </nav>
  </div>
</header>

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

  <footer>
  <div class="container">
    <div class="small">
      <strong>Bauer Pub</strong> — Via del Luppolo 12, 00100 Roma · Tel. +39 06 1234 5678 ·
      <a href="mailto:info@bauerpub.it">info@bauerpub.it</a>
    </div>
    <div class="small muted" style="margin-top:8px">
      © 2026 Bauer Pub. Tutti i diritti riservati.
    </div>
  </div>
</footer>
</body>
</html>