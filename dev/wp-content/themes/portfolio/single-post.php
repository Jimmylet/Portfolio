<?php

get_header();

?>

<section class="portfolio-view">
  <div class="portfolio-view__wrapintro">
    <h2 aria-level="2" class="portfolio-view__title"><?php the_title(); ?></h2>
    <span class="portfolio-view__time">Date de réalisation&nbsp;: <time datetime="<?php echo the_field("pf_datetimeattr"); ?>"><?php echo the_field("pf_datetime"); ?></time></span>
    <div class="portfolio-view__wrap-img">

    <?php $image = get_field('pf_imac'); if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio-view__imac">
    <?php endif; ?>

    <?php $image = get_field('pf_iphone'); if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio-view__iphone">
    <?php endif; ?>

    </div>
    <p class="portfolio-view__smalldesc">
      <?php echo the_field("pf_desc"); ?>
    </p>
    <a href="<?php echo the_field("pf_link"); ?>" class="portfolio-view__towebsite" target="_blank" rel="external">Vers le site</a>
    <br/>
    <a href="<?php echo the_field("pf_linkgithub"); ?>" style="margin-top: 30px; background-color: black" class="portfolio-view__towebsite" target="_blank" rel="external">Vers le repo</a>

  </div>
</section>
<section class="portfolio-techniques">
  <h2 aria-level="2" class="portfolio-techniques__section-title">
      Sur un Baobab en bref
    </h2>
  <div class="porfolio-techniques__wrap">
    <div class="portfolio-techniques__wrap-content">
      <div class="portfolio-zonetext portfolio-role">
        <span class="portfolio-zonetext__title">Mon rôle</span>
        <p class="portfolio-zonetext__paragraph">
          <?php echo the_field("pf_role"); ?>
        </p>
      </div>
      <div class="portfolio-zonetext portfolio-tools">
        <span class="portfolio-zonetext__title">Outils et technologies</span>
        <p class="portfolio-zonetext__paragraph">
          <?php echo the_field("pf_toolstechno"); ?>
        </p>
      </div>
    </div>

    <div class="portfolio-techniques__wrap-content portfolio-techniques__wrap-content-2">
      <div class="portfolio-zone-text portfolio-zone-font">
        <div class="portfolio-zonetext portfolio-color">
          <span class="portfolio-zonetext__title">Palette de couleur</span>
          <div class="portfolio-zonetext__wrap-svg">

            <?php $image = get_field('pf_palette'); if( !empty($image) ): ?>
              <object class="portfolio-zonetext__svg" type="image/svg+xml" data="<?php echo $image['url']; ?>"></object>
            <?php endif; ?>

          </div>
        </div>
        <div class="portfolio-zonetext portfolio-fonts">
          <span class="portfolio-zonetext__title">Fonts</span>
          <p class="portfolio-zonetext__fonts-text">
            Raleway, Handofsean
          </p>
          <?php $image = get_field('pf_font'); if( !empty($image) ): ?>
            <img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio-zonetext__img">
          <?php endif; ?>
        </div>
      </div>

      <div class="portfolio-zonetext portfolio-contraintes">
        <span class="portfolio-zonetext__title">Contraintes et solutions</span>
        <p class="portfolio-zonetext__paragraph">
            <?php echo the_field("pf_contraintes"); ?>
        </p>
      </div>
    </div>
  </div>

</section>
<section class="portfolio-description">
<h2 aria-level="2" class="portfolio-description__section-title">Des exemples en image</h2>
<div class="portfolio-description__wrap">
<span class="portfolio-description__title">Description du projet</span>

<?php if( have_rows('pf_img') ): ?>
<?php while( have_rows('pf_img') ): the_row();

  // Variables
  $image = get_sub_field('pf_imgset');
  $title = get_sub_field('pf_imgset_title');
  $content = get_sub_field('pf_imgset_desc');

?>

<figure class="portfolio-examples__figure">
  <img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>" class="portfolio-examples__img">
  <figcaption class="portfolio-examples__figcaption">
    <span class="portfolio-examples__figcaption__title"><?php echo $title; ?></span>
    <p class="portfolio-examples__figcaption__paragraph"><?php echo $content; ?></p>
  </figcaption>
</figure>
<?php endwhile; ?>
<?php endif; ?>


</div>
</section>
</main>

<?php get_footer(); ?>
