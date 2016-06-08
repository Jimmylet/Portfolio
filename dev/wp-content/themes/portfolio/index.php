<?php
/*
Template Name: Homepage
*/

get_header();
$easy_options = get_option("easy_page_options");

?>
          <section class="welcome">
            <div class="welcome__wrap">
              <span class="welcome__text1">Bonjour&nbsp;!</span>
              <h2 class="welcome__text2">Je suis Jimmy Letecheur, un webdesigner belge</h2>
            </div>
          </section>
          <section class="home-content">
            <div class="home-content__container">
              <h2 aria-level="2" class="home-content__title">
                Je conçois des sites web
              </h2>

              <div class="introduction__computer-container">
                <svg width="550" height="143" viewBox="0 0 248 143"
                     xmlns="http://www.w3.org/2000/svg">
                  <g fill="none" fill-rule="evenodd">
                    <g>
                      <g>
                        <g class="computer__text1" font-weight="bold"
                           font-family="Bariol-Bold, Bariol"
                           letter-spacing=".503" fill="#FFF" font-size="20"
                           fill-opacity=".6">
                          <text transform="rotate(-6 410.242 -676.712)">
                            <tspan x="36.427" y="19.29">Webdesign</tspan>
                          </text>
                          <text transform="rotate(6 -224.108 900.08)">
                            <tspan x="1.376" y="54.078">Ergonomie</tspan>
                          </text>
                          <text transform="rotate(-11 274.538 -285.132)">
                            <tspan x="59.259" y="89.128">UX</tspan>
                          </text>
                        </g>
                        <g class="computer__text2" font-weight="bold"
                           font-family="Bariol-Bold, Bariol"
                           letter-spacing=".503" fill="#FFF" font-size="20"
                           fill-opacity=".6">
                          <text transform="rotate(-17 160.52 -267.86)">
                            <tspan x="43.722" y="104">PHP</tspan>
                          </text>
                          <text transform="rotate(9 22.743 767.914)">
                            <tspan x="1.829" y="63.219">Javascript</tspan>
                          </text>
                          <text transform="rotate(-8 182.725 -771.687)">
                            <tspan x="2.588" y="22.5">HTML/CSS</tspan>
                          </text>
                        </g>
                        <g>
                          <path d="M126.513 132.525H26.475V6.84c0-3.778 3.062-6.84 6.84-6.84H214.58c3.78 0 6.84 3.062 6.84 6.84v125.685h-94.907z"
                                fill="#3D3D3D"/>
                          <path d="M247.07 132.525c0 5.666-4.505 10.26-10.064 10.26H10.89c-5.56 0-10.066-4.594-10.066-10.26H247.07z"
                                fill="#E9E9E9"/>
                          <polygon fill="#00BAC8"
                                   points="32 125.845 216.687 125.845 216.687 7 32 7"/>
                          <path d="M141.05 132.525c0 1.89-1.564 3.42-3.495 3.42H110.34c-1.928 0-3.494-1.53-3.494-3.42h34.205z"
                                fill="#B3B2B2"/>
                        </g>
                        <g class="computer__screenbloc" transform="translate(47 20)"
                           fill="#009FBA">
                          <rect x="59.911" y="89.937" width="29.619" height="11.881"/>
                          <rect x="100.35" width="49.091" height="7.5"/>
                          <rect x="119.823" y="89.937" width="29.619" height="11.881"/>
                          <rect width="80" height="15"/>
                          <rect y="25.124" width="149.441" height="34.659"/>
                          <rect y="69.906" width="149.441" height="4.612"/>
                          <rect x="34" y="79" width="92.918" height="4.612"/>
                          <rect x="4.381" y="89.937" width="29.619" height="11.931"/>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <article class="home-content__card">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/logo_design.svg';?>" alt="" class="home-content__card__img" width="140" height="140">
                <h3 aria-level="3" class="home-content__card__title">
                  <?php echo the_field("home_design_title"); ?>
                </h3>
                <p class="home-content__card__paragraph">
                  <?php echo the_field("home_design_content"); ?>
                </p>
              </article>
              <article class="home-content__card">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/logo_code.svg';?>" alt="" class="home-content__card__img" width="140" height="140">
                <h3 aria-level="3" class="home-content__card__title">
                  <?php echo the_field("home_dev_title"); ?>
                </h3>
                <p class="home-content__card__paragraph">
                  <?php echo the_field("home_dev_content"); ?>
                </p>
              </article>
              <article class="home-content__card">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/logo_mobilefirst.svg';?>" alt="" class="home-content__card__img" width="140" height="140">
                <h3 aria-level="3" class="home-content__card__title">
                  <?php echo the_field("home_mf_title"); ?>
                </h3>
                <p class="home-content__card__paragraph">
                  <?php echo the_field("home_mf_content"); ?>
                </p>
              </article>
            </div>
          </section>
          <section class="whati">
            <h2 class="whati__title visuallyhidden" aria-level="2">Ce que je fais</h2>
            <div class="whati__cards-container">
              <article class="whati__card whati__blog">
                <svg class="whati__card__icon" width="53" height="53" viewBox="0 0 53 53"
                     xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <linearGradient x1="-12.098%" y1="0%" y2="107.567%">
                      <stop stop-color="#43CEA2" offset="0%"/>
                      <stop stop-color="#185A9D" offset="100%"/>
                    </linearGradient>
                  </defs>
                  <g stroke-width="2" stroke="url(#a)" fill="none">
                    <path d="M33.864 7.433l-5.729-5.729c-.901-.901-2.362-.901-3.262 0l-5.729 5.729M8.049 18.528l-6.306 6.306c-.901.901-.901 2.362 0 3.262l6.306 6.306M17.991 44.343l6.882 6.882c.901.901 2.362.901 3.262 0l6.882-6.882M44.959 34.401l6.306-6.306c.901-.901.901-2.362 0-3.262l-6.306-6.306M14.97 14.353h11.534M14.97 20.121h23.069M14.97 25.888h23.069M14.97 31.655h23.069M14.97 37.422h23.069"
                          id="s"/>
                    <path d="M44.959 42.036c0 1.274-1.033 2.307-2.307 2.307h-32.297c-1.274 0-2.307-1.033-2.307-2.307v-32.297c0-1.274 1.033-2.307 2.307-2.307h32.297c1.274 0 2.307 1.033 2.307 2.307v32.297z"/>
                  </g>
                </svg>
                <h3 aria-level="3" class="whati__card__title">Lisez mon blog</h3>
                <p class="whati__card__text">J’écris des choses qui pourraient peut-être vous
                  interesser</p>
                <a href="#" class="whati__card__button whati__card__button-blog">Aller au
                  blog</a>
              </article>
              <article class="whati__card whati__contact">
                <svg class="whati__card__icon" width="66" height="52" viewBox="0 0 66 52"
                     xmlns="http://www.w3.org/2000/svg">
                  <defs>
                    <linearGradient x1="0%" y1="100%" y2="120.685%">
                      <stop stop-color="#43CEA2" offset="0%"/>
                      <stop stop-color="#185A9D" offset="100%"/>
                    </linearGradient>
                  </defs>
                  <g fill="url(#a)">
                    <path d="M2.618 51l26.116-23.465-1.311-1.46-26.116 23.465zM64.422 49.533l-26.663-23.465-1.296 1.473 26.663 23.465zM.313 3.095l27.914 25.984c2.164 1.939 5.409 1.939 7.41-.016l28.042-25.965-1.333-1.44-28.061 25.984c-1.267 1.238-3.34 1.238-4.734-.011l-27.9-25.971-1.337 1.436zM61.196 49.909h-57.204c-1.114 0-2.03-.916-2.03-2.03v-43.656c0-1.114.916-2.03 2.03-2.03h57.204c1.114 0 2.03.916 2.03 2.03v43.656c0 1.114-.916 2.03-2.03 2.03zm0 1.962c2.198 0 3.992-1.794 3.992-3.992v-43.656c0-2.198-1.794-3.992-3.992-3.992h-57.204c-2.198 0-3.992 1.794-3.992 3.992v43.656c0 2.198 1.794 3.992 3.992 3.992h57.204z"/>
                  </g>
                </svg>
                <h3 aria-level="3" class="whati__card__title">Contactez-moi</h3>
                <p class="whati__card__text">Je suis en permanence à la recherche de nouveaux
                  projets</p>
                <a href="mailto:jimmy@letecheur.me" class="whati__card__button">Envoyer un email</a>
              </article>
              <article class="whati__card whati__social">
                <svg class="whati__card__icon" width="48" height="55" viewBox="0 0 48 55" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient x1="-13.3%" y1="9.401%" x2="140.725%" y2="84.888%" id="a"><stop stop-color="#43CEA2" offset="0%"/><stop stop-color="#185A9D" offset="100%"/></linearGradient></defs><g stroke="url(#a)" stroke-width="2" fill="none"><path d="M13.223 41.53s3.804 5.568 11.262 5.568c7.256 0 10.481-5.543 10.481-5.543M8.36 43.973s5.605 8.017 16.346 8.017c10.451 0 15.096-7.983 15.096-7.983M31.841 35.096s-.202 4.269 4.434 6.352c4.824 2.167 10.481 5.831 10.481 12.704M16.522 35.096s.202 4.269-4.434 6.352c-4.824 2.167-10.481 5.831-10.481 12.704" id="Shape"/><path d="M35.907 22.867s3.658.673.311 6.595c-.077.137-1.002.607-1.046.758-.6 2.083-4.707 7.887-10.889 7.887-6.182 0-10.29-5.804-10.889-7.887-.044-.151-.969-.621-1.046-.758-3.346-5.922.311-6.595.311-6.595s-1.88-2.173-1.376-5.801l1.31.101s.886-5.651 6.55-7.256c6.047-1.713 4.333-7.357 4.333-7.357s5.24 2.519 5.24 7.961c0 0 3.225-2.419 6.651 2.419 1.929 2.724 1.814 6.752.539 9.932z"/></g>
                </svg>
                <h3 aria-level="3" class="whati__card__title">Suivez-moi</h3>
                <p class="whati__card__text">Restons en contact, suivez-moi sur les réseaux
                  sociaux</p>
                <div class="whati__card__button whati__social__button">
                  <a href="<?php echo $easy_options['fblink'];?>" target="_blank" title="Vers facebook.com"
                     class="whati__social__button__icon whati__social__button__icon-minfb"><span
                      class="visuallyhidden">Facebook</span></a><!--
                  --><a href="<?php echo $easy_options['twlink'];?>" target="_blank" title="Vers twitter.com"
                        class="whati__social__button__icon whati__social__button__icon-mintw"><span
                    class="visuallyhidden">Twitter</span></a><!--
                  --><a href="<?php echo $easy_options['gitlink'];?>" target="_blank" title="Vers github.com"
                        class="whati__social__button__icon whati__social__button__icon-mingit"><span
                    class="visuallyhidden">Github</span></a><!--
                    --><a href="<?php echo $easy_options['linklink'];?>" target="_blank" title="Vers linkedin.com"
                            class="whati__social__button__icon whati__social__button__icon-minlink"><span
                    class="visuallyhidden">Linkedin</span></a><!--
                    --><a href="<?php echo $easy_options['belink'];?>" target="_blank" title="Vers behance.com"
                            class="whati__social__button__icon whati__social__button__icon-minbe"><span
                    class="visuallyhidden">Behance</span></a>
                </div>
              </article>
            </div>
            <div class="whati__box whati__wrap-parralax">
              <img class="whati__clavier" width="218" height="110"> data-stellar-ratio="0.85" src="<?php echo get_template_directory_uri() . '/assets/img/logo_home/clavier.svg';?>" alt="">
              <img class="whati__airmail" width="80" height="59" data-stellar-ratio="1.25" src="<?php echo get_template_directory_uri() . '/assets/img/logo_home/airmail.svg';?>" alt="">
              <img class="whati__ipad" width="121" height="137" data-stellar-ratio="0.85" src="<?php echo get_template_directory_uri() . '/assets/img/logo_home/ipad.svg';?>" alt="">

              <a class="whati__box__link" href="<?php the_permalink(8);?>"><span class="visuallyhidden">Vers le portfolio</span>
              <svg id="box" width="252" height="252" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                <defs>
                  <text id="b" font-family="Bariol-Bold, Bariol" font-size="23.7198812" font-weight="bold" letter-spacing=".56855994" fill="#FFFFFF">
                    <tspan x="49.5519117" y="105.863288">Portfolio</tspan>
                  </text>
                  <filter x="-50%" y="-50%" width="200%" height="200%" filterUnits="objectBoundingBox">
                    <feOffset dy="1" in="SourceAlpha" result="shadowOffsetOuter1"/>
                    <feGaussianBlur stdDeviation=".5" in="shadowOffsetOuter1" result="shadowBlurOuter1"/>
                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" in="shadowBlurOuter1"/>
                  </filter>
                </defs>
                <g transform="translate(-593.000000, -2155.000000) translate(593.000000, 2155.000000)" fill="none" fill-rule="evenodd">
                  <rect id="bcgbox" fill-opacity=".8" fill="#4A7E9C" width="251.469983" height="251.469983" rx="8"/>
                  <g transform="translate(34.000000, 43.000000)">
                    <path id="bodybox" d="M11 33h162v125.066938c0 3.310138-2.676652 5.993534-6.006271 5.993534H17.0062708C13.689099 164.060472 11 161.3831 11 158.066938V33z" fill="#FFFFFF"/>
                    <path id="topbox" d="M172.244045.89338855H11.6931639c-6.33029187 0-11.46792008 5.1376282-11.46792008 11.46792005v34.4037603H183.711965V12.3613086c0-6.33029185-5.137628-11.46792005-11.46792-11.46792005z" fill="#DB9634"/>
                    <rect fill="#1E8BC3" x="42" y="77" width="99.0380587" height="43.1294772" rx="1"/>
                    <g fill="#FFFFFF">
                      <use filter="url(#a)" xlink:href="#b"/>
                      <use xlink:href="#b"/>
                    </g>
                  </g>
                </g>
              </svg>
            </a>

              <img class="whati__ordinateur" width="169" height="106" data-stellar-ratio="0.9" src="<?php echo get_template_directory_uri() . '/assets/img/logo_home/ordinateur.svg';?>" alt="">
              <img class="whati__souris" width="48" height="74" data-stellar-ratio="1.25" src="<?php echo get_template_directory_uri() . '/assets/img/logo_home/souris.svg';?>" alt="">
              <img class="whati__telephone" width="59" height="76" data-stellar-ratio="0.85" src="<?php echo get_template_directory_uri() . '/assets/img/logo_home/telephone.svg';?>" alt="">

            </div>

          </section>
        </main>

<?php get_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/scripts/jquery.viewportchecker.js';?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/scripts/jquery.stellar.js';?>"></script>
<script>
  $(document).ready(function() {
    react_to_window();
  });
  //      only activate stellar for window widths above or equal to 929
  var stellarActivated = false;

  $(window).resize(function() {
    react_to_window();
  });

  function react_to_window() {
    if ($(window).width() <= 929) {
      if (stellarActivated == true) {
        $(window).data('plugin_stellar').destroy();
        stellarActivated = false;
      }
    } else {
      if (stellarActivated == false) {

        $.stellar({

        });

        $(window).data('plugin_stellar').init();
        stellarActivated = true;
      }
    }
  }

  $('.introduction__computer-container').viewportChecker({
    classToAdd: 'anim-computer',
    offset: 300,
    repeat: false,
    callbackFunction: function (elem, action) {
    }
  });
</script>
</body>
</html>
