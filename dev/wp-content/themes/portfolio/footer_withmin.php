<?php $easy_options = get_option("easy_page_options"); ?>

<footer class="footer">
  <div class="footer__follow-me">
    <h2 class="footer__follow-me__title">Suivez-moi</h2>
    <!--FACEBOOK ICON -->
    <div class="footer__follow-me__container">
      <div class="icons">
        <a href="<?php echo $easy_options['fblink'];?>" class="icons__link" target="_blank">
          Facebook
          <div class="icons__container">
            <svg class="icons__container__icon" width="56" height="56"
                 xmlns="http://www.w3.org/2000/svg">
              <g fill="none" fill-rule="evenodd">
                <path fill="#344557" d="M16 5h29v50H16z"/>
                <path d="M48.8888889 0H6.1111111C2.75 0 0 2.75 0 6.1111111v42.7777778C0 52.2530556 2.75 55 6.1111111 55H27.5V33.6111111h-6.1111111v-7.5625H27.5v-6.2638889c0-6.6122222 3.7033333-11.25666664 11.5072222-11.25666664l5.5091667.0061111v7.95972224h-3.6575c-3.0372222 0-4.1922222 2.2794444-4.1922222 4.3938889v5.1638889h7.8466666l-1.7355555 7.5594444h-6.1111111V55h12.2222222C52.25 55 55 52.2530556 55 48.8888889V6.1111111C55 2.75 52.25 0 48.8888889 0z"
                      fill="#446CB3"/>
              </g>
            </svg>
            <div class="icons__container__hover icons__container__hover-fb"></div>
          </div>
        </a>
      </div>
      <!-- GITHUB ICON -->
      <div class="icons">
        <a href="<?php echo $easy_options['gitlink'];?>" class="icons__link" target="_blank">
          Github
          <div class="icons__container">
            <svg class="icons__container__icon" width="56" height="56"
                 xmlns="http://www.w3.org/2000/svg">
              <g fill="none" fill-rule="evenodd">
                <path stroke="#979797" fill="#344557" d="M10 6h36v41H10z"/>
                <path d="M55 5.13C55 2.295 52.704 0 49.87 0H5.13C2.295 0 0 2.296 0 5.13v44.74C0 52.704 2.296 55 5.13 55h44.74c2.834 0 5.13-2.296 5.13-5.13V5.13zM31.94 32.07c1.495.942 1.925 2.12 1.925 5.307 0 3.19-.043 3.62-.035 4.356.017 1.202 1.78 1.776 1.714 2.166-.066.388-1.475.325-2.137.095-1.866-.648-1.68-2.206-1.68-2.206l-.066-4.263-.723-2.296v6.984c0 1.518 1.068 1.98 1.068 2.54 0 .966-1.94-.092-2.54-.694-.908-.914-.805-2.855-.784-4.388.023-1.48-.013-4.725-.013-4.725l-.617.012s.254 7.08-.325 8.37c-.75 1.658-3.01 2.23-3.01 1.473 0-.51.554-.346.865-1.484.26-.968.172-8.19.172-8.19s-.725.433-.725 1.785c0 .617-.017 4.153-.017 5.205 0 1.325-1.88 2.076-2.783 2.076-.457 0-1.024-.024-1.024-.266 0-.61 1.717-.968 1.717-2.243 0-1.107-.025-3.945-.025-3.945s-.867.148-2.103.148c-3.116 0-4.103-1.99-4.57-3.102-.61-1.45-1.4-2.128-2.243-2.675-.52-.333-.637-.73-.04-.84 2.76-.52 3.466 3.126 5.308 3.71 1.315.41 3.005.234 3.843-.312.11-1.113.918-2.076 1.586-2.583-4.395-.42-10.178-3.107-10.178-10.66 0-3.016.94-4.152 2.2-5.762-.965-3.438.347-5.787.347-5.787s2.028-.42 5.86 2.327c2.08-.892 7.618-.968 10.24-.198 1.608-1.062 4.55-2.57 5.737-2.15.323.517 1.014 2.025.42 5.34.403.727 2.507 2.276 2.507 6.65 0 7.26-5.65 9.792-9.87 10.225z"
                      fill="#FFF"/>
              </g>
            </svg>
            <div class="icons__container__hover icons__container__hover-github"></div>
          </div>
        </a>
      </div>
      <!-- BEHANCE ICON -->
      <div class="icons">
        <a href="<?php echo $easy_options['belink'];?>" class="icons__link" target="_blank">
          Behance
          <div class="icons__container">
            <svg class="icons__container__icon" width="56" height="56"
                 xmlns="http://www.w3.org/2000/svg">
              <g fill="none" fill-rule="evenodd">
                <path fill="#344557" d="M10 12h37v30H10z"/>
                <path d="M20.598 29.19H17.16v5.157h3.438c1.42 0 2.578-1.156 2.578-2.578s-1.155-2.58-2.578-2.58zM36.926 25.754c-1.398 0-2.632.68-3.416 1.718h6.833c-.784-1.036-2.018-1.718-3.417-1.718zM22.316 22.316c0-.948-.77-1.718-1.718-1.718H17.16v3.437h3.438c.948 0 1.718-.77 1.718-1.72z"
                      fill="#9B59B6"/>
                <path d="M49.816 0H5.13C2.295 0 0 2.296 0 5.13v44.686c0 2.833 2.296 5.13 5.13 5.13h44.686c2.833 0 5.13-2.297 5.13-5.13V5.13c0-2.834-2.296-5.13-5.13-5.13zM32.63 17.16h8.592v3.438H32.63V17.16zm-9.454 20.625H12.004V17.16h10.312c2.848 0 5.157 2.308 5.157 5.156 0 1.597-.74 3.006-1.88 3.952 2.115.93 3.598 3.042 3.598 5.5 0 3.324-2.692 6.017-6.014 6.017zm21.398-6.875H32.718c.4 1.96 2.133 3.437 4.21 3.437 1.318 0 2.483-.608 3.272-1.545l3.516.88c-1.302 2.432-3.838 4.105-6.79 4.105-4.27 0-7.733-3.464-7.733-7.735 0-4.27 3.463-7.734 7.734-7.734 4.27 0 7.735 3.463 7.735 7.734-.002.293-.057.573-.088.858z"
                      fill="#9B59B6"/>
              </g>
            </svg>
            <div class="icons__container__hover icons__container__hover-behance"></div>
          </div>
        </a>
      </div>
      <!-- TWITTER ICON -->
      <div class="icons">
        <a href="<?php echo $easy_options['twlink'];?>" class="icons__link" target="_blank">
          Twitter
          <div class="icons__container">
            <svg class="icons__container__icon" width="56" height="56"
                 xmlns="http://www.w3.org/2000/svg">
              <g fill="none" fill-rule="evenodd">
                <path fill="#344557" d="M8 6h40v42H8z"/>
                <path d="M55 5.13C55 2.295 52.704 0 49.87 0H5.13C2.295 0 0 2.296 0 5.13v44.74C0 52.704 2.296 55 5.13 55h44.74c2.834 0 5.13-2.296 5.13-5.13V5.13zM41.937 21.06c.013.314.02.627.02.943 0 9.632-7.27 20.74-20.564 20.74-4.078 0-7.884-1.208-11.08-3.274.562.066 1.124.1 1.708.1 3.383 0 6.47-1.165 8.942-3.117-3.16-.06-5.892-2.167-6.812-5.063.442.085.77.13 1.238.13.66 0 .825-.09 1.437-.254-3.31-.672-6.512-3.62-6.512-7.148v-.095c1.718.547 2.803.875 3.984.91-1.937-1.307-2.61-3.536-2.61-6.065 0-1.337.413-2.588 1.035-3.664 3.56 4.407 8.917 7.31 14.922 7.616-.122-.536-.177-1.092-.177-1.662 0-4.026 3.247-7.288 7.236-7.288 2.077 0 3.957.884 5.277 2.302 1.645-.327 3.193-.934 4.587-1.767-.538 1.7-1.682 3.128-3.174 4.032 1.462-.177 2.855-.57 4.147-1.15-.966 1.46-2.19 2.745-3.602 3.775z"
                      fill="#19A7EA"/>
              </g>
            </svg>
            <div class="icons__container__hover icons__container__hover-twitter"></div>
          </div>
        </a>
      </div>
    </div>
  </div>
  <p class="footer__contact">
    <span class="footer__contact__label">Email&nbsp;:</span> <a href="mailto:jimmy@letecheur.me" class="fotter__contact__email">jimmy@letecheur.me</a>
  </p>
  <div class="copyright">
      <span class="copyright__text">
        © Design by <a class="copyright__link" href="<?php get_home_url();?>">Jimmy Letecheur</a>
      </span>
      <span class="copyright__text">
        <a class="copyright__link" href="mailto:jimmy@letecheur.me">Contactez-moi</a>
      </span>
  </div>
</footer>
</div>
</div>
<div class="site-cache" id="site-cache"></div>
</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/scripts/output.min.js';?>"></script>
<script type="text/javascript">
  (function($){

    $('#header__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });

    $('#site-cache').click(function(e){
        $('body').removeClass('with--sidebar');
    })

  })(jQuery);
</script>
