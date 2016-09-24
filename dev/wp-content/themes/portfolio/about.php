<?php
/*
Template Name: A propos
*/

get_header();

?>

<section class="about-intro">
  <h2 class="about-intro__title-section" aria-level="2">À propos de moi</h2>
  <div class="about-intro__wrap">
    <span class="about-intro__title">C'est moi, <strong>Jimmy Letecheur&nbsp;!</strong></span>
    <figure class="about-intro__figure">
      <img class="about-intro__figure__img" src="<?php echo get_template_directory_uri() . '/assets/img/svg/portrait_about.svg';?>" width="238" height="238" alt="Portrait vectoriel de Jimmy Letecheur">
    </figure>
    <p class="about-intro__description">
      <?php echo the_field("about_intro"); ?>
    </p>
  </div>
</section>
<section class="about-cv">
  <h2 aria-level="2" class="about-cv__title">Mon jeune parcours</h2>
  <div class="about-cv__wrap">


    <?php if( have_rows('about_timeline') ): ?>
    <?php while( have_rows('about_timeline') ): the_row();

    // Variables
    $title = get_sub_field('about_timeline_title');
    $location = get_sub_field('about_timeline_location');
    $description = get_sub_field('about_timeline_description');
    $time = get_sub_field('about_timeline_time');

    ?>

    <div class="about-cv__timeline-block">
      <div class="about-cv__timeline-circle circle-2 about-cv__timeline-content--odd"></div>
      <article class="about-cv__timeline-content">
        <h3 aria-level="3" class="about-cv__timeline-title">
            <?php echo $title; ?>
          </h3>
        <span class="about-cv__timeline-location">
            <?php echo $location; ?>
          </span>
        <p class="about-cv__timeline-description">
          <?php echo $description; ?>
        </p>
      </article>
      <span class="about-cv__timeline-year content-2"><?php echo $time; ?></span>
    </div>

  <?php endwhile; ?>
  <?php endif; ?>

  </div>

  <a href="<?php echo the_field("about_downloadcv"); ?>" class="about-cv__download"><span>Télécharger mon CV</span></a>
</section>

<section class="skills">
  <h2 aria-level="2" class="skills__section-title">Mes compétences</h2>
  <div class="skills__wrap">


    <?php if( have_rows('about_skills') ): ?>
    <?php while( have_rows('about_skills') ): the_row();

    // Variables
    $name = get_sub_field('about_skills_name');
    $description = get_sub_field('about_skills_desc');
    $image = get_sub_field('about_skills_affinity');

    ?>

    <article class="skills__article">
      <header class="skills__article__header">
        <h3 class="skills__article__title"><?php echo $name; ?></h3>
      </header>
      <p class="skills__article__paragraph">
        <?php echo $description; ?>
      </p>
      <img src="<?php echo $image['url'];?>" alt="<?php echo $image['alt'];?>" class="skills__article__affinity">
    </article>

  <?php endwhile; endif; ?>


  <div class="cms">
    <div class="cms__content">
      <span class="cms__title">Wordpress</span>
      <img class="cms__img" src="<?php echo get_template_directory_uri() . '/assets/img/svg/wordress_logo.svg';?>" alt="Logo de Wordpress" width="100" height="100">
      <img class="cms__cote" src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_4sur5.svg';?>" title="4/5" alt="4 sur 5" width="86" height="15">
    </div>
    <div class="cms__content">
      <span class="cms__title">Prestashop</span>
      <img class="cms__img" src="<?php echo get_template_directory_uri() . '/assets/img/svg/prestashop_logo.svg';?>" alt="Logo de Prestashop" width="100" height="100">
      <img class="cms__cote" src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_3sur5.svg';?>" title="3/5" alt="3 sur 5" width="86" height="15">
    </div>
    <div class="cms__content">
      <span class="cms__title">Spip</span>
      <img class="cms__img" src="<?php echo get_template_directory_uri() . '/assets/img/svg/spip_logo.svg';?>" alt="Logo de Spip" width="100" height="100">
      <img class="cms__cote" src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_3sur5.svg';?>" title="3/5" alt="3 sur 5" width="86" height="15">
    </div>
  </div>
</section>
<section class="apps">
  <h2 class="apps__title-section" aria-level="2">Les applications que j'utilise&nbsp;:</h2>
  <div class="apps__wrap">
    <div class="apps__app">
      <img class="apps__app__img" src="<?php echo get_template_directory_uri() . '/assets/img/svg/photoshop_logo.svg';?>" width="80" height="80" alt="Logo de Adobe Photoshop">
      <span class="apps__app__title">Photoshop</span>
      <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_4sur5.svg';?>" alt="4 sur 5" title="4/5" class="apps__app__cote">
    </div>

    <div class="apps__app">
      <img class="apps__app__img apps__app__img--illustrator" src="<?php echo get_template_directory_uri() . '/assets/img/svg/illustrator_logo.svg';?>" width="80" height="80" alt="Logo de Adobe Illustrator">
      <span class="apps__app__title">Illustrator</span>
      <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_4sur5.svg';?>" alt="4 sur 5" title="4/5" class="apps__app__cote">
    </div>

    <div class="apps__app">
      <img class="apps__app__img " src="<?php echo get_template_directory_uri() . '/assets/img/svg/animate_logo.svg';?>" width="80" height="80" alt="Logo de Adobe Animate CC">
      <span class="apps__app__title">Animate CC</span>
      <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_3sur5.svg';?>" alt="3 sur 5" title="3/5" class="apps__app__cote">
    </div>

    <div class="apps__app">
      <div class="apps__app__img apps__app__img--sketch apps__app__img--png" width="80" height="80" title="Logo de Sketch App"></div>
      <span class="apps__app__title">Sketch</span>
      <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_5sur5.svg';?>" alt="5 sur 5" title="5/5" class="apps__app__cote">
    </div>

    <div class="apps__app">
      <div class="apps__app__img apps__app__img--phpstorm apps__app__img--png" width="80" height="80" title="Logo de PHPstorm"></div>
      <span class="apps__app__title">PhpStorm</span>
      <img src="<?php echo get_template_directory_uri() . '/assets/img/svg/app_4sur5.svg';?>" alt="4 sur 5" title="4/5" class="apps__app__cote">
    </div>



  </div>

</section>
</main>
<?php get_footer();?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() . '/assets/scripts/jquery.viewportchecker.js';?>"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // Fait par moi, mettre visibility hidden à tous les blocks
    $(".about-cv__timeline-block, .skills__content").css("visibility", "hidden");
    $(".skills__progress").addClass("progress-js--active");

    $('.about-cv__timeline-content, .about-cv__timeline-year').viewportChecker({
      classToAdd: 'bounce-in',
      offset: 150,
      repeat: false,
      callbackFunction: function(elem, action) {}
    });

    $('.about-cv__timeline-circle').viewportChecker({
      classToAdd: 'circlescale',
      offset: 150,
      repeat: false,
      callbackFunction: function(elem, action) {}
    });
  });
</script>
