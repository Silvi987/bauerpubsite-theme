<a class="card" href="evento-karaoke-friday.html" aria-label="Apri evento: Karaoke Friday">
  <div class="top">
    <div>
      <h3><?php the_title(); ?></h3>
      <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
    </div>
    <div class="datepill"><?php the_date(); ?></div>
  </div>
  <hr class="sep" />
  <span class="button">Dettagli evento →</span>
</a>
